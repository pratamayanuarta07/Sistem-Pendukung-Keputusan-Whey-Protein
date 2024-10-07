<br>
<div class="container" style="background-color:#E6E6FA ;padding: 40px;  border-radius: 0px; ">
	
	<center><h2><b>Range Kriteria</b></h2></center><br>
	<hr style="background-color: #A9A9A9; height: 1px; border: 0;">
	<form action="<?= base_url('input') ?>" method="post" enctype="multipart/form-data"  >
	<!-- 	<div class="table-responsive"> -->
			<table class="" width="70%" align="center">
				<thead>
					
				</thead>
				<tbody>
						<tr>
							<td width="20%" height="40px">Range harga :</td>
							<td><select name="Rangeharga" required="" class="form-control" id="name" placeholder="cost" >
								<option value="">Cost</option>
								 <option value="A1">Rp.500.000-899.000</option>
                        		<option value="A2">Rp.900.000-1.500.000</option>
                       			 <option value="A3">>Rp.1.500.000</option>
								</select></td>

							
						</tr>
						<tr>
							<td height="40px">Protein :</td>
							<td><select name="Rangeprotein" required="" class="form-control">
                          <option value="">Protein </option>
                          <option value="B1">>24g</option>
                          <option value="B2">20-24g</option>
                          <option value="B3">10-19gr</option>
                        </select>
							</select></td>
							
						</tr>
						<tr>
							<td height="40px">Calories :</td>
							<td><select name="Rangekalori" required="" class="form-control">
								<option value=""> Calories </option>
                          		<option value="C1">80-100 kkl</option>
                          		<option value="C2">101-150 kkl</option>
                        		<option value="C3">>150 kkl </option>

							</select></td>
							
						</tr>
						<tr>
							<td height="40px">Sugar :</td>
							<td><select name="Rangegula" required="" class="form-control">
							     <option value=""> Sugar </option>
                         		 <option value="D1">0-15 mg</option>
                         		 <option value="D2">15-50 mg</option>
                         		 <option value="D3">>50 mg</option>
							</select></td>
							
						</tr>
						<tr>
							<td height="40px">Cholestrol:</td>
							<td><select name="Rangekolestrol" required="" class="form-control">
								
                         		 <option value="">Cholestrol</option>
                          		 <option value="E1">0-100 mg</option>
                         		 <option value="E2">101-150 mg</option>
                          		<option value="E3">>150mg</option>

                        </select>
							</select></td>
							
						</tr>
						<tr>
							<td height="40px">Sodium :</td>
							<td><select name="Rangesodium" required="" class="form-control">
                          <option value="">Sodium </option>
                          <option value="F1">>5 gr</option>
                          <option value="F2">4-5 gr</option>
                          <option value="F3">1-3 gr</option>
							</select></td>
							
						</tr>
						<tr>
							<td height="40px">Carbohidrat:</td>
							<td><select name="Rangekarbo" required="" class="form-control">
								 <option value="">Carbohidrat </option>
                         		 <option value="G1">0-3 gr </option>
                        		 <option value="G2">4-5 gr </option>
                          		 <option value="G3">>5 gr </option>
							</select></td>
							
						</tr>
				</tbody>
			</table>
			

			<br>
<center>

	<div class="btn-group p-3">

	  <a href="<?= base_url('predict') ?>" class="btn btn-primary">Reset</a>
	   <input type="submit"name="input" value="Hitung" class="btn btn-primary"> </input>
	 </center>
	 <br>
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
	</table>
</form>
</div>
</div>

<br>

