<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class usercontroller extends Controller
{
    public function show_admin_name(){
        return 'islam mohamed';
    }

    public function show_id($id){
        return $id;
    }

    public function test(){
        return redirect()->route('aqws');
    }
}
