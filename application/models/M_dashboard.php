<?php

include 'Roc.php';
include 'Roc_user.php';
include 'SMARTER.php';

class M_dashboard extends CI_Model
{

  public function setdata()
  {

    return $this->db->get('whey')->result_array();
  }
  public function set()
  {

    return $this->db->get('wheytest')->result_array();
  }


  public function set_priority()
  {
    $tamp = [];
    for ($i = 0; $i < 7; $i++) {
      if ($i == 0) {
        $tamp[] = $_POST['harga'];
      } elseif ($i == 1) {
        $tamp[] = $_POST['protein'];
      } elseif ($i == 2) {
        $tamp[] = $_POST['kalori'];
      } elseif ($i == 3) {
        $tamp[] = $_POST['gula'];
      } elseif ($i == 4) {
        $tamp[] = $_POST['kolestrol'];
      } elseif ($i == 5) {
        $tamp[] = $_POST['sodium'];
      } else {
        $tamp[] = $_POST['karbo'];
      }
    }
    return $tamp;
  }

  public function set_user()
  {
    $tamprange = [];
    for ($i = 0; $i < 7; $i++) {
      if ($i == 0) {
        $tamprange[] = trim($_POST['Rangeharga'], "A");
      } elseif ($i == 1) {
        $tamprange[] = trim($_POST['Rangeprotein'], "B");
      } elseif ($i == 2) {
        $tamprange[] = trim($_POST['Rangekalori'], "C");
      } elseif ($i == 3) {
        $tamprange[] = trim($_POST['Rangegula'], "D");
      } elseif ($i == 4) {
        $tamprange[] = trim($_POST['Rangekolestrol'], "E");
      } elseif ($i == 5) {
        $tamprange[] = trim($_POST['Rangesodium'], "F");
      } else {
        $tamprange[] = trim($_POST['Rangekarbo'], "G");
      }
    }
    return $tamprange;
  }

  public function set_bobot($Prio)
  {
    $bobott = new roc($Prio);
    return $bobott->bobot_pri;
  }

  public function bobot_sub_kriteria($t)
  {
    $bobott = new roc_user($t);
    return $bobott->bobot_sub;
  }


  public function sub_kriteria($Data, $bobot_sub_kriteria1)
  {
    $norm = new smarter($Data, $bobot_sub_kriteria1, 1, 1, 1, 0);
    return $norm->normalisasi;
  }

  public function max($Subkriteria) // meriksa baris to kolom
  {
    $mox = [];
    for ($i = 1; $i < count($Subkriteria[0]); $i++) {
      $tempx = [];
      for ($j = 0; $j < count($Subkriteria); $j++) {
        $tempx[] = $Subkriteria[$j][$i];
      }
      $mox[] = max($tempx);
    }
    return $mox;
  }

  public function min($Subkriteria)
  {
    $mix = [];
    for ($i = 1; $i < count($Subkriteria[0]); $i++) {
      $tempx = [];
      for ($j = 0; $j < count($Subkriteria); $j++) {
        $tempx[] = $Subkriteria[$j][$i];
      }
      $mix[] = min($tempx);
    }
    return $mix;
  }

  public function utility($Subkriteria, $max, $min, $bobot)
  {
    //print_r($max);
    $norm = new smarter($Subkriteria, 1, $max, $min, $bobot, 1);
    return $norm->utl;
  }

  public function utility_user($max, $min, $bobot, $SUser, $bobot_sub_kriteria1)
  {


    $norm = new smarter($SUser, $bobot_sub_kriteria1, $max, $min, $bobot, 2);
    return $norm->utl_usr;
  }

  //nampung total
  public function set_nilai($Data)
  {
    $y = [];
    for ($i = 0; $i < count($Data); $i++) {
      $temp = 0;
      for ($j = 1; $j < count($Data[0]); $j++) {
        $temp += $Data[$i][$j];
      }
      $y[] = $temp;
    }
    return $y;
  }
  // nilai dibawah pilihan user

  public function check_range($db, $U)
  {
    $temp = [];
    for ($i = 0; $i < count($db); $i++) {
      if ($db[$i] < $U) {
        $temp[] = $db[$i];
      }
    }
    return $temp;
  }

  public function sorting($po, $q)
  {
    if (count($po) <= 3) {
      $temp = [];
      for ($j = count($po) - 1; $j >= 0; $j--) {
        for ($i = 0; $i < count($q); $i++) {
          if ($q[$i] == $po[$j]) {
            $temp[] = $i;
          }
        }
      }
      return $temp;
    } else {
      $temp = [];
      for ($j = count($po) - 1; $j >= count($po) - 3; $j--) {
        for ($i = 0; $i < count($q); $i++) {

          if ($q[$i] == $po[$j] && count($temp) == 0) {
            $temp[] = $i;
          } elseif ($q[$i] == $po[$j] && !in_array($i, $temp)) { // biar data tidak duplikat
            $temp[] = $i;
          }
        }
      }
      return $temp;
    }
  }
}
