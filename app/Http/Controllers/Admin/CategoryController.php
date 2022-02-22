<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;


class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::with('parent')->get();
        return response()->view('cms.category.index',compact('categories'));
    }


    public function create()
    {
        $categories =   Category::all();
        return response()->view('cms.category.create',compact('categories'));
    }


    public function store(CategoryRequest $request)
    {


       $category = Category::create($request->only(['name','parent_id']));

       return response()->json([
                    'message' => $category ? 'Create successflu' : 'Create falid'
       ],$category ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);


    }


    public function edit(Category $category)
    {
        $data = $category->parent()->first();
        return response()->view('cms.category.edit',['categories' =>$category,'alaas'=>$data]);
    }


    public function update(CategoryRequest $request, Category $category)
    {


            $category->update($request->only(['name','parent_id']));

            return response()->json([
                'message' => $category ? 'Update successflu' : 'Update falid'
            ],$category ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);


    }


    public function destroy(Category $category)
    {
        $isDeleted = $category->delete();
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
