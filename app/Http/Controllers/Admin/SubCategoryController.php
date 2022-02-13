<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SubCategory::all();
        return response()->view('cms.subCategory.index', ['subcategories' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return response()->view('cms.subCategory.create', ['categories' => $category]);
    }


    public function store(SubCategoryRequest $request)
    {
        $data=[$request];
        $validator = Validator($data);

        if(! $validator->fails()){
            $subCategory = SubCategory::create($request->only(['name','category_id']));

            return response()->json([
                'message' => $subCategory ? 'Create successflu' : 'Create falid'
            ],$subCategory ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        }else{
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ],Response::HTTP_BAD_REQUEST);

        }
    }


    public function show(SubCategory $subCategory)
    {
        //
    }


    public function edit(SubCategory $subCategory)
    {
        $category = Category::all();
        $data = $subCategory->category()->first();
        return response()->view('cms.subCategory.edit', ['subcategory' => $subCategory, 'categories' => $category, 'alaas' => $data]);
    }


    public function update(SubCategoryRequest $request, SubCategory $subCategory)
    {
        $data=[$request];
        $validator = Validator($data);

        if(! $validator->fails()){
            $subCategory->update($request->only(['name','category_id']));

            return response()->json([
                'message' => $subCategory ? 'Create successflu' : 'Create falid'
            ],$subCategory ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        }else{
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ],Response::HTTP_BAD_REQUEST);

        }
    }


    public function destroy(SubCategory $subCategory)
    {

        $isDeleted = $subCategory->delete();
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
