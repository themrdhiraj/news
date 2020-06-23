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
    		'news' 		=> News::where('newsStatus', 1)->select('newsTitle')->get(),
    		'category' 	=> NewsType::with('subType')->where('p_id', 0)->get()
    	);
    	return view('user.index')->with($data);
    }

    public function category()
    {
        $data = array(
            'news' => News::where('newsStatus', 1)->join('users', 'users.id', '=', 'news.user_id')->select('news.newsTitle', 'users.name')->get(),
            'category'  => NewsType::with('subType')->where('p_id', 0)->get()
        );
        return view('user.category')->with($data);
    }
}
