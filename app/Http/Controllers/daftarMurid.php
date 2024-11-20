<?php

namespace App\Http\Controllers;
use App\Models\Murid;
use Illuminate\Http\Request;
class daftarMurid extends Controller
{

    public function create()
    {
    return view('borangmurid');
    }
    

    public function store(Request $request)
    {
    $murid = new Murid();
    $murid->idmurid = $murid->idmurid = rand(1, 1000);
    $murid->namamurid = $request->namamurid;
    $murid->tarikhlahir = $request->tarikhlahir;
    $murid->jantina = $request->jantina;
    $murid->kelas = $request->kelas;
    $murid->alamat = $request->alamat;
    $murid->status = "Aktif";
    $murid->save();
    return redirect('listmurid');
    }
}