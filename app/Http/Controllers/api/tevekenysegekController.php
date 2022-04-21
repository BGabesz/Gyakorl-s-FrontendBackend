<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Bejegyzesek;
use App\Models\Tevekenyseg;
class tevekenysegekController extends Controller
{
    public function index(){
        $tabla= DB::table('tevekenysegs');
        return response()->json($tabla->get());
    }
}