<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\User;
use App\NewsType;

class UserViewController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest');
    }

    public function index()
    {
    	$data = array(
    		'news' 		=> News::where('newsStatus', 1)->orderBy('news.id', 'desc')->select('news.*', 'users.name')->join('users', 'users.id', '=', 'news.user_id')->limit(10)->get(),
    		'category' 	=> NewsType::with('subType')->where('p_id', 0)->limit(7)->get(),
    	);
    	return view('user.index')->with($data);
    }

    public function category()
    {
        //show all category here
        $data = array(
            'news'      => News::where('newsStatus', 1)->orderBy('news.id', 'desc')->select('news.*', 'users.name')->join('users', 'users.id', '=', 'news.user_id')->limit(10)->get(),
            'category'  => NewsType::with('subType')->where('p_id', 0)->limit(7)->get(),
        );
        return view('user.allCategory')->with($data);
    }

    public function categoryById($id)
    {
        $data = array(
            'news' => News::where('newsStatus', 1)->where('newsCategory', $id)->join('users', 'users.id', '=', 'news.user_id')->select('news.*','users.name')->get(),
            'category'  => NewsType::with('subType')->where('p_id', 0)->get(),
            'cat' => NewsType::find($id)
        );
        return view('user.categoryById')->with($data);
    }

    public function news($id)
    {
        $data = array(
            'news' => News::where('news.id',$id)->where('newsStatus',1)->join('users', 'users.id', '=', 'news.user_id')->join('news_types', 'news_types.id', '=', 'news.newsCategory')->select('news.*','users.name', 'news_types.type')->get(),
            'category'  => NewsType::with('subType')->where('p_id', 0)->get(),
        );
        return view('user.news')->with($data);
    }
}
