<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class ArticlesController extends Controller
{
	/**
	 * Show all articles
	 * @return view return blade view index.
	 */
	public function index(){
		$articles = Article::get();
		return view('articles.index', compact('articles'));
	}

	/**
	 * Show the given article
	 * @return view return blade view index.
	 */
	public function show($id){
		$article = Article::findOrFail($id);
		return view('articles.show', compact('article'));
	}

	/**
	 * Show the form to create an article
	 * @return view return blade view index.
	 */
	public function create(){
		return view('articles.create');
	}

	/**
	 * Create an Article in the database
	 * @return view return blade view index.
	 */
	public function store(Request $request){

		$article = new Article;
		$article->fill($request->all());
		if($article->save()){
			return redirect('/articles');
		}
	}

	/**
	 * Show the form to edit an article
	 * @return view return blade view index.
	 */
	public function edit($id){
		$article = Article::findOrFail($id);
		return view('articles.edit', compact('article'));
	}

	/**
	 * Create an Article in the database
	 * @return view return blade view index.
	 */
	public function update(Request $request, $id){
		$article = Article::findOrFail($id);
		$article->fill($request->all());
		if($article->save()){
			return redirect('/articles');
		}
	}
}
