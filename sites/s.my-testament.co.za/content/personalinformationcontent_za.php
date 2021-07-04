<?php
function pagecontent($data){
  echo '
<div class="col-lg-12">
	<div class="row"><h1>Persoonlike inligting</h1></div>

	<div class="row">

		<div class="col-lg-5 col-md-6 mb-4">
			<div class="card h-100">
				<a href="/personaldetails_za.php?active=personal"><img class="card-img-top" src="images/personal.png" alt=""></a>
				<div class="card-body">
					<h4 class="card-title"><a href="/personaldetails_za.php?active=personal">Persoonlike besonderhede</a></h4>
					<p class="card-text"></p>
				</div>
				<!--<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>-->
			</div>
		</div>

		<div class="col-lg-5 col-md-6 mb-4">
			<div class="card h-100">
				<a href=""/passwords_za.php?active=personal"><img class="card-img-top" src="images/passwords.png" alt=""></a>
				<div class="card-body">
					<h4 class="card-title"><a href="/passwords_za.php?active=personal">Wagwoorde</a></h4>
					<p class="card-text"></p>
				</div>
				<!--<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>-->
			</div>
		</div>

	</div>
	<div class="row">

		<div class="col-lg-5 col-md-6 mb-4">
			<div class="card h-100">
				<a href="/bankaccounts_za.php?active=personal"><img class="card-img-top" src="images/bankaccounts.png" alt=""></a>
				<div class="card-body">
					<h4 class="card-title"><a href="/bankaccounts_za.php?active=personal">Bankrekeninge</a></h4>
					<p class="card-text"></p>
				</div>
				<!--<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>-->
			</div>
		</div>

		<div class="col-lg-5 col-md-6 mb-4">
			<div class="card h-100">
				<a href="/assets_za.php?active=personal"><img class="card-img-top" src="images/assets.png" alt=""></a>
				<div class="card-body">
					<h4 class="card-title"><a href="/assets_za.php?active=personal">Bates</a></h4>
					<p class="card-text"></p>
				</div>
				<!--<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>-->
			</div>
		</div>

	</div>
	<div class="row">

		<div class="col-lg-5 col-md-6 mb-4">
			<div class="card h-100">
				<a href=""/liabilities_za.php?active=personal"><img class="card-img-top" src="images/liabilities.png" alt=""></a>
				<div class="card-body">
					<h4 class="card-title"><a href="/liabilities_za.php?active=personal">Laste</a></h4>
					<p class="card-text"></p>
				</div>
				<!--<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>-->
			</div>
		</div>

		<div class="col-lg-5 col-md-6 mb-4">
			<div class="card h-100">
				<a href="/trustsandbusinesses_za.php?active=personal"><img class="card-img-top" src="images/trustsandbusinesses.png" alt=""></a>
				<div class="card-body">
					<h4 class="card-title"><a href="/trustsandbusinesses_za.php?active=personal">Trust en besigheid</a></h4>
					<p class="card-text"></p>
				</div>
				<!--<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>-->
			</div>
		</div>

        <!-- /.row -->

	</div>
<!-- /.col-lg-9 --></div>
  ';
}
?>