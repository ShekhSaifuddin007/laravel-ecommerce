<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create($this->validateRequest($request));

        return redirect('/categories/create')->with('message', 'Category Save Successfully...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update($this->validateRequest($request));
        return redirect('/categories/create')->with('message', 'Category Updated..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //dd($category);
        $category->delete();
        return redirect('/categories/create')->with('message', 'Category Deleted..');
    }

    public function status($category)
    {
        $category = Category::findOrFail($category);

            if ($category->publication_status == 1)
            {
                $category->publication_status = 0;
                $category->save();
                return redirect('/categories/create')->with('message', 'Category Unpublished');
            }
            else
            {
                $category->publication_status = 1;
                $category->save();
                return redirect('/categories/create')->with('message', 'Category Published');
            }
    }

    private function validateRequest($request)
    {
        return $this->validate($request, [
            'category_name' => 'required | string',
            'publication_status' => 'required'
        ]);
    }
}
