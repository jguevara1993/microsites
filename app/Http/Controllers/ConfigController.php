<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Option;

class ConfigController extends Controller
{

    public function index()
    {
      return view('dashboard.admin.config.index', compact('face'));
    }

    public function setConfig(Request $request)
    {

      $facebook = $request->input('facebook');
      $twitter = $request->input('twitter');
      $linkedin = $request->input('linkedin');
      $instagram = $request->input('instagram');

      $setFace = DB::table('options')->where('name', 'facebook')->update(['value'=> $facebook]);
      $setTwitter = DB::table('options')->where('name', 'twitter')->update(['value'=> $twitter]);
      $setLinkedin = DB::table('options')->where('name', 'linkedin')->update(['value'=> $linkedin]);
      $setInsta = DB::table('options')->where('name', 'instagram')->update(['value'=> $instagram]);



      return redirect('config');
    }
}
