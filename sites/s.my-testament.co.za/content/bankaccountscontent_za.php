<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/bankaccounts.png" alt="">
		<h1>Bankrekeninge</h1>

		<form>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>BANKREKENING</h5></div>
				<div class="form-group col-md-12">
					<label for="accholdername">Naam van rekeninghouer</label>
					<input type="text" class="form-control" name="accholdername" id="accholdername" placeholder="Naam van rekeninghouer">
				</div>
				<div class="form-group col-md-6">
					<label for="accholderbank">Bank</label>
					<input type="text" class="form-control" name="accholderbank" id="accholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="accbranchcode">Takkode</label>
					<input type="text" class="form-control" name="accbranchcode" id="accbranchcode" placeholder="Takkode">
				</div>
				<div class="form-group col-md-6">
					<label for="acctype">Tipe rekening</label>
					<input type="text" class="form-control" name="acctype" id="acctype" placeholder="Tipe rekening">
				</div>
				<div class="form-group col-md-6">
					<label for="accnumber">Rekeningnommer</label>
					<input type="text" class="form-control" name="accnumber" id="accnumber" placeholder="Rekeningnommer">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Voeg by</button>
					</div>
				</div>
				<div class="form-group col-md-12">
					<label for="spouseaccholdername">Naam van rekeninghouer (Gade)</label>
					<input type="text" class="form-control" name="spouseaccholdername" id="spouseaccholdername" placeholder="Naam van rekeninghouer (Gade)">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseaccholderbank">Bank</label>
					<input type="text" class="form-control" name="spouseaccholderbank" id="spouseaccholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseaccbranchcode">Takkode</label>
					<input type="text" class="form-control" name="spouseaccbranchcode" id="spouseaccbranchcode" placeholder="Takkode">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseacctype">Tipe rekening</label>
					<input type="text" class="form-control" name="spouseacctype" id="spouseacctype" placeholder="Tipe rekening">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseaccnumber">Rekeningnommer</label>
					<input type="text" class="form-control" name="spouseaccnumber" id="spouseaccnumber" placeholder="Rekeningnommer">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Voeg by</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>BELEGGINGSREKENING</h5></div>
				<div class="form-group col-md-12">
					<label for="investaccholdername">Naam van rekeninghouer</label>
					<input type="text" class="form-control" name="investaccholdername" id="investaccholdername" placeholder="Naam van rekeninghouer">
				</div>
				<div class="form-group col-md-6">
					<label for="investaccholderbank">Bank</label>
					<input type="text" class="form-control" name="investaccholderbank" id="investaccholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="investaccbranchcode">Takkode</label>
					<input type="text" class="form-control" name="investaccbranchcode" id="investaccbranchcode" placeholder="Takkode">
				</div>
				<div class="form-group col-md-6">
					<label for="investacctype">Tipe rekening</label>
					<input type="text" class="form-control" name="investacctype" id="investacctype" placeholder="Tipe rekening">
				</div>
				<div class="form-group col-md-6">
					<label for="investaccnumber">Rekeningnommer</label>
					<input type="text" class="form-control" name="investaccnumber" id="investaccnumber" placeholder="Rekeningnommer">
				</div>
				<div class="form-group col-md-12">
					<label for="spouseinvestaccholdername">Naam van rekeninghouer (Gade)</label>
					<input type="text" class="form-control" name="spouseinvestaccholdername" id="spouseinvestaccholdername" placeholder="Naam van rekeninghouer (Gade)">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseinvestaccholderbank">Bank</label>
					<input type="text" class="form-control" name="spouseinvestaccholderbank" id="spouseinvestaccholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseinvestaccbranchcode">Takkode</label>
					<input type="text" class="form-control" name="spouseinvestaccbranchcode" id="spouseinvestaccbranchcode" placeholder="Takkode">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseinvestacctype">Tipe rekening</label>
					<input type="text" class="form-control" name="spouseinvestacctype" id="spouseinvestacctype" placeholder="Tipe rekening">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseinvestaccnumber">Rekeningnommer</label>
					<input type="text" class="form-control" name="spouseinvestaccnumber" id="spouseinvestaccnumber" placeholder="Rekeningnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>KREDIETKAART</h5></div>
				<div class="form-group col-md-12">
					<label for="credaccholdername">Naam van rekeninghouer</label>
					<input type="text" class="form-control" name="credaccholdername" id="credaccholdername" placeholder="Naam van rekeninghouer">
				</div>
				<div class="form-group col-md-6">
					<label for="credaccholderbank">Bank</label>
					<input type="text" class="form-control" name="credaccholderbank" id="credaccholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="credaccbranchcode">Takkode</label>
					<input type="text" class="form-control" name="credaccbranchcode" id="credaccbranchcode" placeholder="Takkode">
				</div>
				<div class="form-group col-md-6">
					<label for="credacctype">Tipe rekening</label>
					<input type="text" class="form-control" name="credacctype" id="credacctype" placeholder="Tipe rekening">
				</div>
				<div class="form-group col-md-6">
					<label for="credaccnumber">Rekeningnommer</label>
					<input type="text" class="form-control" name="credaccnumber" id="credaccnumber" placeholder="Rekeningnommer">
				</div>
				<div class="form-group col-md-12">
					<label for="spousecredaccholdername">Naam van rekeninghouer (Gade)</label>
					<input type="text" class="form-control" name="spousecredaccholdername" id="spousecredaccholdername" placeholder="Naam van rekeninghouer (Gade)">
				</div>
				<div class="form-group col-md-6">
					<label for="spousecredaccholderbank">Bank</label>
					<input type="text" class="form-control" name="spousecredaccholderbank" id="spousecredaccholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="spousecredaccbranchcode">Takkode</label>
					<input type="text" class="form-control" name="spousecredaccbranchcode" id="spousecredaccbranchcode" placeholder="Takkode">
				</div>
				<div class="form-group col-md-6">
					<label for="spousecredacctype">Tipe rekening</label>
					<input type="text" class="form-control" name="spousecredacctype" id="spousecredacctype" placeholder="Tipe rekening">
				</div>
				<div class="form-group col-md-6">
					<label for="spousecredaccnumber">Rekeningnommer</label>
					<input type="text" class="form-control" name="spousecredaccnumber" id="spousecredaccnumber" placeholder="Rekeningnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>HUISVERBAND</h5></div>
				<div class="form-group col-md-6">
					<label for="hlaccholderbank">Bank</label>
					<input type="text" class="form-control" name="hlaccholderbank" id="hlaccholderbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="hlaccbranchcode">Takkode</label>
					<input type="text" class="form-control" name="hlaccbranchcode" id="hlaccbranchcode" placeholder="Takkode">
				</div>
				<div class="form-group col-md-6">
					<label for="hlacctype">Tipe rekening</label>
					<input type="text" class="form-control" name="hlacctype" id="hlacctype" placeholder="Tipe rekening">
				</div>
				<div class="form-group col-md-6">
					<label for="hlaccnumber">Rekeningnommer</label>
					<input type="text" class="form-control" name="hlaccnumber" id="hlaccnumber" placeholder="Rekeningnommer">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Voeg by</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>LENINGSOOREENKOMSTE</h5></div>
				<div class="form-group col-md-12">
					<label for="lagaccholdername">Naam van rekeninghouer</label>
					<input type="text" class="form-control" name="lagaccholdername" id="lagaccholdername" placeholder="Naam van rekeninghouer">
				</div>
				<div class="form-group col-md-6">
					<label for="lagaccnumber">Rekeningnommer</label>
					<input type="text" class="form-control" name="lagaccnumber" id="lagaccnumber" placeholder="Rekeningnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="lagaccholderbank">Bank / Instansie</label>
					<input type="text" class="form-control" name="lagaccholderbank" id="lagaccholderbank" placeholder="Bank / Instansie">
				</div>
				<div class="form-group col-md-6">
					<label for="lagaccbranchcode">Takkode</label>
					<input type="text" class="form-control" name="lagaccbranchcode" id="lagaccbranchcode" placeholder="Takkode">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>VOERTUIG HUURKOOPOOREENKOMSTE</h5></div>
				<div class="form-group col-md-12">
					<label for="vragaccholdername">Naam van rekeninghouer</label>
					<input type="text" class="form-control" name="vragaccholdername" id="vragaccholdername" placeholder="Naam van rekeninghouer">
				</div>
				<div class="form-group col-md-6">
					<label for="vragaccbranchcode">Voertuig</label>
					<input type="text" class="form-control" name="vragaccbranchcode" id="vragaccbranchcode" placeholder="Voertuig">
				</div>
				<div class="form-group col-md-6">
					<label for="vragaccholderbank">Bank / Instansie</label>
					<input type="text" class="form-control" name="vragaccholderbank" id="vragaccholderbank" placeholder="Bank / Instansie">
				</div>
				<div class="form-group col-md-6">
					<label for="vragaccnumber">Rekeningnommer</label>
					<input type="text" class="form-control" name="vragaccnumber" id="vragaccnumber" placeholder="Rekeningnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>ADDISIONELE KREDIETKAARTE</h5></div>
				<div class="form-group col-md-12">
					<label for="addcredaccholdername">Naam van rekeninghouer</label>
					<input type="text" class="form-control" name="addcredaccholdername" id="addcredaccholdername" placeholder="Naam van rekeninghouer">
				</div>
				<div class="form-group col-md-6">
					<label for="addcredaccholderbank">Instansie</label>
					<input type="text" class="form-control" name="addcredaccholderbank" id="addcredaccholderbank" placeholder="Instansie">
				</div>
				<div class="form-group col-md-6">
					<label for="addcredaccnumber">Rekeningnommer</label>
					<input type="text" class="form-control" name="addcredaccnumber" id="addcredaccnumber" placeholder="Rekeningnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="other-info"><h5>ADDISIONELE INLIGTING</h5></label>
			  		<textarea type="text" class="form-control" name="other-info" id="other-info"> </textarea>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="upload-docs"><h5>LAAI AFSKRIFTE VAN KAARTE EN DOKUMENTE HIER OP</h5></label>
					<input type="file" class="form-control" name="upload-docs" id="upload-docs">
				</div>
			</div>
 			<div class="form-row">
				<div class="form-group col-md-12">
 					<button type="submit" class="btn btn-primary">Stoor</button>
				</div>
			</div>
		</form>
	</div>
<!-- /.col-lg-12--></div>
  ';
}
?>