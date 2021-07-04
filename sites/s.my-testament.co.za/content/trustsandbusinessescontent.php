<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">	
		<img class="card-img-top" style="text-align: center;" src="images/trustsandbusinesses.png" alt="">
		<h1>Trust / Business details</h1>

		<form>
			<fieldset  class="border border-2 rounded m-3 p-3">
				<div class="form-row">
					<div class="form-group col-md-12"><h5>TRUST DETAILS</h5></div>
					<div class="form-group col-md-6">
						<label for="trustnameoftrust"><h6>NAME OF TRUST</h6></label>
						<input type="text" class="form-control" name="trustnameoftrust" id="trustnameoftrust" placeholder="Name of trust">
					</div>
					<div class="form-group col-md-6">
						<label for="trustregisnum"><h6>TRUST REGISTRATION NUMBER</h6></label>
						<input type="text" class="form-control" name="trustregisnum" id="trustregisnum" placeholder="Trust registration number">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>TRUSTEES</h5></div>
					<div class="form-group col-md-6">
						<label for="trusteename"><h6>Name</h6></label>
						<input type="text" class="form-control" name="trusteename" id="trusteename" placeholder="Name">
					</div>
					<div class="form-group col-md-6">
						<label for="trusteeid">Identity number</label>
						<input type="text" class="form-control" name="trusteeid" id="trusteeid" placeholder="Identity number">
					</div>
					<div class="form-group col-md-6">
						<label for="trusteetel">Telephone number</label>
						<input type="text" class="form-control" name="trusteetel" id="trusteetel" placeholder="Telephone number">
					</div>
					<div class="form-group col-md-6">
						<label for="trusteemail">Email address</label>
						<input type="text" class="form-control" name="trusteemail" id="trusteemail" placeholder="Email address">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Add Trustee</button>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>BENEFICIARIES</h5></div>
					<div class="form-group col-md-6">
						<label for="benefname"><h6>Name</h6></label>
						<input type="text" class="form-control" name="benefname" id="benefname" placeholder="Name">
					</div>
					<div class="form-group col-md-6">
						<label for="benefid">Identity number</label>
						<input type="text" class="form-control" name="benefid" id="benefid" placeholder="Identity number">
					</div>
					<div class="form-group col-md-6">
						<label for="beneftel">Telephone number</label>
						<input type="text" class="form-control" name="beneftel" id="beneftel" placeholder="Telephone number">
					</div>
					<div class="form-group col-md-6">
						<label for="benefmail">Email address</label>
						<input type="text" class="form-control" name="benefmail" id="benefmail" placeholder="Email address">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Add Beneficiery</button>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>REVENUE SERVICE NUMBER</h5></div>
					<div class="form-group col-md-6">
						<label for="revservatnum"><h6>VAT number</h6></label>
						<input type="text" class="form-control" name="revservatnum" id="revservatnum" placeholder="VAT number">
					</div>
				</div>
			</fieldset>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Trust</button>
				</div>
			</div>
			<fieldset  class="border border-2 rounded m-3 p-3">
				<div class="form-row">
					<div class="form-group col-md-12"><h5>COMPANY / CLOSED CO-OPERATION DETAILS</h5></div>
					<div class="form-group col-md-6">
						<label for="regnamofcompany"><h6>REGISTERED NAME OF COMPANY</h6></label>
						<input type="text" class="form-control" name="regnamofcompany" id="regnamofcompany" placeholder="Registered name of comany">
					</div>
					<div class="form-group col-md-6">
						<label for="registrationnum"><h6>REGISTRATION NUMBER</h6></label>
						<input type="text" class="form-control" name="registrationnum" id="registrationnum" placeholder="Registration number">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>DIRECTORS</h5></div>
					<div class="form-group col-md-6">
						<label for="directorname"><h6>Name</h6></label>
						<input type="text" class="form-control" name="directorname" id="directorname" placeholder="Name">
					</div>
					<div class="form-group col-md-6">
						<label for="directorid">Identity number</label>
						<input type="text" class="form-control" name="directorid" id="directorid" placeholder="Identity number">
					</div>
					<div class="form-group col-md-6">
						<label for="directortel">Telephone number</label>
						<input type="text" class="form-control" name="directortel" id="directortel" placeholder="Telephone number">
					</div>
					<div class="form-group col-md-6">
						<label for="directormail">Email address</label>
						<input type="text" class="form-control" name="directormail" id="directormail" placeholder="Email address">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Add Director</button>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>INCOME TAX NUMBER</h5></div>
					<div class="form-group col-md-6">
						<label for="incomevatnum"><h6>VAT number</h6></label>
						<input type="text" class="form-control" name="incomevatnum" id="incomevatnum" placeholder="VAT number">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="incomevatauditor"><h6>AUDITOR</h6></label>
						<input type="text" class="form-control" name="incomevatauditor" id="incomevatauditor" placeholder="Auditor">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="auditorcontact">Contact person</label>
						<input type="text" class="form-control" name="auditorcontact" id="auditorcontact" placeholder="Contact person">
					</div>
					<div class="form-group col-md-6">
						<label for="auditortelephone">Telephone number</label>
						<input type="text" class="form-control" name="auditortelephone" id="auditortelephone" placeholder="Telephone number">
					</div>
				</div>
				<div class="form-row">   
					<div class="form-group col-md-12"><h5>Latest Financial Statements</h5></div>
					<div class="form-group col-md-12">
						<input type="file" class="form-control" name="latestfinstatem" id="latestfinstatem">
					</div>
				</div>
			</fieldset>	
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Company</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>	
			<div class="form-row">
				<div class="form-group col-md-12">
					<div style="text-align:center"><a type="submit" class="btn btn-primary">DOWNLOAD DOCUMENTS HERE</a></div>
				</div>
			</div>
		</form>
      </div>
      <!-- /.col-lg-9 --></div>
  ';
}
?>
