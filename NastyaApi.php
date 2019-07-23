<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 23.07.2019
 * Time: 19:19
 */

class NastyaApi
{
public $token;
public $tokens;
public $action;
public  function __construct($token,$action)
   {
       $this->tokens = ['dimon','Nastya','roma','danil','slava'];
      $this->token=$token;
      $this->action=$action;
   }
   public function  check_token(){

        return in_array($this->token,$this->tokens);

   }
   public  function returnResponse(){
    switch ($this->action){
        case 'getCars':
            return  $this->actionGetCars();
            break;
        case 'getCountries':
            return  $this->actionGetCountries();
            break;
        case 'getPlayers':
            return  $this->actionGetPlayers();
            break;
        case 'getDrags':
            return  $this->actionGetDrags();
            break;
    }
   }

     function actionGetCars()
   {
       return ['1'=>'GAZ 21','2'=>'Lada Sedan','3'=>'Toyota Camry'];
   }

      function actionGetPlayers()
{
        return ['1'=>'Pit Sumras','2'=>'Rafael Nadal','3'=>'Roger Federer'];
    }
      function actionGetCountries()
{
    return ['1'=>'Ukraine','2'=>'Sweden','3'=>'USA'];
}

      function actionGetDrags()
{
    return ['1'=>'Cannabis','2'=>'Cocoin','3'=>'Kreck'];
}


}