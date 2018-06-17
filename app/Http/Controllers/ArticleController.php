<?php

namespace Prebaby\Http\Controllers;

use Prebaby\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // public function articleCreateArticle(Request $request){

    // }

    public function first(){
        $articles = Article::where('trimester',1)->get();
        return view('firstArticles', ['articles' => $articles]);
    }
}
