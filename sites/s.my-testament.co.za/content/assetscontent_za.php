<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/assets.png" alt="">
		<h1>Lys van bates</h1>

		<form>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>VOERTUIE</h5></div>
				<div class="form-group col-md-12">
					<label for="makeandmodel">Fabrikaat en jaarmodel</label>
					<input type="text" class="form-control" name="makeandmodel" id="makeandmodel" placeholder="Fabrikaat en jaarmodel">
				</div>
				<div class="form-group col-md-6">
					<label for="regisnum">Registrasienommer</label>
					<input type="text" class="form-control" name="regisnum" id="regisnum" placeholder="Registrasienommer">
				</div>
				<div class="form-group col-md-6">
					<label for="regisowner">Geregistreerde eienaar</label>
					<input type="text" class="form-control" name="regisowner" id="regisowner" placeholder="Geregistreerde eienaar">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Voeg by</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>EIENDOMME</h5></div>
				<p>BELANGRIK - Waardasie sertifikate van eiendomme wat voor 1 Oktober 2001 aangekoop is.</p>
				<div class="form-group col-md-12">
					<label for="propfulladd">Volledige adres</label>
					<input type="text" class="form-control" name="propfulladd" id="propfulladd" placeholder="Volledige adres">
				</div>
				<div class="form-group col-md-6">
					<label for="propregisowner">Geregistreerde eienaar</label>
					<input type="text" class="form-control" name="propregisowner" id="propregisowner" placeholder="Geregistreerde eienaar">
				</div>
				<div class="form-group col-md-6">
					<label for="propmortdet">Verbandbesonderhede</label>
					<input type="text" class="form-control" name="propmortdet" id="propmortdet" placeholder="Verbandbesonderhede">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Voeg by</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>LEWENSPOLISSE</h5></div>
				<div class="form-group col-md-6">
					<label for="linspolhold">Polishouer</label>
					<input type="text" class="form-control" name="linspolhold" id="linspolhold" placeholder="Polishouer">
				</div>
				<div class="form-group col-md-6">
					<label for="linpolbenef">Begunstigde</label>
					<input type="text" class="form-control" name="linpolbenef" id="linpolbenef" placeholder="Begunstigde">
				</div>
				<div class="form-group col-md-6">
					<label for="linpolinst">Instansie</label>
					<input type="text" class="form-control" name="linpolinst" id="linpolinst" placeholder="Instansie">
				</div>
				<div class="form-group col-md-6">
					<label for="linpolnum">Polisnommer</label>
					<input type="text" class="form-control" name="linpolnum" id="linpolnum" placeholder="Polisnommer">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Voeg by</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>UITKEERPOLISSE</h5></div>
				<div class="form-group col-md-6">
					<label for="endowpolhold">Polishouer</label>
					<input type="text" class="form-control" name="endowpolhold" id="endowpolhold" placeholder="Polishouer">
				</div>
				<div class="form-group col-md-6">
					<label for="endowpolbenef">Begunstigde</label>
					<input type="text" class="form-control" name="endowpolbenef" id="endowpolbenef" placeholder="Begunstigde">
				</div>
				<div class="form-group col-md-6">
					<label for="endowpolinst">Instansie</label>
					<input type="text" class="form-control" name="endowpolinst" id="endowpolinst" placeholder="Instansie">
				</div>
				<div class="form-group col-md-6">
					<label for="endowpolnum">Polisnommer</label>
					<input type="text" class="form-control" name="endowpolnum" id="endowpolnum" placeholder="Polisnommer">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Voeg by</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>AFTREE ANNUITEITE</h5></div>
				<div class="form-group col-md-6">
					<label for="retannpolhold">Polishouer</label>
					<input type="text" class="form-control" name="retannpolhold" id="retannpolhold" placeholder="Polishouer">
				</div>
				<div class="form-group col-md-6">
					<label for="retannpolbenef">Begunstigde</label>
					<input type="text" class="form-control" name="retannpolbenef" id="retannpolbenef" placeholder="Begunstigde">
				</div>
				<div class="form-group col-md-6">
					<label for="retannpolinst">Instansie</label>
					<input type="text" class="form-control" name="retannpolinst" id="retannpolinst" placeholder="Instansie">
				</div>
				<div class="form-group col-md-6">
					<label for="retannpolnum">Polisnommer</label>
					<input type="text" class="form-control" name="retannpolnum" id="retannpolnum" placeholder="Polisnommer">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Voeg by</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>PENSIOENFONDS</h5></div>
				<div class="form-group col-md-12">
					<label for="penfundowner">Naam van eienaar</label>
					<input type="text" class="form-control" name="penfundowner" id="penfundowner" placeholder="Naam van eienaar">
				</div>
				<div class="form-group col-md-6">
					<label for="penfundschem">Skema</label>
					<input type="text" class="form-control" name="penfundschem" id="penfundschem" placeholder="Skema">
				</div>
				<div class="form-group col-md-6">
					<label for="penfundnum">Pensioennommer</label>
					<input type="text" class="form-control" name="penfundnum" id="penfundnum" placeholder="Pensioennommer">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Voeg by</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12"><h5>EFFEKTETRUST / AANDELE</h5></div>
				<div class="form-group col-md-12">
					<label for="unitrushahold">Aandeelhouer</label>
					<input type="text" class="form-control" name="unitrushahold" id="unitrushahold" placeholder="Aandeelhouer">
				</div>
				<div class="form-group col-md-6">
					<label for="unitrushainst">Instansie</label>
					<input type="text" class="form-control" name="unitrushainst" id="unitrushainst" placeholder="Instansie">
				</div>
				<div class="form-group col-md-6">
					<label for="unitrushadet">Besonderhede</label>
					<input type="text" class="form-control" name="unitrushadet" id="unitrushadet" placeholder="Besonderhede">
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary">Voeg by</button>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="other-info"><h5>ADDISIONELE INLIGTING</h5></label>
					 <textarea type="text" class="form-control" name="other-info" id="other-info"></textarea>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="upload-docs"><h5>LAAI AFSKRIFTE VAN KAARTE, SERTIFIKATE EN DOKUMENTE HIER OP</h5></label>
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