<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Article;
use App\ArticleLabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articleData = Article::with('articleLabel')->get();
        return view('admin.article.index',compact('articleData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $articleLabels = ArticleLabel::get();
        return view('admin.article.create',compact('articleLabels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articleData = $request->all();

        if($request->hasFile('img')){
            $file=$request->file('img');
            $path=Storage::disk('myfile')->putFile('article',$file);
            $articleData['img']= Storage::disk('myfile')->url($path);
        }

        Article::create($articleData);
        return redirect('/admin/article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articleLabels = ArticleLabel::get();
        $article = Article::with('articleLabel')->find($id);
        return view('admin.article.edit',compact('article','articleLabels'));
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
        //????????????????????????
        $article= Article::find($id);
        //????????????????????????
        $articleData= $request->all();
        if ($request->hasFile('img')) {
            //???????????????
            File::delete(public_path().$article->img);
            //???????????????
            $file=$request->file('img');
            $path=Storage::disk('myfile')->putFile('article',$file);
            $articleData['img']= Storage::disk('myfile')->url($path);
        }
        //???????????????
        $article->update($articleData);
        return redirect('/admin/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        File::delete(public_path().$article->img);
        $article->delete();
        return redirect('/admin/article');
    }
}
