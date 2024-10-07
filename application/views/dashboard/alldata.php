<?php  
//print_r($rawTest);

?>

<!--  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->

<div class="container">  
<br>
<br>
<table class="table p-3" align="center"> 
    <thead class="table-dark">
    <tr>
        <th scope="col">Nama Produk</th>
        <th scope="col"></th> 
        <th scope="col">Cost</th> 
        <th scope="col"></th>
        <th scope="col">Protein</th> 
        <th scope="col"></th>
        <th scope="col">Calories</th> 
        <th scope="col"></th>
        <th scope="col">Sugar</th>
        <th scope="col"></th> 
        <th scope="col">Cholestrol</th> 
        <th scope="col"></th>
        <th scope="col">Sodium</th> 
        <th scope="col"></th>
        <th scope="col">Carbohidrat</th> 
        <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php  
    for ($i=0; $i < count($Data); $i++) { 
      echo 

      '<tr>

      <td>'. $Data[$i][0] .'<td>
      <td>'. $Data[$i][1] .'<td>
      <td>'. $Data[$i][2] .'<td>
      <td>'. $Data[$i][3] .'<td>
      <td>'. $Data[$i][4] .'<td>
      <td>'. $Data[$i][5] .'<td>
      <td>'. $Data[$i][6] .'<td>
      <td>'. $Data[$i][7] .'<td>

      </tr>
    
     ';
    }
  ?>
 
  </tbody>
</table>
 <a href="<?= base_url('predict') ?>" class="btn btn-secondary">Kembali</a>

 <br>
 <br>
</div>
