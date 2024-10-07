<?php
class KNN
{
  public function __construct($k)
  {
    $this->k = $k;
  }
  public function cosim($tfidf, $idx_testing, $r)
  {
    // DOC PERTAMA SEBAGAI TESTING
    $vektor_test = [];
    for ($i = 0; $i < count($tfidf); $i++) {
        $vektor_test[] = $tfidf[$i];
    }

    $result = [];

    for ($j = 0; $j < count($tfidf); $j++) {
         $index       = $idx_testing;
         $hasil_cosim = [];
         $result[$j]  = [];
        // JIKA YANG DILOOP BUKAN DATA TEST, MAKA LAKUKAN COSIM
        if ($j != $idx_testing && !in_array($j, $r)) {
          // echo "<pre>";
          // echo "COSIM: $index, $j\n";
          // echo "</pre>";


          $hasil_cosim[] = $this->do_cosim($tfidf[$index], $tfidf[$j]);
          $result[$j] = $hasil_cosim;  
          
          
        }
      }


    // 0 :
    //   INDEX TESTING 0
    //   COSIM: [
    //     INDEX DATA:
    //     NILAI: 
    //   ]
    return $result;
  }
  public function do_cosim($arr1, $arr2)
  {
    $n  = count($arr1);
    $ab = 0;
    $a  = 0;
    $b  = 0;
    // echo "<pre>";
    // print_r ($arr1);
    // print_r($arr2);
    // echo "</pre>";
    for ($i = 0; $i < $n; $i++) {
      $ab += $arr1[$i] * $arr2[$i];
      // echo "<pre>";
      // echo "ab: $arr1[$i]*$arr2[$i] = ".($arr1[$i]*$arr2[$i])."\n";
      // echo "</pre>";
      $a += pow($arr1[$i], 2);
      $b += pow($arr2[$i], 2);
    }
    // echo "<pre>";
    // echo "AB: $ab\n";
    // echo "A: $a\n";
    // echo "B: $b\n";
    // echo "sqrt a: ".sqrt($a)."\n";
    // echo "sqrt b: ".sqrt($b)."\n";
    // echo "sqrt: ".(sqrt($a)*sqrt($b))."\n";
    // echo "</pre>";
    return $ab / (sqrt($a) * sqrt($b));
  }

  //DAK USAH DIPAKEK
  public function eval_cosim($cosim, $idx_testing, $e)
  {

    
    $eval = [];
    $r = 0;
    //print_r($eval);
    
    // LOOP SETIAP DATA TESTING
    //print_r($cosim);
    for ($i=0; $i < count($cosim); $i++) { 
      if ($i != $idx_testing && !in_array($i, $e)) {
         if ($cosim[$i][0] > 0.3) {
        $eval[$r] = $i;
        $r++;
      }
      }
    }
    //echo "<pre>";
    //print_r($eval);
    //echo "</pre>";
    //print_r($eval);
    //echo $eval[0];
    //print_r($eval);
    return $eval;
  }
}
