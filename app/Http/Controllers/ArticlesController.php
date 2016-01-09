<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Carbon\Carbon;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
	public function __construct() {
		$this->middleware('auth', ['only' => 'create']);
	}

    public function index() {
		$articles = \App\Article::latest('published_at')->published()->get();
		return view('articles.index', compact('articles'));
	}

	public function show($id) {
		$article = Article::findorFail($id);
		//dd($article->published_at);
		return view('articles.show', compact('article'));
	}

	public function create() {
		$tags = Tag::lists('name', 'id');
		return view('articles.create', compact('tags'));
	}

	public function store(ArticleRequest $request) {
		$article = Auth::user()->articles()->create($request->all());
		$article->tags()->attach($request->input('tag_list'));

		return redirect('articles')->with(['flash_message' => 'Your article has been created!']);
	}

	public function edit($id) {
		$article = Article::findOrFail($id);
		$tags = Tag::lists('name', 'id');
		return view('articles.edit', compact('article', 'tags'));
	}

	public function update($id, ArticleRequest $request) {
		$article = Article::findOrFail($id);
		$article->tags()->sync($request->input('tag_list'));
		$article->update($request->all());
		return redirect('articles');
	}
}
