<?php
$exitpop = 'false';
include('eventvars.php');
include('header.php');
if (isset($_GET['Checkbox0'])) {
	$attendTag = $_GET['Checkbox0'];
}
?>
  	<div id="main">
		<section class="thanks">
		<h1>
		Thank You <?=$_GET['Contact0FirstName']?> For Registering For
		<br>
		<?php echo $event;?> in <strong><?php echo $city . ", " . $stateAbbv;?> on <?php echo $date;?>
		<br>
		You will receive a confirmation email to: <?=$_GET['Contact0Email']?> shortly.
		</h1>
			<div class="bonus">
			<h2>BONUS!</h2>
			<object type="application/x-shockwave-flash" data="http://www.fxcomponents.com/components/mp3player/MP3Player_v201.swf" style="outline: none;" width="400" height="20">
			<param name="movie" value="http://www.fxcomponents.com/components/mp3player/MP3Player_v201.swf"></param>
			<param name="wmode" value="transparent"></param>
			<param name="FlashVars" value="trackURL=http://rementor.s3.amazonaws.com/audio/CallWithBobBowman.mp3&amp;title=&amp;color1=0x333333&amp;color2=0x444444&amp;color3=0xdddddd&amp;color4=0xffffff&amp;width=400&amp;volume=80&amp;timerMode=2&amp;autoPlay=false" />
			</object><br>
			To Download this track click the following link or 'right click'<br>
			and select 'Save Target As'. <a href="http://rementor.s3.amazonaws.com/audio/CallWithBobBowman.mp3">Download Track</a>
			</div>		
			<div class="<?php
				if ($attendTag == $homeTag) {
					echo "hidden";
				}
				else {
					echo "location";
				}
			?>">
			<ul>
				<li class="map">
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $embedMap;?>"></iframe><br /><small><a href="<?php echo $embedMap;?>" style="color:#0000FF;text-align:left">View Larger Map</a></small>
				</li>
				<li class="address">
				<img src="<?php echo $venueImage;?>" width="252" height="185" /><br>
			    <?php echo $venue;?>
				</li>
			</ul>
			</div>
			<div class="<?php
				if ($attendTag == $liveTag) {
					echo "hidden";
				}
				else {
					echo "webinar";
				}
			?>">
			<p>For students attending from home, please visit the link below to confirm your registration and receive details regarding viewing from home.</p>
			<p align="center"><a href="<?php echo $webinarLink;?>" target="_blank"><img src="img/btn-registernow.png" width="415" height="137" /></a></p>
			</div>
		</section>
  	</div>
<?php include('footer.php');?>