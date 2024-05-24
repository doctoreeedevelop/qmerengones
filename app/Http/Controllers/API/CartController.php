<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "desde APIcarrito";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        $data = json_decode($_POST['quantity']);

        //return $data;    

        return response()->json($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,$id)
    {
        //return $id;
        
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        $data = json_decode($_POST['quantity']);

        //return $data;    

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
