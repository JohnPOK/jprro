<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/liabilities.png" alt="">
		<h1>Lys van laste / Maandelikse uitgawes</h1>

		<form>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>TELEPHONE</h5></div>
				<div class="form-group col-md-6">
					<label for="telaccholname">Naam van rekeninghouer</label>
					<input type="text" class="form-control" name="telaccholname" id="telaccholname" placeholder="Naam van rekeninghouer">
				</div>
				<div class="form-group col-md-6">
					<label for="liatelnum">Telefoonnommer</label>
					<input type="text" class="form-control" name="liatelnum" id="liatelnum" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="liatelprov">Verskaffer</label>
					<input type="text" class="form-control" name="liatelprov" id="liatelprov" placeholder="Verskaffer">
				</div>
				<div class="form-group col-md-6">
					<label for="liaaccnum">Rekeningnommer</label>
					<input type="text" class="form-control" name="liaaccnum" id="liaaccnum" placeholder="Rekeningnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>INTERNET VERSKAFFER</h5></div>
				<div class="form-group col-md-6">
					<label for="ispaccholdername">Naam van rekeninghouer</label>
					<input type="text" class="form-control" name="ispaccholdername" id="ispaccholdername" placeholder="Naam van rekeninghouer">
				</div>
				<div class="form-group col-md-6">
					<label for="ispprov">Verskaffer</label>
					<input type="text" class="form-control" name="liatelprov" id="liatelprov" placeholder="Verskaffer">
				</div>
				<div class="form-group col-md-6">
					<label for="accnumber">Rekeningnommer</label>
					<input type="text" class="form-control" name="accnumber" id="accnumber" placeholder="Rekeningnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>MUNISIPALITEIT</h5></div>
				<div class="form-group col-md-12">
					<label for="munproperty">Eiendom</label>
					<input type="text" class="form-control" name="munproperty" id="munproperty" placeholder="Eiendom">
				</div>
				<div class="form-group col-md-6">
					<label for="municipality">Munisipaliteit</label>
					<input type="text" class="form-control" name="municipality" id="municipality" placeholder="Munisipaliteit">
				</div>
				<div class="form-group col-md-6">
					<label for="ratesandtaxes">Erfbelastingnommer</label>
					<input type="text" class="form-control" name="ratesandtaxes" id="ratesandtaxes" placeholder="Erfbelastingnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="elecaccno">Elektrisiteit rekeningnommer</label>
					<input type="text" class="form-control" name="elecaccno" id="elecaccno" placeholder="Elektrisiteit rekeningnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="watbillno">Water rekeningnommer</label>
					<input type="text" class="form-control" name="watbillno" id="watbillno" placeholder="Water rekeningnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>KORTTERMYNVERSEKERING</h5></div>
				<div class="form-group col-md-6">
					<label for="stinsinsurer">Versekeraar</label>
					<input type="text" class="form-control" name="stinsinsurer" id="stinsinsurer" placeholder="Versekeraar">
				</div>
				<div class="form-group col-md-6">
					<label for="stinsbroker">Makelaar</label>
					<input type="text" class="form-control" name="stinsbroker" id="stinsbroker" placeholder="Makelaar">
				</div>
				<div class="form-group col-md-6">
					<label for="stinsinsured">Versekerde</label>
					<input type="text" class="form-control" name="stinsinsured" id="stinsinsured" placeholder="Versekerde">
				</div>
				<div class="form-group col-md-6">
					<label for="stnspolno">Polisnommer</label>
					<input type="text" class="form-control" name="stnspolno" id="stnspolno" placeholder="Polisnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>GEWAPENDE REAKSIE (SEKURITEIT)</h5></div>
				<div class="form-group col-md-6">
					<label for="seccompany">Maatskappy</label>
					<input type="text" class="form-control" name="seccompany" id="seccompany" placeholder="Maatskappy">
				</div>
				<div class="form-group col-md-6">
					<label for="secaccno">Rekeningnommer</label>
					<input type="text" class="form-control" name="secaccno" id="secaccno" placeholder="Rekeningnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>DSTV</h5></div>
				<div class="form-group col-md-6">
					<label for="dstvEienaar">Eienaar</label>
					<input type="text" class="form-control" name="dstvEienaar" id="dstvEienaar" placeholder="Eienaar">
				</div>
				<div class="form-group col-md-6">
					<label for="dstvaccnumber">Rekeningnommer</label>
					<input type="text" class="form-control" name="dstvaccnumber" id="dstvaccnumber" placeholder="Rekeningnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>TELEVISIE LISENSIE</h5></div>
				<div class="form-group col-md-6">
					<label for="tellicEienaar">Eienaar</label>
					<input type="text" class="form-control" name="tellicEienaar" id="tellicEienaar" placeholder="Eienaar">
				</div>
				<div class="form-group col-md-6">
					<label for="tellicaccnum">Rekeningnommer</label>
					<input type="text" class="form-control" name="tellicaccnum" id="tellicaccnum" placeholder="Rekeningnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>HUUROOREENKOMSTE</h5></div>
				<div class="form-group col-md-6">
					<label for="leasagrtenant">Huurder</label>
					<input type="text" class="form-control" name="leasagrtenant" id="leasagrtenant" placeholder="Huurder">
				</div>
				<div class="form-group col-md-6">
					<label for="leasagrlandlord">Verhuurder</label>
					<input type="text" class="form-control" name="leasagrlandlord" id="leasagrlandlord" placeholder="Verhuurder">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>SUBSKRIPSIES</h5></div>
				<div class="form-group col-md-6">
					<label for="subscracchold">Rekeninghouer</label>
					<input type="text" class="form-control" name="subscracchold" id="subscracchold" placeholder="Rekeninghouer">
				</div>
				<div class="form-group col-md-6">
					<label for="subscraccnum">Rekeningnommer</label>
					<input type="text" class="form-control" name="subscraccnum" id="subscraccnum" placeholder="Rekeningnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="subscrinstitution">Instansie</label>
					<input type="text" class="form-control" name="subscrinstitution" id="subscrinstitution" placeholder="Instansie">
				</div>
				<div class="form-group col-md-6">
					<label for="subscrtypofsubscr">Tipe subskripsie</label>
					<input type="text" class="form-control" name="subscrtypofsubscr" id="subscrtypofsubscr" placeholder="Tipe subskripsie">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="personaladd-info"><h5>ADDISIONELE INLIGTING</h5></label>
					<textarea type="text" class="form-control" name="personaladd-info" id="personaladd-info"></textarea>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="uploaddocs"><h5>LAAI AFSKRIFTE VAN REKENINGE EN DOKUMENTE HIER OP</h5></label>
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