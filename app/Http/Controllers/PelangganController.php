<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataPelanggan'] = Pelanggan::all();
		return view('admin.pelanggan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
<<<<<<< HEAD
        $data['birthday'] = $request->birthday;
=======

		$data['first_name'] = $request->first_name;
		$data['last_name'] = $request->last_name;
		$data['birthday'] = $request->birthday;
>>>>>>> a58210b7d0732a51f273272c946a132b566c2bb8
		$data['gender'] = $request->gender;
		$data['email'] = $request->email;
		$data['phone'] = $request->phone;

		Pelanggan::create($data);

		return redirect()->route('pelanggan.index')->with('success','Penambahan Data Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
<<<<<<< HEAD
        //
=======
    $data['dataPelanggan'] = Pelanggan::findOrFail($id);
    return view('admin.pelanggan.edit', $data);
>>>>>>> a58210b7d0732a51f273272c946a132b566c2bb8
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
<<<<<<< HEAD
        //
=======
        // $pelanggan_id = $id;
        // $pelanggan = Pelanggan::findOrFail($pelanggan_id);

        // $pelanggan->first_name = $request->first_name;
        // $pelanggan->last_name = $request->last_name;
        // $pelanggan->birthday = $request->birthday;
        // $pelanggan->gender = $request->gender;
        // $pelanggan->email = $request->email;
        // $pelanggan->phone = $request->phone;

        // $pelanggan->save();
        // return redirect()->route('pelanggan.index')->with('success', 'Perubahan Data Berhasil!');

        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['birthday'] = $request->birthday;
        $data['gender'] = $request->gender;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;

        Pelanggan::where('pelanggan_id', $id)->update($data);

        return redirect()->route('pelanggan.index')->with('success', 'Perubahan Data Berhasil!');
>>>>>>> a58210b7d0732a51f273272c946a132b566c2bb8
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
<<<<<<< HEAD
        //
    }
}
=======
        $pelanggan = Pelanggan::findOrFail($id);
        
        $pelanggan->delete();
        return redirect()->route('pelanggan.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
>>>>>>> a58210b7d0732a51f273272c946a132b566c2bb8
