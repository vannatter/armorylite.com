<? include_once("compress.php"); ?>
<? include_once("style_config.php"); ?>
<? header("Content-type: text/css"); ?>

div.alp_main  {
  border: 2px solid #000000;
  padding: 5px;
  width: 250px;
  font-size: 12px;
  position: absolute;
	background-image: url(http://armorylite.com<?=$mesh_01;?>);
	color: #ffffff;
	background-color: #222222;
  opacity: 0.95;
  -moz-opacity:0.95;
  filter: alpha(opacity=95);
  font-family: verdana, arial, sans-serif;
  z-index: 90000;
} 

div.alp_main div.alp_content {
  opacity: 1.0;
  -moz-opacity:1.0;
  filter: alpha(opacity=100);
  width: 250px;
  z-index: 90001;
}

div.alp_main div.alp_content .alp_left {
  width: 140px;
  clear: left;
}

div.alp_main div.alp_content .alp_right {
  width: 100px;
}

.alp_name {
  font-size: 12px;
  font-weight: bold;
  clear: both;
  color: #ffffff;
}

.alp_guild {
  font-size: 12px;
  font-weight: bold;
  clear: both;
  color: #666666;
}

.alp_demo {
  margin-top: 4px;
  font-size: 11px;
  clear: both;
  color: #ffffff;
}

.alp_score {
  border: 1px solid #000000;
  background-color: #333333;
  padding: 3px;
  color: #ffffff;
  font-size: 11px;
  font-weight: bold;
  text-align: center;
}

.alp_spec {
  color: #aaaaaa;
  font-size: 11px;
}

.alp_region {
  margin-top: 4px;
  font-size: 11px;
  color: #aaaaaa;
  clear: both;
}

.alp_img {
  clear: both;
  text-align: right;
  float: right;
  margin-top: 4px;
}

.alp_hp {
  margin-top: 2px;
  border: 1px solid #000000;
  background-color: <?=$color_39;?>;
  padding: 3px;
  color: #ffffff;
  font-size: 11px;
  font-weight: bold;
  text-align: center;
}

.alp_bar {
  margin-top: 2px;
  border: 1px solid #000000;
  padding: 3px;
  color: #ffffff;
  font-size: 11px;
  font-weight: bold;
  text-align: center;
}

.alp_r {
  background-color: <?=$color_45;?>;
}
.alp_e {
  background-color: <?=$color_48;?>;
}
.alp_m {
  background-color: <?=$color_42;?>;
}

.qual_5, .qual_5 A { color: <?=$color_08;?>; text-decoration: none; }
.qual_4, .qual_4 A { color: <?=$color_09;?>; text-decoration: none; }
.qual_3, .qual_3 A { color: <?=$color_10;?>; text-decoration: none; }
.qual_2, .qual_2 A { color: #009500; text-decoration: none; }
.qual_1, .qual_1 A { color: #777777; text-decoration: none; }


