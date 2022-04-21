<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Bejegyzesek;
use App\Models\Tevekenyseg;
class bejegyzesekController extends Controller
{
    public function index(){
        $tabla= DB::table('tevekenysegs')
        ->join('bejegyzeseks','bejegyzeseks.tevekenyseg_id','tevekenysegs.tevekenyseg_id');
        return response()->json($tabla->get());
    }
    public function store(Request $request){
         $request->validate([
            'osztaly'=>'required',
            'tevekenyseg'=>'required',
        ]);
        $ujfoglalas =new Bejegyzesek;
        $ujfoglalas->tevekenyseg_id=$request->tevekenyseg;
        $ujfoglalas->osztaly_id=$request->osztaly;
        $ujfoglalas->allapot="Jovahagyasra var";
        $ujfoglalas -> save();
        return response()->json(true);
    }
    public function osztaly_id(Request $request){
        $id=$request->query('id');
        $tabla= DB::table('tevekenysegs')
        ->join('bejegyzeseks','bejegyzeseks.tevekenyseg_id','tevekenysegs.tevekenyseg_id');
        if($id){
            if($id!=="osszes"){
                $tabla->where('bejegyzeseks.osztaly_id','=',$id);
            }
        }
        return response()->json($tabla->get());
   }
   public function charts(){
    /* $tabla = Tevekenyseg:: */
    $tabla= DB::table('tevekenysegs')
    ->join('bejegyzeseks','bejegyzeseks.tevekenyseg_id','tevekenysegs.tevekenyseg_id')
    ->selectRaw('sum(pontszam) as pontszam ,osztaly_id')
    ->groupBy('osztaly_id');
    /* ->orderBy('osztaly_id'); */
    /* ->sum('pontszam'); */
    return response()->json($tabla->get());
}
}