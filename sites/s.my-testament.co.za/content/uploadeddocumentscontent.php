<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<div>
			<img class="card-img-top" style="text-align: center;" src="images/uploaddocs.png" alt="">
			<h1>Checklist of uploaded documents </h1>
			<p>(Tick once uploaded in the “Document file”)</p>
		</div>

		<form>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="lastwillandtest">
					 <label for="lastwillandtest">Last Will and Testament</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="ofshorelastwilltest">
					 <label for="ofshorelastwilltest">Offshore Last Will and Testament</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="prevwillappestate">
					 <label for="prevwillappestate">Previous Will (applicable to your estate)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="codicilsattachm">
					 <label for="codicilsattachm">Codicils (attachments)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="iddoccertcopy">
					 <label for="iddoccertcopy">Identity document</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="passport">
					 <label for="passport">Passport</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="birthcert">
					 <label for="birthcert">Birth certificate</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="marrcert">
					 <label for="marrcert">Marriage certificate</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="matrimcontract">
					 <label for="matrimcontract">Matrimonial Contracts</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="cohabitagreem">
					 <label for="cohabitagreem">Cohabitation agreements</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="divorceorder">
					 <label for="divorceorder">Divorce order</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="funeralpol">
					 <label for="funeralpol">Funeral policy</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="iddocsofheirs">
					 <label for="iddocsofheirs">Heir’s Identity document</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="medaid">
					 <label for="medaid">Medical aid</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="hosplan">
					 <label for="hosplan">Hospital plan</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="driverslic">
					 <label for="driverslic">Driver\'s license</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="firearmlics">
					 <label for="firearmlics">Firearms license</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="payroll">
					 <label for="payroll">Payroll</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="latinctaxret">
					 <label for="latinctaxret">Latest Income Tax Return</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="bankcards">
					 <label for="bankcards">Bank cards</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="loanagreem">
					 <label for="loanagreem">Loan agreements</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="motvechreg">
					 <label for="motvechreg">Motor vehicle registration</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="titledeeds">
					 <label for="titledeeds">Title deed (s)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="valuationsofprop">
					 <label for="valuationsofprop">Valuations of properties purchased before 1 October 2001 for capital gains tax purposes</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="lifinspols">
					 <label for="lifinspols">Life insurance policy(s)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="endowpols">
					 <label for="endowpols">Endowment policies</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="annuities">
					 <label for="annuities">Annuities</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="penscard">
					 <label for="penscard">Pension card</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="trustdeed">
					 <label for="trustdeed">Trust deed</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="sharecert">
					 <label for="sharecert">Share certificate</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="unittruscertif">
					 <label for="unittruscertif">Unit trust certificate</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="timeshare">
					 <label for="timeshare">Timeshare</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="compreg">
					 <label for="compreg">Company registration</label>
				</div>
			</div>

			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="latfinstat">
					 <label for="latfinstat">Latest Financial Statements</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="purandsalagr">
					 <label for="purandsalagr">Purchase and Sale Agreement</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="leasagreem">
					 <label for="leasagreem">Lease agreements</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="telcontract">
					 <label for="telcontract">Telephone contracts</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="wificontr">
					 <label for="wificontr">Wi-Fi contract</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="munaccount">
					 <label for="munaccount">Municipal accounts</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="shtermins">
					 <label for="shtermins">Short term insurance</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="armedresp">
					 <label for="armedresp">Armed Response</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="dstv">
					 <label for="dstv">DSTV</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="televlic">
					 <label for="televlic">Television license</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="subscript">
					 <label for="subscript">Subscriptions</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="cardsvarious">
					 <label for="cardsvarious">Cards (Dischem, uCount etc)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="otherinfo">Other</label>
					 <textarea type="text" class="form-control" name="otherinfo" id="otherinfo"></textarea>
				</div>
			</div>
		  </div>
 			<div class="form-row">
				<div class="form-group col-md-12">
 					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</form>
      </div>
      <!-- /.col-lg-9 --></div>
  ';
}
?>
