<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">	
		<img class="card-img-top" style="text-align: center;" src="images/trustsandbusinesses.png" alt="">
		<h1>Trust / Besigheids besonderhede</h1>

		<form>
			<fieldset  class="border border-2 rounded m-3 p-3">
				<div class="form-row">
					<div class="form-group col-md-12"><h5>TRUST BESONDERHEDE</h5></div>
					<div class="form-group col-md-6">
						<label for="trustnameoftrust"><h6>NAAM VAN TRUST</h6></label>
						<input type="text" class="form-control" name="trustnameoftrust" id="trustnameoftrust" placeholder="Naam van trust">
					</div>
					<div class="form-group col-md-6">
						<label for="trustregisnum"><h6>TRUST REGISTRASIENOMMER</h6></label>
						<input type="text" class="form-control" name="trustregisnum" id="trustregisnum" placeholder="Trust registrasienommer">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>TRUSTEES</h5></div>
					<div class="form-group col-md-6">
						<label for="trusteename"><h6>Naam</h6></label>
						<input type="text" class="form-control" name="trusteename" id="trusteename" placeholder="Naam">
					</div>
					<div class="form-group col-md-6">
						<label for="trusteeid">Identiteitsnommer</label>
						<input type="text" class="form-control" name="trusteeid" id="trusteeid" placeholder="Identiteitsnommer">
					</div>
					<div class="form-group col-md-6">
						<label for="trusteetel">Telefoonnommer</label>
						<input type="text" class="form-control" name="trusteetel" id="trusteetel" placeholder="Telefoonnommer">
					</div>
					<div class="form-group col-md-6">
						<label for="trusteemail">Eposadres</label>
						<input type="text" class="form-control" name="trusteemail" id="trusteemail" placeholder="Eposadres">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Voeg by</button>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>BEGUNSTIGDES</h5></div>
					<div class="form-group col-md-6">
						<label for="benefname"><h6>Naam</h6></label>
						<input type="text" class="form-control" name="benefname" id="benefname" placeholder="Naam">
					</div>
					<div class="form-group col-md-6">
						<label for="benefid">Identiteitsnommer</label>
						<input type="text" class="form-control" name="benefid" id="benefid" placeholder="Identiteitsnommer">
					</div>
					<div class="form-group col-md-6">
						<label for="beneftel">Telefoonnommer</label>
						<input type="text" class="form-control" name="beneftel" id="beneftel" placeholder="Telefoonnommer">
					</div>
					<div class="form-group col-md-6">
						<label for="benefmail">Eposadres</label>
						<input type="text" class="form-control" name="benefmail" id="benefmail" placeholder="Eposadres">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Voeg by</button>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>INKOMSTEDIENS NOMMER</h5></div>
					<div class="form-group col-md-6">
						<label for="revservatnum"><h6>BTW nommer</h6></label>
						<input type="text" class="form-control" name="revservatnum" id="revservatnum" placeholder="BTW nommer">
					</div>
				</div>
			</fieldset>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg trust by</button>
				</div>
			</div>
			<fieldset  class="border border-2 rounded m-3 p-3">
				<div class="form-row">
					<div class="form-group col-md-12"><h5>MAATSKAPPY / GESLOTE KOOPERASIE BESONDERHEDE</h5></div>
					<div class="form-group col-md-6">
						<label for="regnamofcompany"><h6>GEREGISTREERDE NAAM VAN MAATSKAPPY</h6></label>
						<input type="text" class="form-control" name="regnamofcompany" id="regnamofcompany" placeholder="Geregistreerd naam van maatskappy">
					</div>
					<div class="form-group col-md-6">
						<label for="registrationnum"><h6>REGISTRASIENOMMER</h6></label>
						<input type="text" class="form-control" name="registrationnum" id="registrationnum" placeholder="Registrasienommer">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>DIREKTEURE</h5></div>
					<div class="form-group col-md-6">
						<label for="directorname"><h6>Naam</h6></label>
						<input type="text" class="form-control" name="directorname" id="directorname" placeholder="Naam">
					</div>
					<div class="form-group col-md-6">
						<label for="directorid">Identiteitsnommer</label>
						<input type="text" class="form-control" name="directorid" id="directorid" placeholder="Identiteitsnommer">
					</div>
					<div class="form-group col-md-6">
						<label for="directortel">Telefoonnommer</label>
						<input type="text" class="form-control" name="directortel" id="directortel" placeholder="Telefoonnommer">
					</div>
					<div class="form-group col-md-6">
						<label for="directormail">Eposadres</label>
						<input type="text" class="form-control" name="directormail" id="directormail" placeholder="Eposadres">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Voeg by</button>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>INKOMSTEBELASTING NOMMER</h5></div>
					<div class="form-group col-md-6">
						<label for="incomevatnum"><h6>BTW nommer</h6></label>
						<input type="text" class="form-control" name="incomevatnum" id="incomevatnum" placeholder="BTW nommer">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="incomevatauditor"><h6>OUDITEUR</h6></label>
						<input type="text" class="form-control" name="incomevatauditor" id="incomevatauditor" placeholder="Ouditeur">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="auditorcontact">Kontakpersoon</label>
						<input type="text" class="form-control" name="auditorcontact" id="auditorcontact" placeholder="Kontakpersoon">
					</div>
					<div class="form-group col-md-6">
						<label for="auditortelephone">Telefoonnommer</label>
						<input type="text" class="form-control" name="auditortelephone" id="auditortelephone" placeholder="Telefoonnommer">
					</div>
				</div>
				<div class="form-row">   
					<div class="form-group col-md-12"><h5>Nuutste Finansiële State</h5></div>
					<div class="form-group col-md-12">
						<input type="file" class="form-control" name="latestfinstatem" id="latestfinstatem">
					</div>
				</div>
			</fieldset>	
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Voeg maatskappy by</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="upload-docs"><h5>LAAI REGISTRASIE DOKUMENTE HIER OP</h5></label>
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
      <!-- /.col-lg-9 --></div>
  ';
}
?>
