<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    //
    public function index()
    {
        $data = Articulo::all();
        return $data;
    }

    public function store(Request $request)
    {
        $data = new Articulo;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->stock = $request->stock;

        $data->save();
    }

    public function update(Request $request)
    {
        $data = Articulo::findOrFail($request->id);
        $data->description = $request->description;
        $data->price = $request->price;
        $data->stock = $request->stock;

        $data->save();

        return $data;
    }

    public function destroy(Request $request)
    {
        $data = Articulo::destroy($request->id);

        return $data;
    }
}
