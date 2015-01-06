<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $users = User::all();
		
		// foreach ($users as $user) {
		// 	echo $user->warbands;
		// }
		
		// $user = User::find(1);
		// foreach ($user->warbands as $warband) {
		// 	echo $warband->name;
		// }
		
		// $warbands = Warband::all();

		// foreach($warbands as $warband)
		// {
		// 	echo $warband->user->name;
		// }
		
		//$users = User::all();
		
		//Get all users
		$users = DB::table('users')->leftJoin('warband', 'users.id', '=', 'warband.user_id')->get();

		return Response::json(
			array(
				'status' => 'success',
				'users' => $users
				), 200
			);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $name
	 * @return Response
	 */
	public function show($name)
	{
		//Gwt user by name
		$user = DB::table('users')->join('warband', 'users.id', '=', 'warband.user_id')->where('username', '=', $name)->get();

		//Check if user exist and has a warband, else get user without warband.
		if(!$user)
		{
			$user = User::where('username', '=', $name);
			
			//check if user exist in database, if not 404 error
			if($user->first() == null)
			{
				return Response::json(array('status' => 'error'), 404);
			}

			return Response::json(array('status' => 'success', 'user' => $user->first()), 200);
		}
		else
		{
			return Response::json(array('status' => 'success', 'user' => $user), 200);	
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
