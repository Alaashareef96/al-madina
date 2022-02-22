<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpFoundation\Response;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Permission::all();
        return response()->view('cms.spatie.permissions.index', ['permissions' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.spatie.permissions.create');
    }


    public function store(Request $request)
    {
        //
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:50',
            'guard' => 'required|string|in:admin',
        ]);

        if (!$validator->fails()) {
            $permission = new Permission();
            $permission->name = $request->input('name');
            $permission->guard_name = $request->input('guard');
            $isSaved = $permission->save();
            return response()->json([
                'message' => $isSaved ? 'Created successfully' : 'Create failed'
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('cms.spatie.permissions.edit', ['permission' => $permission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        {
            //
            $validator = Validator($request->all(), [
                'name' => 'required|string|min:3|max:50',
                'guard' => 'required|string|in:admin',
            ]);

            if (!$validator->fails()) {
                $permission->name = $request->input('name');
                $permission->guard_name = $request->input('guard');
                $isSaved = $permission->save();
                return response()->json([
                    'message' => $isSaved ? 'Updated successfully' : 'Update failed'
                ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
            } else {
                return response()->json([
                    'message' => $validator->getMessageBag()->first()
                ], Response::HTTP_BAD_REQUEST);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        {
            //
            $isDeleted = $permission->delete();
            return response()->json([
                'icon'=>$isDeleted ? 'success':'error',
                'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
            ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
        }
    }
}
