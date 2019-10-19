<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Customer extends Model
{
    protected $guarded = [];

    public static function imageUpload()
    {
        if (request()->file('profile_picture'))
        {
            $image = request()->file('profile_picture');
            $ext = $image->getClientOriginalExtension();
            $imageName = Str::slug(request('user_name')).'_'.uniqid(Str::random(20)).'_'.time().'.'.$ext;
            $imageDir = './customer-profile/';
            $imageUrl = $imageDir.$imageName;
            Image::make($image)->fit(40, 40)->save($imageUrl);
            return $imageUrl;
        }
    }

    public function setPasswordAttribute($password)
    {
        //For bcrypt password.
        return $this->attributes['password'] = bcrypt($password);
    }
}
