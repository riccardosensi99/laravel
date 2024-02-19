<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('index','show');
    }
    public function create(){
        return view('article.create');
    }

    public function store(ArticleRequest $request){
        // $article = new Article();
        // $article->name= $request->name;
        // $article->price= $request->price;
        // $article->brand= $request->brand;
        // $article->save();
        // dd($request);
        $article = Article::create([
            'name' =>$request->name,
            'price' =>$request->price,
            'brand' =>$request->brand,
            'user_id' =>Auth::user()->id,
            // 'img'=> $request->file('img')->store('public/img')
        ]);

        if($request->file('img')){
            $article->img = $request->file('img')->store('public/img');
            $article->save();
        }
        
        return redirect(route('homePage'))->with('message', 'Store updated!');
    }
}


