<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class IndexController extends Controller
{
    //

	
    function index_advertise(Request $request)
    {   
        $news = new News();
        $news -> title = $request->title;
        $news -> description = $request->body;
        $news -> catagory = $request->catagory;
        $news -> save();

        return view("pages.advertise");

    }

    function index_redirect()
    {
        return view("pages.welcome");
    }

    function index_login()
    {
    	
	    return view('pages.login');	
    }	


    function index_add_news()
    {
    	return view("pages.addNews");
    }

    function index()
    {
    	$data = News::all();
	    return view('pages.welcome')->with("news", $data);	
    }

    function index_sports()
    {
    	$data = News::where('catagory', "sports")->get();
	    return view('pages.sports')->with("news", $data);	
    }

    function index_political()
    {
    	$data = News::where('catagory', "political")->get();
	    return view('pages.political')->with("news", $data);	
    }

    function index_technology()
    {
    	$data = News::where('catagory', "technology")->get();
	    return view('pages.technology')->with("news", $data);	
    }

    function index_entertainment()
    {
    	$data = News::where('catagory', "entertainment")->get();
	    return view('pages.entertainment')->with("news", $data);	
    }
}
