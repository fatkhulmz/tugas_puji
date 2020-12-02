<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Storage;

class DokumenController extends Controller
{
    //

    public function kuisioner($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        return view('kuisioner.show_dokumen', compact('tingkat', 'id'));
    }

    public function rancangan_pembangunan($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        return view('rancangan_pembangunan.show_dokumen', compact('tingkat', 'id'));
    }

    public function penjaminan_mutu($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        return view('penjaminan_mutu.show_dokumen', compact('tingkat', 'id'));
    }

    public function standar_operasional($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        return view('standar_operasional.show_dokumen', compact('tingkat', 'id'));
    }

    public function pendidikan_pelatihan($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        return view('pendidikan_pelatihan.show_dokumen', compact('tingkat', 'id'));
    }

    public function analisis_kebijakan($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        return view('analisis_kebijakan.show_dokumen', compact('tingkat', 'id'));
    }

    public function manajemen_sumber($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        return view('manajemen_sumber.show_dokumen', compact('tingkat', 'id'));
    }

    public function manajemen_resiko($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        return view('manajemen_resiko.show_dokumen', compact('tingkat', 'id'));
    }

    public function pengukuran_kinerja($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        return view('pengukuran_kinerja.show_dokumen', compact('tingkat', 'id'));
    }
}
