<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row" >
		<img class="card-img-top" style="text-align: center;" src="images/children.jpg" alt="">
		<h1>Minor children</h1>

		<div class="col-md-12">
			<p>Without your wishes in writing, the Master of the Supreme Court will make a decision that’s out of your control.  It is a good idea to name your first and second choice for a guardian. Be sure to explain the following: 
				<ul>
					<li> Why you believe this adult will provide stable, continuous care</li>
					<li> The relationship between your child and the adult</li>
					<li> The adult(‘s) moral fitness to take of your children</li>
				</ul>
			</p>
		</div>

		<h2>I hereby appoint the following persons as guardians over my child (ren):</h2>
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="guardname">Name</label>
					<input type="text" class="form-control" name="guardname" id="guardname" placeholder="Name">
				</div>
				<div class="form-group col-md-6">
					<label for="guardtelno">Telephone number</label>
					<input type="text" class="form-control" name="guardtelno" id="guardtelno" placeholder="Telehone number">
				</div>
				<div class="form-group col-md-6">
					<label for="guardmail">Email address</label>
					<input type="text" class="form-control" name="guardmail" id="guardmail" placeholder="Email address">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" class="btn btn-primary">Add Another</button>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="inputPassword4">It\'s my wish that </label>
					<textarea type="text" class="form-control" name="additional-info" id="additional-info"> </textarea>
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