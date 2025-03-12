<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories',["categories" => $categories]);
    }

    public function create(){
        return view('categories-add');
    }

    public function store(Request $request){
        $validate = $request->validate([
            "name" => ['required','unique:categories,name']
        ]);

        Category::create($validate);
        return redirect('/categories')->with('status','berhasil menambahkan data');
    }

    public function edit($slug){
        $category = Category::where('slug',$slug)->first();
        return view('categories-edit',[
            "category" => $category
        ]);
    }

    public function update(Request $request,$slug){

        $validate = $request->validate([
            "name" => ['required','unique:categories,name']
        ]);
        $category = Category::where('slug',$slug)->firstOrFail();
        $category->slug = null;
        $category->update($validate);

        return redirect('/categories')->with('status',"berhasil mengubah data");
    }

    public function delete($slug){
        $category = Category::where('slug',$slug)->first();
        return view('categories-delete',[
            "category" => $category
        ]);
    }

    public function destroy($slug){
        $category = Category::where("slug",$slug);
        $category->delete();

        return redirect('/categories')->with('status','Berhasil menghapus data');
    }

    public function deleted(){
        $category = Category::onlyTrashed()->get();
        return view('categories-deleted',[
            'deletedCategories' => $category
        ]);
    }

    public function restore($slug){
        $deletedCategory = Category::onlyTrashed()->where('slug',$slug)->first();
        $deletedCategory->restore();

        return redirect('/categories')->with('status','berhasil mengembalikan data');
    }
}
