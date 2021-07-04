<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/key.jpg" alt="">
		<h1>My persoonlike besittings</h1>
		<p>Persoonlike besittings is items (roerende bates) wat deel van jou persoon uitmaak en word normaalweg nie in \'n testament genoem nie.  Dit sluit in familie-erfstukke, skilderye, muntversameling, vuurwapens, juweliersware ens.  Dit word aanbeveel dat jy dit voor die tyd met jou geliefdes bespreek om seker te maak dat jy wel die regte keuses maak.  Deur dit dan op skrif te plaas, maak jy seker dat jy nie jou geliefdes in ‘n posisie plaas waar daar dalk kwade gevoelens of \'n rusie kan ontstaan nie. Voertuie word ook gesien as persoonlike besittings en dit is belangrik dat indien ‘n geliefde jou motor wil gebruik net na jou afsterwe,  toestemming van die eksekuteur, huurkoopagent asook versekeringsmaatskappy verkry moet word.</p>

		<h5>Dit is my wens om die volgende persoonlike besittings (wat nie in my testament gespesifiseer is nie), aan die genoemde persone te skenk </h5>

		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="donatedname">Naam</label>
					<input type="text" class="form-control" name="donatedname" id="donatedname" placeholder="Naam">
				</div>
				<div class="form-group col-md-6">
					<label for="donateditem">Item</label>
					<input type="text" class="form-control" name="donateditem" id="donateditem" placeholder="Item">
				</div>
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
				<div class="form-group col-md-12">
					<label for="additional-info">ADDISIONELE INLIGTING</label>
			 		<textarea type="text" class="form-control" name="additional-info" id="additional-info"></textarea>
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