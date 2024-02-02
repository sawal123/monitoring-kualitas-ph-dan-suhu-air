<?php

namespace App\Http\Controllers;

use App\Models\Phair;
use App\Models\suhuair;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //

    public function index()
    {
        
        date_default_timezone_set('Asia/Jakarta');
        // $phair = $request->phair;
        $phair = $_GET['phair'];
        $suhu = $_GET['suhu'];
        // dd($suhu);
        if ($phair >= 6.5 && $phair <= 8.5) {
            $status = '1';
            $deskripsi = "PH Air Normal";
        } else {
            $status = '0';
            $deskripsi = "PH Air Tidak Normal";
        }

        if ($suhu >= 23 && $suhu <= 32) {
            $stsuhu = '1';
            $desk = 'Suhu Normal';
        } else {
            $stsuhu = '0';
            $desk = 'Suhu Tidak Normal';
        }

        echo $phair . " ";
        echo $status . " ";
        echo $deskripsi;
        echo "<br>";
        echo $suhu . " ";
        echo $stsuhu . " ";
        echo $desk;


        $model = new Phair;
        $model->phair = $phair;
        $model->status = $status;
        $model->deskripsi = $deskripsi;
        $model->save();

        $model1 = new suhuair;
        $model1->suhu = $suhu;
        $model1->status = $stsuhu;
        $model1->deskripsi = $desk;
        $model1->save();
    }

    public function  update(Request $request)
    {
        $idph= $request->idph;
        $idsuhu= $request->idsuhu;
        $sph = $request->sph;
        $ssh = $request->ssh;
        DB::table('phair')->where('id', $idph) ->update([
            'phair' => $request->ph,
            'status' => $sph,
            'deskripsi' => $request->deph,
        ]);
        DB::table('suhuairs')->where('id', $idsuhu) ->update([
            'suhu' => $request->suhu,
            'status' => $ssh,
            'deskripsi' => $request->desh,
        ]);

        return redirect('/rekap')->with('success', 'Data Berhasil di Update!');
    }
}
