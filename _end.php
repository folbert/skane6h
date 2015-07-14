<div class="social">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2>Sprid gärna ordet</h2>
        <span class='st_facebook_large' displayText='Facebook'></span>
        <span class='st_twitter_large' displayText='Tweet'></span>
        <span class='st_email_large' displayText='Email'></span>
        <span class='st_sharethis_large' displayText='ShareThis'></span>
      </div>
    </div>
  </div>
</div>

<footer class="page-footer">
  <div class="container page-footer__container">
    <footer>
      <p>Sidan är byggd av <a href="http://folbert.com">Björn Folbert</a></p>
    </footer>
  </div> <!-- /container -->
</footer>

<script src="<?php echo Roots\Sage\Assets\asset_path('scripts/modernizr.js'); ?>"></script>

<!--[if lt IE 9]>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<?php $jquery_file = Roots\Sage\Assets\asset_path('scripts/jquery-legacy.js'); ?>
<script>window.jQuery || document.write('<script src="<?php echo $jquery_file ?>"><\/script>')</script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<?php $jquery_file = Roots\Sage\Assets\asset_path('scripts/jquery-modern.js'); ?>
<script>window.jQuery || document.write('<script src="<?php echo $jquery_file ?>"><\/script>')</script>
<!--[endif]-->

<script src="<?php echo Roots\Sage\Assets\asset_path('scripts/main.js'); ?>"></script>

</body>
</html>