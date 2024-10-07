
<br>
<br>
<div class="container" >
<div class="alert alert-success">
    <center><h4 class="alert-heading"><strong>Halaman Peringkat Kepentingan Kriteria</strong></h4></center>
    <hr>
    <h5><strong>Deskripsi halaman</strong></h5>
    <p>Pada halaman ini, Anda diminta untuk memberikan nilai peringkat untuk tiap-tiap kriteria. Nilai peringkat berupa angka dimulai dari 1-7. Dimana kriteria yang <strong>paling penting</strong> diberi dengan <strong>nilai 1 (terkecil)</strong> dan kriteria yang <strong>paling tidak penting      </strong> diberi <strong>nilai 7 (terbesar)</strong>. <strong>Masing-masing kriteria tidak boleh memiliki nilai sama</strong>. 
    <strong>diinginkan</strong> 
    </p>
  </div>
  

<div class="container" style="background-color:#E6E6FA ;padding: 40px;  border-radius: 0px; ">
	
	<center><h2><b>Tingkat Kepentingan Kriteria</b></h2></center><br>
	<hr style="background-color: #A9A9A9; height: 2px; border: 0;">
	<form action="<?= base_url('next') ?>" method="post" enctype="multipart/form-data"  >
	<!-- 	<div class="table-responsive"> -->
			<table class="" width="70%" align="center">
				<thead>
				<tbody>
						<tr>
							<td width="20%" height="40px">Harga :</td>
							<td><select name="harga"  class="form-control">
								<option value="">Pilih Tingkat Kepentingan :</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								</select></td>
						
						</tr>
						<tr>
							<td height="40px">Protein :</td>
							<td><select name="protein" required="" class="form-control">
								<option value="">Pilih Tingkat Kepentingan :</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select></td>
						
						</tr>
						<tr>
							<td height="40px">Calorie :</td>
							<td><select name="kalori" required="" class="form-control">
								<option value="">Pilih Tingkat Kepentingan :</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select></td>
							
						</tr>
						<tr>
							<td height="40px">Sugar :</td>
							<td><select name="gula" required="" class="form-control">
								<option value="">Pilih Tingkat Kepentingan :</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select></td>
						
						</tr>
						<tr>
							<td height="40px">Cholestrol :</td>
							<td><select name="kolestrol" required="" class="form-control">
								<option value="">Pilih Tingkat Kepentingan :</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select></td>
							<!-- <td><?=$b_kriteria[4];  ?></td> -->
						</tr>
						<tr>
							<td height="40px">Sodium :</td>
							<td><select name="sodium" required="" class="form-control">
								<option value="">Pilih Tingkat Kepentingan :</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select></td>
							<!-- <td><?=$b_kriteria[5];  ?></td> -->
						</tr>
						<tr>
							<td height="40px">Karbohidrat :</td>
							<td><select name="karbo" required="" class="form-control">
								<option value="">Pilih Tingkat Kepentingan :</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select></td>
							<!-- <td><?=$b_kriteria[6];  ?></td> -->
						</tr>
				</tbody>
			</table>
<br>
	<center><div class="btn-group p-3">
	  <a href="<?= base_url('predict') ?>"class="btn btn-primary">Reset</a>
	 <input type="submit"name="input" value="Simpan" class="btn btn-primary"> </input>
	</div>
</center>

			<script type="text/javascript">
		$('select').on('change', function() {
  			$('option').prop('disabled', false);
  			$('select').each(function() {
    			var val = this.value;
    			$('select').not(this).find('option').filter(function() {
      				return this.value === val;
    			}).prop('disabled', true);
  			});
		}).change();
	</script>

</form>
</table>
</div>
</div>
<br>
