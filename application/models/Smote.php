<?php
class Smote
{
  // Input:
  // T = Number of minority class samples
  // N = Amount of SMOTE N%
  // k = Number of nearest neighbors k
  public function __construct($tfIdf, $indexSample, $T, $N, $k)
  {
    // GENERATE ARRAY SAMPLES
    $sample = [];
    for ($i = 0; $i < count($indexSample); $i++) {
      $index      = $indexSample[$i];
      $sample[$i] = $tfIdf[$index];
    }

    // INIT VARIABLE SMOTE
    $this->tfIdf = $tfIdf;
    $this->T     = $T;
    $this->N     = $N;

    // IF N<100, RANDOMIZE MINORITY CLASS SAMPLES
    if ($N < 100) {
      $this->T = ($N / 100) * $T;
      $this->N = 100;
    }

    // -N=(int)(N/100 )(∗The amount of SMOTE is assumed to be in integral multiples of100.∗)
    $this->N = intval($N / 100);
    // -k= Number of nearest neighbors
    $this->k = $k;
    // -numattrs= Number of attributes
    $this->numattrs = count($sample[0]);
    // -Sample[ ][ ]: array for original minority class samples
    $this->sample = $sample;
    // -newindex: keeps a count of number of synthetic samples generated, initialized to 0
    $this->newindex = 0;
    // -Synthetic[][]:array for synthetic samples(∗Compute knearest neighbors for each minority class sample only.∗)
    $this->synthetic = [];
    $this->doSmote();
  }
  public function doSmote()
  {
    for ($i = 0; $i < $this->T; $i++) {
      $nnarray = $this->doKNN($i);
      $this->populate($this->N, $i, $nnarray);
    }
  }
  public function populate($N, $i, $nnarray)
  {
    $newindex  = $this->newindex;
    $synthetic = $this->synthetic;
    $numattrs  = $this->numattrs;
    $sample    = $this->sample;
    // echo "<pre>";
    // echo "newindex: $newindex\n";
    // echo "numattrs: $numattrs\n";
    // echo "sample: \n";
    // print_r($sample);
    // echo "</pre>";exit;
    // GENERATE SYNTHETIC SAMPLES
    while ($N != 0) {
      // PILIH RANDOM [1,K], UNTUK AMBIL SALAH SATU NEIGHBOR TERDEKAT DARI i
      $nn = mt_rand(0, $this->k - 1);
      for ($attr = 0; $attr < $numattrs; $attr++) {
        $dif = $sample[$nnarray[$nn]][$attr] - $sample[$i][$attr];
        $gap = mt_rand() / mt_getrandmax();
        $synthetic[$newindex][$attr] = $sample[$i][$attr] + $gap * $dif;
      }
      $newindex++;
      $N--;
    }
    $this->newindex  = $newindex;
    $this->synthetic = $synthetic;
  }
  public function doKNN($i)
  {
    $knn = new KnnSMOTE($this->sample, $this->k, $i);
    return $knn->nnarray;
  }
}
