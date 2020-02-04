<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Professional;

class PublicController extends Controller
{
    public function index() {
        return view('welcome');
    }
	
	public function permission() {
		return view('admin/permission');
	}
	
	public function page($id) {
		$pages = Page::findOrFail($id);
		return view('page', compact('pages'));
	}
	
	public function professionals() {
		//$pages = Page::findOrFail($id);
		$pros = Professional::sortable()->orderBy('lname', 'asc')->paginate(25);
		//return view('pros', compact('pros'))->with('pages', compact('pages'));
		return view('pros', compact('pros'));
	}
	
		public function professionalsUSA() {
		//$pages = Page::findOrFail($id);
		$pros = Professional::where('country', '=', 'USA')->sortable()->orderBy('lname', 'asc')->paginate(25);
		return view('pros', compact('pros'));
		}
		
		public function professionalsWorld() {
		$pros = Professional::where('country', '<>', 'USA')->sortable()->orderBy('lname', 'asc')->paginate(25);
		return view('pros', compact('pros'));
	}
}
