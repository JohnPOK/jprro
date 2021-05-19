<?php
function pagecontent($data){
  echo '
<div class="col-lg-12">
	<div class="row">
		<h1>Afskrifte van dokumente</h1>
	</div>

	<div class="row">

		<div class="col-lg-5 col-md-6 mb-4">
			<div class="card h-100">
				<a href="/checklists_za.php?active=documents"><img class="card-img-top" src="images/checklist.png" alt=""></a>
					<div class="card-body">
						<h4 class="card-title"><a href="/checklists_za.php?active=documents">Kontrolelyste</a></h4>
						<p class="card-text"></p>
					</div>
					<!--<div class="card-footer">
						<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
					</div>-->
				</div>
			</div>

			<div class="col-lg-5 col-md-6 mb-4">
				<div class="card h-100">
					<a href=""/uploadeddocuments_za.php?active=documents"><img class="card-img-top" src="images/uploaddocs.png" alt=""></a>
					<div class="card-body">
						<h4 class="card-title"><a href="/uploadeddocuments_za.php?active=documents">Gestoorde dokumente</a></h4>
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