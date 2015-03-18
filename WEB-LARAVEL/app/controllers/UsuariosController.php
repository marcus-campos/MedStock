<?php 

class UsuariosController extends BaseController {

	protected $usuario;

	public function __construct(User $usuario)
    {
        parent::__construct();
        $this->usuario = $usuario;
    }

	public function login()
	{
		return View::make('login_v2');
	}


	public function validate()
    {
        // User::create(['username' => 'admin', 'password' => Hash::make('admin')]);
    	$credentials = array(
    		'username' => Input::get('username'),
    		'password' => Input::get('password')
    	);

    	if(Auth::attempt($credentials)) {

    		if (Auth::user()->status == 0) {
    			Auth::logout();

    			return Redirect::to('login')
    				->with('flash_error', Util::message('LOGIN_MSG001'));
    		}

    		return Redirect::to('welcome')
    				->with('info', Util::message('LOGIN_MSG002'));
    	}
        else
        {

    	   return Redirect::to('login')
    				->with('flash_error', print_r(Input::get('password')). " - ".  Util::message('LOGIN_MSG003'))
    				->withInput();
            
        }
    }	

	public function welcome()
	{
		return View::make('index');
	}

	public function logout()
	{
		return Redirect::to('login')
						->with('flash_notice', Util::message('LOGIN_MSG004'));
						
	}
}