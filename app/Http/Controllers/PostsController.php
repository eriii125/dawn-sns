<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){
      // つぶやきをDBから取得する処理をいれる
      $messages = \DB::table('posts')->join('users','posts.user_id','=','users.id')->get();
      return view('posts.index',['messages'=>$messages]);
    }

    public function createPost(Request $request){

      // 1.Viewからつぶやき情報を受け取る
        // 必要な情報
        // 1.つぶやきの本文
        $newPost = $request->input('newPost');
        // 2.ユーザID
        $userId = $request->input('userId');

      // 2.DBに登録する
      \DB::table('posts')->insert([
        'posts'=>$newPost,
        'user_id'=>$userId,
      ]);

      return redirect('/top');
    }

}
