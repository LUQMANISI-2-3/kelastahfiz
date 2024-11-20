<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Murid;

class senaraimurid extends Controller
{
  function index()
  {
    $murids = Murid::all();
    // dd($murid);
    return view('listmurid', compact('murids'));
  }
}
