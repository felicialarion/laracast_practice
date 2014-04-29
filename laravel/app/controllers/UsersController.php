<?php 
class UsersController extends BaseController{

	public function index(){
		$users = array();
		//create new user using Eloquent
		// $user = new User();
		// $user->username = "User3";
		// $user->password = Hash::make('test123');
		// $user->save();

		//second way, only when $fillable is set
		//User::create(['username'=> 'UserTest1', 'password'=> Hash::make('test123')]);
		
		//update 
		// $user_to_update = User::find(5);
		// $user_to_update->username = 'UserTest2';
		// $user_to_update->save();

		//delete
		// $user = User::find(5);
		// $user->delete();

		
		$users = User::all();
		
		return $users;
		//return View::make('users.index')->with('users', $users);
	}
}