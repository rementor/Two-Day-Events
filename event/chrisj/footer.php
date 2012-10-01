	<footer>
	 <p>
	 Dave Lindahl
	 <br>
	 RE Mentor, INC.
	 <br>
	 100 Weymouth Street, BLDG D
	 <br>
	 Rockland, MA 02370
	 <br>
	 781-878-7114
	 <br>
	 &copy; RE Mentor, INC.
	 </footer>
  </div>

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $path;?>js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="<?php echo $path;?>js/plugins.js"></script>
  <script src="<?php echo $path;?>js/script.js"></script>
  <script type="text/javascript" src="<?php echo $path;?>js/jquery.fancybox.js"></script>
  <script src="<?php echo $path;?>js/jquery.validate.min.js" type="text/javascript"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','<?php echo $googAnal;?>'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

  <!-- Infusionsoft Tracking Code -->
  <script type="text/javascript" src="https://m160.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=35c7ce73753cad35a563d96f4a6dc966"></script>

</body>
</html>