<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;

class ubahMurid extends Controller
{
function index($idmurid)
{
    // $murid = Murid::where('idmurid', $idmurid)->first();
    $murid = Murid::find($idmurid);
    return view('ubahmurid', compact('murid'));
}

function update(Request $request, $idmurid)
{
    $murid = Murid::find($idmurid);
    $murid->namamurid = $request->namamurid;
    $murid->tarikhlahir = $request->tarikhlahir;
    $murid->jantina = $request->jantina;
    $murid->kelas = $request->kelas;
    $murid->alamat = $request->alamat;
    $murid->status = $request->status;

    $murid->save();
    return redirect('/listmurid');
}
}