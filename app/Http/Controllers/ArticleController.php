<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Rules\AgeRule;
use App\Rules\AgeValidate;
use App\Rules\EmailValidate;
use App\Rules\PasswordValidation;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function createSessions(){
        if(!session()->has('id') && !session()->has('name')){
            session(['id'=>'6787', 'name'=>'Sok VireakChantrea']);
        }
        return "<h2>sessions were created!!!</h2>";
    }
    public function useSessions(){
        return "ID: " . session('id') . "<br>Name: " . session('name');
    }
    public function removeSessions(){
        if(session()->has('id') && session()->has('name')){
            // session()->flush();
            //session()->forget(['id', 'name']);
            //session()->destroy();
            session()->remove('id');
            session()->remove('name');
        }
        return "<h2>sessions were destroyed.</h2>";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $results = Article::all();
        $results = Article::orderBy("id", "DESC")->get();
        return view("article.index", compact("results"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'password'=>[new PasswordValidation],
                'age'=>['required', new AgeValidate],
                'title'=>'required|min:2|max:255',
                'email'=>['required', new EmailValidate],
                'description'=>'required'
            ],
            [
                'email.required'=>'Required Field',
                'title.min' => "Please provide title more than 2 chars",
                'title.max' => "Please provide title less than 255 chars",
            ]
        );


        Article::create($request->all());

        session()->flash('message', 'Record has been inserted succ....');

        return redirect("/article/create");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return view("article.show", compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        return view("article.edit", compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Article::find($id)->update($request->all());
        return redirect("/article");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::find($id)->delete();
        return to_route("article.index");
        // return redirect()->route("article.index");
        // return redirect("/article");
    }
    
}
