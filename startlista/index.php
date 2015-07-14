<?php
$page_id = 'startlista';
require_once('../_start.php');

$runners = [];
$runners[] = ['Maria Olsson', 'FK Göingarna', 1];
$runners[] = ['Kristoffer Arponen', 'Vegan Runners IK', 1];
$runners[] = ['Anders Frick', 'Trelleborgs Lasarett', 0];
$runners[] = ['Karin Persson', '-', 0];
$runners[] = ['Lotta Thörn', 'Scania Road Runners', 0];
$runners[] = ['Henrik Roos', 'Scania Road Runners', 1];
$runners[] = ['Mari Ahnfeldt', 'Bjäre Triathlon', 1];
$runners[] = ['Kimberly Lyhrén', 'Lonesome Runners', 0];

?>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <div class="col-xs-12">
        <h1 class="main-headline"><span class="main-headline__current">Startlista för</span> <span class="main-headline__name">Skånes 6-timmarslopp</span> <span class="main-headline__date">29/8 2015</span></h1>
      </div>
    </div>
  </div>

  <div class="section" id="info">
    <div class="container">
      <div class="row">

        <div class="col-xs-12">

          <h2>Startlistan över alla underbara deltagare - 2015! :)</h2>

          <p>Info:<br>
          Ett litet vackert hjärta framför ditt namn innebär att vi mottagit din deltagaravgift. :)</p>

          <div class="table-responsive">
            <table class="table table-striped table-bordered">

              <tr>
                <th>Betalat</th>
                <th>Namn</th>
                <th>Representerar</th>
              </tr>

              <?php
              $runners_html = '';
              foreach($runners AS $runner) {

                $runners_html .= '<tr>';
                $runners_html .= '<td>' . ($runner[2] ? '<img src="' . Roots\Sage\Assets\asset_path('images/hjarta.jpg') . '" alt="Hjärta">' : '') . '</td>';
                $runners_html .= '<td>' . $runner[0] . '</td>';
                $runners_html .= '<td>' . $runner[1] . '</td>';
                $runners_html .= '</tr>';


              }
              echo$runners_html;
              ?>

            </table>
          </div>

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
