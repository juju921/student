<?php namespace App\Http\Controllers;

use App\category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;

class FrontController extends Controller
{

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */

    public function __construct()
    {
       /* View::composer('layouts.master', function ($view) {
            $categories = \App\Category::all();
            $view->with('students', \App\Student::all());
            $view->with('menus', $categories);

        });*/


    }


    public function index()
    {
        $students = \App\Student::all();
        $posts = \App\Post::all();
        // return \App\Student::find(1);
        return view('front.index', compact('students', 'posts'));
    }

    public function showSingle($id)
    {

        $posts = \App\Post::find($id);
        return view('front.single', compact('posts'));

    }

    public function showCategory($id)
    {

        $categories =  \App\Category::find($id)->posts;

        return view('front.category', compact('categories'));
    }


    public function showTag($id)
    {

        $posts =  \App\Tag::find($id)->posts;
        return view('front.tag', compact('posts'));
    }

}
