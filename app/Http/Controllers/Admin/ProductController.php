<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return response()->view('cms.product.index', ['products' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return response()->view('cms.product.create',['categories' => $category]);
    }

    public function store(ProductRequest $request)
    {

            $product = Product::create($request->only(['name','details','calories','fats','protein','carbohydrate','vitamin','price']));
            $product->categories()->attach($request->category);


            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $product->name . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('/product', $imageName, ['disk' => 'public']);

                $img = new Media();
                $img->object_type = 'product';
                $img->object_id = $product->id;
                $img->url_image = 'product/' . $imageName;


                $product->image()->save($img);
            }
            return response()->json([
                'message' => $product ? 'Create successflu' : 'Create falid'
            ],$product ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function show(product $product)
    {
        //
    }


    public function edit(product $product)
    {
        $category = Category::all();

        return response()->view('cms.product.edit',['categories' => $category,'product' => $product]);
    }


    public function update(Request $request, product $product)
    {

        $product->update($request->only(['name','details','calories','fats','protein','carbohydrate','vitamin','price']));
        $product->categories()->sync($request->category);


        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($product->image->url_image);
            $image = $request->file('image');
            $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $product->name . '.' . $image->getClientOriginalExtension();
            $request->file('image')->storeAs('/product', $imageName, ['disk' => 'public']);
            $url_image = 'product/' . $imageName;
            $product->image()->update(['url_image' => $url_image]);

        }
        return response()->json([
            'message' => $product ? 'Create successflu' : 'Create falid'
        ],$product ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function destroy(product $product)
    {

        $url_image = $product->image->url_image;
        $media = $product->image->delete();

        $isDeleted = $product->delete();
        if ($isDeleted) Storage::disk('public')->delete($url_image,$media);
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
