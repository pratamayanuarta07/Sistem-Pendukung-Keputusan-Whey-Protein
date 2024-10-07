<?php
class Tfidf
{
  public function __construct($praProses)
  {
    $this->data = $praProses;
    $this->doTerm();
    $this->doTf();
  }
  public function doTerm()
  {
    // INIT VARIABLE
    $data = $this->data;
    // CARI TERM UNIK
    $unik = [];
    // LOOP DATA (KALIMAT)
    for ($i = 0; $i < count($data); $i++) {
      // LOOP KATA DALAM KALIMAT
      for ($j = 0; $j < count($data[$i]); $j++) {
        $kata = $data[$i][$j];
        // JIKA KATA TIDAK ADA DI ARRAY UNIK, TAMBAHKAN
        if (!in_array($kata, $unik)) {
          $unik[] = $kata;
        }
      }
    }
    sort($unik);
    $this->term = $unik;
    //echo '<pre>';
    //print_r($unik);
    //echo '</pre>';
  }
  public function doTf()
  {
    // INIT VARIABLE
    $n_doc  = count($this->data);
    $n_term = count($this->term);
    $doc    = $this->data;
    $term   = $this->term;
    $tf     = [];

    // INIT TF
    for ($i = 0; $i < $n_doc; $i++) {
      $tf[$i] = [];
      for ($j = 0; $j < $n_term; $j++) {
        $tf[$i][$j] = 0;
      }
    }
    // HITUNG TF
    for ($i = 0; $i < $n_doc; $i++) {
      for ($j = 0; $j < $n_term; $j++) {
        if (in_array($term[$j], $doc[$i])) {
          $tf[$i][$j]++;
        }
      }
    }
    $this->tf = $tf;
  }
  public function doDf()
  {
    $tf = $this->tf;
    $df = [];
    for ($i = 0; $i < count($tf); $i++) {
      $df[$i] = array_sum($tf[$i]);
    }
    $this->df = $df;
  }
  public function doIdf()
  {
    $n_doc = count($this->data);
    $df    = $this->df;
    $idf   = [];
    for ($i = 0; $i < count($df); $i++) {
      $idf[$i] = log10($n_doc / $df[$i]);
      // echo "<pre>";
      // echo "TERM: ".$this->term[$i]."\n";
      // echo "DF: ".$this->df[$i]."\n";
      // echo "IDF: ".$idf[$i]."\n";
      // echo "</pre>";
    }
    $this->idf = $idf;
  }
  public function doWeight()
  {
    $tf = $this->tf;
    $idf = $this->idf;
    $n_term = count($tf);
    $n_doc = count($tf[0]);
    $weight = [];
    for ($i = 0; $i < $n_doc; $i++) {
      for ($j = 0; $j < $n_term; $j++) {
        $weight[$i][$j] = $tf[$j][$i] * $idf[$j];
      }
    }
    // for ($i = 0; $i < $n_term; $i++) {
    //   for ($j = 0; $j < $n_doc; $j++) {
    //     $weight[$i][$j] = $tf[$i][$j] * $idf[$i];
    //   }
    // }
    $this->weight = $weight;
  }
}
