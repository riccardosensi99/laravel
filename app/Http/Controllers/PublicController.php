<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function home() {
        $articles = Article::all();
        return view('welcome',["articles"=>$articles]);
    }

    
    public function servizi () {
        return view('service');
    }
    
    public function articles(){
        
        $elements = [['id'=>'1','name'=>'gtaV','price'=>'20€','img'=>'/img/Guardians_of_the_Galaxy_game_cover_art.jpg'],
        ['id'=>'2','name'=>'cyberpunk','price'=>'49.90€','img'=>'/img/cyberpunkWiki.jpg'],
        ['id'=>'3','name'=>'destiny 2','price'=>'25€','img'=>'/img/Destiny_2_(artwork).jpg'],
        ['id'=>'4','name'=>'Word of Warcraft','price'=>'49.90€','img'=>'/img/World_of_Warcraft.png']
    ];
    
    return view('articoli', ['elements'=>$elements]);
}
    public function user() {
        $users =[  
            ['id'=>'1','name'=>'mario','age'=>'25'],
            ['id'=>'2','name'=>'luigi','age'=>'22'],
            ['id'=>'3','name'=>'pippo','age'=>'21'],
            ['id'=>'4','name'=>'topolino','age'=>'23']
        ];
        return view('chiSiamo',['users'=>$users]);
    }

   public function userDetail($id){
        $users =[  
            ['id'=>'1','name'=>'mario','age'=>'25','img'=>'/img/mario.jpg'],
            ['id'=>'2','name'=>'luigi','age'=>'22','img'=>'/img/LuigiSSBVFull.webp'],
            ['id'=>'3','name'=>'pippo','age'=>'21','img'=>'/img/pippo.jpg'],
            ['id'=>'4','name'=>'topolino','age'=>'23','img'=>'/img/topolino.png']
        ];
        foreach($users as $user){
            if($id == $user['id']){
                return view('userDetail',['user'=>$user]);
            }
        }
   }

   public function contact(){
    return view('contact');
   }

   public function contactSubmit(Request $request){
       
        $email = $request->input('email');
        $text = $request->input('text');
        $name = $request->input('name');

        dd($email,$name,$text);
   }
}
