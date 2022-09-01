<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Yoyaku;
use Illuminate\Support\Facades\Gate;

class YoyakuController extends Controller
{
  public function create()
  {
    return view('yoyaku.create');
  }

  public function store(Request $request)
  {
    $inputs=$request->validate([
      'date1'=>'required|date|max:255',
      'date2'=>'required|date|max:1000|different:date1',
      'body'=>'max:1000'
    ]);

    $yoyaku = new Yoyaku;
    $yoyaku->user_id = auth()->user()->id;
    $yoyaku->date1 = $request->input('date1');
    $yoyaku->date2 = $request->input('date2');
    $yoyaku->body = $request->input('body');
    $yoyaku->save();
    return back()->with('message','予約が完了しました');
  }

  public function index()
  {
    Gate::authorize('admin');
    $yoyakus = Yoyaku::orderBy('date1','asc')->get();
    return view('index', compact('yoyakus'));
  }

}