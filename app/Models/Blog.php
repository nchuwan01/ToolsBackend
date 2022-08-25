<?php
namespace App\Models;
class Blog{
    public static function Find($tok)
    {
            $path= __DIR__ . "/../../resources/blogData/{$tok}.html";
            if(!file_exists($path)) {
//        dd("File Not Exist ptth: $path")
                return redirect("/");
            }else{
                $post = file_get_contents($path);
                return $post;
            }

    }
}
