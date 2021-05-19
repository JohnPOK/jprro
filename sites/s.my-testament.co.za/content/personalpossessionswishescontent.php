<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/key.jpg" alt="">
		<h1>My personal possessions</h1>
		<p>Personal possessions are items (movable assets) that are part of your person and are not normally mentioned in a will. These include family heirlooms, paintings, firearms, jewelry, etc. It is recommended that you discuss this with your loved ones ahead of time to make sure you make the right choices. By putting it in writing, you make sure that you do not put your loved ones in a position where there may be bad feelings or an argument. Vehicles are also seen as personal property and it is important that if a loved one wants to use your car just after your death, permission must be obtained from the executor, hire purchase agent as well as insurance company.</p>

		<h5>It is my wish to donate the following personal belongings (not specified in my will) to the said persons</h5>

		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="donatedname">Name</label>
					<input type="text" class="form-control" name="donatedname" id="donatedname" placeholder="Name">
				</div>
				<div class="form-group col-md-6">
					<label for="donateditem">Item</label>
					<input type="text" class="form-control" name="donateditem" id="donateditem" placeholder="Item">
				</div>
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
				<div class="form-group col-md-12">
					<label for="additional-info">ADDISIONAL INFORMATION</label>
			 		<textarea type="text" class="form-control" name="additional-info" id="additional-info"></textarea>
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