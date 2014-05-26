
<div class="container">
     
		 
<?


$i=1;
foreach($zaza as $aa){?>
	
	
	<div class='row'>
	<div class='col-xs-6'>	
	  	
<?	
echo "<p>Пользователь: <b> ".$aa['user']."</b></p>";
echo "<p>Название: <b>".$aa['naim']."</b></p>";

echo $aa['url'];




?>
<hr>
</div col>
<div class='col-xs-6'>
<br><br><br>

<a href="/pub?id=<?echo $aa['id_video'];?>" class="btn btn-large btn-primary">Опубликовать</a>
<br><br>
<a href="/del?id=<?echo $aa['id_video'];?>" class="btn btn-large btn-primary"> &nbsp&nbsp&nbsp&nbsp&nbspУдалить&nbsp&nbsp&nbsp&nbsp&nbsp </a>
</div col>
</div row>

	
<?}?>





<div class='row'>
	<div class='col-xs-12'>	

<? echo $paga;?>
	 
</div>
</div>


 </div>

 
 
 
 
