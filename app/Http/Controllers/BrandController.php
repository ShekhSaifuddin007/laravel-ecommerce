<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::with('brands')->select('id', 'category_name')->published()->latest()->get();
        $data['brands'] = Brand::with('category')->select('id', 'category_id', 'brand_name', 'publication_status')->latest()->get();
        $data['trashes'] = Brand::latest()->onlyTrashed()->get();
//        $categories = Category::select('id', 'category_name')->published()->latest()->get();
//        $brands     = Brand::select('id', 'category_id', 'brand_name', 'publication_status')->latest()->get();
//        $trashes    = Brand::latest()->onlyTrashed()->get();
        return view('admin.brand.add-brand', $data);
        //return view('admin.brand.add-brand', compact('categories', 'brands', $trashes));
    }

    public function store(Request $request)
    {
        Brand::create($this->validateRequest($request));
        return redirect('/brand')->with('message', 'Brand Save Successfully...');
    }

    public function edit(Brand $brand)
    {
        $categories = Category::select('id', 'category_name')->published()->latest()->get();
        return view('admin.brand.edit-brand', compact('brand', 'categories'));
    }

    public function update(Request $request, Brand $brand)
    {
        $brand->update($this->validateRequest($request));
        return redirect('/brand')->with('message', 'Brand Update Successfully...');
    }

    public function status(Brand $brand)
    {
        if ($brand->publication_status == 1):
            $brand->publication_status = 0;
            $brand->save();
            return redirect('/brand')->with('message', 'Brand Unpublished');
         else:
            $brand->publication_status = 1;
            $brand->save();
            return redirect('/brand')->with('message', 'Brand Published');
        endif;
    }

    //Soft Deleting=========>>>
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect('/brand')->with('message', 'Brand Move to Trashes...');
    }

    public function restore($brand)
    {
        Brand::withTrashed()->findOrFail($brand)->restore();
        //$brand->withTrashed()->restore();
        return redirect('/brand')->with('message', 'Brand Restored...');
    }

    public function confirmDelete($brand)
    {
        Brand::withTrashed()->findOrFail($brand)->forceDelete();
        //$brand->forceDelete();
        return redirect('/brand')->with('message', 'Brand Permanently Deleted...');
    }
    //End Soft Deleting=========>>>

    private function validateRequest($request)
    {
        return $this->validate($request, [
            'category_id' => 'required|not_in:-- Select Category --',
            'brand_name' => 'required|string',
            'publication_status' => 'required',
        ]);
    }
}
