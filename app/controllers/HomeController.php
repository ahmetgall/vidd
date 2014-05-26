<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	public static $numPage=8;

	public function showWelcome()
	{
		return View::make('hello');
	}
	
	// Основной метод
		public function index()
	{

	$bas=new Base();
	$kol=HomeController::$numPage;
		
	$mass=$this->getVid(0,$kol);	

	
		
	//	print_r($mass);
		
		
		$arr['zaza']= $mass;
		
	
// Пагинатор
$totalItems=$bas->countVideo();
$perPage=HomeController::$numPage;		
$orders = Paginator::make($arr, $totalItems, $perPage);
$orders->setBaseUrl('/vid');
//echo $orders->links();
$arr['paga']=$orders->links();


		


	
		
		

		
		$view = View::make('main',$arr);
		
		
		$view=$view->nest('top','top',$arr);
		$view=$view->nest('cont','cont',$arr);		
	
		
	
		
		$view=$view->nest('foot','foot',$arr);
		

return $view;

	}
	
// Вывод видео	
	public function video(){
			$bas=new Base();
		
		$page = Input::get('page');
		
		
		$ot=HomeController::$numPage;
		$mass=$this->getVid($page*$ot-$ot,$ot);
		
		
	 
 $arr['zaza']= $mass;
		
	
// Пагинатор
$totalItems=$bas->countVideo();
$perPage=HomeController::$numPage;		
$orders = Paginator::make($arr, $totalItems, $perPage);
$orders->setBaseUrl('/vid');
//echo $orders->links();
$arr['paga']=$orders->links();


		


	
		
		

		
		$view = View::make('main',$arr);
		
		
		$view=$view->nest('top','top',$arr);
		$view=$view->nest('cont','cont',$arr);		
	
		
	
		
		$view=$view->nest('foot','foot',$arr);
		

return $view;
 

		
		
		
		
		
	}
	
	
// Запрос видео из базы для главной страницы	
	public function getVid($begin,$kol){
		
		
		$bas=new Base();
		
		$mass=$bas->getVideo($begin,$kol);
		
		return $mass;
	}
	
// Добавление видео	
	public function app(){
		
		$bas=new Base();
		
		if(isset($_POST['cancel'])) return Redirect::to('/');
		
		if(!isset($_POST['sub'])){
			
		$view = View::make('append');
		return $view;
		} else{
			
			$arr['user']=Input::get('user');  // получения запроса post
			 
			$arr['naim']=Input::get('naim');  // получения запроса post
			
			$arr['url']=Input::get('url');  // получения запроса post
			
			$arr2['user']='required';
			$arr2['naim']='required';
			$arr2['url']='required';
			
			
			
						
			$validator = Validator::make($arr,$arr2);
if ($validator->fails()) {
			
			return Redirect::to('append')->withInput()->withErrors($validator);
			}
			$dd=$bas->insVideo($arr['user'],$arr['naim'],$arr['url']);
		//	echo $dd;
		
		 $mes['zaza']= "Спасибо, Ваше видео будет добавлено после проверки модератором.";
		
			$view = View::make('ok',$mes);
			
			
			
			return $view;
		}
	}

// админка	
	public function admin(){
		$bas=new Base();
		
		$login=Input::get('login');
		$pass=Input::get('pass');
		

		
		$cr = array('username' => $login, 'password' => $pass);
		
		
		
	 if (Auth::attempt($cr,true))
    {
        return Redirect::to('/');
    }
	else
	{
	
	$mes['zaza']= "Неправильный логин или пароль";
		
			$view = View::make('ok',$mes);
			
			
			
			return $view;
		 
	}
		
				
	}

// выход из админки	
	public function exitt(){
		Auth::logout();
		return Redirect::to('/');
	}
	
	
// модерация видео	
	public function moder(){
		
		
		
			$bas=new Base();
		
	$page = Input::get('page');
	//$page=1;
		
		
		$ot=HomeController::$numPage;
		$begin=$page*$ot-$ot;
		$kol=$ot;
	
		$mass=$bas->getVideo_mod($begin,$kol);
		
		
		 $arr['zaza']= $mass;
		 $nol=count($arr['zaza']);
		 	// Пагинатор
$totalItems=$bas->countVideo_mod();
$perPage=HomeController::$numPage;		
$orders = Paginator::make($arr, $totalItems, $perPage);
$orders->setBaseUrl('/mod');
//echo $orders->links();

$arr['paga']=$orders->links();

	
		
	 

 
 
		
		$view = View::make('moder',$arr);
		
		
		$view=$view->nest('top','top',$arr);
		if($nol>0)
		$view=$view->nest('moder_cont','moder_cont',$arr);		
	
		
	
		
		$view=$view->nest('foot','foot',$arr);
		

return $view;
	}


// Публикация
	public function pubb(){
		if (Auth::check())
		{
			
		
	$id = (int)Input::get('id');	
$bas=new Base();
$bas->opub($id);	
		}
return Redirect::to('mod?page=1');		
	
		
	}
	
// Удаление видео при модерации
public function dell(){
		if (Auth::check())
		{
			
		
	$id = (int)Input::get('id');	
$bas=new Base();
$bas->del($id);	
		}
return Redirect::to('mod?page=1');		
	
		
	}

// Редактирование
public function editt(){
		
		
		
			$bas=new Base();
		
	$page = Input::get('page');
	//$page=1;
		
		
		$ot=HomeController::$numPage;
		$begin=$page*$ot-$ot;
		$kol=$ot;
	
		$mass=$bas->getVideo($begin,$kol);
		
		
		 $arr['zaza']= $mass;
		 $nol=count($arr['zaza']);
		 	// Пагинатор
$totalItems=$bas->countVideo();
$perPage=HomeController::$numPage;		
$orders = Paginator::make($arr, $totalItems, $perPage);
$orders->setBaseUrl('/edit');
//echo $orders->links();

$arr['paga']=$orders->links();

	
		
	 

 
 
		
		$view = View::make('edit',$arr);
		
		
		$view=$view->nest('top','top',$arr);
		if($nol>0)
		$view=$view->nest('edit_cont','edit_cont',$arr);		
	
		
	
		
		$view=$view->nest('foot','foot',$arr);
		

return $view;
	}

// удаление пи редактировании
public function dell2(){
		if (Auth::check())
		{
			
		
	$id = (int)Input::get('id');	
$bas=new Base();
$bas->del($id);	
		}
return Redirect::to('edit?page=1');		
	
		
	}
	
	
// изменить видео	
	public function edd(){
		
		$bas=new Base();
		
		if(isset($_POST['cancel'])) return Redirect::to('/edit?page=1');
		
		if(!isset($_POST['sub'])){
			
		$id=(int)Input::get('id');	
		$res['data']=$bas->getVideo1($id);	
		
		$view = View::make('ed',$res);
		return $view;
		} else{
			
			$arr['user']=Input::get('user');  // получения запроса post
			 
			$arr['naim']=Input::get('naim');  // получения запроса post
			
			$arr['url']=Input::get('url');  // получения запроса post
			$arr['id']=Input::get('id');  // получения запроса post
			
			
			$dd=$bas->upVideo($arr['user'],$arr['naim'],$arr['url'],$arr['id']);
		//	echo $dd;
		
		 $mes['zaza']= "Видео изменено.";
		
			$view = View::make('ok2',$mes);
			
			
			
			return $view;
		}
	}
	
	

}
	


