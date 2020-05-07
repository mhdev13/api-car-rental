<?php

namespace App\Http\Controllers;

use App\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $data = Rental::all();
        return response($data);
    }
    public function show($id){
        $data = Rental::where('id',$id)->get();
        return response ($data);
    }
    public function store (Request $request){
        $data = new Rental();
        $data->title = $request->input('title');
        $data->rate = $request->input('rate');
        $data->category = $request->input('category');
        $data->quantity = $request->input('quantity');
        
        $data->save();

    return response('Berhasil Tambah Data');
    }

    public function update(Request $request, $id){
        $data = Rental::where('id',$id)->first();
        $data->title = $request->input('title');
        $data->rate = $request->input('rate');
        $data->category = $request->input('category');
        $data->quantity = $request->input('quantity');
        $data->save();

    return response('Berhasil Merubah Data');
    }
}
