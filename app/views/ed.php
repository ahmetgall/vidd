<!DOCTYPE html>
<html lang="ru">
<head>
<title>Видео портал</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
<script src="/js/jquery-1.11.1.js" type="text/javascript"></script>
<script src="/js/bootstrap.js" type="text/javascript"></script>
</head>


<body>

<?
//$user=Input::old('user');
//$naim=Input::old('naim');
//$url=Input::old('url');


$user=$data[0]['user'];
$naim=$data[0]['naim'];
$url=$data[0]['url'];
$id=$data[0]['id_video'];


//$naim=Input::old('naim');
//$url=Input::old('url');


?>
<div class="container">
	<div class="row">
		 <div class="col-xs-12">
		<h1>Видео портал</h1>
		 </div>
		
	</div>
	<br><br>
<h2>Редактирование видео</h2>
	<form class="form-horizontal" action="ed" method="post">
	
	 <div class="control-group">
      <label class="control-label">Ваше имя</label>
    <div class="controls">
      <input type="text" name="user" maxlength="250" size="50" value='<?=$user?>'>
	   <?php echo $errors->first('user'); ?>
    </div>
  </div>
 
	
  <div class="control-group">
      <label class="control-label">Название видео</label>
    <div class="controls">
      <input type="text" name="naim" maxlength="250" size="150" value='<?=$naim?>'>
	   <?php echo $errors->first('naim'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">URL</label>
    <div class="controls">
	 <input type="text" name="url" maxlength="250" size="150" value='<?=$url?>'>
	 <?php echo $errors->first('url'); ?>
     <input type="hidden" name="id" maxlength="250" size="150" value='<?=$id?>'>
	 
    </div>
  </div>
  <br>
  <div class="control-group">
    <div class="controls">
      
      <button type="submit" name="sub" class="btn">Сохранить</button>
	  	<input type="submit" name='cancel' value='Отменить' class="btn"/>	

    </div>
  </div>
</form>

	
</div>