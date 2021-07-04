<?php

function pagecontent($data){
	echo '
<img class="card-img-top" style="text-align: center;" src="images/question-mark.jpg" alt="">
<h1>Where To Find</h1>

<div class="col-lg-12">
        <div class="row" >
			<form>
				<div class="form-row">
						<div class="form-group col-md-12"><h5>MY PASSWORDS</h5></div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>My safe(s) </h5></div>
					<div class="form-group col-md-6">
						<label for="mysafeone">Safe 1</label>
						<input type="text" class="form-control" name="mysafeone" id="mysafeone" placeholder="Safe 1">
					</div>
					<div class="form-group col-md-6">
						<label for="mysafetwo">Safe 2</label>
						<input type="text" class="form-control" name="mysafetwo" id="mysafetwo" placeholder="Safe 2">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>My keys</h5></div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Safe 1</label>
						<input type="text" class="form-control" name="key-safe1" id="key-safe1" placeholder="Safe 1">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Safe 2</label>
						<input type="text" class="form-control" name="key-safe2" id="key-safe2" placeholder="Safe 2">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>Residence</h5></div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Address</label>
						<input type="text" class="form-control" name="Address-r-1" id="Address-r-1" placeholder="Address">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Address 2</label>
						<input type="text" class="form-control" name="Address-r-2" id="Address-r-2" placeholder="Address">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>Holiday home</h5></div>
					<div class="form-group col-md-6">
						<label for="inputEmail4">Address</label>
						<input type="password" class="form-control" name="Address-h-1" id="Address-h-1" placeholder="Address">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Address</label>
						<input type="password" class="form-control" name="Address-h-2" id="Address-h-2" placeholder="Address">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>Caravan / trailer</h5></div>
					<div class="form-group col-md-12"><h5>Mailbox</h5></div>
					<div class="form-group col-md-12"><h5>Saving keys</h5></div>
				</div>
				<div class="form-row">   
					<div class="form-group col-md-12"><h5>My firearms</h5></div>
					<div class="form-group col-md-6">
						<label for="inputEmail4">Name of owner (caliber)</label>
						<input type="password" class="form-control" name="f-name-1" id="f-name-1" placeholder="Name of owner (caliber)">
					</div>
    				<div class="form-group col-md-6">
						<label for="inputPassword4">Name of owner (caliber)</label>
						<input type="password" class="form-control" name="f-name-2" id="f-name-2" placeholder="Name of owner (caliber)">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Name of owner (caliber)</label>
						<input type="password" class="form-control" name="f-name-3" id="f-name-3" placeholder="Name of owner (caliber)">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Name of owner (caliber)</label>
						<input type="password" class="form-control" name="f-name-4" id="f-name-4" placeholder="Name of owner (caliber)">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12"><h5>My jewelry</h5></div>
				</div>
				<div class="form-row">   
					<div class="form-group col-md-12"><h5>My Identity Documents and Bank Cards </h5></div>
					<div class="form-group col-md-6">
      					<label for="inputEmail4">Name of owner (caliber)</label>
      					<input type="password" class="form-control" name="d-name-1" id="d-name-1" placeholder="Name">
    				</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Name of owner (caliber)</label>
						<input type="password" class="form-control" name="d-name-2" id="d-name-2" placeholder="Name">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Name of owner (caliber)</label>
						<input type="password" class="form-control" name="d-name-3" id="d-name-3" placeholder="Name">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Name of owner (caliber)</label>
						<input type="password" class="form-control" name="d-name-4" id="d-name-4" placeholder="Name">
					</div>
				</div>
				<div class="form-row">   
					<div class="form-group col-md-12"><h5>File with my original Testament and documents</h5></div>
					<div class="form-group col-md-6">
						<label for="inputEmail4">Name of owner (caliber)</label>
						<input type="file" class="form-control" name="f-d-name-1" id="f-d-name-1">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="inputPassword4">ADDITIONAL INFORMATION</label>
						<textarea type="text" class="form-control" name="additional-info" id="additional-info">	</textarea>
					</div>
				</div>
 
  <button type="submit" class="btn btn-primary">Save</button>
</form>
      </div>
      <!-- /.col-lg-9 --></div>
  ';
}
?>
