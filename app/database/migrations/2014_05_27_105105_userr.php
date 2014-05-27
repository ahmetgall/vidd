<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Userr extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//


Schema::table('users', function($table)
{
    $table->create();
    $table->increments('id');
    $table->string('username',100);
    $table->string('password',100);
    $table->string('remember_token',255)->nullable();
    $table->timestamps();
});


$pass = Hash::make('admin');

DB::table('users')->insert(
              array(
                                array('username' => 'admin',
'password'=>$pass)
                   )
                           );




		Schema::table('aaa_video', function($table)
{
    $table->create();
    $table->increments('id_video');
    $table->string('naim',250);
    $table->string('url',250);
    $table->string('user',255);
    $table->integer('opub');
});

$arr[0]['naim']='Edge of Tomorrow Trailer | TNT';
$arr[0]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/J9hQoft2AeU" frameborder="0" allowfullscreen></iframe>';
$arr[0]['user']='admin';
$arr[0]['opub']=1;


$arr[1]['naim']='You are what you share';
$arr[1]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/UyWwX_VzIBY" frameborder="0" allowfullscreen></iframe>';
$arr[1]['user']='admin';
$arr[1]['opub']=1;

$arr[2]['naim']='Subban and Thornton exchange words at bench';
$arr[2]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/IZiIwX3Ybm4" frameborder="0" allowfullscreen></iframe>';
$arr[2]['user']='admin';
$arr[2]['opub']=1;

$arr[3]['naim']='iPhone (MetroGnome Remix)11';
$arr[3]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/M3h00M9dcj4" frameborder="0" allowfullscreen></iframe>';
$arr[3]['user']='admin';
$arr[3]['opub']=1;

$arr[4]['naim']='Will Ferrell and Chad Smith Drum-Off';
$arr[4]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/0uBOtQOO70Y" frameborder="0" allowfullscreen></iframe>';
$arr[4]['user']='admin';
$arr[4]['opub']=1;

$arr[5]['naim']='Celebrities Read Mean Tweets #7';
$arr[5]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/imW392e6XR0" frameborder="0" allowfullscreen></iframe>';
$arr[5]['user']='admin';
$arr[5]['opub']=1;

$arr[6]['naim']='KEYBOARD CAT 96 TEARS';
$arr[6]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/LWOYM9R7QGE" frameborder="0" allowfullscreen></iframe>';
$arr[6]['user']='admin';
$arr[6]['opub']=1;

$arr[7]['naim']='DIY X-MEN MAGNETO walking upside down with magnetic shoes';
$arr[7]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/uRKHCRR9-C4" frameborder="0" allowfullscreen></iframe>';
$arr[7]['user']='admin';
$arr[7]['opub']=1;

$arr[8]['naim']='MAGIC IN THE MOONLIGHT (2014) Official HD Trailer';
$arr[8]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/LAwbwKURvm0" frameborder="0" allowfullscreen></iframe>';
$arr[8]['user']='admin';
$arr[8]['opub']=1;

$arr[9]['naim']='Canadiens vs. Rangers Game 3 Recap';
$arr[9]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/tPeWGstSaf8" frameborder="0" allowfullscreen></iframe>';
$arr[9]['user']='admin';
$arr[9]['opub']=1;

$arr[10]['naim']='NBA Flash Mob - The 2014 Playoffs Edition';
$arr[10]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/KWY3wt5UBXs" frameborder="0" allowfullscreen></iframe>';
$arr[10]['user']='admin';
$arr[10]['opub']=1;

$arr[11]['naim']='Landon Donovan Left Off US World Cup Roster';
$arr[11]['url']=$arr[0]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/btijfbFiBBI" frameborder="0" allowfullscreen></iframe>';
$arr[11]['user']='admin';
$arr[11]['opub']=1;

$arr[12]['naim']='Tara\'s First Pitch';
$arr[12]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/1B-tNICSMiQ" frameborder="0" allowfullscreen></iframe>';
$arr[12]['user']='admin';
$arr[12]['opub']=1;

$arr[13]['naim']='Nicki Minaj - Pills N Potions (Audio)';
$arr[13]['url']='<iframe width="560" height="315" src="//www.youtube.com/embed/_krlUcsyUV8" frameborder="0" allowfullscreen></iframe>';
$arr[13]['user']='admin';
$arr[13]['opub']=1;







DB::table('aaa_video')->insert($arr);




	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
