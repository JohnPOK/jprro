<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row" >
		<img class="card-img-top" style="text-align: center;" src="images/children.jpg" alt="">
		<h1>Minderjarige kinders</h1>

		<p>Indien jy nie jou wense op skrif stel nie, kan die Meester van die Hoogeregshof namens jou ‘n besluit neem en jy het geen beheer daaroor nie. Ons beveel aan dat jy jou eerste en tweede keuse van voogde benoem. Maak seker dat jy jou redes vir benoeming noem nl.: 
			<ul>
				<li>Hoekom jy oortuig is dat die benoemdes ‘n stabiele en volhoubare sorg aan jou kinders sal sal kan bied</li>
				<li>Die verwantskapverhouding tussen die benoemdes en jou kinders</li>
				<li>Dat die benoemdes oor die morele geskiktheid beskik om na jou kinders om te sien</li>
			</ul>
		</p>

		<h2>Ek stel hiermee die volgende persone as voogde oor my kinder(s) aan:</h2>
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="guardname">Naam</label>
					<input type="text" class="form-control" name="guardname" id="guardname" placeholder="Naam">
				</div>
				<div class="form-group col-md-6">
					<label for="guardaddress">Adres</label>
					<input type="text" class="form-control" name="guardaddress" id="guardaddress" placeholder="Naam">
				</div>
				<div class="form-group col-md-6">
					<label for="guardtelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="guardtelno" id="guardtelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="guardmail">Eposadres</label>
					<input type="text" class="form-control" name="guardmail" id="guardmail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="additional-info">Dit is my wens dat</label>
					<textarea type="text" class="form-control" name="additional-info" id="additional-info"> </textarea>
				</div>
			</div>
  			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="submit" class="btn btn-primary">Stoor</button>
				</div>
			</div>
		</form>
	</div>

<!-- /.col-lg-9 --></div>
  ';
}
?>