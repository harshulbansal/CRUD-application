<?php

namespace App\Http\Controllers;  #specifies directory

use Illuminate\Http\Request;  #
use App\article;

class createsController extends Controller
{
    public function home()
    {
    	$articles = article::all();
        #return $articles;

    	return view('home',['articles' => $articles]); #associative array
    }
    
    public function add(Request $request)
    {
    $this->validate($request, [
        'title' => 'required',
        'description' => 'required'
        ]);

        $articles = new Article;
        $articles->title = $request->input('title'); 
        $articles->description = $request->input('description');    
        $articles->save();
        #return $articles;
        return redirect('/')->with('info','Article saved sucesssfully!');
    }
    public function update($id)
    {
        $articles = article::find($id);
      
        return view('update',['articles' => $articles]);
    
    }
    public function edit(Request $request, $id)
    {
       $this->validate($request, [
        'title' => 'required',
        'description' => 'required'
        ]);

        $data = array(
                'title' => $request->input('title'),
                'description' => $request->input('description')
            );
        article::where('id',$id)
        ->update($data);
        return redirect('/')->with('info','Article updated sucesssfully!');
    }
    public function read($id)

    {
        $articles = article::find($id);
        return view('read',['articles' => $articles]);
    }
    public function delete($id)

    {
        article::where('id',$id)
        ->delete();
        return redirect('/')->with('info','Article deleted sucesssfully!');
    }
}
 