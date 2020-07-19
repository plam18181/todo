<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

         public function home(){
         return view('Home');
     }
    // public function about(){
    //     return view('about');
    // }
    // public function contact(){
    //     return view('contact');
    // }


    public function index(){
        $posts = Post::paginate(10);
        $data = [
            'posts' => $posts
        ];
        return view('index' , $data);
    }
    public function create(){
        $caegories = Category::all();
        $data = [
            'categories' => $caegories
    ];
        return view('create',$data);
    }
    public function login(){
        return view('login');
    }
    public function store(Request $request){
        //$name = $_POST['name'];
        $detail = $request->input('detail');
        $category_id = $request->input('category_id');
        $post = new Post();
        $post->user_id = 1;
        $post->status = 0;
        $post->detail = $detail;
        $post->category_id = $category_id;
        $post->save();
        return redirect("/");
    }
 public function delete($id){
     if($id == ""){
         return redirect("/");
     }

     $post = Post::find($id);
     $post->delete();

     return redirect("/");
 }
}
