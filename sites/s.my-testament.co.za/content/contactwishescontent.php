<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/contact.jpg" alt="">
		<h1>Contact persons and telephone numbers</h1>

 		<form>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>POLICE</h5></div>
				<div class="form-group col-md-6">
					<label for="selectbranch">Branch</label>
					<select class="form-control" id="selectbranch" name="selectbranch">
						<option selected>Choose...</option>
						<option>...</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="telnobranch">Telephone number</label>
					<input type="text" class="form-control" name="telnobranch" id="telnobranch" placeholder="Telephone number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>MEDICAL PRACTITIONER </h5></div>
				<div class="form-group col-md-6">
					<label for="medpractname">Doctor’s name</label>
					<input type="text" class="form-control" name="medpractname" id="medpractname" placeholder="Doctor’s name">
				</div>
				<div class="form-group col-md-6">
					<label for="medpracttelno">Telephone number</label>
					<input type="text" class="form-control" name="medpracttelno" id="medpracttelno" placeholder="Telephone number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>HEIRS WITH KEYS TO YOUR PERSONAL SAFE</h5></div>
				<div class="form-group col-md-12">
					<label for="heirskeysname">Name</label>
					<input type="text" class="form-control" name="heirskeysname" id="heirskeysname" placeholder="Name">
				</div>
				<div class="form-group col-md-6">
					<label for="heirskeystelno">Telephone number</label>
					<input type="text" class="form-control" name="heirskeystelno" id="heirskeystelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="heirskeysmail">E-mail</label>
					<input type="text" class="form-control" name="heirskeysmail" id="heirskeysmail" placeholder="Email">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>FUNERAL CONTRACTORS</h5></div>
				<div class="form-group col-md-12">
					<label for="funcontrcomp">Company</label>
					<input type="text" class="form-control" name="funcontrcomp" id="funcontrcomp" placeholder="Company">
				</div>
				<div class="form-group col-md-6">
					<label for="funcontrpolno">Policy number</label>
					<input type="text" class="form-control" name="funcontrpolno" id="funcontrpolno" placeholder="Policy number">
				</div>
				<div class="form-group col-md-6">
					<label for="funcontrpolhold">Name of Policy Holder</label>
					<input type="text" class="form-control" name="funcontrpolhold" id="funcontrpolhold" placeholder="Name of policy holder">
				</div>
				<div class="form-group col-md-6">
					<label for="funcontrtelno">Telephone number</label>
					<input type="text" class="form-control" name="funcontrtelno" id="funcontrtelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="funcontrmail">Email address</label>
					<input type="text" class="form-control" name="funcontrmail" id="funcontrmail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>FAITH LEADER</h5></div>
				<div class="form-group col-md-12">
					<label for="faith">Faith</label>
					<input type="text" class="form-control" name="faith" id="faith" placeholder="Faith">
				</div>
				<div class="form-group col-md-6">
					<label for="faithcontper">Contact person</label>
					<input type="text" class="form-control" name="faithcontper" id="faithcontper" placeholder="Contact person">
				</div>
				<div class="form-group col-md-6">
					<label for="faithtelno">Telephone number</label>
					<input type="text" class="form-control" name="faithtelno" id="faithtelno" placeholder="Telephone number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>EXECUTOR</h5></div>
				<div class="form-group col-md-6">
					<label for="executorcomp">Company</label>
					<input type="text" class="form-control" name="executorcomp" id="executorcomp" placeholder="Company">
				</div>
				<div class="form-group col-md-6">
					<label for="executorcontper">Contact person</label>
					<input type="text" class="form-control" name="executorcontper" id="executorcontper" placeholder="Contact person">
				</div>
				<div class="form-group col-md-6">
					<label for="executortelno">Telephone number</label>
					<input type="text" class="form-control" name="executortelno" id="executortelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="executormail">Email address</label>
					<input type="email" class="form-control" name="executormail" id="executormail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>EMPLOYER </h5></div>
				<div class="form-group col-md-6">
					<label for="employcomp">Company</label>
					<input type="text" class="form-control" name="employcomp" id="employcomp" placeholder="Company">
				</div>
				<div class="form-group col-md-6">
					<label for="employcontper">Contact person</label>
					<input type="text" class="form-control" name="employcontper" id="employcontper" placeholder="Contact person">
				</div>
				<div class="form-group col-md-6">
					<label for="employtelno">Telephone number</label>
					<input type="text" class="form-control" name="employtelno" id="employtelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="employmail">Email address</label>
					<input type="email" class="form-control" name="employmail" id="employmail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>EMPLOYEES (See attached list in Documents link)  </h5></div>
				<div class="form-group col-md-12">
					<label for="employscontper">Contact person</label>
					<input type="text" class="form-control" name="employscontper" id="employscontper" placeholder="Contact person">
				</div>
				<div class="form-group col-md-6">
					<label for="employstelno">Telephone number</label>
					<input type="text" class="form-control" name="employstelno" id="employstelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="employsmail">Email address</label>
					<input type="email" class="form-control" name="employsmail" id="employsmail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>MEDICAL AID</h5></div>
				<div class="form-group col-md-6">
					<label for="medaidscheme">Scheme</label>
					<input type="text" class="form-control" name="medaidscheme" id="medaidscheme" placeholder="Scheme">
				</div>
				<div class="form-group col-md-6">
					<label for="medaidnum">Medical aid number</label>
					<input type="text" class="form-control" name="medaidnum" id="medaidnum" placeholder="Medical aid number">
				</div>
				<div class="form-group col-md-6">
					<label for="medaidmainmem">Main member</label>
					<input type="text" class="form-control" name="medaidmainmem" id="medaidmainmem" placeholder="Main member">
				</div>
				<div class="form-group col-md-6">
					<label for="medaidtelno">Telephone number</label>
					<input type="text" class="form-control" name="medaidtelno" id="medaidtelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Email Address</label>
					<input type="email" class="form-control" name="email-medical" id="email-medical" placeholder="Email">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>PENSION SCHEME</h5></div>
				<div class="form-group col-md-6">
					<label for="penschemnum">Scheme number</label>
					<input type="text" class="form-control" name="penschemnum" id="penschemnum" placeholder="Scheme number">
				</div>
				<div class="form-group col-md-6">
					<label for="penschemtelno">Telephone number</label>
					<input type="text" class="form-control" name="penschemtelno" id="penschemtelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="penschemmail">Email address</label>
					<input type="email" class="form-control" name="penschemmail" id="penschemmail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>AUDITOR</h5></div>
				<div class="form-group col-md-6">
					<label for="auditcomp">Company</label>
					<input type="text" class="form-control" name="auditcomp" id="auditcomp" placeholder="Company">
				</div>
				<div class="form-group col-md-6">
					<label for="auditcontper">Contact person</label>
					<input type="text" class="form-control" name="auditcontper" id="auditcontper" placeholder="Contact person">
				</div>
				<div class="form-group col-md-6">
					<label for="audittelno">Telephone number</label>
					<input type="text" class="form-control" name="audittelno" id="audittelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="auditmail">Email address</label>
					<input type="email" class="form-control" name="auditmail" id="auditmail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>LAWYER</h5></div>
				<div class="form-group col-md-6">
					<label for="lawcomp">Company</label>
					<input type="text" class="form-control" name="lawcomp" id="lawcomp" placeholder="Company">
				</div>
				<div class="form-group col-md-6">
					<label for="lawcontper">Contact person</label>
					<input type="text" class="form-control" name="lawcontper" id="lawcontper" placeholder="Contact person">
				</div>
				<div class="form-group col-md-6">
					<label for="lawtelno">Telephone number</label>
					<input type="text" class="form-control" name="lawtelno" id="lawtelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="lawmail">Email address</label>
					<input type="email" class="form-control" name="lawmail" id="lawmail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>PERSONAL BANKER</h5></div>
				<div class="form-group col-md-6">
					<label for="perbank">Bank</label>
					<input type="text" class="form-control" name="perbank" id="perbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="perbankcontper">Contact person</label>
					<input type="text" class="form-control" name="perbankcontper" id="perbankcontper" placeholder="Contact person">
				</div>
				<div class="form-group col-md-6">
					<label for="perbanktelno">Telephone number</label>
					<input type="text" class="form-control" name="perbanktelno" id="perbanktelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="perbankmail">Email address</label>
					<input type="email" class="form-control" name="perbankmail" id="perbankmail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>BROKER</h5></div>
				<div class="form-group col-md-6">
					<label for="brokercomp">Company</label>
					<input type="text" class="form-control" name="brokercomp" id="brokercomp" placeholder="Company">
				</div>
				<div class="form-group col-md-6">
					<label for="brokercontper">Contact person</label>
					<input type="text" class="form-control" name="brokercontper" id="brokercontper" placeholder="Contact person">
				</div>
				<div class="form-group col-md-6">
					<label for="brokertelno">Telephone number</label>
					<input type="text" class="form-control" name="brokertelno" id="brokertelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="brokermail">Email address</label>
					<input type="email" class="form-control" name="brokermail" id="brokermail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>SHORT TERM INSURANCE</h5></div>
				<div class="form-group col-md-6">
					<label for="shterincomp">Company</label>
					<input type="text" class="form-control" name="shterincomp" id="shterincomp" placeholder="Company">
				</div>
				<div class="form-group col-md-6">
					<label for="shterincontper">Contact person</label>
					<input type="text" class="form-control" name="shterincontper" id="shterincontper" placeholder="Contact person">
				</div>
				<div class="form-group col-md-6">
					<label for="shterintelno">Telephone number</label>
					<input type="text" class="form-control" name="shterintelno" id="shterintelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="shterinmail">Email address</label>
					<input type="email" class="form-control" name="shterinmail" id="shterinmail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>LIFE INSURANCE</h5></div>
				<div class="form-group col-md-6">
					<label for="lifinscomp">Company</label>
					<input type="text" class="form-control" name="lifinscomp" id="lifinscomp" placeholder="Company">
				</div>
				<div class="form-group col-md-6">
					<label for="lifinscontper">Contact person</label>
					<input type="text" class="form-control" name="lifinscontper" id="lifinscontper" placeholder="Contact person">
				</div>
				<div class="form-group col-md-6">
					<label for="lifinstelno">Telephone number</label>
					<input type="text" class="form-control" name="lifinstelno" id="lifinstelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="lifinsmail">Email address</label>
					<input type="email" class="form-control" name="lifinsmail" id="lifinsmail" placeholder="Email address">
				</div>
			</div>
 			<div class="form-row">
				<div class="form-group col-md-12"><h5>TRUSTEES OF TRUST</h5></div>
				<div class="form-group col-md-6">
					<label for="trusteename">Name</label>
					<input type="text" class="form-control" name="trusteename" id="trusteename" placeholder="Name">
				</div>
				<div class="form-group col-md-6">
					<label for="trusteeidnum">Identity number</label>
					<input type="text" class="form-control" name="trusteeidnum" id="trusteeidnum" placeholder="Identity number">
				</div>
				<div class="form-group col-md-6">
					<label for="trusteetelno">Telephone number</label>
					<input type="text" class="form-control" name="trusteetelno" id="trusteetelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="trusteemail">Email address</label>
					<input type="email" class="form-control" name="trusteemail" id="trusteemail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>PARTNERS / DIRECTORS OF COMPANY</h5></div>
				<div class="form-group col-md-6">
					<label for="partdirname">Name</label>
					<input type="text" class="form-control" name="partdirname" id="partdirname" placeholder="Name">
				</div>
				<div class="form-group col-md-6">
					<label for="partdiridnum">Identity number</label>
					<input type="text" class="form-control" name="partdiridnum" id="partdiridnum" placeholder="Identity number">
				</div>
				<div class="form-group col-md-6">
					<label for="partdirtelno">Telephone number</label>
					<input type="text" class="form-control" name="partdirtelno" id="partdirtelno" placeholder="Telephone number">
				</div>
				<div class="form-group col-md-6">
					<label for="partdirmail">Email address</label>
					<input type="email" class="form-control" name="partdirmail" id="partdirmail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>ADDITIONAL INFORMATION</h5></div>
				<div class="form-group col-md-12">
					<textarea type="text" class="form-control" name="contwishadditinfo" id="contwishadditinfo"></textarea>
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
