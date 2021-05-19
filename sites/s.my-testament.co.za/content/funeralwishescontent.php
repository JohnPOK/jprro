<?php

function pagecontent($data){
  echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/funeralwishes.png" alt="">
		<h1>My funeral</h1>

		<div class="col-md-12">
			<p>Here you can make all your wishes, e.g. whether you want to be buried or cremated, where you would like to be buried or what your loved ones should do with your ashes. State if you would like to donate organs and tissues and where you are registered. You also have the option of donating your body to promote medical and scientific purposes. If you prefer, you can attach a photo for the funeral letter as well as the music you want them to play.</p>
		</div>

		<form>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="funwishinfo">It\'s my wish that</label>
					<textarea type="text" class="form-control textarea-style" name="funwishinfo" id="funwishinfo"></textarea>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
 					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<div style="text-align:center"><a type="submit" class="btn btn-primary">UPLOAD FUNERAL POLICY, PHOTO AND MUSIC HERE</a></div>
				</div>
			</div>			
		</form>
	</div>
<!-- /.col-lg-12 --></div>
  ';
}
?>