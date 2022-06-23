<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;

class ArticleController extends Controller
{


    /**
     * Функция для показа всех статей
     * @return Collection
     */
    public function viewAll(): Collection
    {

        return Article::all(); //по умолчанию Laravel возвращает данные в json

    }

    public function viewOne($id): JsonResponse
    {

        $article = Article::query()->find($id);

        if(!$article){
            return response()->json(['success' => false, 'message' => 'This article does not exist']);
        }

        return response()->json(['success' => true, 'article' => $article]);
    }

}
