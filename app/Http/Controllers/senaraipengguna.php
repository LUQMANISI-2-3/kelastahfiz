<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//pakai model nama user
use App\Models\User;

class senaraipengguna extends Controller
{
   public function index()
   {
      //penarikan data dari model
      $users  = user::all();

      //mengirim data ke view
      return view('senaraiuser', ['users' => $users]);
   }
}
