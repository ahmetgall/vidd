<?php
class Base {
	
// выборка из базы при выводе на главной
public function getVideo($begin,$kol){
	$arra[0]=$begin;
	$arra[1]=$kol;
	
	
$result = DB::select('select id_video,naim,user,url from aaa_video   where opub=1 order by id_video desc LIMIT ?, ?',$arra);

//Преобразовываем в массив	
	$i=0;
	foreach($result as $res){
	$mass[$i]=(array)$res;	
	$i++;
	}

	return $mass;
	
}	
// подсчет видео при выводе на главной	
public function countVideo(){
	
	$result = DB::select('select count(*) as cc from aaa_video where opub=1');
	$aa= (array)$result[0];
	


	return $aa['cc'];
	
}	

// добавление видео
public function insVideo($user,$naim,$url){
	$mas[0]=strip_tags($user);
	$mas[1]=strip_tags($naim);
	$mas[2]=strip_tags($url,'<iframe>');
	$result = DB::insert('insert into aaa_video (user,naim,url) values (?, ?,? )',$mas);
	
	return $result;
}

// выборка видео при модерации
public function getVideo_mod($begin,$kol){
	$arra[0]=$begin;
	$arra[1]=$kol;
	
	
$result = DB::select('select id_video,naim,user,url from aaa_video   where opub=0 order by id_video desc LIMIT ?, ?',$arra);

//Преобразовываем в массив	
	$i=0;
	
	foreach($result as $res){
	$mass[$i]=(array)$res;	
	$i++;
	}
if(isset($mass))
	return $mass;
	
}	

// подсчет видео при модерации
public function countVideo_mod(){
	
	$result = DB::select('select count(*) as cc from aaa_video where opub=0');
	$aa= (array)$result[0];
	


	return $aa['cc'];
	
}


// публикация		
public function opub($id=0){
	$mas[0]=$id;
	
	$result = DB::update('update aaa_video set opub=1 where id_video=?',$mas);
	
	return $result;	
	
	
}

// удаление
public function del($id=0){
	$mas[0]=$id;
	
	$result=DB::delete('delete from aaa_video where id_video=?',$mas);
	return $result;	
	
}

// выборка при редактировании
public function getVideo1($id){
$arra[0]=$id;
	
	
$result = DB::select('select id_video,naim,user,url from aaa_video   where id_video=?',$arra);

//Преобразовываем в массив	
	$i=0;
	foreach($result as $res){
	$mass[$i]=(array)$res;	
	$i++;
	}

	return $mass;
	}
	
	public function upVideo($user,$naim,$url,$id){
	$mas[0]=$user;
	$mas[1]=$naim;
	$mas[2]=$url;
	$mas[3]=$id;
	
	
	
	$result = DB::update('update aaa_video set user=?,naim=?,url=? where id_video=?',$mas);
	
	return $result;	
	
	
}
	
	
}

?>