<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; ?>
</head>

<body>
 <div class="row">
  <div class="col-sm-6">
	  <form class="form-inline" action="con.php" method="POST">
		    <div class="form-group">
		      <label for="file">Folio No.:</label>
		      <input type="text" name="folio" class="form-control" id="folio" placeholder="Enter FolioNo" required>
		    </div>
		    <div class="form-group">
		      <label for="caseid">CaseID:</label>
		      <input type="text" name="caseid" class="form-control" id="caseid" placeholder="CaseID" required>
		    </div>
    		<div class="form-group">
				<label class="control-label">State</label>
				<select onchange="toggleLGA(this);" name="state" id="state" class="form-control" required>
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
		      <label for="district">District:</label>
		      <input type="text" name="district" class="form-control" id="fullname" placeholder="District Name" required>
		     </div>	
			 <div class="form-group">
		      <label for="victim">FullName:</label>
		      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Name of Victim" required>
		     </div>	
		   	<div class="form-group">
		      <label for="caseid"> Gender</label>
		      <select name="sex" id="sex" required>
		      	<option>Sex</option>
		      	<option>Male</option>
		      	<option>FeMale</option>
		      	<option>Other</option>
		      </select>
		    </div>	 
		    <div class="form-group">
		      <label for="caseid">Age:</label>
		      <input type="number" name="age" class="form-control" id="age" placeholder="VictimAge"required>
		    </div>
		   <div class="form-group">
		      <label for="caseid"> Remark</label>
		      <select name="remark" id="remark" required>
		      	<option select="selected">Gender</option>
		      	<option>Male</option>
		      	<option>FeMale</option>
		      	<option>Other</option>
		      </select>
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