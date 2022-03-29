<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = Hotel::all();
        return view("home", ["hotel"=>$hotel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    public function nav()
    {
        $hotel = Hotel::all();
        return view("hotelss", ["hotel"=>$hotel]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file= $request->image->getClientOriginalName();
        if($request->file('image')){
            Hotel::create([
                 "nama_hotel" => request('nama_hotel'),
                 "lokasi" => request('lokasi'),
                 "harga" => request('harga'),
                 'image' => $request->file('image')->storeAs('image1', $file),
                 "fasilitas" => request('fasilitas'),
                 "sinopsis" => request('sinopsis')
             ]);
             
             }
             return redirect('/hotelss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::find($id);
        return view('detail',["hotel"=>$hotel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('edit',["hotel"=>$hotel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file= $request->image->getClientOriginalName();
        if($request->file('image')){
            Hotel::find($id)->update([
                 "nama_hotel" => request('nama_hotel'),
                 "lokasi" => request('lokasi'),
                 "harga" => request('harga'),
                 'image' => $request->file('image')->storeAs('image1', $file),
                 "fasilitas" => request('fasilitas'),
                 "sinopsis" => request('sinopsis')
             ]);
            }
             return redirect('/hotelss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return redirect("/hotelss");
    }
}
