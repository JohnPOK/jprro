<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/pets.jpg" alt="">
		<h1>My pets</h1>

		<div class="col-md-12">
			<p>Legally, pets are seen as an item of your legacy. The heirs then inherit your pets. If it is your wish that your pets should go to a specific person should you die, it is important to talk to the person and not leave it as a surprise to him / her. By doing so, you also make sure that they will be prepared and it is possible that he / she can take care of your pets.</p>
			<p>There are many stories that tell how people bequeath their entire inheritance to their pets, but this is not true. No one can bequeath their inheritance directly to their beloved pets, but you can:
				<ul>
					<li> Name a beneficiary in your will (who even must inherit a stated amount) to look after your pets </li>
					<li>  you can also create a trust in which you provide for the care of your pets. The trust will then determine who the beneficiary is and how the funds should be used for the care of your pets.</li>
					<li> you can join an animal welfare organization which will then find a suitable person to look after your pets after your death  </li>
				</ul>
			</p>
			<p>However, be careful not to make your decision about your pets too complicated and unworkable. Do not leave your wishes to the executor or your loved ones to execute, because keep in mind that it may take 6 months or longer for your estate to be administered.</p>
		</div>

		<form>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="additional-info">It is my wish that</label>
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
<!-- /.col-lg-12--></div>
  ';
}
?>