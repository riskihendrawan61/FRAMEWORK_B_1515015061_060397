<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = "Mochammad Rizky Wahyudianto";
    	$mahasiswa->nim = "1515015055";
    	$mahasiswa->alamat = "Jl pattimura";
    	$mahasiswa->pengguna_id = 1;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
}
}
