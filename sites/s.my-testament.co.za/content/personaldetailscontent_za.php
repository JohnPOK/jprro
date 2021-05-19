<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/personal.png" alt="">
		<h1>Persoonlike inligting</h1>
		<p>Vul die onderstaande inligting volledig in en heg afskrifte van betrokke dokumente aan.  Daar is voorsiening gemaak vir twee persone se inligting – dit is belangrik om beide jou en jou gade se inligting in te vul.</p>

		<form>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>VOLLE NAAM EN VAN</h5></div>
				<div class="form-group col-md-6">
					<label for="fullname">Volle name</label>
					<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Volle name">
				</div>
				<div class="form-group col-md-6">
					<label for="surname">Van</label>
					<input type="text" class="form-control" name="surname" id="surname" placeholder="Van">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>IDENTITEITS NOMMER</h5></div>
				<div class="form-group col-md-6">
					<label for="idnumber">Identiteits nommer</label>
					<input type="text" class="form-control" name="idnumber" id="idnumber" placeholder="Identiteits nommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>GEBOORTESERTIFIKAAT</h5></div>
				<div class="form-group col-md-6">
					<label for="birthcertificate">Geboortesertifikaat</label>
					<input type="text" class="form-control" name="birthcert" id="birthcert" placeholder="Geboortesertifikaat">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>PASPOORT NOMMER</h5></div>
				<div class="form-group col-md-6">
					<label for="passportnumber">Paspoort nommer</label>
					<input type="text" class="form-control" name="passportnumber" id="passportnumber" placeholder="Paspoort nommer">
				</div>
				<div class="form-group col-md-6">
					<label for="expirationdate">Vervaldatum</label>
					<input type="text" class="form-control" name="expirationdate" id="expirationdate" placeholder="Vervaldatum">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>VOLLE NAAM EN VAN (GADE)</h5></div>
				<div class="form-group col-md-6">
					<label for="spousefullname">Volle name</label>
					<input type="text" class="form-control" name="spousefullname" id="spousefullname" placeholder="Volle name">
				</div>
				<div class="form-group col-md-6">
					<label for="spousesurname">Van</label>
					<input type="text" class="form-control" name="spousesurname" id="spousesurname" placeholder="Van">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>NOOIENSVAN</h5></div>
				<div class="form-group col-md-6">
					<label for="spousemaidenname">Nooiensvan</label>
					<input type="text" class="form-control" name="spousemaidenname" id="spousemaidenname" placeholder="Nooiensvan">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>IDENTITEITS NOMMER</h5></div>
				<div class="form-group col-md-6">
					<label for="spouseidnumber">Identiteits nommer</label>
					<input type="text" class="form-control" name="spouseidnumber" id="spouseidnumber" placeholder="Identiteits nommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>GEBOORTESERTIFIKAAT</h5></div>
				<div class="form-group col-md-6">
					<label for="spousebirthcertificate">Geboortesertifikaat</label>
					<input type="text" class="form-control" name="spousebirthcertificate" id="spousebirthcertificate" placeholder="Geboortesertifikaat">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>PASPOORT NOMMER</h5></div>
				<div class="form-group col-md-6">
					<label for="spousepassportnumber">Paspoort nommer</label>
					<input type="text" class="form-control" name="spousepassportnumber" id="spousepassportnumber" placeholder="Paspoort nommer">
				</div>
				<div class="form-group col-md-6">
					<label for="spouseexpirationdate">Vervaldatum</label>
					<input type="text" class="form-control" name="spouseexpirationdate" id="spouseexpirationdate" placeholder="Vervaldatum">
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="marriagecert">
					 <label for="marriagecert"><h5>HUWELIKSERFIFIKAAT</h5></label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="prenupcontract">
					 <label for="prenupcontract"><h5>HUWELIKSVOORWAARDEKONTRAK</h5></label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="divorceorder">
					 <label for="divorceorder"><h5>EGSKEIDING EN SKIKKING BEVEL</h5></label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-check">
					  <input type="checkbox" class="form-check-input" value="" id="cohabagreement">
					 <label for="cohabagreement"><h5>SAAMWOON OOREENKOMS</h5></label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>BEGRAFNISPOLIS</h5></div>
				<div class="form-group col-md-6">
					<label for="funpolowner">Polishouer</label>
					<input type="text" class="form-control" name="funpolowner" id="funpolowner" placeholder="Polishouer">
				</div>
				<div class="form-group col-md-6">
					<label for="funInstansie">Instansie</label>
					<input type="text" class="form-control" name="funInstansie" id="funInstansie" placeholder="Instansie">
				</div>
				<div class="form-group col-md-6">
					<label for="funpolicynum">Polisnommer</label>
					<input type="text" class="form-control" name="funpolicynum" id="funpolicynum" placeholder="Polisnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>MEDIESE FONDS EN NOMMER</h5></div>
				<div class="form-group col-md-6">
					<label for="medaidmainmem">Hooflid</label>
					<input type="text" class="form-control" name="medaidmainmem" id="medaidmainmem" placeholder="Hooflid">
				</div>
				<div class="form-group col-md-6">
					<label for="medaidFonds">Fonds</label>
					<input type="text" class="form-control" name="medaidFonds" id="medaidFonds" placeholder="Fonds">
				</div>
				<div class="form-group col-md-6">
					<label for="medaidpolnum">Polisnommer</label>
					<input type="text" class="form-control" name="medaidpolnum" id="medaidpolnum" placeholder="Polisnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="medaidgapcov">GAP Cover</label>
					<input type="text" class="form-control" name="medaidgapcov" id="medaidgapcov" placeholder="GAP Cover">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>HOSPITAALPLAN</h5></div>
				<div class="form-group col-md-6">
					<label for="hosplanmainmem">Hooflid</label>
					<input type="text" class="form-control" name="hosplanmainmem" id="hosplanmainmem" placeholder="Hooflid">
				</div>
				<div class="form-group col-md-6">
					<label for="hosplanFonds">Fonds</label>
					<input type="text" class="form-control" name="hosplanFonds" id="hosplanFonds" placeholder="Fonds">
				</div>
				<div class="form-group col-md-6">
					<label for="hosplanpolnum">Polisnommer</label>
					<input type="text" class="form-control" name="hosplanpolnum" id="hosplanpolnum" placeholder="Polisnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>MEDIC ALERT</h5></div>
				<div class="form-group col-md-6">
					<label for="medalertmem">Lid</label>
					<input type="text" class="form-control" name="medalertmem" id="medalertmem" placeholder="Lid">
				</div>
				<div class="form-group col-md-6">
					<label for="medalertnum">Lidnommer</label>
					<input type="text" class="form-control" name="medalertnum" id="medalertnum" placeholder="Lidnommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>ORGAANSKENKING / MEDIESE NAVORSING SKENKING</h5></div>
				<div class="form-group col-md-12">
					<label for="organdondetails">Registrasie besonderhede</label>
					<input type="text" class="form-control" name="organdondetails" id="organdondetails" placeholder="Registrasie besonderhede">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>BESTUURSLISENSIE</h5></div>
				<div class="form-group col-md-6">
					<label for="drivlicname">Naam</label>
					<input type="text" class="form-control" name="drivlicname" id="drivlicname" placeholder="Naam">
				</div>
				<div class="form-group col-md-6">
					<label for="drivlicexp">Vervaldatum</label>
					<input type="text" class="form-control" name="drivlicexp" id="drivlicexp" placeholder="Vervaldatum">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>VUURWAPENLISENSIE (maak seker dat alle vuurwapens gelisensieer is)</h5></div>
				<div class="form-group col-md-6">
					<label for="nameofregowner">Naam van geregisteerde eienaar</label>
					<input type="text" class="form-control" name="nameofregowner" id="nameofregowner" placeholder="Name of registered owner">
				</div>
				<div class="form-group col-md-6">
					<label for="firearmcaliber">Kaliber</label>
					<input type="text" class="form-control" name="firearmcaliber" id="firearmcaliber" placeholder="Kaliber">
				</div>
				<div class="form-group col-md-6">
					<label for="firearmlicexp">Vervaldatum</label>
					<input type="text" class="form-control" name="firearmlicexp" id="firearmlicexp" placeholder="Vervaldatum">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>WERKGEWER  (Afskrif van betaalstaat en nuutste Belastingopgawe)</h5></div>
				<div class="form-group col-md-12">
					<label for="employername">Naam van Werkgewer</label>
					<input type="text" class="form-control" name="employername" id="employername" placeholder="Naam van Werkgewer">
				</div>
				<div class="form-group col-md-6">
					<label for="employcontact">Kontakpersoon</label>
					<input type="text" class="form-control" name="employcontact" id="employcontact" placeholder="Kontakpersoon">
				</div>
				<div class="form-group col-md-6">
					<label for="employaddress">Adres</label>
					<input type="text" class="form-control" name="employaddress" id="employaddress" placeholder="Adres">
				</div>
				<div class="form-group col-md-6">
					<label for="employtel">Telefoonnommer</label>
					<input type="text" class="form-control" name="employtel" id="employtel" placeholder="Telefoonnommer">
				</div>
				<div class="form-group col-md-6">
					<label for="employemail">Eposadres</label>
					<input type="text" class="form-control" name="employemail" id="employemail" placeholder="Eposadres">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>INKOMSTEBELASTING</h5></div>
				<div class="form-group col-md-12">
					<label for="inctaxboffice">Takkantoor</label>
					<input type="text" class="form-control" name="inctaxboffice" id="inctaxboffice" placeholder="Takkantoor">
				</div>
				<div class="form-group col-md-6">
					<label for="intaxname">Naam</label>
					<input type="text" class="form-control" name="intaxname" id="intaxname" placeholder="Naam">
				</div>
				<div class="form-group col-md-6">
					<label for="intaxregnum">Registrasienommer</label>
					<input type="text" class="form-control" name="intaxregnum" id="intaxregnum" placeholder="Registrasienommer">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="personaladdinfo"><h5>ADDISIONELE INLIGTING</h5></label>
					<textarea type="text" class="form-control" name="personaladdinfo" id="personaladdinfo"></textarea>
				</div>
			</div>
 			<div class="form-row">
				<div class="form-group col-md-12">
 					<button type="submit" class="btn btn-primary">Stoor</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="uploaddocs"><h5>LAAI DOKUMENTE HIER OP</h5></label>
					<input type="file" class="form-control" name="uploaddocs" id="uploaddocs">
				</div>
			</div>
		</form>
	</div>
 <!-- /.col-lg-12--></div>
  ';
}
?>