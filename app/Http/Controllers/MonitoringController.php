<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class MonitoringController extends Controller
{
    public function index()
    {

        return view(
            'dashboard'
        );
    }


    public function cardstatus()
    {

        date_default_timezone_set('Asia/Jakarta');
        error_reporting(0);
        $jml = 0;
        $date  =   date("Y-m-d");
        $pha   = DB::table('phair')->whereDate('created_at', '=', $date)->latest()->first();
        $sh    = DB::table('suhuairs')->whereDate('created_at', '=', $date)->latest()->first();
        $jml   =  DB::table('phair')->whereDate('created_at', '=', $date)->where('status', '=', 0)->get()->count();
        $max   =  DB::table('suhuairs')->whereDate('created_at', '=', $date)->get()->max('suhu');
        $data1 = $pha->phair;
        $data2 = $sh->suhu;
        $status1 = $pha->status;
        $status2 = $sh->status;
        if ($data1 == false && $data2 == false) {
            $data1 = 0;
            $data2 = 0;
        }

        if ($max == false) {
            $max = "0";
        }
// dd($status2);
        $data = [$data1, $data2, $jml, $max];
        // dd($data);

        $icon = ['far fa-hourglass-half', 'far fa-sun', 'far fa-thumbs-down', 'fa fa-lightbulb'];
        $desk = ['Status PH Air', 'Status Suhu Air', 'Data dihitung perbulan', 'Data Tertinggi bulan ini'];
        $stat = [$pha->deskripsi, $sh->deskripsi, 'PH Air Tidak Normal', 'Suhu paling tinggi'];


        return view(
            'particle.cardstatus',
            [
                "stph" => $status1,
                "stsuhu" => $status2,
                "jml" => $jml,
                "ph" => $pha,
                "sh" => $sh,
                // "gphair" => $gphair,
                "data" => $data,
                "icon" => $icon,
                "desk" => $desk,
                "stat" => $stat
            ]
        );
    }
    public function tableajax()
    {
        date_default_timezone_set('Asia/Jakarta');
        error_reporting(0);
        $date  =   date("Y-m-d");

        $phtable = DB::table('phair')->orderBy('id', 'desc')->whereDate('created_at', '=', $date)->whereIn(DB::raw('id % 30'), [0])->get();
        $shtable = DB::table('suhuairs')->orderBy('id', 'desc')->whereDate('created_at', '=', $date)->whereIn(DB::raw('id % 30'), [0])->get();



        // Graphic ===================
        $phgrap = DB::table('phair')->get();

        return view(
            'particle.tableajax',
            [
                "phtable" => $phtable,
                "shtable" => $shtable,
            ]
        );
    }
    public function graphicmonitoring(){
        date_default_timezone_set('Asia/Jakarta');
        error_reporting(0);
        $date  =   date("Y-m-d");
        $phtable = DB::table('phair')->orderBy('id', 'asc')->whereDate('created_at', '=', $date)->take(30)->get();
        $shtable = DB::table('suhuairs')->orderBy('id', 'asc')->whereDate('created_at', '=', $date)->take(30)->get();
        $pha   = DB::table('phair')->whereDate('created_at', '=', $date)->latest()->first();
        $sh    = DB::table('suhuairs')->whereDate('created_at', '=', $date)->latest()->first();
        return view('particle.graphicmonitoring',
        [
            "ph" => $pha,
            "sh" => $sh,
            "shtable" => $shtable,
            "phtable" => $phtable,
        ]);
    }
}
