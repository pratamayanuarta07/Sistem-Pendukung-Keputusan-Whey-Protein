<?php
session_start();

defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{

  public function __Construct()
  {
    parent::__construct();
    $this->load->model('M_dashboard');
  }

  public function index()
  {

    $this->load->view('layout/head');
    $this->load->view('layout/navbar');
    $this->load->view('dashboard/cover');
    $this->load->view('layout/footer');
  }

  public function predict()
  {


    $this->load->view('layout/head');
    $this->load->view('layout/navbar');
    $this->load->view('dashboard/Tampil');
    $this->load->view('layout/footer');
  }
  public function next()
  {
    if (isset($_POST['input'])) {
      $SPrio = $this->M_dashboard->set_priority();
      $_SESSION["SPrio"] = $SPrio;
      $this->load->view('layout/head');
      $this->load->view('layout/navbar');
      $this->load->view('dashboard/Range');
      $this->load->view('layout/footer');

      // print_r($SUser);
    }
  }

  public function Semua()
  {
    $temp = $this->M_dashboard->setdata();
    $Data = [];
    for ($i = 0; $i < count($temp); $i++) {
      for ($j = 0; $j < count($temp[0]); $j++) {
        if ($j == 0) {
          $Data[$i][$j] = $temp[$i]['Nama'];
        } elseif ($j == 1) {
          $Data[$i][$j] = $temp[$i]['Cost'];
        } elseif ($j == 2) {
          $Data[$i][$j] = $temp[$i]['Protein'];
        } elseif ($j == 3) {
          $Data[$i][$j] = $temp[$i]['Calories'];
        } elseif ($j == 4) {
          $Data[$i][$j] = $temp[$i]['Sugar'];
        } elseif ($j == 5) {
          $Data[$i][$j] = $temp[$i]['Cholestrol'];
        } elseif ($j == 6) {
          $Data[$i][$j] = $temp[$i]['Sodium'];
        } else {
          $Data[$i][$j] = $temp[$i]['Carbohidrat'];
        }
      }
    }

    $datawhey['Data'] = $Data;
    $this->load->view('layout/head');
    $this->load->view('layout/navbar');
    $this->load->view('dashboard/alldata', $datawhey);
    $this->load->view('layout/footer');
  }
  public function input()
  {

    if (isset($_POST['input'])) {
      $SPrio = $_SESSION["SPrio"];
      $SUser = $this->M_dashboard->set_user();
    }

    $temp = $this->M_dashboard->setdata();
    $Data = [];
    for ($i = 0; $i < count($temp); $i++) {
      for ($j = 0; $j < count($temp[0]); $j++) {
        if ($j == 0) {
          $Data[$i][$j] = $temp[$i]['Nama'];
        } elseif ($j == 1) {
          $Data[$i][$j] = $temp[$i]['Cost'];
        } elseif ($j == 2) {
          $Data[$i][$j] = $temp[$i]['Protein'];
        } elseif ($j == 3) {
          $Data[$i][$j] = $temp[$i]['Calories'];
        } elseif ($j == 4) {
          $Data[$i][$j] = $temp[$i]['Sugar'];
        } elseif ($j == 5) {
          $Data[$i][$j] = $temp[$i]['Cholestrol'];
        } elseif ($j == 6) {
          $Data[$i][$j] = $temp[$i]['Sodium'];
        } else {
          $Data[$i][$j] = $temp[$i]['Carbohidrat'];
        }
      }
    }

    //priority awal

    $bobot = $this->M_dashboard->set_bobot($SPrio);


    $bobot_sub_kriteria1 = $this->M_dashboard->bobot_sub_kriteria(3);

    //normalisasi 
    $Subkriteria = $this->M_dashboard->sub_kriteria($Data, $bobot_sub_kriteria1);


    $max = $this->M_dashboard->max($Subkriteria);
    $min = $this->M_dashboard->min($Subkriteria);


    $utility_t = $this->M_dashboard->utility($Subkriteria, $max, $min, $bobot);

    $utility_u = $this->M_dashboard->utility_user($max, $min, $bobot, $SUser, $bobot_sub_kriteria1);

    $er = 0;
    for ($i = 0; $i < count($utility_u); $i++) {
      $er += $utility_u[$i];
    }

    $TempS = [];

    //menghitung utility_t
    $SetNilai = $this->M_dashboard->set_nilai($utility_t);

    //dibandingkan nilai 

    $CekNilai = $this->M_dashboard->check_range($SetNilai, $er);

    $TempS = $SetNilai;

    sort($SetNilai);
    sort($CekNilai);

    $tempAkhir = $this->M_dashboard->sorting($CekNilai, $TempS);


    $data['temp']    = $tempAkhir;
    $data['utility_t'] = $Data;
    $data['TempS']       = $TempS;
    $data['utility_r'] = $utility_t;
    $data['Subkriteria'] = $Subkriteria;
    $data['Data'] = $Data;


    $this->load->view('layout/head');
    $this->load->view('layout/navbar');
    $this->load->view('dashboard/Hasil', $data);
    $this->load->view('layout/footer');
  }
}


/* End of file Dasboard.php */
/* Location: ./application/controllers/Dasboard.php */