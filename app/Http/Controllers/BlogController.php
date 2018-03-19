<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;

class BlogController extends Controller
{
	public function index(Request $request)
	{
		// $articles = Article::orderBy('title','desc')->get();
		// $articles->toArray();
		
		$articles = Article::orderBy('title','desc')->paginate(1);

		
		
		// echo '<pre>';
		// var_dump($articles->toArray());
		// echo '</pre>';

		return view('blog.index', ['articles' => $articles]);

		
		/*
		$user= User::find(1);
		var_dump($user);
		$user->articles()->create([
			'title' =>'hello',
			'content'=>'content',
			'image'=>'image',
			'is_published' =>TRUE
			]);
		*/
		
		// $articles = Article::all();

		// $articles->map(function($item,$key){
		// 	$item->image ='/path/to/'.$item->image;
		// 	var_dump($item->image);
		// });

		// foreach ($users as $user) {

			// var_dump($user->name);
		// }

		// foreach ($articles as $article) {
		// 	var_dump($article->title);
		// 	$user=$article->user()->first();
		// 	var_dump($user->name);
		// }

		//var_dump($users,$articles);
		/*
		$user = new User;
		$user->email = 'user@example.com';
		$user->name ='Вася Пупкин';
		$user->save();
		
		$article = new Article;
		$article->user_id =1;
		$article->title = 'first write in my blog';
		$article->content ='first blog';
		$article->image ='image.png';
		$article->is_published =FALSE;
		$article->save();
		return view('blog.index');
		*/
	}
    
    public function view(Request $request, $id)
    {
    	$articles = Article::all();
    	// var_dump($articles->toArray());
    	return view('blog.view', [

    		'id' =>$id,
    		'articles'=>$articles
    		]);
    }
}
