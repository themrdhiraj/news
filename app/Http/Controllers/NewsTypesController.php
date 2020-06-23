<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsType;

class NewsTypesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = NewsType::orderBy('type','asc')->with('subType')->where('p_id', 0)->paginate(5);
        return view('admin.newsType.allNewsType')->with('types', $types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = NewsType::all()->where('p_id', '0');
        return view('admin.newsType.addNewsType')->with('types', $types);
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
            'type' => 'required',
        ]);

        $type = new NewsType;
        $type->type = $request->input('type');
        if ($request->input('p_id')) {
            $type->p_id = $request->input('p_id');
        }
        $type->user_id = auth()->user()->id;

        $success = $type->save();


        if ($success) {
            return redirect('/types')->with('success', 'Category added.');
        }else{
            return redirect('/types')->with('error', 'Category not added.');
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
        $data = array(
            'types' => NewsType::where('p_id', $id)->paginate(5),
            'cat' => NewsType::find($id)
        );
        return view('admin.newsType.selectedNewsType')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = NewsType::find($id);

        $success = $type->delete();

        if ($success) {
            return redirect('/types')->with('success', 'Category '.$type->type.' Deleted!!!');
        }else{
            return redirect('/types')->with('error', 'Category not Deleted!!!');
        }

    }
}
