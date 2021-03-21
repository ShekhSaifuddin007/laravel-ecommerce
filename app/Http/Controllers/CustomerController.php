<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Jobs\SendEmailJob;
use Cart;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function showRegistrationForm()
    {
        return view('front.customer.login-register-form');
    }

    public function customerRegister()
    {
        $data = $this->validateRequest();
        $customer = Customer::create(
            collect($data)->except('profile_picture')->toArray() +
            [
                'profile_picture' => Customer::imageUpload()
            ]
        );

        Session::put('customerId', $customer->id);
        Session::put('customerName', $customer->user_name);
        Session::put('customerPic', $customer->profile_picture);

        SendEmailJob::dispatch($customer)->delay(now()->addSeconds(5)); //it goes to SendEmailJob::class. handle().

        if (count(Cart::content())):
            return redirect('shipping/checkout');
        else:
            return redirect('/');
        endif;
    }

    public function customerLogin()
    {
        request()->validate(['login_email' => 'required', 'login_password' => 'required']);
        $customer = Customer::where('email', request('login_email'))->first();
        if ($customer):
            if (password_verify(request('login_password'), $customer->password)):

                Session::put('customerId', $customer->id);
                Session::put('customerName', $customer->user_name);
                Session::put('customerPic', $customer->profile_picture);

                if (Cart::content()->count()): return redirect('shipping/checkout');
                else: return redirect('/');
                endif;
            else:
                return back()->with('message', 'Invalid email or password..');
            endif;
        endif;
    }

    public function customerLogout()
    {
        Session::forget('customerId');
        Session::forget('customerName');
        Session::forget('customerPic');

        return redirect('/');
    }

    private function validateRequest()
    {
        return request()->validate([
            'user_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers,email',
            'phone_no' => 'required|string|min:11|max:11|unique:customers,phone_no',
            'password' => 'required|string|min:6|confirmed',
            'profile_picture' => 'sometimes|required|image',
        ]);
    }
}