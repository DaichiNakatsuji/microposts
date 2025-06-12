<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller{
  public function store(string $id){
      // 認証済みユーザーが投稿をお気に入り登録
      \Auth::user()->favorite(intval($id));
      return back();
  }

  public function destroy(string $id){
      // 認証済みユーザーが投稿のお気に入りを解除
      \Auth::user()->unfavorite(intval($id));
      return back();
  }
}