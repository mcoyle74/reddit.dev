<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth', ['except' => ['index', 'show']]);
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		if ($request->has('keyword')) {
			$keyword = $request->input('keyword');
			$posts = Post::where('title', 'LIKE', '%' . $keyword . '%')->orWhere('name', $keyword)->join('users', 'users.id', '=', 'posts.created_by')->paginate(10);
		} else {
			$posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(10);
		}
		return view('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Request $request)
	{
		return view('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->session()->flash('ERROR_MESSAGE', 'Error: post was not saved.');
		$this->validate($request, Post::$rules);
		$request->session()->flash('SUCCESS_MESSAGE', 'Success! Post was saved.');

		$post = new Post;
		$post->title = $request->input('title');
		$post->url = $request->input('url');
		$post->content = $request->input('content');
		$post->created_by = Auth::user()->id;
		$post->save();
		Log::info(print_r($request->input(), true));
		return redirect()->action('PostsController@index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		if (!$post) {
			abort(404);
		}
		return view('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return view('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$this->validate($request, Post::$rules);
		$post = Post::findOrFail($id);
		$post->title = $request->input('title');
		$post->url = $request->input('url');
		$post->content = $request->input('content');
		$post->save();
		return redirect()->action('PostsController@show', [$post->id]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Request $request, $id)
	{
		$post = Post::findOrFail($id);
		$post->delete();
		return redirect()->action('PostsController@index');
	}
}
