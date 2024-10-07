<?php
class KnnSMOTE
{
  public function __construct($data, $k, $i)
  {
    $this->data  = $data;
    $this->k     = $k;
    $this->index = $i;

    // HITUNG JARAK DATA-i KE SELURUH DATA SISANYA
    $this->hitungJarak();
    // AMBIL K INDEX DATA TERDEKAT
    $this->getIndex();
  }
  public function hitungJarak()
  {
    $data   = $this->data;
    $data_i = $data[$this->index];
    $jarak  = [];

    for ($i = 0; $i < count($data); $i++) {
      $jarak[$i] = $this->euclid($data[$i], $data_i);
    }
    $this->jarak = $jarak;
  }
  public function getIndex()
  {
    // INIT VARIABLE
    $jarak = $this->jarak;
    $count = 0;
    // URUTIN JARAK DARI KECIL KE BESAR
    asort($jarak);
    // AMBIL K-JARAK TERDEKAT
    $newJarak = [];
    foreach ($jarak as $key => $value) {
      if ($count > $this->k) {
        break;
      } else {
        $newJarak[] = $key;
        $count++;
      }
    }
    // HAPUS INDEX PERTAMA, KARENA PASTI 0
    array_shift($newJarak);
    $this->nnarray = $newJarak;
  }
  public function euclid($arr1, $arr2)
  {
    $sum = 0;
    for ($i = 0; $i < count($arr1); $i++) {
      $sum += pow($arr1[$i] - $arr2[$i], 2);
    }
    return sqrt($sum);
  }
}
