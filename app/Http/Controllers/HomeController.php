<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use PDO;

class HomeController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        $strings = collect(['apple','banana','watermelon']);

        // apply custom upperCase
        $uppercased = $strings->toUpper();

         return response()->json([
        'original' => $strings->all(),
        'uppercased' => $uppercased->all(),
    ]);

    }


}
