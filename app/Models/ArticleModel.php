<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

function slug($judul)
{
    $input = strtolower($judul);
    $input = explode(" ", $input);
    $input = implode("-", $input);
    return $input;
}

class ArticleModel
{

    public static function get_all()
    {
        $article = DB::table('articles')->get();
        return $article;
    }

    public static function store($request, $user_id = 1)
    {
        $request['user_id'] = $user_id;
        $request['slug'] = slug($request['judul']);
        unset($request['_token']);

        $article = DB::table('articles')->insert($request);
        return $article;
    }

    public static function show_by_id($article_id)
    {
        $article = DB::table('articles')->where('id', '=', $article_id)->first();
        return $article;
    }

    public static function update($request, $article_id)
    {
        $request['slug'] = slug($request['judul']);
        unset($request['_token']);
        unset($request['_method']);

        $article = DB::table('articles')->where('id', '=', $article_id)->update($request);
        return $article;
    }

    public static function destroy($article_id)
    {
        $article = DB::table('articles')->where('id', '=', $article_id)->delete();
        return $article_id;
    }
}
