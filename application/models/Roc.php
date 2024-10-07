<?php

class roc
{

  function __construct($Prio)
  {
    $this->prio = $Prio;
    //print_r($this->prio);
    $this->set_bobot();
  }

  public function set_bobot()
  {
    $Prio = $this->prio;

    $bobot = [];
    $p = 0;
    for ($i = 1; $i <= 7; $i++) {
      $temp = 0;
      for ($j = $Prio[$p]; $j <= 7; $j++) {
        $temp += 1 / $j;
      }
      $p++; //index maju 
      $temp = $temp / 7;
      $bobot[] = $temp;
    }
    $this->bobot_pri = $bobot;
  }
}
