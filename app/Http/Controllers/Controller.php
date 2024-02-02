<?php

namespace App\Http\Controllers;

use App\Models\Phair;
use App\Models\suhuair;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        error_reporting(0);
        $filter=$_GET['filter'];
        $date = date("Y-m-d");
        $ph = DB::table('phair')->whereDate('created_at','=', $filter)->get();
        $sh = DB::table('suhuairs')->whereDate('created_at','=', $filter)->get();

        // $ph = DB::table('phair')->get();
        // $sh = DB::table('suhuairs')->get();
        // DB::table('timbangans')->whereDate('created_at', '=', $tgl) ->get();

        $phtable = DB::table('phair')->get();
        $shtable = DB::table('suhuairs')->get();
        // dd($date);
        return view(
            'page.rekap',
            [
                "date" => $date,
                "phtable" => $phtable,
                "shtable" => $shtable,
                "ph" => $ph,
                "sh" => $sh

            ]

        );
    }

    public function hapus($id)
    {
        $del = suhuair::find($id);
        $del2 = Phair::find($id);
        $del->delete();
        $del2->delete();
        $sesHapus = $_SESSION["hapus"] = 'Data Berhasil Dihapus';
        return redirect(url('/rekap'))->with('success', 'Data Berhasil di Hapus!');
    }
}
