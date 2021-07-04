<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<div>
			<img class="card-img-top" style="text-align: center;" src="images/checklist.png" alt="">
			<h1>Lys van <i>OORSPRONKLIKE</i> dokumente</h1>
			<p>(Hierdie oorspronklike dokumente sal deur die eksekuteur benodig word.  Voltooi die vorm, druk dit uit en plaas dit voor in die leêr met al jou oorspronklike dokumente.  Maak asseblief seker dat dit op ‘n uiters veilig plek bewaar word.)</p>
		</div>		

		<form>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="livingtestament">
					 <label for="livingtestament">Lewende Testament</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="lastwilltestament">
					 <label for="lastwilltestament">Testament</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="foreigntestament">
					 <label for="foreigntestament">Buitelandse Testament</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="prevwillappestate">
					 <label for="prevwillappestate">Vorige testament van toepassing op jou boedel</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="codicilsattach">
					 <label for="codicilsattach">Kodisille (aanhangsels)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="iddoccertcopy">
					 <label for="iddoccertcopy">Identiteitsdokument (gesertifiseerde afskrif)</label>
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
					  <input type="checkbox" class="form-check-input" value="" id="firearmlics">
					 <label for="firearmlics">Vuurwapenlisensie(s)</label>
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
					 <label for="valuationsofprop">Waardasies van eiendomme aangekoop voor 1 Oktober 2001 vir kapitaalwinsbelasting doeleindes</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="trustdeedletofauth">
					 <label for="trustdeedletofauth">Trustakte en Magtigingsbrief</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="sharecertif">
					 <label for="sharecertif">Aandelesertifikaat</label>
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
					  <input type="checkbox" class="form-check-input" value="" id="perchandsale">
					 <label for="perchandsale">Koop en Verkoopsooreenkoms</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="iddocsofheirs">
					 <label for="iddocsofheirs">Identiteitsdokumente van erfgename (gesertifiseerde afskrifte)</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="listofpassw">
					 <label for="listofpassw">Lys van Wagwoorde</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="checklistother"><h5>ANDER</h5></label>
			  <textarea type="text" class="form-control" name="checklistother" id="checklistother">
			  </textarea>
			</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<p><a href="#">DRUK Kontrolelys</a></p>
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
