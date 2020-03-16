<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class codeController extends Controller
{
    public function show($code){
        $normal_code = DB::table('links')->where('short_link', $code)->first();

        if($normal_code !== null){
            return redirect($normal_code->normal_link);
        }
    }
}
