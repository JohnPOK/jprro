<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<div>
			<img class="card-img-top" style="text-align: center;" src="images/uploaddocs.png" alt="">
			<h1>Kontrolelys van gestoorde dokumente</h1>
			<p>(Tik af sodra die dokument in die “Dokumente lêer” geplaas is)</p>
		</div>

		<form>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="lastwillandtest">
					 <label for="lastwillandtest">Testament</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="ofshorelastwilltest">
					 <label for="ofshorelastwilltest">Buitelandse Testament</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="prevwillappestate">
					 <label for="prevwillappestate">Vorige testament (van toepassing op jou boedel)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="codicilsattachm">
					 <label for="codicilsattachm">Kodisille (aanhangsels)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="iddoccertcopy">
					 <label for="iddoccertcopy">Identiteitsdokument</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="passport">
					 <label for="passport">Paspoort</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="birthcert">
					 <label for="birthcert">Geboortesertifikaat</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="marrcert">
					 <label for="marrcert">Huweliksertifikaat</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="matrimcontract">
					 <label for="matrimcontract">Huweliksvoorwaardekontrakte</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="cohabitagreem">
					 <label for="cohabitagreem">Saamwoon-ooreenkomste</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="divorceorder">
					 <label for="divorceorder">Egskeidingsbevel</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="funeralpol">
					 <label for="funeralpol">Begrafnispolis</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="iddocsofheirs">
					 <label for="iddocsofheirs">Erfgename Identiteitsdokumente</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="medaid">
					 <label for="medaid">Mediesefonds</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="hosplan">
					 <label for="hosplan">Hospitaalplan</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="driverslic">
					 <label for="driverslic">Bestuurslisensie</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="firearmlics">
					 <label for="firearmlics">Vuurwapenlisensie</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="payroll">
					 <label for="payroll">Betaalstaat</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="latinctaxret">
					 <label for="latinctaxret">Nuutste Inkomstebelastingopgawe</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="bankcards">
					 <label for="bankcards">Bankkaarte</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="loanagreem">
					 <label for="loanagreem">Leningsooreenkomste</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="motvechreg">
					 <label for="motvechreg">Motorvoertuig registrasie</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="titledeeds">
					 <label for="titledeeds">Titelakte(s)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="valuationsofprop">
					 <label for="valuationsofprop">Waardasiesertifikaat van eiendomme aangekoop voor 1 Oktober 2001 vir kapitaalwinsbelasting doeleindes</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="lifinspols">
					 <label for="lifinspols">Lewensversekeringspolis(se)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="endowpols">
					 <label for="endowpols">Uitkeerpolisse</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="annuities">
					 <label for="annuities">Annuïteite</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="penscard">
					 <label for="penscard">Pensioenkaart</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="trustdeed">
					 <label for="trustdeed">Trustakte</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="sharecert">
					 <label for="sharecert">Aandelesertifikaat</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="unittruscertif">
					 <label for="unittruscertif">Effektetrust sertifikaat</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="timeshare">
					 <label for="timeshare">Tyddeel</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="compreg">
					 <label for="compreg">Maatskappy registrasie</label>
				</div>
			</div>

			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="latfinstat">
					 <label for="latfinstat">Nuustste Finansiële State</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="purandsalagr">
					 <label for="purandsalagr">Koop en Verkoopsooreenkoms</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="leasagreem">
					 <label for="leasagreem">Huurooreenkomste</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="telcontract">
					 <label for="telcontract">Telefoonkontrakte</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="wificontr">
					 <label for="wificontr">Internet kontrak</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="munaccount">
					 <label for="munaccount">Munisipale rekeninge</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="shtermins">
					 <label for="shtermins">Korttermynversekering</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="armedresp">
					 <label for="armedresp">Gewapende Reaksie</label>
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
					 <label for="televlic">Televisielisensie</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="subscript">
					 <label for="subscript">Subskripsies</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="cardsvarious">
					 <label for="cardsvarious">Kaarte (Dischem, uCount ens)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="otherinfo">Ander</label>
					 <textarea type="text" class="form-control" name="otherinfo" id="otherinfo"></textarea>
				</div>
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
