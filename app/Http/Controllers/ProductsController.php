<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->latest()->published()->get();
        $brands     = Brand::with('products')->latest()->published()->get();
        $products   = Product::with('category', 'brand')->latest()->get();
        return view('admin.product.add-product', compact('categories', 'brands', 'products'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $rules = $this->validateRequest($request);
        $error = Validator::make($request->all(), $rules);

        if ($error->fails())
            return response()->json(['errors' => $error->errors()->all()]);

        $image = $this->imageUpload($request);
        $this->productSave($request, $image, $product);

        return response()->json(['success' => 'Data Save Successfully..']);
        //return json_encode('success');
    }

    public function edit(Product $product)
    {
        $categories = Category::latest()->published()->get();
        $brands     = Brand::latest()->published()->get();
        return view('admin.product.edit-product', compact('product', 'categories', 'brands'));
    }

    public function update(Request $request)
    {
            $product = Product::query()->findOrFail($request->product_id);

            $rules = $this->validateRequest($request);
            $error = Validator::make($request->all(), array_merge($rules, ['product_image' => '']));
            $image = $request->file('product_image');
            if ($error->fails()): return back()->withErrors($error)->withInput(); endif;

            if ($image):
                if (file_exists($product->product_image)): @unlink($product->product_image); endif;

                $fileType   = $image->getClientOriginalExtension();
                $imageName  = Str::slug($request->product_name).'_'.uniqid(Str::random(20)).'_'.time().'.'.$fileType;
                $imageDir   = './product-image/';
                $image->move($imageDir, $imageName);
                $imageUrl   = $imageDir.$imageName;

            else : $imageUrl = $product->product_image; endif;

            $this->productSave($request, $imageUrl, $product);
            return redirect('/product')->with('message', 'Product Update Successfully..');
    }

    public function delete(Product $product)
    {
        @unlink($product->product_image);
        $product->delete();
        return back()->with('message', 'Product has been Deleted');
    }

    private function validateRequest($request)
    {
//        $product = Product::find($request->product_id);
//        $rules = [];
//        if ($product) :
//            if ($product->product_image == null):
//                $rules['product_image'] = 'required|image';
            //endif;
        //return $rules;

        //else :
            $rules = [
                'category_id'         => 'required|integer|not_in:-- Select Category --',
                'brand_id'            => 'required|integer|not_in:-- Select Brand --',
                'product_name'        => 'required|string',
                'product_qty'         => 'required|integer|min:1',
                'product_price'       => 'required',
                'size_id'             => '',
                'color_id'            => '',
                'product_image'       => 'required|image',
                'product_description' => 'required',
                'publication_status'  => 'required'
            ];
            //return $rules;
        //endif;
        return $rules;
    }

    private function imageUpload($request)
    {
        $image      = $request->file('product_image');
        $fileType   = $image->getClientOriginalExtension();
        $imageName  = Str::slug($request->product_name).'_'.uniqid(Str::random(20)).'_'.time().'.'.$fileType;
        $imageDir   = './product-image/';
        $image->move($imageDir, $imageName);
        $imageUrl   = $imageDir.$imageName;
        return $imageUrl;
    }

    private function productSave($request, $image, $product)
    {
        $product->category_id           = $request->category_id;
        $product->brand_id              = $request->brand_id;
        $product->product_name          = $request->product_name;
        $product->product_qty           = $request->product_qty;
        $product->product_price         = $request->product_price;
        $product->size_id               = $request->size_id;
        $product->color_id              = $request->color_id;
        $product->product_image         = $image;
        $product->product_description   = $request->product_description;
        $product->publication_status    = $request->publication_status;
        $product->save();
    }
}
