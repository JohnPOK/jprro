<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/contact.jpg" alt="">
		<h1>Kontakpersone en Telefoonnommers</h1>

 		<form>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>POLISIE</h5></div>
				<div class="form-group col-md-6">
					<label for="selectbranch">Tak</label>
					<select class="form-control" id="selectbranch" name="selectbranch">
						<option selected>Kies...</option>
						<option>...</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="telnobranch">Telefoonnommer</label>
					<input type="text" class="form-control" name="telnobranch" id="telnobranch" placeholder="Telefoonnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>HUISDOKTER</h5></div>
				<div class="form-group col-md-6">
					<label for="medpractname">Huisdokter</label>
					<input type="text" class="form-control" name="medpractname" id="medpractname" placeholder="Huisdokter">
				</div>
				<div class="form-group col-md-6">
					<label for="medpracttelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="medpracttelno" id="medpracttelno" placeholder="Telefoonnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>TWEE ERFGENAME MET SLEUTELS TOT MY PERSOONLIKE KLUIS</h5></div>
				<div class="form-group col-md-12">
					<label for="heirskeysname">Name</label>
					<input type="text" class="form-control" name="heirskeysname" id="heirskeysname" placeholder="Name">
				</div>
				<div class="form-group col-md-6">
					<label for="heirskeystelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="heirskeystelno" id="heirskeystelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="heirskeysmail">Eposadres</label>
					<input type="text" class="form-control" name="heirskeysmail" id="heirskeysmail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>BEGRAFNISONDERNEMER</h5></div>
				<div class="form-group col-md-12">
					<label for="funcontrcomp">Firma</label>
					<input type="text" class="form-control" name="funcontrcomp" id="funcontrcomp" placeholder="Firma">
				</div>
				<div class="form-group col-md-6">
					<label for="funcontrpolno">Polisnommer</label>
					<input type="text" class="form-control" name="funcontrpolno" id="funcontrpolno" placeholder="Polisnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="funcontrpolhold">Naam van polishouer</label>
					<input type="text" class="form-control" name="funcontrpolhold" id="funcontrpolhold" placeholder="Naam van polishouer">
				</div>
				<div class="form-group col-md-6">
					<label for="funcontrtelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="funcontrtelno" id="funcontrtelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="funcontrmail">Eposadres</label>
					<input type="text" class="form-control" name="funcontrmail" id="funcontrmail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>GELOOFSLERAAR</h5></div>
				<div class="form-group col-md-12">
					<label for="faith">Geloof</label>
					<input type="text" class="form-control" name="faith" id="faith" placeholder="Geloof">
				</div>
				<div class="form-group col-md-6">
					<label for="faithcontper">Kontakpersoon</label>
					<input type="text" class="form-control" name="faithcontper" id="faithcontper" placeholder="Kontakpersoon">
				</div>
				<div class="form-group col-md-6">
					<label for="faithtelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="faithtelno" id="faithtelno" placeholder="Telefoonnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>EKSEKUTEUR</h5></div>
				<div class="form-group col-md-6">
					<label for="executorcomp">Firma</label>
					<input type="text" class="form-control" name="executorcomp" id="executorcomp" placeholder="Firma">
				</div>
				<div class="form-group col-md-6">
					<label for="executorcontper">Kontakpersoon</label>
					<input type="text" class="form-control" name="executorcontper" id="executorcontper" placeholder="Kontakpersoon">
				</div>
				<div class="form-group col-md-6">
					<label for="executortelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="executortelno" id="executortelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="executormail">Eposadres</label>
					<input type="email" class="form-control" name="executormail" id="executormail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>WERKGEWER</h5></div>
				<div class="form-group col-md-6">
					<label for="employcomp">Maatskappy</label>
					<input type="text" class="form-control" name="employcomp" id="employcomp" placeholder="Maatskappy">
				</div>
				<div class="form-group col-md-6">
					<label for="employcontper">Kontakpersoon</label>
					<input type="text" class="form-control" name="employcontper" id="employcontper" placeholder="Kontakpersoon">
				</div>
				<div class="form-group col-md-6">
					<label for="employtelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="employtelno" id="employtelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="employmail">Eposadres</label>
					<input type="email" class="form-control" name="employmail" id="employmail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>WERKNEMERS (Sien aangehegte lys in Dokumente skakel)</h5></div>
				<div class="form-group col-md-12">
					<label for="employscontper">Kontakpersoon</label>
					<input type="text" class="form-control" name="employscontper" id="employscontper" placeholder="Kontakpersoon">
				</div>
				<div class="form-group col-md-6">
					<label for="employstelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="employstelno" id="employstelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="employsmail">Eposadres</label>
					<input type="email" class="form-control" name="employsmail" id="employsmail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>ERFGENAME</h5></div>
				<div class="form-group col-md-12">
					<label for="beneffullnames">Volle name</label>
					<input type="text" class="form-control" name="beneffullnames" id="beneffullnames" placeholder="Volle name">
				</div>
				<div class="form-group col-md-6">
					<label for="benefaddress">Adres</label>
					<input type="text" class="form-control" name="benefaddress" id="benefaddress" placeholder="Adres">
				</div>
				<div class="form-group col-md-6">
					<label for="benefidnum">Idenditeitsnommer</label>
					<input type="text" class="form-control" name="benefidnum" id="benefidnum" placeholder="Idenditeitsnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="beneftelnum">Telefoonnommer</label>
					<input type="text" class="form-control" name="beneftelnum" id="beneftelnum" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="benefmail">Eposadres</label>
					<input type="email" class="form-control" name="benefmail" id="benefmail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>MEDIESEFONDS</h5></div>
				<div class="form-group col-md-6">
					<label for="medaidscheme">Skema</label>
					<input type="text" class="form-control" name="medaidscheme" id="medaidscheme" placeholder="Skema">
				</div>
				<div class="form-group col-md-6">
					<label for="medaidnum">Mediesfondsnommer</label>
					<input type="text" class="form-control" name="medaidnum" id="medaidnum" placeholder="Mediesfondsnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="medaidmainmem">Hooflid</label>
					<input type="text" class="form-control" name="medaidmainmem" id="medaidmainmem" placeholder="Main member">
				</div>
				<div class="form-group col-md-6">
					<label for="medaidtelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="medaidtelno" id="medaidtelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Eposadres</label>
					<input type="email" class="form-control" name="email-medical" id="email-medical" placeholder="Email">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>PENSIOENSKEMA</h5></div>
				<div class="form-group col-md-6">
					<label for="pensionscheme">Skema</label>
					<input type="text" class="form-control" name="pensionscheme" id="pensionscheme" placeholder="Skema">
				</div>
				<div class="form-group col-md-6">
					<label for="penschemnum">Nommer</label>
					<input type="text" class="form-control" name="penschemnum" id="penschemnum" placeholder="Nommer">
				</div>
				<div class="form-group col-md-6">
					<label for="penschemtelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="penschemtelno" id="penschemtelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="penschemmail">Eposadres</label>
					<input type="email" class="form-control" name="penschemmail" id="penschemmail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>OUDITEUR</h5></div>
				<div class="form-group col-md-6">
					<label for="auditcomp">Firma</label>
					<input type="text" class="form-control" name="auditcomp" id="auditcomp" placeholder="Firma">
				</div>
				<div class="form-group col-md-6">
					<label for="auditcontper">Kontakpersoon</label>
					<input type="text" class="form-control" name="auditcontper" id="auditcontper" placeholder="Kontakpersoon">
				</div>
				<div class="form-group col-md-6">
					<label for="audittelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="audittelno" id="audittelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="auditmail">Eposadres</label>
					<input type="email" class="form-control" name="auditmail" id="auditmail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>PROKUREUR</h5></div>
				<div class="form-group col-md-6">
					<label for="lawcomp">Firma</label>
					<input type="text" class="form-control" name="lawcomp" id="lawcomp" placeholder="Firma">
				</div>
				<div class="form-group col-md-6">
					<label for="lawcontper">Kontakpersoon</label>
					<input type="text" class="form-control" name="lawcontper" id="lawcontper" placeholder="Kontakpersoon">
				</div>
				<div class="form-group col-md-6">
					<label for="lawtelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="lawtelno" id="lawtelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="lawmail">Eposadres</label>
					<input type="email" class="form-control" name="lawmail" id="lawmail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>PERSOONLIKE BANKIER</h5></div>
				<div class="form-group col-md-6">
					<label for="perbank">Bank</label>
					<input type="text" class="form-control" name="perbank" id="perbank" placeholder="Bank">
				</div>
				<div class="form-group col-md-6">
					<label for="perbankcontper">Kontakpersoon</label>
					<input type="text" class="form-control" name="perbankcontper" id="perbankcontper" placeholder="Kontakpersoon">
				</div>
				<div class="form-group col-md-6">
					<label for="perbanktelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="perbanktelno" id="perbanktelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="perbankmail">Eposadres</label>
					<input type="email" class="form-control" name="perbankmail" id="perbankmail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>MAKELAAR</h5></div>
				<div class="form-group col-md-6">
					<label for="brokercomp">Firma</label>
					<input type="text" class="form-control" name="brokercomp" id="brokercomp" placeholder="Firma">
				</div>
				<div class="form-group col-md-6">
					<label for="brokercontper">Kontakpersoon</label>
					<input type="text" class="form-control" name="brokercontper" id="brokercontper" placeholder="Kontakpersoon">
				</div>
				<div class="form-group col-md-6">
					<label for="brokertelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="brokertelno" id="brokertelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="brokermail">Eposadres</label>
					<input type="email" class="form-control" name="brokermail" id="brokermail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>KORTTERMYNVERSEKERING</h5></div>
				<div class="form-group col-md-6">
					<label for="shterincomp">Maatskappy</label>
					<input type="text" class="form-control" name="shterincomp" id="shterincomp" placeholder="Maatskappy">
				</div>
				<div class="form-group col-md-6">
					<label for="shterincontper">Kontakpersoon</label>
					<input type="text" class="form-control" name="shterincontper" id="shterincontper" placeholder="Kontakpersoon">
				</div>
				<div class="form-group col-md-6">
					<label for="shterintelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="shterintelno" id="shterintelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="shterinmail">Eposadres</label>
					<input type="email" class="form-control" name="shterinmail" id="shterinmail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>LEWENSVERSEKERING</h5></div>
				<div class="form-group col-md-6">
					<label for="lifinscomp">Maatskappy</label>
					<input type="text" class="form-control" name="lifinscomp" id="lifinscomp" placeholder="Maatskappy">
				</div>
				<div class="form-group col-md-6">
					<label for="lifinscontper">Kontakpersoon</label>
					<input type="text" class="form-control" name="lifinscontper" id="lifinscontper" placeholder="Kontakpersoon">
				</div>
				<div class="form-group col-md-6">
					<label for="lifinstelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="lifinstelno" id="lifinstelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="lifinsmail">Eposadres</label>
					<input type="email" class="form-control" name="lifinsmail" id="lifinsmail" placeholder="Eposadres">
				</div>
			</div>
 			<div class="form-row">
				<div class="form-group col-md-12"><h5>TRUSTEES VAN TRUST</h5></div>
				<div class="form-group col-md-6">
					<label for="trusteename">Naam</label>
					<input type="text" class="form-control" name="trusteename" id="trusteename" placeholder="Naam">
				</div>
				<div class="form-group col-md-6">
					<label for="trusteeidnum">Identiteitnommer</label>
					<input type="text" class="form-control" name="trusteeidnum" id="trusteeidnum" placeholder="Identiteitnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="trusteetelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="trusteetelno" id="trusteetelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="trusteemail">Eposadres</label>
					<input type="email" class="form-control" name="trusteemail" id="trusteemail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>VENNOTE / DIREKTEURE VAN MAATSKAPPY</h5></div>
				<div class="form-group col-md-6">
					<label for="partdirname">Naam</label>
					<input type="text" class="form-control" name="partdirname" id="partdirname" placeholder="Naam">
				</div>
				<div class="form-group col-md-6">
					<label for="partdiridnum">Identiteitnommer</label>
					<input type="text" class="form-control" name="partdiridnum" id="partdiridnum" placeholder="Identiteitnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="partdirtelno">Telefoonnommer</label>
					<input type="text" class="form-control" name="partdirtelno" id="partdirtelno" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="partdirmail">Eposadres</label>
					<input type="email" class="form-control" name="partdirmail" id="partdirmail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>ADDISIONELE INLIGTING</h5></div>
				<div class="form-group col-md-12">
					<textarea type="text" class="form-control" name="contwishadditinfo" id="contwishadditinfo"></textarea>
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
