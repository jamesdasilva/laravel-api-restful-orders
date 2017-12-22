<?php

namespace App\Http\Controllers;

use App\ProductUser;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductUsersController extends Controller
{
    public function index()
    {
        $productUsers = ProductUser::All();
        return response()->json($productUsers);
    }

    public function show($id)
    {
        $productUser = ProductUser::find($id);

        if(!$productUser) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($productUser);
    }

    public function store(Request $request)
    {
        $productUser = new ProductUser();
        $productUser->fill($request->all());
        $productUser->save();

        return response()->json($productUser, 201);
    }

    public function update(Request $request, $id)
    {
        $productUser = ProductUser::find($id);

        if(!$productUser) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $productUser->fill($request->all());
        $productUser->save();

        return response()->json($productUser);
    }

    public function destroy($id)
    {
        $productUser = ProductUser::find($id);

        if(!$productUser) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $productUser->delete();
    }
}
