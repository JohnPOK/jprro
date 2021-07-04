<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/bankaccounts.png" alt="">
		<h1>Bank accounts</h1>

		<form>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>BANK ACCOUNT</h5></div>
				<div class="form-group col-md-12">
					<label for="accholdername">Account holder name</label>
					<input type="text" class="form-control" name="accholdername" id="accholdername" placeholder="Account holder name">
				</div>
				<div class="form-group col-md-6">
					<label for="accholderbank">Bank</label>
					<input type="text" class="form-control" name="accholderbank" id="accholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="accbranchcode">Branch code</label>
					<input type="text" class="form-control" name="accbranchcode" id="accbranchcode" placeholder="Branch code">
				</div>
				<div class="form-group col-md-6">
					<label for="acctype">Account type</label>
					<input type="text" class="form-control" name="acctype" id="acctype" placeholder="Account type">
				</div>
				<div class="form-group col-md-6">
					<label for="accnumber">Account number</label>
					<input type="text" class="form-control" name="accnumber" id="accnumber" placeholder="Account number">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Add Another</button>
					</div>
				</div>
				<div class="form-group col-md-12">
					<label for="spouseaccholdername">Account holder name (Spouse)</label>
					<input type="text" class="form-control" name="spouseaccholdername" id="spouseaccholdername" placeholder="Account holder name">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseaccholderbank">Bank</label>
					<input type="text" class="form-control" name="spouseaccholderbank" id="spouseaccholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseaccbranchcode">Branch code</label>
					<input type="text" class="form-control" name="spouseaccbranchcode" id="spouseaccbranchcode" placeholder="Branch code">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseacctype">Account type</label>
					<input type="text" class="form-control" name="spouseacctype" id="spouseacctype" placeholder="Account type">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseaccnumber">Account number</label>
					<input type="text" class="form-control" name="spouseaccnumber" id="spouseaccnumber" placeholder="Account number">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Add Another</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>INVESTMENT ACCOUNT</h5></div>
				<div class="form-group col-md-12">
					<label for="investaccholdername">Account holder name</label>
					<input type="text" class="form-control" name="investaccholdername" id="investaccholdername" placeholder="Account holder name">
				</div>
				<div class="form-group col-md-6">
					<label for="investaccholderbank">Bank</label>
					<input type="text" class="form-control" name="investaccholderbank" id="investaccholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="investaccbranchcode">Branch code</label>
					<input type="text" class="form-control" name="investaccbranchcode" id="investaccbranchcode" placeholder="Branch code">
				</div>
				<div class="form-group col-md-6">
					<label for="investacctype">Account type</label>
					<input type="text" class="form-control" name="investacctype" id="investacctype" placeholder="Account type">
				</div>
				<div class="form-group col-md-6">
					<label for="investaccnumber">Account number</label>
					<input type="text" class="form-control" name="investaccnumber" id="investaccnumber" placeholder="Account number">
				</div>
				<div class="form-group col-md-12">
					<label for="spouseinvestaccholdername">Account holder name (Spouse)</label>
					<input type="text" class="form-control" name="spouseinvestaccholdername" id="spouseinvestaccholdername" placeholder="Account holder name">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseinvestaccholderbank">Bank</label>
					<input type="text" class="form-control" name="spouseinvestaccholderbank" id="spouseinvestaccholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseinvestaccbranchcode">Branch code</label>
					<input type="text" class="form-control" name="spouseinvestaccbranchcode" id="spouseinvestaccbranchcode" placeholder="Branch code">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseinvestacctype">Account type</label>
					<input type="text" class="form-control" name="spouseinvestacctype" id="spouseinvestacctype" placeholder="Account type">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseinvestaccnumber">Account number</label>
					<input type="text" class="form-control" name="spouseinvestaccnumber" id="spouseinvestaccnumber" placeholder="Account number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>CREDIT CARD</h5></div>
				<div class="form-group col-md-12">
					<label for="credaccholdername">Account holder name</label>
					<input type="text" class="form-control" name="credaccholdername" id="credaccholdername" placeholder="Account holder name">
				</div>
				<div class="form-group col-md-6">
					<label for="credaccholderbank">Bank</label>
					<input type="text" class="form-control" name="credaccholderbank" id="credaccholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="credaccbranchcode">Branch code</label>
					<input type="text" class="form-control" name="credaccbranchcode" id="credaccbranchcode" placeholder="Branch code">
				</div>
				<div class="form-group col-md-6">
					<label for="credacctype">Account type</label>
					<input type="text" class="form-control" name="credacctype" id="credacctype" placeholder="Account type">
				</div>
				<div class="form-group col-md-6">
					<label for="credaccnumber">Account number</label>
					<input type="text" class="form-control" name="credaccnumber" id="credaccnumber" placeholder="Account number">
				</div>
				<div class="form-group col-md-12">
					<label for="spousecredaccholdername">Account holder name (Spouse)</label>
					<input type="text" class="form-control" name="spousecredaccholdername" id="spousecredaccholdername" placeholder="Account holder name">
				</div>
				<div class="form-group col-md-6">
					<label for="spousecredaccholderbank">Bank</label>
					<input type="text" class="form-control" name="spousecredaccholderbank" id="spousecredaccholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="spousecredaccbranchcode">Branch code</label>
					<input type="text" class="form-control" name="spousecredaccbranchcode" id="spousecredaccbranchcode" placeholder="Branch code">
				</div>
				<div class="form-group col-md-6">
					<label for="spousecredacctype">Account type</label>
					<input type="text" class="form-control" name="spousecredacctype" id="spousecredacctype" placeholder="Account type">
				</div>
				<div class="form-group col-md-6">
					<label for="spousecredaccnumber">Account number</label>
					<input type="text" class="form-control" name="spousecredaccnumber" id="spousecredaccnumber" placeholder="Account number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>HOME LOAN</h5></div>
				<div class="form-group col-md-6">
					<label for="hlaccholderbank">Bank</label>
					<input type="text" class="form-control" name="hlaccholderbank" id="hlaccholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="hlaccbranchcode">Branch code</label>
					<input type="text" class="form-control" name="hlaccbranchcode" id="hlaccbranchcode" placeholder="Branch code">
				</div>
				<div class="form-group col-md-6">
					<label for="hlacctype">Account type</label>
					<input type="text" class="form-control" name="hlacctype" id="hlacctype" placeholder="Account type">
				</div>
				<div class="form-group col-md-6">
					<label for="hlaccnumber">Account number</label>
					<input type="text" class="form-control" name="hlaccnumber" id="hlaccnumber" placeholder="Account number">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Add Another</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>LOAN AGREEMENTS</h5></div>
				<div class="form-group col-md-12">
					<label for="lagaccholdername">Name of account holder</label>
					<input type="text" class="form-control" name="lagaccholdername" id="lagaccholdername" placeholder="Name of account holder">
				</div>
				<div class="form-group col-md-6">
					<label for="lagaccnumber">Account number</label>
					<input type="text" class="form-control" name="lagaccnumber" id="lagaccnumber" placeholder="Account number">
				</div>
				<div class="form-group col-md-6">
					<label for="lagaccholderbank">Bank / Institution</label>
					<input type="text" class="form-control" name="lagaccholderbank" id="lagaccholderbank" placeholder="Bank / Institution">
				</div>
				<div class="form-group col-md-6">
					<label for="lagaccbranchcode">Branch code</label>
					<input type="text" class="form-control" name="lagaccbranchcode" id="lagaccbranchcode" placeholder="Branch code">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>VEHICLE RENTAL AGREEMENTS</h5></div>
				<div class="form-group col-md-12">
					<label for="vragaccholdername">Name of account holder</label>
					<input type="text" class="form-control" name="vragaccholdername" id="vragaccholdername" placeholder="Name of account holder">
				</div>
				<div class="form-group col-md-6">
					<label for="vragaccbranchcode">Vehicle</label>
					<input type="text" class="form-control" name="vragaccbranchcode" id="vragaccbranchcode" placeholder="Vehicle">
				</div>
				<div class="form-group col-md-6">
					<label for="vragaccholderbank">Bank / Institution</label>
					<input type="text" class="form-control" name="vragaccholderbank" id="vragaccholderbank" placeholder="Bank / Institution">
				</div>
				<div class="form-group col-md-6">
					<label for="vragaccnumber">Account number</label>
					<input type="text" class="form-control" name="vragaccnumber" id="vragaccnumber" placeholder="Account number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>ADDISIONAL CREDIT CARDS</h5></div>
				<div class="form-group col-md-12">
					<label for="addcredaccholdername">Name of account holder</label>
					<input type="text" class="form-control" name="addcredaccholdername" id="addcredaccholdername" placeholder="Name of account holder">
				</div>
				<div class="form-group col-md-6">
					<label for="addcredaccholderbank">Institution</label>
					<input type="text" class="form-control" name="addcredaccholderbank" id="addcredaccholderbank" placeholder="Institution">
				</div>
				<div class="form-group col-md-6">
					<label for="addcredaccnumber">Account number</label>
					<input type="text" class="form-control" name="addcredaccnumber" id="addcredaccnumber" placeholder="Account number">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="other-info"><h5>OTHER (not listed)</h5></label>
			  		<textarea type="text" class="form-control" name="other-info" id="other-info"> </textarea>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="upload-docs"><h5>UPLOAD COPIES OF CARDS AND LOAN AGREEMENTS HERE</h5></label>
					<input type="file" class="form-control" name="upload-docs" id="upload-docs">
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