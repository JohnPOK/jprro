<?php
function emptysidebar(){
    echo '
    ';
}

function pagesidebar($active){
    echo '
      <div class="col-lg-3">

        <p><img align=center src="images/logo-no-text.png"/></p>
        <h1 class="my-4">My-Testament Kluis</h1>
        <div class="list-group">
          <a href="generalinformation_za.php?active=general" class="list-group-item">Algemene inlgting</a>';

    if (isset($_GET["active"]) and ($_GET["active"] == "general")){
        echo '
          <a href="deathofalovedone_za.php?active=general" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Wat staan my te doen by afsterwe van ‘n geliefde</a>
          <a href="organdonation_za.php?active=general" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Orgaanskenking en liggaamskenking</a>
          <a href="livingwill_za.php?active=general" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Wat is ‘n Lewende testament</a>
          <a href="estate_za.php?active=general" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Boedelbeplanning</a>
          <a href="lastwillandtestament_za.php?active=general" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Testamente</a>
        ';
    }

    echo '
          <a href="mywishes_za.php?active=wishes" class="list-group-item">My wense</a>';

    if (isset($_GET["active"]) and ($_GET["active"] == "wishes")){
        echo '
          <a href="funeralwishes_za.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- My begrafnis</a>
          <a href="contacts_za.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kontakpersone en telefoonnommers</a>
          <a href="minorchildren_za.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Minderjarige kinders</a>
          <a href="wheretofind_za.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Waar om te kry</a>
          <a href="pets_za.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Troeteldiere</a>
          <a href="personalpossessions_za.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Persoonlike besittings</a>
          <a href="lastwishes_za.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Laaste boodskap</a>
        ';
    }

    echo '
          <a href="personalinformation_za.php?active=personal" class="list-group-item">Personal information</a>';

    if (isset($_GET["active"]) and ($_GET["active"] == "personal")){
        echo '
          <a href="personaldetails_za.php?active=personal" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Personal details</a>
          <a href="passwords_za.php?active=personal" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Passwords</a>
          <a href="bankaccounts_za.php?active=personal" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Bank accounts</a>
          <a href="assets_za.php?active=personal" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Assets</a>
          <a href="liabilities_za.php?active=personal" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Liabilities</a>
          <a href="trustsandbusinesses_za.php?active=personal" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Trusts and businesses</a>
        ';
    }
    echo'
          <a href="copiesofdocuments_za.php?active=documents" class="list-group-item">Copies of documents</a>';

    if (isset($_GET["active"]) and ($_GET["active"] == "documents")){
        echo '
          <a href="checklists_za.php?active=documents" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Checklists</a>
          <a href="uploadeddocuments_za.php?active=documents" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Uploaded documents</a>
        ';
    }

    echo '
        </div>

      </div>
      <!-- /.col-lg-3 -->
    ';
}
?>
