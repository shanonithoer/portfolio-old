<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use DB;

class insertCode extends Controller
{
    public function insert(Request $request)
    {   
        $url = $request->url;
        $short_url = $this->generateRandomString();
        $current_time = Carbon::now();
        $update_time = Carbon::now();

        $data = array('created_at'=>$current_time, 'updated_at'=>$update_time,'normal_link'=>$url, 'short_link'=>$short_url);

        $huidige_url = explode('/', url()->current());
        $verwijderd_url = array_pop($huidige_url);
        $huidige_url = implode('/', $huidige_url);

        DB::table('links')->insert($data);

        return view('shortLink', [
            'code' => $huidige_url .'/'. $short_url
        ]);
    }

    public function generateRandomString() {
        $length = 20;
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
