<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function form()
    {
        return view('test');
    }

    public function save(Request $request): JsonResponse
    {
        $article = new Article();

        $article->title = $request->title;
        $article->article = $request->article;

        $validate = $request->validate([
            'title' => 'required|string|max:10',
            'article' => 'required|string|min:3'
        ]);


        $article->save();

        return response()->json(['Successfully' => 'Form sent']);

    }


}
