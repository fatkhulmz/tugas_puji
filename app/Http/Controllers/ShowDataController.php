<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuisioner;
use App\Rancangan_pembangunan;
use App\Penjaminan_mutu;
use App\Standar_operasional;
use App\Pendidikan_pelatihan;
use App\Analisis_kebijakan;
use App\Manajemen_sumber;
use App\Manajemen_resiko;
use App\Pengukuran_kinerja;
use Auth;
use Storage;

class ShowDataController extends Controller
{
    //

    public function kuisioner($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $kuisioner = Kuisioner::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->first();
        // dd($kuisioner);
        return view('kuisioner.show_data', compact('kuisioner'));
    }

    public function rancangan_pembangunan($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $rp = Rancangan_pembangunan::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->first();
        // dd($kuisioner);
        return view('rancangan_pembangunan.show_data', compact('rp'));
    }

    public function penjaminan_mutu($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $pm = Penjaminan_mutu::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->first();
        // dd($kuisioner);
        return view('penjaminan_mutu.show_data', compact('pm'));
    }

    public function standar_operasional($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $so = standar_operasional::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->first();
        // dd($kuisioner);
        return view('standar_operasional.show_data', compact('so'));
    }

    public function pendidikan_pelatihan($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $pp = Pendidikan_pelatihan::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->first();
        // dd($kuisioner);
        return view('pendidikan_pelatihan.show_data', compact('pp'));
    }

    public function analisis_kebijakan($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $ak = Analisis_kebijakan::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->first();
        // dd($kuisioner);
        return view('analisis_kebijakan.show_data', compact('ak'));
    }

    public function manajemen_sumber($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $ms = Manajemen_sumber::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->first();
        // dd($kuisioner);
        return view('manajemen_sumber.show_data', compact('ms'));
    }

    public function manajemen_resiko($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $mr = Manajemen_resiko::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->first();
        // dd($kuisioner);
        return view('manajemen_resiko.show_data', compact('mr'));
    }

    public function pengukuran_kinerja($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $pk = Pengukuran_kinerja::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->first();
        // dd($kuisioner);
        return view('pengukuran_kinerja.show_data', compact('pk'));
    }
}
