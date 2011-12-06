<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<title>Armory Lite: <?= h( $title_for_layout ); ?></title>
		<?= $html->charset() . "\n"; ?>
		<link rel="stylesheet" href="/style.php?s=d&x=99" type="text/css">		
		<link rel="stylesheet" href="/css/admin.css" type="text/css">		
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
			<div class="admin_head">
				<div class="logo"><a href="/admin"><img src="/img/logo_mid_dark.gif" width="106" height="38" border="0" /></a></div>
				<div class="admin_nav"><?= $this->element('navigation/admin_top'); ?></div>
			</div>
			
			<div id="content" class="<?= ((@$page_css) ? @$page_css:"armorylite"); ?>">
				<?= $content_for_layout; ?>
			</div>

			<? if(Configure::read('Settings.site_mode') == 2) { ?><div id="sql_log_frame"><div id="sql_log_frame_tab">Show Debug</div><div class="sql_log_content"><?php echo $this->element('sql_dump'); ?></div></div><? } ?>
		</body>
	</div>
		
</html>

<!-- Armorylite.com - a conflct.com gaming network production <?=date("Y");?> -->
<!-- All information property of Blizzard Entertainment            -->