<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class Relationshipreborn extends Controller
{
    public function ujihas()
    {
    	return Dosen::has('Dosen_matakuliah')->get();
    }
    public function ujiDoesntHave()
    {
    	return Dosen::doesntHave('Dosen_matakuliah')->get();
    }
}
