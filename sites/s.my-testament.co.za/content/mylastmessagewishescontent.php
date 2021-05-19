<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/writing.png" alt="">
		<h1>My last message</h1>

		<form>
			<div class="form-row">
				<div class="form-group col-md-12">
					<textarea type="text" class="form-control height-300" name="additional-info" id="additional-info"></textarea>
    			</div>
  			</div>
 
 			<div class="form-row">
				<div class="form-group col-md-12">
 					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</form>
	</div>
<!-- /.col-lg-9 --></div>
  ';
}
?>