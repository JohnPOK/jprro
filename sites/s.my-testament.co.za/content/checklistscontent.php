<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<div>
			<img class="card-img-top" style="text-align: center;" src="images/checklist.png" alt="">
			<h1>List of <i>ORIGINAL</i> documents</h1>
			<p>(The executor will require the original documents. Complete the form, print and file with all of your original documents. Please ensure that it is kept in a very safe place)</p>
		</div>		

		<form>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="livingtestament">
					 <label for="livingtestament">Living Testament</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="lastwilltestament">
					 <label for="lastwilltestament">Last will and Testament</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="foreigntestament">
					 <label for="foreigntestament">Foreign Testament</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="prevwillappestate">
					 <label for="prevwillappestate">Previous will applicable to your estate</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="codicilsattach">
					 <label for="codicilsattach">Codicils (attachments)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="iddoccertcopy">
					 <label for="iddoccertcopy">Identity document (certified copy)</label>
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
					  <input type="checkbox" class="form-check-input" value="" id="firearmlics">
					 <label for="firearmlics">Firearms license (s)</label>
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
					 <label for="titledeeds">Title deed(s)</label>
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
					  <input type="checkbox" class="form-check-input" value="" id="trustdeedletofauth">
					 <label for="trustdeedletofauth">Trust Deed and Letter of Authorization</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="sharecertif">
					 <label for="sharecertif">Share certificate</label>
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
					  <input type="checkbox" class="form-check-input" value="" id="perchandsale">
					 <label for="perchandsale">Purchase and Sale Agreement</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="iddocsofheirs">
					 <label for="iddocsofheirs">Identity documents of heirs (certified copies)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="listofpassw">
					 <label for="listofpassw">List of Passwords</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="checklistother"><h5>OTHER</h5></label>
			  <textarea type="text" class="form-control" name="checklistother" id="checklistother">
			  </textarea>
			</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<p><a href="#">PRINT Checklists</a></p>
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
