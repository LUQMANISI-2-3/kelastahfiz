<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\murids;

class padammurid extends Controller
{
    function delete( $idmurid )
    {
        $murid = Murids::find( $idmurid );
        $murid->delete();
        return redirect( '/listmurid' );
    }
}
