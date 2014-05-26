<!DOCTYPE html>
<html lang="ru">
<head>
<title>Sinema Film</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="/css/mcss.css" type="text/css" />

<script src="/js/jquery-1.11.1.js" type="text/javascript"></script>
<script src="/js/bootstrap.js" type="text/javascript"></script>

</head>

<body>
<div class="topp">
	
		
	
	
		 <div class="bgtop" >
<div class="bg">
		 
		<a href="/"><h1 class="titl">Sinema Film</h1></a>
</div>
		 </div>
		 
		
		
	
	<br><br>
</div topp>

<div class="mmenu">

<div class="container">	
	<div class="row">
		 <div class="col-xs-4">
<a href="/append" class="btn btn-large btn-primary">Добавить видео</a>		
		 </div>
		 <div class="col-xs-3">
		 </div>
		 <div class="col-xs-5">
		 
<?
if (Auth::check())
{?>
<a href="/mod?page=1" class="btn btn-large btn-primary">Модерация видео</a>
<a href="/edit?page=1" class="btn btn-large btn-primary">Редактирование</a>
<a href="/exit" class="btn btn-large btn-primary">Выход</a>



<?}
	else{
		
	
	?>

 
		 
	<form action="admin" method="post">
 
    
    <input name="login" type="text" placeholder="Логин"  maxlength="50" size="20">
    <input name="pass" type="password"  placeholder="Пароль" maxlength="50" size="20"> 
    
    <button type="submit" class="btn btn-large btn-primary" >Войти</button>
 
</form>
<?}?>

		 
		 
		 </div col>
		 
		 
		 
		
	</div row>
	
	
</div container>

</div mmenu>


<br><br>





