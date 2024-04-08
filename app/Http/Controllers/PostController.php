<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function index(){
        //$posts= post::where('inputer','林祐霆')->get();
        return view('PostIndex'); //傳給POSTINDEX 名稱是posts 內容是posts
    }
    public function create(Request $request){//Requset 接收傳過來的資料
        $content = $request->content;//從物件request指向content屬性
        $inputer = $request->inputer;
        post::create(['content'=>$content,'inputer'=>$inputer]);
        //修改post資料庫 把'inputer'的資料傳給 inputer
        $posts =post::all();
        return view('comment',['posts'=>$posts]);//
    }
    public function change(Request $request,$id){
        $change=$request->content;
        $post=post::find($id);
        $post->content = $change;
        $post->save();//處存資料庫動作
        $posts =post::all();
        return view('comment',['posts'=>$posts]);
    }
    public function delete($id){
        $post=post::find($id);
        $post->delete();
        $posts =post::all();
        return view('comment',['posts'=>$posts]);
    }
    public function lastpage(){
        return redirect()->route('index');
    }
}
