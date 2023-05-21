<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; ?>
</head>

<body>
 <div class="row">
  <div class="col-sm-6">
	  <form class="form-inline" action="#">
		    <div class="form-group">
		      <label for="file">Folio No.:</label>
		      <input type="text" class="form-control" id="email" placeholder="Enter FolioNo" name="folio">
		    </div>
		    <div class="form-group">
		      <label for="caseid">CaseID:</label>
		      <input type="text" class="form-control" id="caseid" placeholder="CaseID" name="caseid">
		    </div>
    		<div class="form-group">
				<label class="control-label">State</label>
				<select onchange="toggleLGA(this);" name="state" id="state" class="form-control">
					<option value="" selected="selected">- Select -</option>
					<option value="Abia">Abia</option>
					<option value="Adamawa">Adamawa</option>
					<option value="AkwaIbom">AkwaIbom</option>
					<option value="Anambra">Anambra</option>
					<option value="Bauchi">Bauchi</option>
					<option value="Bayelsa">Bayelsa</option>
					<option value="Benue">Benue</option>
					<option value="Borno">Borno</option>
					<option value="Cross River">Cross River</option>
					<option value="Delta">Delta</option>
					<option value="Ebonyi">Ebonyi</option>
					<option value="Edo">Edo</option>
					<option value="Ekiti">Ekiti</option>
					<option value="Enugu">Enugu</option>
					<option value="FCT">FCT</option>
					<option value="Gombe">Gombe</option>
					<option value="Imo">Imo</option>
					<option value="Jigawa">Jigawa</option>
					<option value="Kaduna">Kaduna</option>
					<option value="Kano">Kano</option>
					<option value="Katsina">Katsina</option>
					<option value="Kebbi">Kebbi</option>
					<option value="Kogi">Kogi</option>
					<option value="Kwara">Kwara</option>
					<option value="Lagos">Lagos</option>
					<option value="Nasarawa">Nasarawa</option>
					<option value="Niger">Niger</option>
					<option value="Ogun">Ogun</option>
					<option value="Ondo">Ondo</option>
					<option value="Osun">Osun</option>
					<option value="Oyo">Oyo</option>
					<option value="Plateau">Plateau</option>
					<option value="Rivers">Rivers</option>
					<option value="Sokoto">Sokoto</option>
					<option value="Taraba">Taraba</option>
					<option value="Yobe">Yobe</option>
					<option value="Zamfara">Zamafara</option>
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">LGA</label>
				<select name="lga" id="lga" class="form-control select-lga" required></select>
			</div>
			 <div class="form-group">
		      <label for="caseid">No. of Kidnap People:</label>
		      <input type="number" class="form-control" id="nKdNp_Pple" placeholder="No. of Ppl KdNp" name="nKdNp_Pple">
		   	<div class="form-group">
		      <label for="caseid">Kidnap Remark</label>
		      <select>
		      	<option>SELECT</option>
		      	<option>Released</option>
		      	<option>Ransom</option>
		      	<option>Killed</option>
		      </select>
		    </div>
		    </div>			 
		    <div class="form-group">
		      <label for="caseid">Time of Incidence:</label>
		      <input type="time" class="form-control" id="KdNp_time" placeholder="Time" name="nKdNp_Pple">
		      <input type="date" class="form-control" id="KdNp_Date" placeholder="Date" name="nKdNp_Pple">
		    </div>
		    <button type="submit" class="btn btn-default">Submit</button>
		    <button type="reset" class="btn btn-default">Reset</button>
	  </form>
 </div>
  <div class="col-sm-6"> 
  	SECOND PART
  </div>
</div> 
	<script src="js/lga.js"></script>
	<script src="js/lga.min.js"></script>
</body>
</html>