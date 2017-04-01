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
    public function mahasiswa(){
        $mahasiswa = mahasiswa::find(3);
        echo "nama:".$mahasiswa->nama;
        echo "<br>";
        echo "username:".$mahasiswa->pengguna->username;
    }
    public function simpan(){
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = "riski hendrawan";
    	$mahasiswa->nim = "1515015061";
    	$mahasiswa->alamat = "Jl perjuangan";
    	$mahasiswa->pengguna_id = 1;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
}
}
