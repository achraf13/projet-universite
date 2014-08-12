<?php
/**
* @package   Cloud
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get template configuration
include($this['path']->path('layouts:template.config.php'));
function is_mobile() {

	// Get the user agent

	$user_agent = $_SERVER['HTTP_USER_AGENT'];

	// Create an array of known mobile user agents
	// This list is from the 21 October 2010 WURFL File.
	// Most mobile devices send a pretty standard string that can be covered by
	// one of these.  I believe I have found all the agents (as of the date above)
	// that do not and have included them below.  If you use this function, you 
	// should periodically check your list against the WURFL file, available at:
	// http://wurfl.sourceforge.net/


	$mobile_agents = Array(


		"240x320",
		"acer",
		"acoon",
		"acs-",
		"abacho",
		"ahong",
		"airness",
		"alcatel",
		"amoi",	
		"android",
		"anywhereyougo.com",
		"applewebkit/525",
		"applewebkit/532",
		"asus",
		"audio",
		"au-mic",
		"avantogo",
		"becker",
		"benq",
		"bilbo",
		"bird",
		"blackberry",
		"blazer",
		"bleu",
		"cdm-",
		"compal",
		"coolpad",
		"danger",
		"dbtel",
		"dopod",
		"elaine",
		"eric",
		"etouch",
		"fly " ,
		"fly_",
		"fly-",
		"go.web",
		"goodaccess",
		"gradiente",
		"grundig",
		"haier",
		"hedy",
		"hitachi",
		"htc",
		"huawei",
		"hutchison",
		"inno",
		"ipad",
		"ipaq",
		"ipod",
		"jbrowser",
		"kddi",
		"kgt",
		"kwc",
		"lenovo",
		"lg ",
		"lg2",
		"lg3",
		"lg4",
		"lg5",
		"lg7",
		"lg8",
		"lg9",
		"lg-",
		"lge-",
		"lge9",
		"longcos",
		"maemo",
		"mercator",
		"meridian",
		"micromax",
		"midp",
		"mini",
		"mitsu",
		"mmm",
		"mmp",
		"mobi",
		"mot-",
		"moto",
		"nec-",
		"netfront",
		"newgen",
		"nexian",
		"nf-browser",
		"nintendo",
		"nitro",
		"nokia",
		"nook",
		"novarra",
		"obigo",
		"palm",
		"panasonic",
		"pantech",
		"philips",
		"phone",
		"pg-",
		"playstation",
		"pocket",
		"pt-",
		"qc-",
		"qtek",
		"rover",
		"sagem",
		"sama",
		"samu",
		"sanyo",
		"samsung",
		"sch-",
		"scooter",
		"sec-",
		"sendo",
		"sgh-",
		"sharp",
		"siemens",
		"sie-",
		"softbank",
		"sony",
		"spice",
		"sprint",
		"spv",
		"symbian",
		"tablet",
		"talkabout",
		"tcl-",
		"teleca",
		"telit",
		"tianyu",
		"tim-",
		"toshiba",
		"tsm",
		"up.browser",
		"utec",
		"utstar",
		"verykool",
		"virgin",
		"vk-",
		"voda",
		"voxtel",
		"vx",
		"wap",
		"wellco",
		"wig browser",
		"wii",
		"windows ce",
		"wireless",
		"xda",
		"xde",
		"zte"
	);

	// Pre-set $is_mobile to false.

	$is_mobile = false;

	// Cycle through the list in $mobile_agents to see if any of them
	// appear in $user_agent.

	foreach ($mobile_agents as $device) {

		// Check each element in $mobile_agents to see if it appears in
		// $user_agent.  If it does, set $is_mobile to true.

		if (stristr($user_agent, $device)) {

			$is_mobile = true;

			// break out of the foreach, we don't need to test
			// any more once we get a true value.

			break;
		}
	}

	return $is_mobile;
}	
?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>">

<head>
<?php echo $this['template']->render('head'); ?>
<meta name="developer" content="benmammar abdelhakim C3E">

<script>
function cachpub () {

document.getElementById("sidebar-a").style.display = "none";
document.getElementById("cachpub").style.display = "none";
document.getElementById("affpub").style.display = "block";
document.getElementById("page-bg").style.margin = "auto";
document.getElementById("page-bg").style.float = "none";
}
function affpub () {
document.getElementById("sidebar-a").style.display = "block";
document.getElementById("cachpub").style.display = "block";
document.getElementById("affpub").style.display = "none";
document.getElementById("page-bg").style.margin = "none";
	<?php if (is_home()) {
?>
document.getElementById("page-bg").style.float = "left";
	<?php }
?>
}
</script>

<script type="text/javascript">
window.onload = montrer;
function montrer(){
document.getElementById('nouv').style.display= "block";
}
</script>

<style>

div#page-bg {
-webkit-transition: all 1s ease-in-out;
-moz-transition: all 1s ease-in-out;
-o-transition: all 1s ease-in-out;
 transition: all 1s ease-in-out;
}
#sidebar-a {
-webkit-transition: all 1s ease-in-out;
-moz-transition: all 1s ease-in-out;
-o-transition: all 1s ease-in-out;
 transition: all 1s ease-in-out;
}
.lang_sel_other{
width: 90px;
background: none !important;
}
.lang_sel_sel{
background: none !important;
}
.lang_sel_list_horizontal{
float: left;
width: 290px;
margin-bottom: -11px;
padding-top: 5px;
}
.lang_sel_sel{
width: 95px !important;
}
#calendar_1 > table > tbody > tr > td > form {
background: white !important;
color: black !important;
}

#calendar_1 > table > tbody > tr > td > form >  table > tbody > tr > td >  b{
color: black !important;
}

#calendar_1 > table > tbody > tr > td > div#views_tabs > div.views > span{

}
<?php
if (($_GET["page_id"] == 1714) or  ($_GET["page_id"] == 1811) or  ($_GET["page_id"] == 1818)) {
?>


h1.title{
font-family: segoe ui light;
font-size: 23px;
text-align: center;
background: white;
width: 260px;
margin: auto;
margin-top: -15px !important;
box-shadow: 1px 3px 7px rgb(214, 214, 214);
-moz-box-shadow: 1px 3px 7px rgb(214, 214, 214);
-webkit-box-shadow: 1px 3px 7px rgb(214, 214, 214);
border-radius: 0px 0px 12px 12px;
-moz-border-radius: 0px 0px 12px 12px;
-webkit-border-radius: 0px 0px 12px 12px;
}

h1.title:hover{
background: black;
color: white;

-webkit-transition: all 0.5s ease-in-out;
-moz-transition: all 0.5s ease-in-out;
-o-transition: all 0.5s ease-in-out;
 transition: all 0.5s ease-in-out;
}



a.post-edit-link {
display: none !important;
}
.carreblog {

padding: 18px;
border-radius: 15px;
-moz-border-radius: 15px;
-webkit-border-radius: 15px;
box-shadow: 1px 1px 10px rgb(199, 199, 199);
-webkit-box-shadow: 1px 1px 10px rgb(199, 199, 199);
-moz-box-shadow: 1px 1px 10px rgb(199, 199, 199);
margin: 13px;
padding-bottom: 40px;
}

.carreblog:hover{
background: white;
-webkit-transition: all 1s ease-in-out;
-moz-transition: all 1s ease-in-out;
-o-transition: all 1s ease-in-out;
 transition: all 1s ease-in-out;
}

.more-links{
background: rgb(102, 102, 102);
text-decoration: none; 
text-decoration: none !important;
<?php if ($_GET["page_id"] == 1818) echo "float: left;"; else echo "float: right;";   ?>
color: white;

font-weight: normal;
font-family: segoe ui light;
padding: 3px 13px 5px 13px;

border-radius: 10px;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
box-shadow: 1px 1px 6px black;
-moz-box-shadow: 1px 1px 6px black;
-webkit-box-shadow: 1px 1px 6px black;
}

.pagiblogplus{
background: rgb(3, 3, 3);
text-decoration: none;
text-decoration: none !important;
color: white;
font-weight: normal;
font-family: segoe ui light;
padding: 3px 13px 5px 13px;
border-radius: 10px;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
box-shadow: 1px 1px 6px black;
-moz-box-shadow: 1px 1px 6px black;
-webkit-box-shadow: 1px 0px 3px black;
width: 113px;
float: right;
margin-top: 12px;
}
.pagiblogplus:hover{
background: white;
color: black;
box-shadow: 1px 1px 6px gray;
-moz-box-shadow: 1px 1px 6px gray;
-webkit-box-shadow: 1px 0px 3px gray;
-webkit-transition: all 0.5s ease-in-out;
-moz-transition: all 0.5s ease-in-out;
-o-transition: all 0.5s ease-in-out;
 transition: all 0.5s ease-in-out;
}

.centerblog{
width: 92%;
margin: auto;
}




.pagiblogmoins{
background: rgb(3, 3, 3);
text-decoration: none;
text-decoration: none !important;
color: white;
font-weight: normal;
font-family: segoe ui light;
padding: 3px 13px 5px 13px;
border-radius: 10px;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
box-shadow: 1px 1px 6px black;
-moz-box-shadow: 1px 1px 6px black;
-webkit-box-shadow: 1px 0px 3px black;
width: 113px;
float: left;
margin-top: 12px;
}
.pagiblogmoins:hover{
background: white;
color: black;
box-shadow: 1px 1px 6px gray;
-moz-box-shadow: 1px 1px 6px gray;
-webkit-box-shadow: 1px 0px 3px gray;
-webkit-transition: all 0.5s ease-in-out;
-moz-transition: all 0.5s ease-in-out;
-o-transition: all 0.5s ease-in-out;
 transition: all 0.5s ease-in-out;
}


.more-links:hover{
background: white;
color: black;
box-shadow: 1px 1px 6px gray;
-moz-box-shadow: 1px 1px 6px gray;
-webkit-box-shadow: 1px 0px 3px gray;
-webkit-transition: all 0.5s ease-in-out;
-moz-transition: all 0.5s ease-in-out;
-o-transition: all 0.5s ease-in-out;
 transition: all 0.5s ease-in-out;
}
.contentblog {
font-size:15px;

}

.titleblog {
font-size:20px;
font-weight: bold;
}
body#page {float: left !important; <?php if ($_GET["page_id"] == 1818) echo "margin-left: 63px;"; else echo "margin: 0;";   ?> width: 646px !important; background: none !important; min-width: 646px !important;} 
body#page.page {float: left !important; <?php if ($_GET["page_id"] == 1818) echo "margin-left: 63px;"; else echo "margin: 0;";   ?> width: 646px !important; background: none !important; min-width: 646px !important;} 
div#page-bg {float: left !important;width: 656px !important;} 
div.wrapper.grid-block, div#maininner {width: 656px !important; min-height: 0 !important;} 
section#content{width: 645px !important;} 
div#block-toolbar, header#header, section#bottom-a, footer#footer, div#lang_sel_footer,aside#sidebar-a { display: none; } ";  

<?php
} else {
?>
	<?php if (!is_home()) {
?>
div#page-bg {
margin: auto;
float: none !important ;
}
	<?php }
?>
body#page.page {
background: url("wp-content/uploads/yootheme/my/backavril.jpg") no-repeat fixed !important;
}
body#page {
background: url("wp-content/uploads/yootheme/my/backavril.jpg")  !important;
}
<?php
} 
?>
</style>

<script language="JavaScript">
 
function calcHeight() {
  //récupère la hauteur de la page
  var the_height = document.getElementById('the_iframe').contentWindow.document.body.scrollHeight;
  //change la hauteur de l'iframe
  document.getElementById('the_iframe').height = the_height;
}

function calcHeights() {
  //récupère la hauteur de la page
  var the_height = document.getElementById('the_iframes').contentWindow.document.body.scrollHeight;
  //change la hauteur de l'iframe
  document.getElementById('the_iframes').height = the_height;
}
</script>
</head>

<body id="page" class="page <?php echo $this['config']->get('body_classes'); ?>" data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>
<?php
if ((!is_mobile()) && (is_home())) {
	
?><div style="margin: auto; width: 1260px;">

<aside id="sidebar-a" class="grid-box" style="min-height: 1417px; float: left;padding-top: 40px;">
<div class="grid-box width100 grid-v">
<div class="module mod-box mod-box-header widget_text deepest">
<style>
div#page-bg {
margin: auto;
float: right ;
}	</style>	
		<?php 

$q=mysql_query("SELECT post_content FROM `wp_posts` WHERE post_status='publish' and id IN (select object_id from wp_term_relationships where term_taxonomy_id=52 ) ORDER BY post_date ASC");
$num= mysql_num_rows ($q);
if ($num != 0) {
echo '<div class="pubsposts" style="margin-top: -42px; margin-left: -17px;">';
while ($r=mysql_fetch_array($q)){
$pub=$r["post_content"];
echo $pub."<br>";
}
echo '</div>';
}
 ?>

		</div></div></aside>
		
		<?php

} elseif (!is_home()) {
?>

<?php
}?>
		
	<div id="page-bg" >
	
		<div id="page-bg2">

			<?php if ($this['modules']->count('absolute')) : ?>
			<div id="absolute">
				<?php echo $this['modules']->render('absolute'); ?>
			</div>
			<?php endif; ?>
			
			<div id="block-toolbar">
			
				<div class="wrapper">
					
					<div id="toolbar" class="grid-block">
				
						<?php if ($this['modules']->count('toolbar-l') || $this['config']->get('date')) : ?>
						<div class="float-left">
						
							<?php if ($this['config']->get('date')) : ?>
							<time datetime="<?php echo $this['config']->get('datetime'); ?>"><?php echo $this['config']->get('actual_date'); ?></time>
							<?php endif; ?>
						
							<?php echo $this['modules']->render('toolbar-l'); ?>
							
						</div>
						<?php endif; ?>
							
						<?php if ($this['modules']->count('toolbar-r')) : ?>
						<div class="float-right" style="width: 542px;"><?php echo $this['modules']->render('toolbar-r'); ?>
						<?php do_action('icl_language_selector'); ?>
						<?php if ((isset ($_GET["lang"])) and ($_GET["lang"] == "en")) {  ?>
						<a id="cachpub" onClick="cachpub();" style="cursor: pointer;">Hide advertising</a>
						<a id="affpub" onClick="affpub();" style="cursor: pointer; display: none;">Show advertising</a>
						<?php } elseif ((isset ($_GET["lang"])) and ($_GET["lang"] == "ar")) {  ?>
						<a id="cachpub" onClick="cachpub();" style="cursor: pointer;">إخفاء الإعلانات</a>
						<a id="affpub" onClick="affpub();" style="cursor: pointer; display: none;">إظهار الإعلانات</a>
						
						<?php } else {?>
						<a id="cachpub" onClick="cachpub();" style="cursor: pointer;">Cacher la publicité</a>
						<a id="affpub" onClick="affpub();" style="cursor: pointer; display: none;">Afficher la publicité</a>
						<?php }?>
						</div>
						<?php endif; ?>
					
					</div>
					
				</div>
				
			</div>
			
			<div class="wrapper grid-block">
		
				<header id="header">
		
					<div id="headerbar" class="grid-block">
					
						<?php if ($this['modules']->count('logo')) : ?>	
						<a id="logo" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['modules']->render('logo'); ?></a>
						<?php endif; ?>
						
						<?php if($this['modules']->count('headerbar')) : ?>
						<div class="left"><?php echo $this['modules']->render('headerbar'); ?></div>
						<?php endif; ?>
						
					</div>
		
					<div id="menubar" class="grid-block">
						
						<?php  if ($this['modules']->count('menu')) : ?>
						<nav id="menu"><?php echo $this['modules']->render('menu'); ?></nav>
						<?php endif; ?>
		
						<?php if ($this['modules']->count('search')) : ?>
						<div id="search"><?php echo $this['modules']->render('search'); ?></div>
						<?php endif; ?>
						
					</div>
				
					<?php if ($this['modules']->count('banner')) : ?>
					<div id="banner"><?php echo $this['modules']->render('banner'); ?></div>
					<?php endif;  ?>
				
				</header>
		
				<?php if ($this['modules']->count('top-a')) : ?>
				<section id="top-a" class="grid-block"><?php echo $this['modules']->render('top-a', array('layout'=>$this['config']->get('top-a'))); ?></section>
				<?php endif; ?>
				
				<?php if ($this['modules']->count('top-b')) : ?>
				<section id="top-b" class="grid-block"><?php echo $this['modules']->render('top-b', array('layout'=>$this['config']->get('top-b'))); ?>
				
				<!--div id="nouv"  style="width: 227px !important; float: <?php/* if ((isset ($_GET["lang"])) and ($_GET["lang"] == "ar")) echo "left !important;"; else echo "right !important;";  ?>  !important; margin-top:<?php if ((isset ($_GET["lang"])) and ($_GET["lang"] == "en")) echo "-300px !important"; elseif ((isset ($_GET["lang"])) and ($_GET["lang"] == "ar")) echo "-232px !important"; else echo "-365px !important";  ?> ; display: none;">
				<?php if ((isset ($_GET["lang"])) and ($_GET["lang"] == "en")) {  ?>
						<h3 class="module-titl">News</h3><?php if (function_exists (vsrp)) vsrp (57); ?>
				
						<?php } elseif ((isset ($_GET["lang"])) and ($_GET["lang"] == "ar")) {  ?>
						<h3 class="module-titl">مستجدات</h3><?php if (function_exists (vsrp)) vsrp (58); ?>
						
						<?php } else {?>
					<h3 class="module-titl">Nouveautés</h3><?php if (function_exists (vsrp)) vsrp (51); ?>
				
						<?php }*/?>
				
				</div-->
				
				
				
				</section>
				<?php endif; ?>
				<?php if  (!is_home()) {?>
				<?php if ($this['modules']->count('innertop + innerbottom + sidebar-a + sidebar-b') || $this['config']->get('system_output')) : ?>
				<div id="main" class="grid-block">
				
					<div id="maininner" class="grid-box">
					
						<?php if ($this['modules']->count('innertop')) : ?>
						<section id="innertop" class="grid-block"><?php echo $this['modules']->render('innertop', array('layout'=>$this['config']->get('innertop'))); ?></section>
						<?php endif; ?>
		
						<?php if ($this['modules']->count('breadcrumbs')) : ?>
						<section id="breadcrumbs"><?php echo $this['modules']->render('breadcrumbs'); ?></section>
						<?php endif; ?>
		
						<?php if ($this['config']->get('system_output')) : ?>
						<section id="content" class="grid-block"><?php echo $this['template']->render('content'); ?></section>
						<?php endif; ?>
		
						<?php if ($this['modules']->count('innerbottom')) : ?>
						<section id="innerbottom" class="grid-block"><?php echo $this['modules']->render('innerbottom', array('layout'=>$this['config']->get('innerbottom'))); ?></section>
						<?php endif; ?>
		
					</div>
					<!-- maininner end -->
					
					<?php if ($this['modules']->count('sidebar-a')) : ?>
					
					<aside id="sidebar-a" class="grid-box"><?php echo $this['modules']->render('sidebar-a', array('layout'=>'stack')); ?></aside>
				
					<?php endif; ?>
						
					<?php if ($this['modules']->count('sidebar-b')) : ?>
					<aside id="sidebar-b" class="grid-box"><?php echo $this['modules']->render('sidebar-b', array('layout'=>'stack')); ?></aside>
					<?php endif; ?>
		
				</div>
				<?php endif; ?><?php } ?>
				<!-- main end -->
		
				<?php if ($this['modules']->count('bottom-a')) : ?>
				<section id="bottom-a" class="grid-block"><?php echo $this['modules']->render('bottom-a', array('layout'=>$this['config']->get('bottom-a'))); ?></section>
				<?php endif; ?>
				
				<?php if ($this['modules']->count('bottom-b')) : ?>
				<section id="bottom-b" class="grid-block"><?php echo $this['modules']->render('bottom-b', array('layout'=>$this['config']->get('bottom-b'))); ?></section>
				<?php endif; ?>
				
				<?php if ($this['modules']->count('footer + debug') || $this['config']->get('warp_branding')) : ?>
				<footer id="footer" class="grid-block">
		
					<?php if ($this['config']->get('totop_scroller')) : ?>
					<a id="totop-scroller" href="#page"></a>
					<?php endif; ?>
		
					<?php
						echo $this['modules']->render('footer');
						$this->output('warp_branding');
						echo $this['modules']->render('debug');
					?>
		
				</footer>
				<?php endif; ?>
				
			</div>
				
		</div>

	</div>
	
	<?php echo $this->render('footer'); ?>
	<?php
if ((!is_mobile()) && (is_home())) echo "</div>"; 
	
?>
</body>
</html>