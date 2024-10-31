<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        return view('ControllerBiodata');
    }

    public function menampilkanBiodata()
    {
        $dataNama = Biodata::$Nama;
        $dataKelas = Biodata::$Kelas;
        $dataSekolah = Biodata::$Sekolah;
        $dataAlamat = Biodata::$Alamat;
        $dataHobi = Biodata::$Hobi;
        $dataEmail = Biodata::$Email;
        $dataBesti = Biodata::$Besti;

        return view('biodataView',compact('dataNama','dataKelas','dataSekolah','dataAlamat','dataHobi','dataEmail','dataBesti'));
    }
}