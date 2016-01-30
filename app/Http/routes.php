<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('orm',function(){
	// \App\Post::create([
	// 	'title' => 'title',
	// 	'content' => 'content',
	// 	'is_feature' =>false,
	// 	]);

	//第二種新增資料的方法
	// $post = new \App\Post();
	// $post->title = 'test title';
	// $post->content = 'test content';
	// $post->save();

	//找資料
	// $post = \App\Post::find(1);
	// dd($post);

	//找資料條件式
	// $posts = \App\Post::where('is_feature','=','1')->where('id','>','10')->orderBy('created_at','desc')->get();
	// dd($posts);

	//更新資料use update
	// $post = \App\Post::find(1);
	// $post->update([
	// 	'title' => 'update title',
	// 	'content' => 'update content',
	// 	]);

	// 更新資料use save
	// $post = \App\Post::find(1);
	// $post->title = 'update title using save';
	// $post->save();

	//刪除資料 delete
	// $post = \App\Post::find(1);
	// $post->delete();

	//刪除資料 destroy
	// \App\Post::destroy(2);

	//刪除多筆資料
	// \App\Post::destroy(3,5,7);

	//Collection
	// $allPosts = \App\Post::all();
	// $featuredPosts = \App\Post::where('is_feature',1)->get();
	// dd($allPosts);
	// dd($featuredPosts);
	//myCollection = collect([6,9,1,2,55]);
	//$myCollection->push(5);
	// $random = $myCollection->sort();
	// dd($random);


	//資料表關聯測是與驗證

	//Post
	// $post = \App\Post::find(1);
	// dd($post->comments);
	// foreach($post->comments as $comment){
	// 	echo $comment->content;
	// }
	// foreach($post->comments as $comment){
	// 	echo $comment->id.',';
	// }


	//Comment
	// $comment = \App\Comment::find(7);
	// echo $comment->post->title;
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
