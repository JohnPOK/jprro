<?php

function pagecontent($data){
  echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/funeralwishes.png" alt="">
		<h1>My begrafnis</h1>

		<div class="col-md-12">
			<p>Noem of  jy begrawe of veras wil word, waar jy graag begrawe wil word of wat jou geliefdes met jou as moet maak.. Meld indien jy graag organe en weefsel wil skenk en waar jy geregistreer is.  Jy kan selfs jou liggaam skenk ter bevordering van mediese en wetenskaplike doeleindes.  Indien jy dit verkies, kan jy `n foto vir die begrafnisbrief asook die musiek wat jy graag wil hê hulle moet speel, aanheg.</p>
		</div>

		<form>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="funwishinfo">Dit is my wens dat</label>
					<textarea type="text" class="form-control textarea-style" name="funwishinfo" id="funwishinfo"></textarea>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
 					<button type="submit" class="btn btn-primary">Stoor</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<div style="text-align:center"><a type="submit" class="btn btn-primary">LAAI BEGRAFNISPOLIS, FOTO EN MUSIEK HIER OP</a></div>
				</div>
			</div>			
		</form>
	</div>
<!-- /.col-lg-12 --></div>
  ';
}
?>