<?php

namespace App\Http\Controllers;

use App\Article;
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
		dd($article->published_at);
		return view('articles.show', compact('article'));
	}

	public function create() {
		return view('articles.create');
	}

	public function store(ArticleRequest $request) {
		Auth::user()->articles()->create($request->all());

		//session()->flash('flash_message', 'Your article has been created');

		return redirect('articles')->with(['flash_message' => 'Your aritcle has been created!']);
	}

	public function edit($id) {
		$article = Article::findOrFail($id);
		return view('articles.edit', compact('article'));
	}

	public function update($id, ArticleRequest $request) {
		$article = Article::findOrFail($id);
		$article->update($request->all());
		return redirect('articles');
	}
}
