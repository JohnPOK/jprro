<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/liabilities.png" alt="">
		<h1>List of liabilities / Monthly expenses</h1>

		<form>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>TELEPHONE</h5></div>
				<div class="form-group col-md-6">
					<label for="telaccholname">Account holder hame</label>
					<input type="text" class="form-control" name="telaccholname" id="telaccholname" placeholder="Account holder name">
				</div>
				<div class="form-group col-md-6">
					<label for="liatelnum">Telephone Number</label>
					<input type="text" class="form-control" name="liatelnum" id="liatelnum" placeholder="Telephone Number">
				</div>
				<div class="form-group col-md-6">
					<label for="liatelprov">Provider</label>
					<input type="text" class="form-control" name="liatelprov" id="liatelprov" placeholder="Provider">
				</div>
				<div class="form-group col-md-6">
					<label for="liaaccnum">Account Number</label>
					<input type="text" class="form-control" name="liaaccnum" id="liaaccnum" placeholder="Account Number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>INTERNET PROVIDER</h5></div>
				<div class="form-group col-md-6">
					<label for="ispaccholdername">Account Holder Name</label>
					<input type="text" class="form-control" name="ispaccholdername" id="ispaccholdername" placeholder="Account Holder Name">
				</div>
				<div class="form-group col-md-6">
					<label for="ispprov">Provider</label>
					<input type="text" class="form-control" name="liatelprov" id="liatelprov" placeholder="Provider">
				</div>
				<div class="form-group col-md-6">
					<label for="accnumber">Account Number</label>
					<input type="text" class="form-control" name="accnumber" id="accnumber" placeholder="Account Number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>MUNICIPALITY</h5></div>
				<div class="form-group col-md-12">
					<label for="munproperty">Property</label>
					<input type="text" class="form-control" name="munproperty" id="munproperty" placeholder="Property">
				</div>
				<div class="form-group col-md-6">
					<label for="municipality">Municipality</label>
					<input type="text" class="form-control" name="municipality" id="municipality" placeholder="Municipality">
				</div>
				<div class="form-group col-md-6">
					<label for="ratesandtaxes">Rates & Taxes no.</label>
					<input type="text" class="form-control" name="ratesandtaxes" id="ratesandtaxes" placeholder="Rates & Taxes no.">
				</div>
				<div class="form-group col-md-6">
					<label for="elecaccno">Electricity Account no.</label>
					<input type="text" class="form-control" name="elecaccno" id="elecaccno" placeholder="Electricity Account no.">
				</div>
				<div class="form-group col-md-6">
					<label for="watbillno">Water Bill no.</label>
					<input type="text" class="form-control" name="watbillno" id="watbillno" placeholder="Water Bill no.">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>SHORT TERM INSURANCE</h5></div>
				<div class="form-group col-md-6">
					<label for="stinsinsurer">Insurer</label>
					<input type="text" class="form-control" name="stinsinsurer" id="stinsinsurer" placeholder="Insurer">
				</div>
				<div class="form-group col-md-6">
					<label for="stinsbroker">Broker</label>
					<input type="text" class="form-control" name="stinsbroker" id="stinsbroker" placeholder="Broker">
				</div>
				<div class="form-group col-md-6">
					<label for="stinsinsured">Insured</label>
					<input type="text" class="form-control" name="stinsinsured" id="stinsinsured" placeholder="Insured">
				</div>
				<div class="form-group col-md-6">
					<label for="stnspolno">Policy Number</label>
					<input type="text" class="form-control" name="stnspolno" id="stnspolno" placeholder="Policy Number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>ARMED RESPONSE (SECURITY)</h5></div>
				<div class="form-group col-md-6">
					<label for="seccompany">Company</label>
					<input type="text" class="form-control" name="seccompany" id="seccompany" placeholder="Company">
				</div>
				<div class="form-group col-md-6">
					<label for="secaccno">Account no.</label>
					<input type="text" class="form-control" name="secaccno" id="secaccno" placeholder="Account no.">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>DSTV</h5></div>
				<div class="form-group col-md-6">
					<label for="dstvowner">Owner</label>
					<input type="text" class="form-control" name="dstvowner" id="dstvowner" placeholder="Owner">
				</div>
				<div class="form-group col-md-6">
					<label for="dstvaccnumber">Account Number</label>
					<input type="text" class="form-control" name="dstvaccnumber" id="dstvaccnumber" placeholder="Account Number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>TELEVISION LICENSE</h5></div>
				<div class="form-group col-md-6">
					<label for="tellicowner">Owner</label>
					<input type="text" class="form-control" name="tellicowner" id="tellicowner" placeholder="Owner">
				</div>
				<div class="form-group col-md-6">
					<label for="tellicaccnum">Account Number</label>
					<input type="text" class="form-control" name="tellicaccnum" id="tellicaccnum" placeholder="Account Number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>LEASE AGREEMENTS</h5></div>
				<div class="form-group col-md-6">
					<label for="leasagrtenant">Tenant</label>
					<input type="text" class="form-control" name="leasagrtenant" id="leasagrtenant" placeholder="Tenant">
				</div>
				<div class="form-group col-md-6">
					<label for="leasagrlandlord">Landlord</label>
					<input type="text" class="form-control" name="leasagrlandlord" id="leasagrlandlord" placeholder="Landlord">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>SUBSCRIPTIONS</h5></div>
				<div class="form-group col-md-6">
					<label for="subscracchold">Account Holder</label>
					<input type="text" class="form-control" name="subscracchold" id="subscracchold" placeholder="Account Holder">
				</div>
				<div class="form-group col-md-6">
					<label for="subscraccnum">Account number</label>
					<input type="text" class="form-control" name="subscraccnum" id="subscraccnum" placeholder="Account number">
				</div>
				<div class="form-group col-md-6">
					<label for="subscrinstitution">Institution</label>
					<input type="text" class="form-control" name="subscrinstitution" id="subscrinstitution" placeholder="Institution">
				</div>
				<div class="form-group col-md-6">
					<label for="subscrtypofsubscr">Type of subscription</label>
					<input type="text" class="form-control" name="subscrtypofsubscr" id="subscrtypofsubscr" placeholder="Type of subscription">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="personaladd-info"><h5>OTHER</h5></label>
					<textarea type="text" class="form-control" name="personaladd-info" id="personaladd-info"></textarea>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="uploaddocs"><h5>UPLOAD DOCUMENTS HERE</h5></label>
					<input type="file" class="form-control" name="uploaddocs" id="uploaddocs">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
 					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</form>
	</div>

<!-- /.col-lg-12--></div>
  ';
}
?>