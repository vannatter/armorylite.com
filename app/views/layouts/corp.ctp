<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<title>Armory Lite: <?= h( $title_for_layout ); ?></title>
		<?= $html->charset() . "\n"; ?>
		<link rel="stylesheet" href="/style.php?s=d&x=99" type="text/css">		
		<?= $javascript->link('jquery') . "\n"; ?>
		<?= $javascript->link('hoverintent') . "\n"; ?>
		<?= $javascript->link('common') . "\n"; ?>
		<?= $scripts_for_layout . "\n"; ?>
		<?= $html->meta('keywords', ((@$meta_keywords) ? @$meta_keywords:"ArmoryLite, Armory, WoW, World of Warcraft, World of Warcraft Armory, Armory Alternative, Lightweight Armory")); ?>
		<?= $html->meta('description', ((@$meta_description) ? @$meta_description:"Armory Lite is a World of Warcraft Armory alternative: lightweight, browser-friendly and bonus features.")); ?>
    	<script language="javascript" type="text/javascript" src="http://www.wowhead.com/widgets/power.js"></script>
		
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-4667823-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</head>
	
	<div id="AL">
    	<div id="darkBackgroundLayer" class="darkenBackground" style="visibility: hidden; display: none;"></div>
		<body>
			<?= $session->flash(); ?>
			<div id="content" class="<?= ((@$page_css) ? @$page_css:"armorylite_wide"); ?>">
			
			<div class="corp_main_left">

          		<div class="corp_header">        
            		<div class="corp_header_left">
              			<a href="/"><img src="/img/head_left.jpg" border="0" alt="Armory Lite" width="265" height="71"></a>
            		</div>      
            		<div class="corp_header_right">
              			<div class="corp_header_right_top">
                			<div id="pcount">???</div>
              			</div>
              			<div class="corp_header_right_bot">
                			<img border="0" usemap="#corpnavv" width="299" height="37" src="/img/head_nav.gif">
              			</div>
            		</div>
          		</div>  
          
          		<div class="corp_content">
					<?= $content_for_layout; ?>
				</div>

		      	<?= $this->element('corp/conflct'); ?>
      	
      		</div>

			<div class="corp_main_right">
	        	<?= $this->Common->show_ad("homepage","tall"); ?> 
	      	</div>			

			<? if(Configure::read('Settings.site_mode') == 2) { ?><div id="sql_log_frame"><div id="sql_log_frame_tab">Show Debug Log</div><div class="sql_log_content"><?php echo $this->element('sql_dump'); ?></div></div><? } ?>
		</body>
	</div>
	
	<map name="corpnavv">
		<area coords="11,2,46,22" shape="rect" href="/" alt="Home">
		<area coords="54,2,90,22" shape="rect" href="/about.php" alt="About">
		<area coords="97,2,135,22" shape="rect" href="/dosearch.php" alt="Search">
		<area coords="143,2,183,22" shape="rect" href="/dobrowse.php" alt="Browse">
		<area coords="192,2,230,22" shape="rect" href="/donate.php" alt="Donate">
		<area coords="238,2,288,22" shape="rect" href="/advertise.php" alt="Advertise">
  	</map>	
		
</html>

<!-- Armorylite.com - a conflct.com gaming network production <?=date("Y");?> -->
<!-- All information property of Blizzard Entertainment            -->