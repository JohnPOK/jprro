<?php

function pagecontent($data){
	echo '
<div class="col-lg-12">
	<div class="row">
		<img class="card-img-top" style="text-align: center;" src="images/pets.jpg" alt="">
		<h1>My troeteldiere</h1>

		<p>Wetlik word troeteldiere as ‘n item van jou erflating gesien. Die erfgename erf dan ook jou troeteldiere. Indien dit jou wens is dat jou troeteldiere na ‘n spesifieke persoon moet gaan sou jy te sterwe kom, is dit baie belangrik om met die persoon te gesels en dit nie as ‘n verrassing vir hom/haar laat nie.  Daardeur maak jy ook seker dat hulle bereid sal wees en dit moontlik is dat hy/sy wel na jou troeteldiere kan omsien.</p>
		<p>Daar is baie stories wat vertel hoe mense hulle hele erfporsie aan hul troeteldiere bemaak, maar dit is nie waar nie.  Niemand kan hul erflating direk aan hul geliefde troeteldiere bemaak nie, maar jy kan wel:
			<ul>
				<li>\'n begunstigde in jou testament benoem  (wat ‘n genoemde bedrag moet erf) om na jou troeteldiere om te sien</li>
				<li>jy kan ook ‘n trust skep waarin jy voorsiening maak vir die versorging van jou troeteldiere. Die trust sal dan bepaal wie die begunstigde is en hoe die fondse aangewend moet word vir die versorging van jou troeteldiere.</li>
				<li>jy kan by ‘n dierewelsynsorganisasie aansluit wat dan na jou afsterwe ‘n geskikte persoon sal vind om na jou troeteldiere om te sien</li>
			</ul>
		</p>
		<p>Wees egter versigting om jou besluit omtrent jou troeteldiere nie te ingewikkeld en onuitvoerbaar te maak nie.  Moenie jou wense aan die eksekuteur of jou geliefdes oorlaat om uit te voer nie, want hou in gedagte dat dit 6 maande of langer kan neem vir jou boedel om beredder te word.</p>

		<form>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="additional-info">Dit is my wense dat</label>
					<textarea type="text" class="form-control" name="additional-info" id="additional-info"></textarea>
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