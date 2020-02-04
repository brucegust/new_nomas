<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional;
use App\Http\Requests\UpdateProfessionalRequest;
use Illuminate\Support\Facades\DB;
use View;
use Redirect;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	 public function __construct() {
        $this->middleware('checkRole: admin');
    }
	
	
    public function index()
    {
        //
		$pros = Professional::sortable()->orderBy('lname', 'asc')->paginate(25);
		return view('admin/listProfessionals', compact('pros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('admin.insertProfessional');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateProfessionalRequest $request)
    {
        //
		$validated = $request->validated();
		$pro = new Professional;
		if($request->input('license')=='yes') {
			$pro->license=1;
		}
		else {
			$pro->license=0;
		}
		$pro->cert_year=$validated['cert_year'];
		$pro->cert_num=$validated['cert_num'];
		$pro->lname=$validated['lname'];
		$pro->fname=$validated['fname'];
		$pro->addr1=$request->input('addr1');
		$pro->addr2=$request->input('addr2');
		$pro->city=$request->input('city');
		$pro->region_state=$request->input('region_state');
		$pro->country=$request->input('country');
		$pro->postal=$request->input('postal');
		$pro->discipline=$request->input('discipline');
		$pro->phone=$request->input('phone');
		$success='Professional was successfully created!';
		
		if($pro->save()) {
			return View::make('/admin/displayProfessional')
			->with('pro', $pro)
			->with('newProfessional', 'Here\'s the professional you just created!');
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
		$pro = Professional::findOrFail($id);
		return view('admin/showProfessional', compact('pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfessionalRequest $request)
    {
        //
		$validated = $request->validated();
		$pro=Professional::findOrFail($request->the_id);
		if($request->input('license')=='yes') {
			$pro->license=1;
		}
		else {
			$pro->license=0;
		}
		$pro->cert_year=$validated['cert_year'];
		$pro->cert_num=$validated['cert_num'];
		$pro->lname=$validated['lname'];
		$pro->fname=$validated['fname'];
		$pro->addr1=$request->input('addr1');
		$pro->addr2=$request->input('addr2');
		$pro->city=$request->input('city');
		$pro->region_state=$request->input('region_state');
		$pro->country=$request->input('country');
		$pro->postal=$request->input('postal');
		$pro->discipline=$request->input('discipline');
		$pro->phone=$request->input('phone');
		$success='Page was successfully created!';
		
		if($pro->save()) {
			return View::make('/admin/displayProfessional')
			->with('pro', $pro)
			->with('newProfessional', 'Here\'s the professional you just edited!');
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
		$pro=Professional::findOrFail($id);
		if($pro->delete()) {
			return back();
		}
    }
}
