<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoyakuController extends Controller
{
  public function create()
  {
    return view('resources/views/yoyaku/create.blade.php');
  }
}
