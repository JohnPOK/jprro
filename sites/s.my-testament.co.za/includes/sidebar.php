<?php
function emptysidebar(){
    echo '
    ';
}

function pagesidebar($active){
    echo '
      <div class="col-lg-3">

        <p><img align=center src="images/logo-no-text.png"/></p>
        <h1 class="my-4">My Safe</h1>
        <div class="list-group">
          <a href="generalinformation.php?active=general" class="list-group-item">General information</a>';

    if (isset($_GET["active"]) and ($_GET["active"] == "general")){
        echo '
          <a href="deathofalovedone.php?active=general" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Death of a loved one</a>
          <a href="organdonation.php?active=general" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Organ donation</a>
          <a href="livingwill.php?active=general" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Living will</a>
          <a href="estate.php?active=general" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Estate planning</a>
          <a href="lastwillandtestament.php?active=general" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Last will and testaments</a>
        ';
    }

    echo '
          <a href="mywishes.php?active=wishes" class="list-group-item">My wishes</a>';

    if (isset($_GET["active"]) and ($_GET["active"] == "wishes")){
        echo '
          <a href="funeralwishes.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Funeral wishes</a>
          <a href="contacts.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Contacts</a>
          <a href="minorchildren.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Minor children</a>
          <a href="wheretofind.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Where to find</a>
          <a href="pets.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Pets</a>
          <a href="personalpossessions.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Personal possessions</a>
          <a href="lastwishes.php?active=wishes" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Last wishes</a>
        ';
    }

    echo '
          <a href="personalinformation.php?active=personal" class="list-group-item">Personal information</a>';

    if (isset($_GET["active"]) and ($_GET["active"] == "personal")){
        echo '
          <a href="personaldetails.php?active=personal" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Personal details</a>
          <a href="passwords.php?active=personal" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Passwords</a>
          <a href="bankaccounts.php?active=personal" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Bank accounts</a>
          <a href="assets.php?active=personal" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Assets</a>
          <a href="liabilities.php?active=personal" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Liabilities</a>
          <a href="trustsandbusinesses.php?active=personal" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Trusts and businesses</a>
        ';
    }
    echo'
          <a href="copiesofdocuments.php?active=documents" class="list-group-item">Copies of documents</a>';

    if (isset($_GET["active"]) and ($_GET["active"] == "documents")){
        echo '
          <a href="checklists.php?active=documents" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Checklists</a>
          <a href="uploadeddocuments.php?active=documents" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Uploaded documents</a>
        ';
    }

    echo '
        </div>

      </div>
      <!-- /.col-lg-3 -->
    ';
}
?>
