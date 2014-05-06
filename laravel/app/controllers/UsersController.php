<?php 
class UsersController extends BaseController{

	protected $user;

	public function __construct(User $user){
		$this->user = $user;
	}
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
		return View::make('users.index')->with('users', $users);
		}

		public function show($username){
			
			$user = User::whereUsername($username)->first();
			return View::make('users.show', array('user'=>$user));
		}

		public function create(){
			return View::make('users.create');
		}
		public function store(){
			// Input::all();
			//$validation = Validator::make(Input::all(), array('username'=>'required', 'password'=>'required'));
			// $validation = Validator::make(Input::all(), User::$rules);
			
			// if($validation->fails()){
			// 	return Redirect::back()->withInput()->withErrors($validation->messages());
			// }
			$input = Input::all();
			if(!$this->user->fill($input)->isValid() ){

				return Redirect::back()->withInput()->withErrors($this->user->errors);
			}
			$this->user->save();
			// $user = new User();
			// $user->username = Input::get('username');
			// $user->password = Hash::make(Input::get('password'));
			// $user->save();

			//return Redirect::to('users');
			return Redirect::route('users.index');

		}
	}