<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(){
        $data = Destination::all();

        return view('destination.destination', compact('data'));
    }

    public function show($id){
        $destinationID = $id;

        return view('destination.description', compact('destinationID'));
    }
}
