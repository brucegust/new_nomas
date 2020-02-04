<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;
use View;
use Redirect;

class UserController extends Controller
{
	
	  public function __construct() {
        $this->middleware('checkRole: admin');
    }
	
    public function index()
    {
        $users = User::all();
		return view('admin/listUsers', compact('users'));
    }

   public function insertUser() {
        return view('admin.insertUser');
    }

   public function store(CreateUserRequest $request)
    {
		$validated = $request->validated();
		$user = new User;
		if($request->input('admin_yes')=="Y") {
			$user->admin=1;
		}
		else {
			$user->admin=0;
		}
		$user->user_id = $request->input('user_id');
		$user->name=$request->input('name');
		$user->email=$request->input('email');
		if(isset($validate['password'])) 
		{
			$user->password = Hash::make($validated['password']);
			$password_presence=1;
		}
		$success='User was successfully created!';
		
		if($user->save()) {
			return View::make('/admin/displayUser')
			->with('user', $user)
			->with('newUser', 'Here\'s the user you just entered!')
			->with('adminPermissions', 'yes');
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
        $user=User::findOrFail($id);
		return view('/admin/showUser', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(UpdateUserRequest $request)
    {
	   $validated = $request->validated();
       $user=User::findOrFail($request->the_id);
	   if($request->input('admin_yes')=="Y") {
			$user->admin=1;
		}
		else {
			$user->admin=0;
		}
		if($request->input('update_pass')==1) { // we're updating the password
			$user->name=$request->input('name');
			$user->email=$request->input('email');
			$user->user_id=$request->input('user_id');
			$user->password = Hash::make($validated['password']);
			//$user->password=$validated['password'];
			$success='User was successfully updated!';
		}
		else {
			$user->name=$request->input('name');
			$user->email=$request->input('email');
			$user->user_id=$request->input('user_id');
			$success='User was successfully updated!';			
		}
		
		if($user->save()) {
			if($request->input('update_pass')==1) {
				return View::make('/admin/displayUser')
				->with('user', $user)
				->with('newUser', 'Here\'s the user you just edited.')
				->with('passwordChanged', 'yes');		
			}
			else {
				return View::make('/admin/displayUser')
				->with('user', $user)
				->with('newUser', 'Here\'s the user you just edited!');	
			}
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
		$user=User::findOrFail($id);
		if($user->delete()) {
			return back();
		}
    }
}
