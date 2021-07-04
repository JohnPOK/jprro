<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/personal.png" alt="">
		<h1>Personal information</h1>
		<p>	Complete the below information and attach relative copies of documents. Provision is made for two individuals’ information - important to complete yours and your spouse\'s information</p>

		<form>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>FULL NAME AND SURNAME</h5></div>
				<div class="form-group col-md-6">
					<label for="fullname">Full Name</label>
					<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name">
				</div>
				<div class="form-group col-md-6">
					<label for="surname">Surname</label>
					<input type="text" class="form-control" name="surname" id="surname" placeholder="Surname">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>IDENTITY NUMBER</h5></div>
				<div class="form-group col-md-6">
					<label for="idnumber">Identity Number</label>
					<input type="text" class="form-control" name="idnumber" id="idnumber" placeholder="Identity Number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>BIRTH CERTIFICATE</h5></div>
				<div class="form-group col-md-6">
					<label for="birthcertificate">Birth Certificate</label>
					<input type="text" class="form-control" name="birthcert" id="birthcert" placeholder="Birth Certificate">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>PASSPORT NUMBER</h5></div>
				<div class="form-group col-md-6">
					<label for="passportnumber">Passport Number</label>
					<input type="text" class="form-control" name="passportnumber" id="passportnumber" placeholder="Passport Number">
				</div>
				<div class="form-group col-md-6">
					<label for="expirationdate">Expiration Date</label>
					<input type="text" class="form-control" name="expirationdate" id="expirationdate" placeholder="Expiration Date">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>FULL NAME AND SURNAME (SPOUSE)</h5></div>
				<div class="form-group col-md-6">
					<label for="spousefullname">Full Name</label>
					<input type="text" class="form-control" name="spousefullname" id="spousefullname" placeholder="Full Name">
				</div>
				<div class="form-group col-md-6">
					<label for="spousesurname">Surname</label>
					<input type="text" class="form-control" name="spousesurname" id="spousesurname" placeholder="Surname">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>MAIDEN NAME</h5></div>
				<div class="form-group col-md-6">
					<label for="spousemaidenname">Maiden Name</label>
					<input type="text" class="form-control" name="spousemaidenname" id="spousemaidenname" placeholder="Maiden Name">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>IDENTITY NUMBER</h5></div>
				<div class="form-group col-md-6">
					<label for="spouseidnumber">Identity Number</label>
					<input type="text" class="form-control" name="spouseidnumber" id="spouseidnumber" placeholder="Identity Number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>BIRTH CERTIFICATE</h5></div>
				<div class="form-group col-md-6">
					<label for="spousebirthcertificate">Birth Certificate</label>
					<input type="text" class="form-control" name="spousebirthcertificate" id="spousebirthcertificate" placeholder="Birth Certificate">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>PASSPORT NUMBER</h5></div>
				<div class="form-group col-md-6">
					<label for="spousepassportnumber">Passport Number</label>
					<input type="text" class="form-control" name="spousepassportnumber" id="spousepassportnumber" placeholder="Passport Number">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseexpirationdate">Expiration Date</label>
					<input type="text" class="form-control" name="spouseexpirationdate" id="spouseexpirationdate" placeholder="Expiration Date">
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="marriagecert">
					 <label for="marriagecert"><h5>MARRIAGE CERTIFICATE</h5></label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="prenupcontract">
					 <label for="prenupcontract"><h5>PRENUPTIAL CONTRACT</h5></label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="divorceorder">
					 <label for="divorceorder"><h5>DIVORCE AND SETTLING ORDER</h5></label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="cohabagreement">
					 <label for="cohabagreement"><h5>COHABITATION AGREEMENT</h5></label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>FUNERAL POLICY</h5></div>
				<div class="form-group col-md-6">
					<label for="funpolowner">Policy Owner</label>
					<input type="text" class="form-control" name="funpolowner" id="funpolowner" placeholder="Policy Owner">
				</div>
				<div class="form-group col-md-6">
					<label for="funinstitution">Institution</label>
					<input type="text" class="form-control" name="funinstitution" id="funinstitution" placeholder="Institution">
				</div>
				<div class="form-group col-md-6">
					<label for="funpolicynum">Policy Number</label>
					<input type="text" class="form-control" name="funpolicynum" id="funpolicynum" placeholder="Policy Number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>MEDICAL AID AND FUND NUMBER</h5></div>
				<div class="form-group col-md-6">
					<label for="medaidmainmem">Main Member</label>
					<input type="text" class="form-control" name="medaidmainmem" id="medaidmainmem" placeholder="Main Member">
				</div>
				<div class="form-group col-md-6">
					<label for="medaidfund">Fund</label>
					<input type="text" class="form-control" name="medaidfund" id="medaidfund" placeholder="Fund">
				</div>
				<div class="form-group col-md-6">
					<label for="medaidpolnum">Policy Number</label>
					<input type="text" class="form-control" name="medaidpolnum" id="medaidpolnum" placeholder="Policy Number">
				</div>
				<div class="form-group col-md-6">
					<label for="medaidgapcov">GAP Cover</label>
					<input type="text" class="form-control" name="medaidgapcov" id="medaidgapcov" placeholder="GAP Cover">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>HOSPITAL PLAN</h5></div>
				<div class="form-group col-md-6">
					<label for="hosplanmainmem">Main Mumber</label>
					<input type="text" class="form-control" name="hosplanmainmem" id="hosplanmainmem" placeholder="Main Member">
				</div>
				<div class="form-group col-md-6">
					<label for="hosplanfund">Fund</label>
					<input type="text" class="form-control" name="hosplanfund" id="hosplanfund" placeholder="Fund">
				</div>
				<div class="form-group col-md-6">
					<label for="hosplanpolnum">Policy Number</label>
					<input type="text" class="form-control" name="hosplanpolnum" id="hosplanpolnum" placeholder="Policy Number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>MEDIC ALERT</h5></div>
				<div class="form-group col-md-6">
					<label for="medalertmem">Member</label>
					<input type="text" class="form-control" name="medalertmem" id="medalertmem" placeholder="Member">
				</div>
				<div class="form-group col-md-6">
					<label for="medalertnum">Membership Number</label>
					<input type="text" class="form-control" name="medalertnum" id="medalertnum" placeholder="Membership Number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>ORGAN DONATION / MEDICAL RESEARCH DONATION</h5></div>
				<div class="form-group col-md-12">
					<label for="organdondetails">Registraion Details</label>
					<input type="text" class="form-control" name="organdondetails" id="organdondetails" placeholder="Registraion Details">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>DRIVING LICENSE</h5></div>
				<div class="form-group col-md-6">
					<label for="drivlicname">Name</label>
					<input type="text" class="form-control" name="drivlicname" id="drivlicname" placeholder="Name">
				</div>
				<div class="form-group col-md-6">
					<label for="drivlicexp">Expiration Date</label>
					<input type="text" class="form-control" name="drivlicexp" id="drivlicexp" placeholder="Expiration Date">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>FIREARMS LICENSE (make sure all firearms are licensed)</h5></div>
				<div class="form-group col-md-6">
					<label for="nameofregowner">Name of registered owner</label>
					<input type="text" class="form-control" name="nameofregowner" id="nameofregowner" placeholder="Name of registered owner">
				</div>
				<div class="form-group col-md-6">
					<label for="firearmcaliber">Caliber</label>
					<input type="text" class="form-control" name="firearmcaliber" id="firearmcaliber" placeholder="Caliber">
				</div>
				<div class="form-group col-md-6">
					<label for="firearmlicexp">Expiration Date</label>
					<input type="text" class="form-control" name="firearmlicexp" id="firearmlicexp" placeholder="Expiration Date">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>EMPLOYER (Copy of payroll and latest Tax return) </h5></div>
				<div class="form-group col-md-12">
					<label for="employername">Name of Employer</label>
					<input type="text" class="form-control" name="employername" id="employername" placeholder="Name of Employer">
				</div>
				<div class="form-group col-md-6">
					<label for="employcontact">Contact Person</label>
					<input type="text" class="form-control" name="employcontact" id="employcontact" placeholder="Contact Person">
				</div>
				<div class="form-group col-md-6">
					<label for="employaddress">Address</label>
					<input type="text" class="form-control" name="employaddress" id="employaddress" placeholder="Address">
				</div>
				<div class="form-group col-md-6">
					<label for="employtel">Telephone Number</label>
					<input type="text" class="form-control" name="employtel" id="employtel" placeholder="Telephone Number">
				</div>
				<div class="form-group col-md-6">
					<label for="employemail">Email Address</label>
					<input type="text" class="form-control" name="employemail" id="employemail" placeholder="Email Address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>INCOME TAX</h5></div>
				<div class="form-group col-md-12">
					<label for="inctaxboffice">Branch Office</label>
					<input type="text" class="form-control" name="inctaxboffice" id="inctaxboffice" placeholder="Branch Office">
				</div>
				<div class="form-group col-md-6">
					<label for="intaxname">Name</label>
					<input type="text" class="form-control" name="intaxname" id="intaxname" placeholder="Name">
				</div>
				<div class="form-group col-md-6">
					<label for="intaxregnum">Registration Number</label>
					<input type="text" class="form-control" name="intaxregnum" id="intaxregnum" placeholder="Registration Number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="personaladdinfo"><h5>ADDITIONAL INFORMATION</h5></label>
					<textarea type="text" class="form-control" name="personaladdinfo" id="personaladdinfo"></textarea>
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
 <!-- /.col-lg-12--></div>
  ';
}
?>