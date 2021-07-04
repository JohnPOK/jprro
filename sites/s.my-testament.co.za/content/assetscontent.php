<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/assets.png" alt="">
		<h1>List of Assets</h1>

		<form>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>VEHICLES</h5></div>
				<div class="form-group col-md-12">
					<label for="makeandmodel">Make and model</label>
					<input type="text" class="form-control" name="makeandmodel" id="makeandmodel" placeholder="Make and model">
				</div>
				<div class="form-group col-md-6">
					<label for="regisnum">Registration number</label>
					<input type="text" class="form-control" name="regisnum" id="regisnum" placeholder="Registration number">
				</div>
				<div class="form-group col-md-6">
					<label for="regisowner">Registered owner</label>
					<input type="text" class="form-control" name="regisowner" id="regisowner" placeholder="Registered owner">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Add Another</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>PROPERTIES</h5></div>
				<p>IMPORTANT - Valuation certificates of properties purchased before 1 October 2001.</p>
				<div class="form-group col-md-12">
					<label for="propfulladd">Full address</label>
					<input type="text" class="form-control" name="propfulladd" id="propfulladd" placeholder="Full address">
				</div>
				<div class="form-group col-md-6">
					<label for="propregisowner">Registered owner</label>
					<input type="text" class="form-control" name="propregisowner" id="propregisowner" placeholder="Registered owner">
				</div>
				<div class="form-group col-md-6">
					<label for="propmortdet">Mortgage details</label>
					<input type="text" class="form-control" name="propmortdet" id="propmortdet" placeholder="Mortgage details">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Add Another</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>LIFE INSURANCE POLICIES</h5></div>
				<div class="form-group col-md-6">
					<label for="linspolhold">Policyholder</label>
					<input type="text" class="form-control" name="linspolhold" id="linspolhold" placeholder="Policyholder">
				</div>
				<div class="form-group col-md-6">
					<label for="linpolbenef">Beneficiary </label>
					<input type="text" class="form-control" name="linpolbenef" id="linpolbenef" placeholder="Beneficiary ">
				</div>
				<div class="form-group col-md-6">
					<label for="linpolinst">Institution</label>
					<input type="text" class="form-control" name="linpolinst" id="linpolinst" placeholder="Institution">
				</div>
				<div class="form-group col-md-6">
					<label for="linpolnum">Policy number</label>
					<input type="text" class="form-control" name="linpolnum" id="linpolnum" placeholder="Policy number">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Add Another</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>ENDOWMENT POLICIES</h5></div>
				<div class="form-group col-md-6">
					<label for="endowpolhold">Policyholder</label>
					<input type="text" class="form-control" name="endowpolhold" id="endowpolhold" placeholder="Policyholder">
				</div>
				<div class="form-group col-md-6">
					<label for="endowpolbenef">Beneficiary </label>
					<input type="text" class="form-control" name="endowpolbenef" id="endowpolbenef" placeholder="Beneficiary ">
				</div>
				<div class="form-group col-md-6">
					<label for="endowpolinst">Institution</label>
					<input type="text" class="form-control" name="endowpolinst" id="endowpolinst" placeholder="Institution">
				</div>
				<div class="form-group col-md-6">
					<label for="endowpolnum">Policy number</label>
					<input type="text" class="form-control" name="endowpolnum" id="endowpolnum" placeholder="Policy number">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Add Another</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>RETIREMENT ANNUITIES </h5></div>
				<div class="form-group col-md-6">
					<label for="retannpolhold">Policyholder</label>
					<input type="text" class="form-control" name="retannpolhold" id="retannpolhold" placeholder="Policyholder">
				</div>
				<div class="form-group col-md-6">
					<label for="retannpolbenef">Beneficiary </label>
					<input type="text" class="form-control" name="retannpolbenef" id="retannpolbenef" placeholder="Beneficiary ">
				</div>
				<div class="form-group col-md-6">
					<label for="retannpolinst">Institution</label>
					<input type="text" class="form-control" name="retannpolinst" id="retannpolinst" placeholder="Institution">
				</div>
				<div class="form-group col-md-6">
					<label for="retannpolnum">Policy number</label>
					<input type="text" class="form-control" name="retannpolnum" id="retannpolnum" placeholder="Policy number">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Add Another</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>PENSION FUND</h5></div>
				<div class="form-group col-md-12">
					<label for="penfundowner">Name of owner</label>
					<input type="text" class="form-control" name="penfundowner" id="penfundowner" placeholder="Name of owner">
				</div>
				<div class="form-group col-md-6">
					<label for="penfundschem">Scheme</label>
					<input type="text" class="form-control" name="penfundschem" id="penfundschem" placeholder="Scheme">
				</div>
				<div class="form-group col-md-6">
					<label for="penfundnum">Pension number</label>
					<input type="text" class="form-control" name="penfundnum" id="penfundnum" placeholder="Pension number">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Add Another</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>UNIT TRUSTS / SHARES</h5></div>
				<div class="form-group col-md-12">
					<label for="unitrushahold">Shareholder</label>
					<input type="text" class="form-control" name="unitrushahold" id="unitrushahold" placeholder="Shareholder">
				</div>
				<div class="form-group col-md-6">
					<label for="unitrushainst">Institution</label>
					<input type="text" class="form-control" name="unitrushainst" id="unitrushainst" placeholder="Institution">
				</div>
				<div class="form-group col-md-6">
					<label for="unitrushadet">Details</label>
					<input type="text" class="form-control" name="unitrushadet" id="unitrushadet" placeholder="Details">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Add Another</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="other-info"><h5>OTHER (not listed)</h5></label>
					 <textarea type="text" class="form-control" name="other-info" id="other-info"></textarea>
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