<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');
        $botman->hears('{message}', function($botman,$message){
        	if($message == 'rape agencies' || 'Rape agencies'){
        		$this->getAgency($botman);
        	}
        });
        /*
        $botman->hears('rape agencies',function($botman,$message){
        	//if($message == 'rape agencies'){
        	//	$this->getDetails($botman);
        	//}
        	$this->say('you can get it at google.com');
        });*/
        $botman->listen();
    }
   /* 
    public function details(){
    	$botman = app('botman');
    	$botman->hears('{message}',function($botman,$message){
    		if($message == 'details'){
    			$this->getDetails($botman);
    		}
    		else{
    			$botman->reply('Sorry, I only understand "Details" at this point');
    		}
    	});
    	$botman->listen();
    }*/
    public function tinker()
    {
        return view('tinker');
    }

    //public function startConversation(BotMan $bot)
    //{
    //    $bot->startConversation(new OnboardingConversation());
    //}
    public function getAgency($botman)
    {
    	$agencies = [
    		'SERP'=>'+2348095967000',
    		'WARIF'=>'+2348092100009'
    	];
        $botman->ask('send "rape agencies" to get list of all available agencies', function(Answer $answer) {
            $this->say('SERP:+2348095967000  WARIF:+2348092100009');

           	//$this->say('Hope that was helpful');
        });
    }
    /*
    public function getDetails($botman){
    	$botman->ask('How can I help you',function(Answer $answer){
    		$this->say('you can get the details at google.com');
    	});
    }
    */

}
