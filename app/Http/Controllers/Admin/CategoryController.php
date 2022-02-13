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
        $data = Category::all();
        return response()->view('cms.category.index', ['categories' => $data]);
    }


    public function create()
    {
        return response()->view('cms.category.create');
    }


    public function store(CategoryRequest $request)
    {

            $data=[$request];
            $validator = Validator($data);

            if(! $validator->fails()){
                $category = Category::create($request->only(['name']));

                return response()->json([
                    'message' => $category ? 'Create successflu' : 'Create falid'
                ],$category ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
            }else{
                return response()->json([
                    'message' => $validator->getMessageBag()->first()
                ],Response::HTTP_BAD_REQUEST);

            }


    }


    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return response()->view('cms.category.edit', ['category' => $category]);
    }


    public function update(CategoryRequest $request, Category $category)
    {
        $data=[$request];
        $validator = Validator($data);

        if(! $validator->fails()){
            $category->update($request->only(['name']));

            return response()->json([
                'message' => $category ? 'Update successflu' : 'Update falid'
            ],$category ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        }else{
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ],Response::HTTP_BAD_REQUEST);

        }

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
