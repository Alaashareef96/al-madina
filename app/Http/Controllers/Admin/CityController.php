<?php

namespace App\Http\Controllers\Admin;


use App\Models\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CityController extends Controller
{

    public function index()
    {
        $cities = City::all();
        return response()->view('cms.cities.index',compact('cities'));
    }

    public function create()
    {
        return response()->view('cms.cities.create');
    }


    public function store(Request $request)
    {

        $city = City::create($request->only(['name']));

        return response()->json([
            'message' => $city ? 'Create successful' : 'Create failed'
        ],$city ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);

    }


    public function edit(City $city)
    {
        return response()->view('cms.cities.edit',compact('city'));
    }


    public function update(Request $request, City $city)
    {

        $city->update($request->only(['name']));

        return response()->json([
            'message' => $city ? 'Update successful' : 'Update failed'
        ],$city ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function destroy(City $city)
    {

        $isDeleted = $city->delete();
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
