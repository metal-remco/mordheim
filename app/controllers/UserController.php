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
		$warbands = DB::table('users')->join('warband', 'users.id', '=', 'warband.user_id')->get();


		return Response::json(
			array(
				'users' => $warbands
				)
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
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
