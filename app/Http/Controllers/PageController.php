<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Http\Requests\UpdatePageRequest;
use App\Http\Requests\CreatePageRequest;
//use App\Http\Resources\Page as PageResource; //for Vue.js display
use View;
use Redirect;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	 public function __construct() {
        $this->middleware('checkRole: admin');
    }
	
	public function insertPage() {
        return view('admin.insertPage');
    }
		
	public function index()
    {
        //get pages
		$pages = Page::all();
		//return view('admin/listPages', ['pages'=>$pages]);
		return view('admin/listPages', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePageRequest $request)
    {
	
		//$page = $request->isMethod('PUT') ? Page::findOrFail($request->page_id) : new Page; //ternary IF statement determining whether or not this is a new Page or not
		$page = new Page;
		$page->id = $request->input('page_id');
		$page->title=$request->input('title');
		$page->body=$request->input('body');
		$page->userId=$request->input('user_id');
		$success='Page was successfully created!';
		
		if($page->save()) {
			return View::make('/admin/displayPage')
			->with('page', $page)
			->with('newPage', 'Here\'s the page you just entered!');
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
		$page=Page::findOrFail($id);
		return view('/admin/showPage', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request)
    {
        //
		$page=Page::findOrFail($request->page_id);
		$page->title=$request->input('title');
		$page->body=$request->input('body');
		$page->userId=$request->input('user_id');
		$success='Page was successfully created!';
		
		if($page->save()) {
			return View::make('/admin/displayPage')
			->with('page', $page)
			->with('newPage', 'Here\'s the page you just edited!');
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
        //
		$page=Page::findOrFail($id);
			if($page->delete()) {
				return back();
			}
    }
}
