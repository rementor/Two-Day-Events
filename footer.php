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
  <script type="text/javascript" src="<?php echo $path;?>js/jquery.validate.js"></script>
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

  <!-- Live Person Monitor -->
  <script type="text/javascript">
  window.lpTag={site:'91434857', lpSrv:'server.iad.liveperson.net', _v:'1.0',protocol:location.protocol,events:{bind:function(app,ev,fn){lpTag.defer(function(){lpTag.events.bind(app,ev,fn)})},trigger:function(app,ev,json){lpTag.defer(function(){lpTag.events.trigger(app,ev,json)})}},defer:function(fn){this._defL=this._defL||[];this._defL.push(fn)},load:function(src,chr,id){if(!src){src=this.protocol+'//'+((this.ovr&&this.ovr.domain)?this.ovr.domain:'lptag.liveperson.net')+'/tag/tag.js?site='+this.site}var s=document.createElement('script');s.setAttribute('charset',chr?chr:'UTF-8');if(id){s.setAttribute('id',id)}s.setAttribute('src',src);document.getElementsByTagName('head').item(0).appendChild(s)},init:function(){this._timing=this._timing||{};this._timing.start=(new Date()).getTime();var that=this;if(window.attachEvent){window.attachEvent('onload',function(){that._domReady('domReady')})}else{window.addEventListener('DOMContentLoaded',function(){that._domReady('contReady')},false);window.addEventListener('load',function(){that._domReady('domReady')},false)}if(typeof(_lptStop)=='undefined'){this.load()}},_domReady:function(n){this.isDom=true;this._timing[n]=(new Date()).getTime();this.events.trigger('LPT','DOM_READY')}};lpTag.init();
  </script>

</body>
</html>