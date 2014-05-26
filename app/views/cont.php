<div class="container">
     
		 
<?
$i=1;
foreach($zaza as $aa){

	if($i==1)
	{
	echo "
	<div class='row'>\n
	<div class='col-xs-6'>\n	
	  	 ";
	}
	
	if($i==2)
	{
	echo "<div class='col-xs-6'>\n";
		
	}
	

echo $aa['url'];

echo "<p>".$aa['naim']."</p>";
echo "\n</div col>\n";

	if($i==2)
	{
	echo "\n</div row><hr>\n";
	
	}



$i++;

if($i>2)$i=1;

	
}

if($i==2)
	{
	echo "\n</div row><hr>\n";
	
	}


?>	

<div class='row'>
	<div class='col-xs-12'>	

<? echo $paga;?>
	 
</div>
</div>
 </div>

 
 
 
 