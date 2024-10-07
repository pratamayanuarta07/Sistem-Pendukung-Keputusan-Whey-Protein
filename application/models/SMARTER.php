<?php

class smarter
{

  function __construct($TemM, $TemB, $max, $min, $bobot, $Data)
  {
    $this->TempM = $TemM;
    $this->TempB = $TemB;
    $this->mak = $max;
    $this->men = $min;
    $this->bob = $bobot;

    if ($Data == 0) {
      $this->SubK();
    } elseif ($Data == 2) {
      $this->utility_u();
    } else {
      $this->utility_t();
    }


    // print_r($this->e);
  }

  //normalisasi data
  public function SubK()
  {
    $Data = $this->TempM;
    $bobot_sub_kriteria1 = $this->TempB;
    for ($i = 0; $i < count($Data); $i++) { // jalani baris
      for ($j = 1; $j < count($Data[0]); $j++) { ///jalani kolom
        if ($j == 1) {
          if ($Data[$i][$j] >= 500000 && $Data[$i][$j] <= 900000) {
            $Data[$i][$j] = $bobot_sub_kriteria1[0];
          } elseif ($Data[$i][$j] > 900000 && $Data[$i][$j] <= 1500000) {
            $Data[$i][$j] = $bobot_sub_kriteria1[1];
          } else {
            $Data[$i][$j] = $bobot_sub_kriteria1[2];
          }
        } elseif ($j == 2) {
          if ($Data[$i][$j] >= 20 && $Data[$i][$j] <= 24) {
            $Data[$i][$j] = $bobot_sub_kriteria1[1];
          } elseif ($Data[$i][$j] >= 10 && $Data[$i][$j] <= 19) {
            $Data[$i][$j] = $bobot_sub_kriteria1[2];
          } else {
            $Data[$i][$j] = $bobot_sub_kriteria1[0];
          }
        } elseif ($j == 3) {
          if ($Data[$i][$j] >= 80 && $Data[$i][$j] <= 100) {
            $Data[$i][$j] = $bobot_sub_kriteria1[0];
          } elseif ($Data[$i][$j] >= 101 && $Data[$i][$j] <= 150) {
            $Data[$i][$j] = $bobot_sub_kriteria1[1];
          } else {
            $Data[$i][$j] = $bobot_sub_kriteria1[2];
          }
        } elseif ($j == 4) {
          if ($Data[$i][$j] >= 0 && $Data[$i][$j] <= 3) {
            $Data[$i][$j] = $bobot_sub_kriteria1[0];
          } elseif ($Data[$i][$j] >= 4 && $Data[$i][$j] <= 5) {
            $Data[$i][$j] = $bobot_sub_kriteria1[1];
          } else {
            $Data[$i][$j] = $bobot_sub_kriteria1[2];
          }
        } elseif ($j == 5) {
          if ($Data[$i][$j] >= 0 && $Data[$i][$j] <= 15) {
            $Data[$i][$j] = $bobot_sub_kriteria1[0];
          } elseif ($Data[$i][$j] >= 16 && $Data[$i][$j] <= 50) {
            $Data[$i][$j] = $bobot_sub_kriteria1[1];
          } else {
            $Data[$i][$j] = $bobot_sub_kriteria1[2];
          }
        } elseif ($j == 6) {
          if ($Data[$i][$j] >= 0 && $Data[$i][$j] <= 100) {
            $Data[$i][$j] = $bobot_sub_kriteria1[0];
          } elseif ($Data[$i][$j] >= 101 && $Data[$i][$j] <= 150) {
            $Data[$i][$j] = $bobot_sub_kriteria1[1];
          } else {
            $Data[$i][$j] = $bobot_sub_kriteria1[2];
          }
        } elseif ($j == 7) {
          if ($Data[$i][$j] >= 4 && $Data[$i][$j] <= 5) {
            $Data[$i][$j] = $bobot_sub_kriteria1[1];
          } elseif ($Data[$i][$j] >= 1 && $Data[$i][$j] <= 3) {
            $Data[$i][$j] = $bobot_sub_kriteria1[2];
          } else {
            $Data[$i][$j] = $bobot_sub_kriteria1[0];
          }
        }
      }
    }

    $this->normalisasi = $Data;
  }

  public function utility_t()
  {
    $Data = $this->TempM;
    $max = $this->mak;
    $min = $this->men;
    $bobot = $this->bob;

    for ($i = 0; $i < count($Data); $i++) {
      for ($j = 1; $j < count($Data[0]); $j++) {
        $utility;
        if ($j == 1) {
          // $utility = ($$max[$j - 1] - $Data[$i][$j] ) / ($max[$j - 1] - $min[$j - 1]);
          $utility = ($Data[$i][$j] - $min[$j - 1]) / ($max[$j - 1] - $min[$j - 1]);
          $Data[$i][$j] = $utility * $bobot[0];
        } elseif ($j == 2) {
          $utility = ($Data[$i][$j] - $min[$j - 1]) / ($max[$j - 1] - $min[$j - 1]);
          $Data[$i][$j] = $utility * $bobot[1];
        } elseif ($j == 3) {
          $utility = ($Data[$i][$j] - $min[$j - 1]) / ($max[$j - 1] - $min[$j - 1]);
          $Data[$i][$j] = $utility * $bobot[2];
        } elseif ($j == 4) {
          $utility = ($Data[$i][$j] - $min[$j - 1]) / ($max[$j - 1] - $min[$j - 1]);
          $Data[$i][$j] = $utility * $bobot[3];
        } elseif ($j == 5) {
          $utility = ($Data[$i][$j] - $min[$j - 1]) / ($max[$j - 1] - $min[$j - 1]);
          $Data[$i][$j] = $utility * $bobot[4];
        } elseif ($j == 6) {
          $utility = ($Data[$i][$j] - $min[$j - 1]) / ($max[$j - 1] - $min[$j - 1]);
          $Data[$i][$j] = $utility * $bobot[5];
        } else {
          $utility = ($Data[$i][$j] - $min[$j - 1]) / ($max[$j - 1] - $min[$j - 1]);
          $Data[$i][$j] = $utility * $bobot[6];
        }
      }
    }
    $this->utl = $Data;
  }

  public function utility_u()
  {
    $InputU = $this->TempM; //jumlah kriteria 
    $max = $this->mak;
    $min = $this->men;
    $bobot = $this->bob;
    $bobot_sub_kriteria1 = $this->TempB;
    $tamp = [];
    for ($i = 0; $i < count($InputU); $i++) { //ROC user start dari 1 
      $utility;
      if ($i == 1) {
        // $utility = ($max[$i] - 1] - $bobot_sub_kriteria1[$InputU[$i]-1]) / ($max[$i] - $min[$i]);
        $utility = ($bobot_sub_kriteria1[$InputU[$i] - 1] - $min[$i]) / ($max[$i] - $min[$i]);
        $tamp[] = $utility * $bobot[$i];
      } elseif ($i == 2) {
        $utility = ($bobot_sub_kriteria1[$InputU[$i] - 1] - $min[$i]) / ($max[$i] - $min[$i]);
        $tamp[] = $utility * $bobot[$i];
      } elseif ($i == 3) {
        $utility = ($bobot_sub_kriteria1[$InputU[$i] - 1] - $min[$i]) / ($max[$i] - $min[$i]);
        $tamp[] = $utility * $bobot[$i];
      } elseif ($i == 4) {
        $utility = ($bobot_sub_kriteria1[$InputU[$i] - 1] - $min[$i]) / ($max[$i] - $min[$i]);
        $tamp[] = $utility * $bobot[$i];
      } elseif ($i == 5) {
        $utility = ($bobot_sub_kriteria1[$InputU[$i] - 1] - $min[$i]) / ($max[$i] - $min[$i]);
        $tamp[] = $utility * $bobot[$i];
      } elseif ($i == 6) {
        $utility = ($bobot_sub_kriteria1[$InputU[$i] - 1] - $min[$i]) / ($max[$i] - $min[$i]);
        $tamp[] = $utility * $bobot[$i];
      } else {
        $utility = ($bobot_sub_kriteria1[$InputU[$i] - 1] - $min[$i]) / ($max[$i] - $min[$i]);
        $tamp[] = $utility * $bobot[$i];
      }
    }
    $this->utl_usr = $tamp;
  }
}
