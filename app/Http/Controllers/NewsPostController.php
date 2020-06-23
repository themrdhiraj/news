<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\NewsType;
use App\News;
use App\User;

class NewsPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = News::join('users', 'users.id', '=', 'news.user_id')->orderBy('news.id', 'desc')->select('news.*', 'users.name')->paginate(10);
        return view('newsPost.allNewsPost')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'category' => NewsType::with('subType')->where('p_id', 0)->get(),
        );
        return view('newsPost.addNewsPost')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'newsTitle'     => 'required',
            'newsContent'   => 'required',
            'newsCategory'  => 'required',
            'newsStatus'  => 'required',
            'newsImage'     => 'nullable|max:1999'
        ]);

        //handle file upload
        if ($request->hasFile('newsImage')) {

            //get file name with the extension
            $fileNameWithExt = $request->file('newsImage')->getClientOriginalName();

            //get just file name
            //$filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get just ext
            $extension = $request->file('newsImage')->getClientOriginalExtension();

            //file name to store

            $fileNameToStore = $request->newsTitle.date('Ymdhi').'.'.$extension;

            //upload image
            $path = $request->file('newsImage')->storeAs('public/newsImages', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        // create posts
        $post = new News;
        $post->newsTitle = $request->input('newsTitle');
        $post->newsCategory = $request->input('newsCategory');
        $post->newsContent = $request->input('newsContent');
        $post->newsImage = $fileNameToStore;
        $post->newsStatus = $request->input('newsStatus');
        $post->user_id = auth()->user()->id;

        $success = $post->save();

        if ($success) {
            return redirect('/posts')->with('success', 'News added successfully!');
        }else{
            return redirect('/posts')->with('error', 'There was a problem while adding news!');
        }
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
        $data = array(
            'post'      => $post = News::find($id),
            'category'  => NewsType::with('subType')->where('p_id', 0)->get()
        );
        return view('newsPost.editNewsPost')->with($data);
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
       $this->validate($request,[
            'newsTitle'     => 'required',
            'newsContent'   => 'required',
            'newsCategory'  => 'required',
            'newsStatus'  => 'required',
            'newsImage'     => 'nullable|max:1999'
        ]);

        //handle file upload
        if ($request->hasFile('newsImage')) {

            //get file name with the extension
            $fileNameWithExt = $request->file('newsImage')->getClientOriginalName();

            //get just ext
            $extension = $request->file('newsImage')->getClientOriginalExtension();

            //file name to store

            $fileNameToStore = $request->newsTitle.date('Ymdhi').'.'.$extension;

            //upload image
            $path = $request->file('newsImage')->storeAs('public/newsImages', $fileNameToStore);
        }

        // create posts
        $post = News::find($id);
        $post->newsTitle = $request->input('newsTitle');
        $post->newsContent = $request->input('newsContent');
        $post->newsCategory = $request->input('newsCategory');
        $post->newsStatus = $request->input('newsStatus');
        
         if ($request->hasFile('newsImage')) {
            Storage::delete('public/newsImages/' . $post->newsImage);
            $post->newsImage = $fileNameToStore;
        }

        $success = $post->save();

        if ($success) {
            return redirect('/posts')->with('success', 'News updated successfully!');
        }else{
            return redirect('/posts')->with('error', 'News not updated!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = News::find($id);

        if ($post->newsImage != 'noimage.jpg') {
            Storage::delete('public/newsImages/'.$post->newsImage);
        }

        $success = $post->delete();

        if ($success) {
            return redirect('/posts')->with('success', 'News "'.$post->newsTitle. '"" Deleted!!!');
        }else{
            return redirect('/posts')->with('error', 'News not Deleted!!!');
        }

    }
}
