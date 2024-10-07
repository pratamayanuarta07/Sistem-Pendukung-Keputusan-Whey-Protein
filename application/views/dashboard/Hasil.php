
<br>
<br>
<br>
		
<div class="container" style="background-color:#E6E6FA ;padding: 40px;  border-radius: 0px; ">

	<center><h2><b>Peringkat Produk Whey Protein</b></h2></center><br>
	<!-- <hr style="background-color: #A9A9A9; height: 1px; border: 3;">
	<form action=" " method="post" enctype="multipart/form-data"  >
	<table class="table p-3" align="center"> -->
	<div class="table-responsive">
    <table class="table table-bordered">
      <thead class="table-dark">
					<tr>
						 
     						<th >Nama</th>
      					<th >Harga</th>	
                <th>Protein</th>
                <th>Calories</th>
                <th>Sugar</th>
                <th>Cholestrol</th>
                <th>Sodium</th>
                <th>Carbohidrat</th>
                <th>Skor</th>
					</tr>
				</thead>
				<tbody>
				<?php  
				$r = 0;

				for ($i=0; $i < count($temp); $i++) { 
					for ($j=0; $j < count($utility_t); $j++) { 
						if ($temp[$i] == $j) {
							echo'
					
					<tr>

					<td>'.$utility_t[$j][0].'</td>
					<td>'.$Data[$j][1].'</td>
          <td>'.$Data[$j][2].'</td>
          <td>'.$Data[$j][3].'</td>
          <td>'.$Data[$j][4].'</td>
          <td>'.$Data[$j][5].'</td>
          <td>'.$Data[$j][6].'</td>
          <td>'.$Data[$j][7].'</td>
          <td>'.$TempS[$j].'</td>
					</tr>
					';
						
						}					
					}
				}
				?>
				</tbody>
				</table>	
      </div>	
    

<div class="container mt-3">
  <div id="demo" class="collapse">
  <div class="container mt-3">
  <table class="table table-bordered table-sm">
    <div class="table-responsive">
     <thead class="table-dark">
      <tr>
        <th>Nama</th>
        <th>Skor</th>
      </tr>
    </thead>
    <tbody>
      <?php  
         // sort($TempS);
        for ($i=0; $i < count($utility_r); $i++) { 
             
              echo'
          <tr>
          <td>'.$utility_r[$i][0].'</td>
          <td>'.$TempS[$i].'</td>
          </tr>
          ';         
          }
        ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>

		<div class="modal" id="myModal">
  		<div class="modal-dialog modal-xl">
    	<div class="modal-content">

		<!-- Modal Header -->
      	<div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      	</div>
      	 <!-- Modal body -->

<center><h4 class="modal-title">Normalisasi  Data</h4></center>
<div class="modal-body">
<div class="table-responsive">
    <table class="table table-bordered">
     <thead class="table-dark">
      <tr>
        <th>Name</th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
        <th>C6</th>
        <th>C7</th>
      </tr>
    </thead>
    <tbody>
      <?php  
        for ($i=0; $i < count($Subkriteria); $i++) { 
              echo '
          <tr>
          <td>'.$Subkriteria[$i][0].'</td>
          <td>'.$temp = number_format($Subkriteria[$i][1],3).'</td>
          <td>'.$temp = number_format($Subkriteria[$i][2],3).'</td>
          <td>'.$temp = number_format($Subkriteria[$i][3],3).'</td>
          <td>'.$temp = number_format($Subkriteria[$i][4],3).'</td>
          <td>'.$temp = number_format($Subkriteria[$i][5],3).'</td>
          <td>'.$temp = number_format($Subkriteria[$i][6],3).'</td>
          <td>'.$temp = number_format($Subkriteria[$i][7],3).'</td>
          </tr>
          ';         
          }
        ?>
    </tbody>
  </table>
</div>
<br>
<center><h4 class="modal-title">Nilai Utility</h4></center>
<br>
 <div class="table-responsive">
    <table class="table table-bordered">
      <thead class="table-dark">
      <tr>
        <th>Name</th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
        <th>C6</th>
        <th>C7</th>
      </tr>
    </thead>
    <tbody>
      <?php  
        for ($i=0; $i < count($utility_r); $i++) { 
              echo '
          <tr>
          <td>'.$utility_r[$i][0].'</td>
          <td>'.$temp_u = number_format($utility_r[$i][1],3).'</td>
          <td>'.$temp_u = number_format($utility_r[$i][2],3).'</td>
          <td>'.$temp_u = number_format($utility_r[$i][3],3).'</td>
          <td>'.$temp_u = number_format($utility_r[$i][4],3).'</td>
          <td>'.$temp_u = number_format($utility_r[$i][5],3).'</td>
          <td>'.$temp_u = number_format($utility_r[$i][6],3).'</td>
          <td>'.$temp_u = number_format($utility_r[$i][7],3).'</td>
          </tr>
          ';         
          }
        ?>
    </tbody>
  </table>
</div>

      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
</div>
</div>
</div>

<center><div class="btn-group p-3">
  <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo">Skor</button>

  <button type="button" class="bbtn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    SMARTER
  </button>

   <a href="<?= base_url('index') ?>" class="btn btn-primary">Selesai</a>
</div>
</center>
<br>
<br>
<br>
<br>



