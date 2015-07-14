<?php
$page_id = 'anmalan';
require_once('../_start.php');
?>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <div class="col-xs-12">
        <h1 class="main-headline"><span class="main-headline__current">Anmälan till</span> <span class="main-headline__name">Skånes 6-timmarslopp</span> <span class="main-headline__date">29/8 2015</span></h1>
      </div>
    </div>
  </div>

  <div class="section" id="info">
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <h2>Dags att anmäla sig? Härligt! :)</h2>

          <p>Hur gör jag?<br>
          Skicka din anmälan via e-post till oss på: <a href="mailto:info@cannibalhippies.se">info@cannibalhippies.se</a><br>
          Märk ditt email med ditt namn som rubrik.<br>
          Därefter vänligen kopiera och fyll i följande mall;<br>
          -------------------------------------------<br>
          Namn:<br>
          Representerar: (Företag, förening, annat)<br>
          Födelsedata: (ÅÅÅÅ-MM-DD)<br>
          Dam/Herr:<br>
          Klass:<br>
          Telefon:<br>
          Eventuell matallergi, preferens eller önskemål för pit-stop:<br>
          Övriga meddelanden eller frågor:<br>
          -------------------------------------------</p>

          <h3>Info</h3>
          <p>Svar kommer inom kort då vi denna gång sköter det hela manuellt.</p>

          <h3>Klasser</h3>
          <p><b>Löpning:</b></p>
          <ul>
            <li>Dam
            <lI>Herr
            <li>Lag - Dam (Ingen begränsning på antalet lagmedlemmar. 3 bästa resultat inom laget räknas.)
            <li>Lag - Herr (Ingen begränsning på antalet lagmedlemmar. 3 bästa resultat inom laget räknas.)
          </ul>

          <p><b>Övrigt:</b><br>
          Gång/Stavgång/Barnvagn/Promenad</p>

        </div>

      </div>

    </div>
  </div>

  <div class="flag">
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php require('../_bc-banner.php'); ?>
      </div>
    </div>
  </div>

  <div class="flag">
  </div>

  <?php require('../_partners.php'); ?>

<?php
require_once('../_end.php');
