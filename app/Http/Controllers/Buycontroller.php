<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function index()
    {
        return view('buys.index', [
            'buys' => Buy::latest()->get(),
        ]);

    }

    public function create()
    {
        return view('buys.create');

    }


    public function shop(Request $request)
    {
        $this->validate($request, [
            'Nama'=>['required', 'min:3'],
            'Nama_Produk'=>['required'],
            'Jumlah_Produk'=>['required', 'numeric'],
            'Alamat'=>['required', 'min:10'],
            'Nomer_Handphone'=>['required', 'numeric']
        ]);
        $buy = new Buy();

        $buy->Nama=$request->Nama;
        $buy->Nama_Produk=$request->Nama_Produk;
        $buy->Jumlah_Produk=$request->Jumlah_Produk;
        $buy->Alamat=$request->Alamat;
        $buy->Nomer_Handphone=$request->Nomer_Handphone;

        $buy->save();

        session()->flash('success', 'Data berhasil ditambahkan.');

        return redirect()->route('buys.index');
    }


    public function edit($id)
    {
        $buy=Buy::find($id);

        return view('buys.edit', [
            'buy'=>$buy,
        ]);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Nama'=>['required', 'min:3'],
            'Nama_Produk'=>['required'],
            'Jumlah_Produk'=>['required', 'numeric'],
            'Alamat'=>['required', 'min:10'],
            'Nomer_Handphone'=>['required', 'numeric'],
        ]);

        $buy = Buy::find($id);

        $buy->Nama=$request->Nama;
        $buy->Nama_Produk=$request->Nama_Produk;
        $buy->Jumlah_Produk=$request->Jumlah_Produk;
        $buy->Alamat=$request->Alamat;
        $buy->Nomer_Handphone=$request->Nomer_Handphone;

        $buy->save();



        return redirect()->route('buys.index');
    }

    public function destroy($id)
    {
        $buy=Buy::find($id);
        $buy->delete();

        return redirect()->route('buys.index');
    }
}
