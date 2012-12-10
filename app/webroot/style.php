<? include_once("style_config.php"); ?>
<? header("Content-type: text/css"); ?>

* {
  font-family: verdana, arial, sans-serif;
}

.donate {
  background-color: #333333;
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  text-decoration: none;
  color: #99FF99;
  display: block;
  padding: 10px;
  margin: 5px;
}
.donate A {
  text-decoration: none;
  display: block;
}

HTML { 
  position: relative;
  min-height: 100%; 
  margin-bottom: 1px; 
}  
BODY {
  position: relative;
  margin: 0px;
  text-align: center;
  background-color: <?=$color_04;?>;
  color: <?=$color_05;?>;
  width: 100%;
  height: 100%;
}
A {
  color: <?=$color_01;?>;
}
.alignright {
  text-align: right;  
}
.alignleft {
  text-align: left;  
}
.floatleft {
  float: left;
}
.lr {
  clear: both;
  padding: 3px;
}


.boxborder {
  background-color: #333333;
}


.netlnk {
  	border-bottom: 1px dotted <?=$color_05;?>;
  	color: <?=$color_05;?>;
  	text-decoration: none;
}

.netp {
  margin-bottom: 5px;
}

.navelem {
  border: 1px solid #333;
  margin-bottom: 4px;
}

.navelem_on {
  border: 1px solid #99FF99;
  margin-bottom: 4px;
}

.td {
  font-size: 12px;
}


.navtxt {
  font-weight: bold;
  font-size: 13px;
  color: #ddd;
}

.navele_on {
  color: #aaa;
  display: block;
  background-color: #333333;
  margin: 2px;
  padding: 4px;
}
.navele_on A {
  text-decoration: none;
  color: #99FF99;
  display: block;
  font-weight: bold;
  font-size: 10px;
}

.navele {
  color: #aaa;
  display: block;
  background-color: #191919;
  margin: 2px;
  padding: 4px;
}
.navele A {
  text-decoration: none;
  color: #bbb;
  display: block;
  font-weight: bold;
  font-size: 10px;
}

.clearboth {
  clear: both;
}

.corp_box2 {
  border: 1px solid #333;
  width: 100%;
  margin-top: 9px;
  text-align: center;
}

.corp_box_buffer {
  background-color: #191919;
  margin: 5px;
  padding: 5px;
  text-align: center;
}
.corp_box_buffer2 {
  background-color: #191919;
  margin: 5px;
  padding: 5px;
  text-align: left;
}

.box_buffer {
  background-color: #191919;
  margin: 5px;
  padding: 5px;
}

.box_browse {
  font-weight: bold;
  font-size: 12px;
}

.h50 {
  height: 50px; 
}

.h200 {
  height: 200px;
}

.h250 {
  height: 250px;
}

.h275 {
  height: 275px;
}

.corp_box_main {
  width: 225px;
  clear: both;
  overflow: hidden;
}

.logtxt {
  font-size: 10px;
  font-weight: bold;
}

.registernow {
	font-size: 15px;
	font-weight: bold;
	color: <?=$color_18;?>;
	text-align: center;
	display: block;
  background-color: #333;
  margin: 5px;
  padding: 10px;
}
.registernow A {
	font-size: 15px;
	font-weight: bold;
  text-decoration: none;
  color: #99FF99;
}

.corp_box_main .corp_box_top {
  width: 225px;
  clear: both;
}

.corp_box_main .corp_box_side {
  background-color: #333;
  border-left: 1px solid #333;
  width: 1px;
  float: left;
  height: 100%;
  overflow: hidden;
  display: block;
  
}

.corp_box_main .corp_box_content {
  width: 223px;
  float: left;
  font-size: 11px;
  text-align: left;
  height: 100%;
  border-bottom: 1px solid #333;
}

.pad {
  padding: 10px;
}

.im {
  margin-top: 10px;
  clear: both;
  text-align: left;
}

.imghead {
  height: 25px;
  text-align: left;
}

.hr {
  height: 1px;
  border-bottom: 1px solid #333;
  width: 100%;
  clear: both;
  margin-bottom: 10px;
  line-height: 1px;
}

.hrd {
  height: 1px;
  border-bottom: 1px dotted #222;
  width: 100%;
  clear: both;
  margin-bottom: 5px;
  margin-top: 5px;
}

.breaker {
  height: 20px;
  clear: both;
  width: 1px;
}

.breaker2 {
  height: 15px;
  clear: both;
  width: 1px;
}

.corp_main_left {
  float: left;
}

.corp_content {
  clear: both;
  width: 700px;
}

.corp_main_right {
  float: left;
  padding-left: 5px;
  width: 125px;
}

.corp_header {
  clear: both;
  width: 700px;
}

.corp_header_left {
  float: left;
  clear: left;
  height: 71px;
}

.corp_header_right {
  float: left;
  clear: right;
  width: 430px;
}

.corp_header_right_top {
  height: 34px;
  background-image: url(/img/head_bg.gif);
  background-repeat: repeat-x;
  text-align: right;
  font-size: 11px;
  font-weight: bold;
  clear: both;
  line-height: 34px;
  padding-right: 10px;
  align: right;
}

.corp_header_right_bot {
  height: 37px;
  clear: both;
  align: right;
  text-align: right;
}

#AL {
  width: 100%;
  height: 100%;
}


.clnk {
  border-bottom: 1px dotted #555;
}

.botnav {
  padding-top: 20px;
  padding-left: 5px;
  font-size: 11px;
  font-weight: bold;
  clear: both;
}
.botnav A {
  	border: 1px dotted <?=$color_06;?>;
  	padding: 5px;
  	color: <?=$color_05;?>;
  	text-decoration: none;
}
.botnav_on {
  	border: 1px dotted <?=$color_11;?>;
  	padding: 5px;
  	color: <?=$color_05;?>;
  	text-decoration: none;
}

PRE {
  background-color: <?=$color_02;?>;
	border: 1px dotted <?=$color_06;?>;
  margin: 8px 2px 0px 8px;
  padding: 3px;
  font-size: 11px;
  text-align: left;
  color: #fff;
}

.darkenBackground { 
  background-color: rgb(0, 0, 0);
  opacity: 0.7;
  -moz-opacity:0.70;
  filter: alpha(opacity=70);
  z-index: 100;
  height: 100%;
  width: 100%;
  background-repeat: repeat;
  position: absolute;
  top: 0px;
  left: 0px;
}

.whead {
  background-color: #080808;
	border-left: 1px dotted <?=$color_06;?>;
	border-top: 1px dotted <?=$color_06;?>;
	border-right: 1px dotted <?=$color_06;?>;
	border-bottom: 1px solid #080808;
	color: #99FF99;
	padding: 5px;
  margin: 12px 2px 0px 8px;
  font-size: 11px;
  font-weight: bold;
  text-align: left;
  float: left;
}

.whead2 {
  background-color: #151515;
	border-left: 1px dotted <?=$color_06;?>;
	border-top: 1px dotted <?=$color_06;?>;
	border-right: 1px dotted <?=$color_06;?>;
	border-bottom: 1px solid #151515;
	padding: 5px;
  margin: 12px 2px 0px 8px;
  font-size: 11px;
  font-weight: bold;
  text-align: left;
  float: left;
}
.whead2 A {
  text-decoration: none;
  color: #999;
}

.warn {
  background-color: <?=$color_02;?>;
	border: 1px dotted <?=$color_06;?>;
	padding: 4px;
  margin: 12px 2px 5px 8px;
  font-size: 12px;
  font-weight: bold;
}

I {
	border-bottom: 1px dotted <?=$color_06;?>;
}

.claim_header {
  background-color: <?=$color_12;?>;
	border: 1px dotted <?=$color_11;?>;
	padding: 4px;
  margin: 12px 2px 5px 8px;
  font-size: 13px;
  font-weight: bold;
  color: <?=$color_17;?>;
}

.claim_header A {
  text-decoration: none;
  color: <?=$color_17;?>
}


.msg2 {
  background-color: #080808;
	border: 1px dotted <?=$color_06;?>;
	padding: 6px;
  margin: 2px 2px 5px 8px;
  font-size: 12px;
  clear: both;
}


.msg {
	border: 1px dotted <?=$color_02;?>;
	padding: 4px;
  margin: 2px 2px 5px 8px;
  font-size: 12px;
  clear: both;
}

.ad {
	border: 1px dotted <?=$color_15;?>;
	padding: 2px;
	clear: both;
}

.ad_728 {
  width: 728px;
}

.ad_120 {
  width: 120px;
}

.ad_125 {
  width: 125px;
}

.ad_468 {
  width: 468px;
}

.urlf {
  color: #ccc;
  background-color: #000;
  padding: 2px;
  border: 1px solid #333;
}

.w1  { width: 150px; }
.w2  { width: 200px; }
.w3  { width: 50px;  }
.w4  { width: 100px; }  
.w5  { width: 75px;  }  
.w6  { width: 125px; }  
.w7  { width: 60px;  }
.w8  { width: 35px;  }
.w9  { width: 110px; }  
.w0  { width: 85px;  }  
.w11 { width: 165px; }
.w12 { width: 220px; }
.w13 { width: 350px; }
.w14 { width: 300px; }
.w15 { width: 500px; }
.w16 { width: 600px; }
.w17 { width: 700px; }

/**** sortable table style ***************************************************/
.sortable {
  padding: 3px;
  font-weight: normal;
  font-size: 11px;
}

.sortable TR TH {
  padding: 5px;
  font-size: 11px;
  font-weight: bold;
}

.sortable thead {
  padding: 3px;
  height: 25px;
  background-color: <?=$color_02;?>;
  color: <?=$color_03;?>;
  font-weight: bold;
  cursor: pointer;
}
.searchgrid_head, .searchgrid_head th {
	border: 1px dotted <?=$color_06;?> !important;
	text-align: center !important;
}
.searchgrid_row {
  padding: 3px;
  margin: 3px;
  font-weight: normal;
  font-size: 11px;
}
.searchgrid_col {
  color: <?=$color_17;?>;
  padding: 3px;
  margin: 3px;
  font-weight: normal;
  font-size: 11px;
  border-bottom: 1px dotted <?=$color_07;?>;
}
.searchgrid_col A {
  color: <?=$color_17;?>;
  text-decoration: none;
  display: block;
}

/*****************************************************************************/
.slot {
  font-weight: bold;
  font-size: 20px;
  padding: 0px;
  margin: 2px 0px 4px 0px;
  color: <?=$color_07;?>;
  text-decoration: none;
  text-align: center;
  width: 36px;
  height: 36px;
  line-height: 36px;
  background-color: <?=$color_00;?>;
  cursor: pointer;
}
.grid_ele { 
  float: left;
  font-size: 11px;
  font-weight: normal;
  margin-bottom: 3px;
  color: <?=$color_22;?>;
  text-align: left;
  border-bottom: 1px dotted <?=$color_07;?>;
  border-left: 1px solid <?=$color_04;?>;
  padding-bottom: 6px;
  padding-left: 4px;
  display: block;
}
.grid_ele A {
  color: <?=$color_22;?>;
  text-decoration: none;
  display: block;
}
.grid_width_a {
  width: 150px;
}
.grid_width_b {
  width: 200px;
}
.grid_width_c {
  width: 50px;
}
.grid_width_d {
  width: 100px;
}

/*******************************************************************************************************************/
.slot_7 A {
  color: <?=$color_103;?>; 
  text-decoration: none;
}
.slot_5 A {
  color: <?=$color_08;?>; 
  text-decoration: none;
}
.slot_4 A {
  color: <?=$color_09;?>; 
  text-decoration: none;
}
.slot_3 A {
  color: <?=$color_10;?>; 
  text-decoration: none;
}
.slot_2 A {
  color: #009500; 
  text-decoration: none;
}
.slot_1 A {
  color: #aaa; 
  text-decoration: none;
}
.slot_0 A {
  color: #aaa; 
  text-decoration: none;
}

.slot_color_7 { 
  border: 1px dotted <?=$color_103;?>;
}
.slot_color_5 { 
  border: 1px dotted <?=$color_08;?>;
}
.slot_color_4 { 
  border: 1px dotted <?=$color_09;?>;
}
.slot_color_3 { 
  border: 1px dotted <?=$color_10;?>;
}
.slot_color_2 { 
  border: 1px dotted #009500;
}
.slot_color_1 { 
  border: 1px dotted #aaa;
}
.slot_color_0 { 
  border: 1px dotted <?=$color_07;?>;
}
/***************************************************************************************************************/


.sub {
	font-size: 17px;
	font-weight: bold;
	color: <?=$color_18;?>;
}
.sub2, .sub2 A {
  margin-top: 1px;
  margin-bottom: 2px;
	font-size: 13px;
	font-weight: bold;
	color: <?=$color_03;?>;
	text-decoration: none;
}
.sub3, .sub3 A {
  margin-top: 3px;
	font-size: 11px;
	font-weight: normal;
	color: <?=$color_05;?>;
	text-decoration: none;
}
.sub4 {
  padding: 3px;
  font-size: 11px;
  font-weight: normal;
  color: <?=$color_35;?>;
  text-align: center;
  border: 1px dotted <?=$color_36;?>;
  background-color: <?=$color_37;?>;
  margin-bottom: 2px;
}
.sub_talent {
  padding: 3px;
  font-size: 10px;
  font-weight: normal;
  color: <?=$color_35;?>;
  text-align: center;
  border: 1px dotted <?=$color_36;?>;
  background-color: <?=$color_37;?>;
  margin-bottom: 2px;
}
.sub6 {
  padding: 4px;
  font-size: 16px;
  font-weight: bold;
  color: <?=$color_35;?>;
  text-align: center;
  border: 1px dotted <?=$color_36;?>;
  background-color: <?=$color_37;?>;
  margin-bottom: 2px;
}

.qual_7, .qual_7 A { color: #E5CC80; text-decoration: none; }
.qual_6, .qual_6 A { color: #BC382B; text-decoration: none; }
.qual_5, .qual_5 A { color: <?=$color_08;?>; text-decoration: none; }
.qual_4, .qual_4 A { color: <?=$color_09;?>; text-decoration: none; }
.qual_3, .qual_3 A { color: <?=$color_10;?>; text-decoration: none; }
.qual_2, .qual_2 A { color: #009500; text-decoration: none; }
.qual_1, .qual_1 A { color: #CCCCCC; text-decoration: none; }
.qual_0, .qual_0 A { color: #777777; text-decoration: none; }

.err {
  padding: 3px;
  font-size: 11px;
  font-weight: bold;
  text-align: left;
  color: #FF9A35;
  margin-bottom: 3px;
}

.subw {
  padding: 3px;
  font-size: 11px;
  font-weight: bold;
  color: #000000;
  text-align: center;
  border: 1px dotted <?=$color_07;?>;
  background-color: #FF9A35;
  width: 90%;
}
.subw A {
  color: #000000;
  border-bottom: 1px dotted #000000;
}

.hpx {
  width: 100%;
  clear: both;
}
.hp {
  padding: 3px;
  margin: 0px 2px 2px 0px;
  font-size: 11px;
  font-weight: normal;
  color: <?=$color_38;?>;
  text-align: center;
  border: 1px dotted <?=$color_39;?>;
  background-color: <?=$color_40;?>;
  float: left;
  width: 43%;
}
.mana {
  padding: 3px;
  margin-bottom: 2px;
  font-size: 11px;
  font-weight: normal;
  color: <?=$color_41;?>;
  text-align: center;
  border: 1px dotted <?=$color_42;?>;
  background-color: <?=$color_43;?>;
  float: right;
  width: 42%;
}

.rage {
  padding: 3px;
  font-size: 11px;
  font-weight: normal;
  color: <?=$color_44;?>;
  text-align: center;
  border: 1px dotted <?=$color_45;?>;
  background-color: <?=$color_46;?>;
  margin-bottom: 2px;
  float: right;
  width: 42%;
}

.energy {
  padding: 3px;
  font-size: 11px;
  font-weight: normal;
  color: <?=$color_47;?>;
  text-align: center;
  border: 1px dotted <?=$color_48;?>;
  background-color: <?=$color_49;?>;
  margin-bottom: 2px;
  float: right;
  width: 42%;
}

.prof {
  padding: 3px;
  margin-top: 2px;
  font-size: 10px;
  font-weight: normal;
  color: <?=$color_50;?>;
  text-align: center;
  border: 1px dotted <?=$color_51;?>;
  background-color: <?=$color_52;?>;
  clear: left;
}

#char_grid {
  margin-top: 2px;
  margin-left: 2px;
  margin-right: 3px;
  margin-bottom: 2px;
  border: 1px dotted <?=$color_17;?>;
  padding: 2px;
  clear: both;
  background-color: <?=$color_16;?>;
  overflow: hidden;
}

#stats_char {
  width: 418px;
  margin: auto;
  margin-bottom: -6px;
  padding: 6px 0px 0px 0px;
  text-align: left; 
}

.stat_block {
  margin-top: 0px;
  clear: both;
}

#stats_char_left {
  float: left; 
  clear: left;
  padding-bottom: 5px;
  margin-left: 1px;
  width: 270px;
}
#stats_char_right {
  float: right;
  clear: right;
  padding-bottom: 5px;
  width: 120px;
}

.buff_block {
  border: 1px dotted <?=$color_20;?>;
  color: <?=$color_21;?>;
  background-color: <?=$color_19;?>;
  width: 35px;
  height: 20px;
  text-align: center;
  margin: 2px 0px 0px 2px;
  padding: 0px;
  line-height: 20px;
  font-size: 10px;
  font-weight: bold;
  cursor: default;
}

/*******************************************************************************************************************/
/*******************************************************************************************************************/

.main_link_7 { 
  text-decoration: none;
  text-indent: 4px;
  color: <?=$color_103;?>;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_7 A { 
  text-decoration: none;
  text-indent: 4px;
  color: <?=$color_103;?>;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_7 A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

.main_link_5 { 
  text-decoration: none;
  text-indent: 4px;
  color: <?=$color_08;?>;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_5 A { 
  text-decoration: none;
  text-indent: 4px;
  color: <?=$color_08;?>;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_5 A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

.main_link_4 { 
  text-decoration: none;
  text-indent: 4px;
  color: <?=$color_09;?>;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_4 A { 
  text-decoration: none;
  text-indent: 4px;
  color: <?=$color_09;?>;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_4 A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

.main_link_3 { 
  text-decoration: none;
  text-indent: 4px;
  color: <?=$color_10;?>;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_3 A { 
  text-decoration: none;
  text-indent: 4px;
  color: <?=$color_10;?>;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_3 A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

.main_link_2 { 
  text-decoration: none;
  text-indent: 4px;
  color: #009500;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_2 A { 
  text-decoration: none;
  text-indent: 4px;
  color: #009500;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_2 A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

.main_link_1 { 
  text-decoration: none;
  text-indent: 4px;
  color: #808080;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_1 A { 
  text-decoration: none;
  text-indent: 4px;
  color: #808080;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_1 A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

.main_link_0 { 
  text-decoration: none;
  text-indent: 4px;
  color: #808080;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_0 A { 
  text-decoration: none;
  text-indent: 4px;
  color: #808080;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_0 A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

/*****************************************************************************************/
.gem_link_5 { 
  text-decoration: none;
  text-indent: 7px;
  color: <?=$color_08;?>;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_5 A { 
  text-decoration: none;
  text-indent: 7px;
  color: <?=$color_08;?>;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_5 A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

.gem_link_4 { 
  text-decoration: none;
  text-indent: 7px;
  color: <?=$color_09;?>;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_4 A { 
  text-decoration: none;
  text-indent: 7px;
  color: <?=$color_09;?>;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_4 A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

.gem_link_3 { 
  text-decoration: none;
  text-indent: 7px;
  color: <?=$color_10;?>;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_3 A { 
  text-decoration: none;
  text-indent: 7px;
  color: <?=$color_10;?>;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_3 A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

.gem_link_2 { 
  text-decoration: none;
  text-indent: 7px;
  color: #009500;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_2 A { 
  text-decoration: none;
  text-indent: 7px;
  color: #009500;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_2 A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

.gem_link_1 { 
  text-decoration: none;
  text-indent: 7px;
  color: #808080;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_1 A { 
  text-decoration: none;
  text-indent: 7px;
  color: #808080;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_1 A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

.gem_link_0 { 
  text-decoration: none;
  text-indent: 7px;
  color: #808080;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_0 A { 
  text-decoration: none;
  text-indent: 7px;
  color: #808080;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_0 A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

.dur_link { 
  text-decoration: none;
  text-indent: 7px;
  font-weight: normal;
  font-size: 10px;
  color: <?=$color_03;?>;
  display: block;
  white-space: nowrap;
}
.dur_link A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

.reforge_link { 
  text-decoration: none;
  text-indent: 7px;
  font-weight: normal;
  font-size: 10px;
  color: #1EFF00;
  display: block;
  white-space: nowrap;
}
.reforge_link A:hover { 
  background-color: <?=$color_03;?>;
  color: #1EFF00;
}


.enchant_link {
  text-decoration: none;
  text-indent: 7px;
  color: #009500;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.enchant_link A {
  text-decoration: none;
  text-indent: 7px;
  color: #009500;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}

.enchant_link A:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}

/*****************************************************************************************/
.slot_mnu {
	overflow: hidden;
	margin: 6px 0px 0px 6px !important;

  position: absolute;
  border: 1px dotted <?=$color_53;?>;
  line-height: 18px;
  z-index: 100;
  background-color: <?=$color_54;?>;
  width: auto;
  text-align: left;
}

.slot_mnu A {
  padding: 1px;
  text-decoration: none;
}


.tal_mnu {
	overflow: hidden;
	margin: -30px 0px 0px 6px !important;

  position: absolute;
  border: 1px dotted <?=$color_53;?>;
  line-height: 18px;
  z-index: 100;
  background-color: <?=$color_54;?>;
  width: 280px;
  text-align: left;
  padding: 5px;
}

.tal_mnu A {
  padding: 1px;
  text-decoration: none;
}

.tmnu_name {
	font-size: 13px;
	font-weight: bold;
	clear: both;
	color: #fff;
}
.tmnu_rank {
	font-size: 11px;
	font-weight: normal;
	clear: both;
	color: #666;
}
.tmnu_desc {
	font-size: 12px;
	font-weight: normal;
	clear: both;
	margin-top: 5px;
}


/*****************************************************************************************/
.stats_head_on {
  margin: 6px 6px 0px 6px;
  font-size: 11px;
  font-weight: normal;
  background-color: <?=$color_23;?>;
  color: <?=$color_24;?>;
  text-align: left;
  text-indent: 5px;
  padding: 2px;
  border: 1px dotted <?=$color_25;?>;
  cursor: pointer;
}

.stats_head_off {
  margin: 6px 6px 6px 6px;
  font-size: 11px;
  font-weight: normal;
  background-color: <?=$color_26;?>;
  color: <?=$color_27;?>;
  text-align: left;
  text-indent: 5px;
  padding: 2px;
  border: 1px dotted <?=$color_28;?>;
  cursor: pointer;
}

.stats_main {
  margin: 0px 6px 6px 6px;
  padding: 2px 2px 2px 2px;
  font-size: 11px;
  font-weight: normal;
  color: <?=$color_29;?>;
  background-color: <?=$color_30;?>;
  text-align: center;
  text-indent: 10px; 
  border-left: 1px dotted <?=$color_31;?>;
  border-right: 1px dotted <?=$color_31;?>;
  border-bottom: 1px dotted <?=$color_31;?>;
}

.stat_table {
	font-size: 11px;
	margin-top: 10px;
	border: 1px dotted <?=$color_28;?>;
}

.stat_table td {
	margin: 1px;
	padding: 4px;
	color: #ccc;
}

.stat_table .stat_table_hdr {
	background-color: #222;
	padding: 6px;
	text-align: left;
	font-weight: bold;
	color: #fff;
}

.stat_table th {
	padding: 6px;
	text-align: left;
	background-color: <?=$color_29;?>;
	font-weight: normal;
	color: #aaa;
}



.stats_item {
  text-align: left;
  font-size: 11px;
  font-weight: normal;
  text-indent: 0px;
  padding: 1px;
}

.stats_lbl {
  text-align: left;
  color: <?=$color_32;?>;
}
.stats_val {
  text-align: left;
  font-weight: bold;
  color: <?=$color_33;?>;
}
.stats_val2 {
  text-align: left;
  font-weight: bold;
  color: <?=$color_34;?>;
}


/*****************************************************************************************/
#navigation {
  clear: both;
  width: 600px;
  height: 20px;
  margin-bottom: 10px;
  padding-bottom: 2px;
  z-index: 400;
}

#navigation .box_space {
  width: 20px;
  display: block;
  float: left;
}

.top_root_mnu {
	cursor: pointer !important;
}

.mnu_list {
	border: 1px solid <?=$color_15;?>;
	clear: both;
	position: absolute;
	z-index: 400;
	width: 130px;
	cursor: pointer;
	margin-left: 3px;
	margin-top: 2px;
}

#navigation .my_on {
  float: left;
  width: 60px;
  clear: right;
  font-weight: bold;
  font-size: 10px;
  border-left: 1px dotted <?=$color_11;?>;
  border-right: 1px dotted <?=$color_11;?>;
  border-bottom: 1px dotted <?=$color_11;?>;
  border-top: 1px dotted <?=$color_105;?>;
  padding: 2px;
  margin-left: 2px;
  text-decoration: none;
  text-align: center;
  background-color: <?=$color_12;?>;
  display: block;
  line-height: 15px;
  z-index: 300;
}
#navigation .my_on A {
  text-decoration: none;
  color: <?=$color_14;?>;
  display: block;
  z-index: 300;
}

#navigation .my_off {
  float: left;
  width: 60px;
  clear: right;
  font-weight: bold;
  font-size: 10px;
  border-left: 1px dotted <?=$color_15;?>;
  border-right: 1px dotted <?=$color_15;?>;
  border-bottom: 1px dotted <?=$color_15;?>;
  border-top: 1px dotted <?=$color_104;?>;
  padding: 2px;
  margin-left: 2px;
  color: <?=$color_15;?>;
  text-decoration: none;
  text-align: center;
  background-color: <?=$color_13;?>;
  display: block;
  line-height: 15px;
  z-index: 300;
} 
#navigation .my_off A {
  text-decoration: none;
  color: <?=$color_15;?>; 
  display: block;
  z-index: 300;
}

#nav_my {
  z-index: 100px;
  width: 150px;
}

#navigation #my_nav {
  z-index: 300;
  position: absolute;
}

#my_block {
  clear: both;
  border: 1px dotted <?=$color_11;?>;
  background-color: <?=$color_12;?>;
  color: <?=$color_13;?>;
  margin-top: 20px;
  margin-left: 2px;
  padding: 1px;
  width: 150px;
  text-align: left;
  z-index: 300;
  top: 0px;
}

.my_ele_head {
  color: <?=$color_15;?>;
  background-color: <?=$color_04;?>;
  display: block;
  padding: 4px;
  margin: 0px;
  font-size: 11px;
  font-weight: bold;
  z-index: 300;
}

.my_ele {
  color: <?=$color_15;?>;
  background-color: <?=$color_82;?>;
  display: block;
  padding: 1px;
  padding-left: 5px;
  margin: 0px;
  font-size: 10px;
  font-weight: bold;
  z-index: 300;
}

.my_ele:hover {
  background-color: <?=$color_106;?>;
  display: block;
  padding: 1px;
  padding-left: 5px;
  margin: 0px;
  font-size: 10px;
  font-weight: bold;
  z-index: 300;
}

#navigation .my_off .my_ele:hover A {
  color: <?=$color_107;?>;
}

#navigation .box_on {
  float: left;
  width: 60px;
  clear: right;
  font-weight: bold;
  font-size: 10px;
  border-left: 1px dotted <?=$color_11;?>;
  border-right: 1px dotted <?=$color_11;?>;
  border-bottom: 1px dotted <?=$color_11;?>;
  border-top: 1px dotted <?=$color_105;?>;
  padding: 2px;
  margin-left: 2px;
  text-decoration: none;
  text-align: center;
  background-color: <?=$color_12;?>;
  display: block;
  line-height: 15px;
} 
#navigation .box_on A {
  text-decoration: none;
  color: <?=$color_14;?>;
  display: block;
}

#navigation .box_off {
  float: left;
  width: 60px;
  clear: right;
  font-weight: bold;
  font-size: 10px;
  border-left: 1px dotted <?=$color_15;?>;
  border-right: 1px dotted <?=$color_15;?>;
  border-bottom: 1px dotted <?=$color_15;?>;
  border-top: 1px dotted <?=$color_104;?>;
  padding: 2px;
  margin-left: 2px;
  color: <?=$color_15;?>;
  text-decoration: none;
  text-align: center;
  background-color: <?=$color_13;?>;
  display: block;
  line-height: 15px;
} 
#navigation .box_off A {
  text-decoration: none;
  color: <?=$color_15;?>;
  display: block;
}

/***************************************************************************************/
.armorylite {
  margin-left: auto; 
  margin-right: auto; 
  width: 750px;
  min-height: 100%;
}

.armorylite_wide {
  margin-left: auto; 
  margin-right: auto; 
  min-height: 100%;
  width: 900px;
}

#profile_wide {
  width: 900px;
  margin: 0px;
  padding: 0px;
  clear: both;
}

#profile {
  width: 600px;
  margin: 0px;
  padding: 0px;
  clear: both; 
}

#char_bot {
  margin-left: auto; 
  margin-right: auto; 
  width: 180px;
  clear: both;
  vertical-align: top;
  padding-top: 2px;
  margin-top: 8px;
  height: 36px;
  padding-left: 40px;
}

.horiz {
  float: left;
  clear: right;
  margin-top: 0px;
  margin-right: 4px;
  vertical-align: top;
  height: 36px;
}

#char_left {
  float: left;
  margin-left: 3px;
  clear: right;
  padding-left: 0px;
}

#char_mid {
  float: left;
  width: 440px;
  margin-top: 0px;
  margin-bottom: 0px;
  margin-right: 10px;
  margin-left: 10px;
  clear: right;
  padding: 0px;
}

#char_right {
  float: left;
  margin: 0px;
  clear: right;
  padding: 0px;
}

#char_buffs {
  width: 35px;
  margin-left: 5px;
  float: left;
  clear: right;
  padding: 0px;
}

#footer {
  width: 600px;
  margin: 0px;
  padding: 0px;
  clear: both;
}

#footer P {
  margin-top: 0px;
  margin-left: 0px;
  margin-right: 0px;
  margin-bottom: 8px;
}

#footer #cnt_center {
  margin-left: auto; 
  margin-right: auto; 
  padding-top: 40px;
  padding-right: 60px;
  text-align: center;
}

#footer #cnt_left {
  float: left;
  padding-top: 40px;
  text-align: left;
}

.foot_txt, .foot_txt A {
  font-size: 10px;
  font-weight: normal;
  color: #555;
  text-decoration: none;
  clear: both;
}

/***************************************************************************************/
/******************** HOMEPAGE DEFINITION **********************************************/
#homepage {
  width: 800px;
}

  #homepage #header {
    margin-top: 20px;
    font-size: 24px;
    font-weight: bold;
    float: right;
  }

  #header #block {
    width: 30px;
    height: 30px;
    border:1px dotted <?=$color_03;?>;
    float: left;
    margin-left: 3px;
  }
  
  #tagline {
    margin-left: 120px;
    font-size: 50px;
    color: #bbb;
  }
  #tagline A {
    color: #bbb;
    text-decoration: none;
  }

  .block_a { 
    background-color: <?=$color_01;?>;
  }
  .block_b {
    background-color: #FFD414;
  }
  .block_c {
    background-color: <?=$color_06;?>;
  }
  
  #homepage #body {
    clear: both;
    font-size: 18px;
    font-weight: bold;
    color: <?=$color_03;?>;
    padding-top: 20px;
    text-align: left;
  }

  .highlight {
    font-weight: bold;
  }
  
  #homepage #body #left {
    float: left;
    clear: right;
    width: 400px;
    text-align: left;
    color: <?=$color_01;?>;
  }     

  #homepage #body #right {
    float: left;
    clear: right;
    width: 230px;
    text-align: left;
  } 
  
  #homepage #body #righter {
    float: left;
    width: 125px;  
    margin-left: 15px;
  }
  
  #text_block {
    font-size: 11px;
    font-weight: bold;
    color: #000000;
    padding: 15px;
    margin-bottom: 15px;
    border:2px dotted #fff;
  }
  #text_block A {
    color: #ffffff;
    text-decoration: none;
  }

  #push {
    margin-right: 15px;
    margin-top: 0px;
    font-size: 14px;
    font-weight: bold;
    color: #888;
    background-color: <?=$color_101;?>;
    text-align: center;
    padding: 10px;
    border:2px dotted <?=$color_03;?>;
    margin-bottom: 15px;
  }  

  #lnk {
    margin: 0px;
    font-size: 12px;
    font-weight: bold;
    color: #888;
    background-color: #fff;
    text-align: left;
    padding: 5px;
    border:2px dotted #111;
  }  
  
  #lnk A {
    color: #000000;
    display: block;
  }

  .arm_box_bot_head {
    padding-top: 10px;
    margin-top: 10px;
  	font-family: verdana, helvetica, serif;
  	font-weight: bold;
  	font-size: 12px;
  }

  .arm_box_bot_body, #arm_link, #arm_link A {
    padding-top: 3px;
    padding-bottom: 3px;
  	font-family: verdana, helvetica, serif;
  	font-weight: bold;
  	font-size: 12px;
  	color: #99FF99;
  	text-decoration: underline;
  }
  
  .builder_sel {
  	background-color: <?=$color_89;?>;
  	border: 1px solid <?=$color_90;?>;
  	width: 200px;
  	font-family: verdana, helvetica, serif;
  	color: <?=$color_91;?>;
  	font-size: 12px;
  }
  
  .search_sel {
  	background-color: <?=$color_89;?>;
  	border: 1px solid <?=$color_90;?>;
  	font-family: verdana, helvetica, serif;
  	color: <?=$color_91;?>;
  	font-size: 12px;
  }  

  .builder_name {
  	background-color: <?=$color_89;?>;
  	border: 1px solid <?=$color_90;?>;
  	font-family: verdana, helvetica, serif;
  	color: <?=$color_91;?>;
  	font-size: 12.5px;
  	text-align: center;
  	width: 400px;
  }  

  #login_nocenter {
  	background-color: <?=$color_89;?>;
  	border: 1px solid <?=$color_90;?>;
  	font-family: verdana, helvetica, serif;
  	color: <?=$color_91;?>;
  	font-size: 12.5px;
  }
  

  
  
  #login {
  	background-color: <?=$color_89;?>;
  	border: 1px solid <?=$color_90;?>;
  	font-family: verdana, helvetica, serif;
  	color: <?=$color_91;?>;
  	font-size: 12.5px;
  	text-align: center;
  }

  #login_on {
  	background-color: <?=$color_92;?>;
  	border: 1px solid <?=$color_93;?>;
  	font-family: verdana, helvetica, serif;
  	color: <?=$color_94;?>;
  	font-size: 12.5px;
  	text-align: center;
  }

  #login_l {
  	background-color: #fff;
  	border: 1px solid #000;
  	font-family: verdana, helvetica, serif;
  	color: <?=$color_06;?>;
  	font-size: 12.5px;
  	text-align: center;
  }
  
  #login_on_l {
  	background-color: #fff;
  	border: 2px dotted #000;
  	font-family: verdana, helvetica, serif;
  	color: #000;
  	font-size: 12.5px;
  	text-align: center;
  	font-weight: bold;
  }

  .blog2 {
  	font-family: verdana, helvetica, serif;
  	color: #999;
  	font-size: 11px;
  	line-height: 17px;
  	clear: both;
  	text-align: left;
  }

  .blog2 A {
    color: #99FF99;
  }
  
  .blog2 .blog_footer {
  	font-family: verdana, helvetica, serif;
  	color: #bbb;
  	font-size: 10px;
  	clear: both;
  	line-heigh: 15px;
  }
  
  .footmain {
    clear: both;
    text-align: left;
    align: left;
    margin-bottom: 25px;
    font-size: 10px;
    color: #222;
    margin-top: 10px;
  }
  
  #blog {
  	font-family: verdana, helvetica, serif;
  	color: #999;
  	font-size: 11px;
  	line-height: 17px;
  	margin-right: 20px;
  	padding-top: 0px;
  	padding-bottom: 10px;
  	padding-left: 5px;
  	padding-right: 5px;
  }
  
  #blog .blog_footer {
  	font-family: verdana, helvetica, serif;
  	color: #bbb;
  	font-size: 10px;
  }
  

  .stat_header_on {
    color: <?=$color_78;?> !important;
    background-color: <?=$color_79;?> !important;
  	border: 1px dotted <?=$color_80;?> !important;
  }
  

/********************* SKILLS DEFINITION ***********************************************/



#skills {
  width: 600px;
}
  #skills #header {
    text-align: left;
    padding: 0px 0px 0px 3px;
    margin-bottom: 10px;
  }
  #skills #content {
    clear: both;
    text-align: left;
  }
  .skill_main {
    clear: both;
  }
  .skill_header {
    clear: both;
    font-size: 13px;
    font-weight: bold;
    color: <?=$color_78;?>;
    background-color: <?=$color_79;?>;
    padding: 4px;
    margin: 3px;
    text-align: left;
  	border: 1px dotted <?=$color_80;?>;
    cursor: pointer;
  }
  .skill_header_off {
    clear: both;
    font-size: 13px;
    font-weight: bold;
    color: <?=$color_81;?>;
    background-color: <?=$color_82;?>;
    padding: 4px;
    margin: 3px;
    text-align: left;
  	border: 1px dotted <?=$color_83;?>;
    cursor: pointer;
  }
  .skill_line {
    clear: both; 
    margin: 6px;
    padding: 2px;
  }  
  .skill_name { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 180px;
    margin-bottom: 4px;
    text-align: left;
  }
  .skill_box {
  	border: 1px solid <?=$color_84;?>;
    background-color: <?=$color_85;?>;
    width: 140px;
    float: left;
    font-size: 11px;
    font-weight: normal;
    padding: 1px;
    text-align: left;
    margin-bottom: 4px;
  }
  .skill_lvl { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    padding-left: 10px;
    color: <?=$color_03;?>;
    text-align: left;
    margin-bottom: 4px;
  }

/********************* GUILD DEFINITION ************************************************/
#guild {
  width: 600px;
}
  #guild #header {
    text-align: left;
    padding: 0px 0px 0px 3px;
    margin-bottom: 10px;
  }
  #guild #content {
    clear: both;
    text-align: left;
  }
  .guild_header {
  	border: 1px dotted <?=$color_06;?>;
    font-size: 13px;
    font-weight: bold;
    color: <?=$color_03;?>;
    background-color: <?=$color_02;?>;
    padding: 4px;
    margin: 3px;
    text-align: left;
    height: 20px;
    line-height: 20px;
  }
  .guild_line {
    clear: both; 
    margin: 6px;
    padding: 2px;
  }  
  .guild_member_name { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 145px;
    margin-bottom: 3px;
    text-align: left;
    border-bottom: 1px dotted <?=$color_07;?>;
    border-left: 1px solid <?=$color_04;?>;
    padding: 0px 0px 6px 4px;
    display: block;
  }
  .guild_member_name A {
    color: <?=$color_86;?>;
    text-decoration: none;
    display: block;
  }
  .guild_lvl { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 50px;
    color: <?=$color_03;?>;
    text-align: left;
    margin-bottom: 3px;
    border-bottom: 1px dotted <?=$color_07;?>;
    padding-bottom: 6px;
    display: block;
  }
  .guild_rank { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 80px;
    color: <?=$color_03;?>;
    text-align: left;
    margin-bottom: 3px;
    border-bottom: 1px dotted <?=$color_07;?>;
    padding-bottom: 6px;
    display: block;
  }
  .guild_gender { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    color: <?=$color_03;?>;
    text-align: left;
    margin-bottom: 3px;
    border-bottom: 1px dotted <?=$color_07;?>;
    padding-bottom: 6px;
  }
  .guild_race { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    color: <?=$color_03;?>;
    text-align: left;
    margin-bottom: 3px;
    border-bottom: 1px dotted <?=$color_07;?>;
    padding-bottom: 6px;
  }
  .guild_class { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    color: <?=$color_03;?>;
    text-align: left;
    margin-bottom: 3px;
    border-bottom: 1px dotted <?=$color_07;?>;
    padding-bottom: 6px;
  }
  .me {
    border-bottom: 1px solid <?=$color_87;?>;
  }
  .me_name {
    border-bottom: 1px solid <?=$color_87;?>;
    border-left: 1px solid <?=$color_87;?>;
  }
  .h_guild_member_name { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 145px;
    color: <?=$color_03;?>;
    text-align: left;
    padding-left: 4px;
  }
  .h_guild_lvl { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 50px;
    color: <?=$color_03;?>;
    text-align: left;
  }
  .h_guild_rank { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 80px;
    color: <?=$color_03;?>;
    text-align: left;
  }
  .h_guild_gender { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    color: <?=$color_03;?>;
    text-align: left;
  }
  .h_guild_race { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    color: <?=$color_03;?>;
    text-align: left;
  }
  .h_guild_class { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    color: <?=$color_03;?>;
    text-align: left;
  }

/********************* ARENA TEAM DEFINITION *******************************************/
#arenateam {
  width: 600px;
}
  #arenateam #header {
    text-align: left;
    padding: 0px 0px 0px 3px;
    margin-bottom: 10px;
  }
  #arenateam #content {
    clear: both;
    text-align: left;
  }
  .arenateam_header {
    clear: both;
    font-size: 13px;
    font-weight: bold;
    color: <?=$color_78;?>;
    background-color: <?=$color_79;?>;
    padding: 4px;
    margin: 3px;
    text-align: left;
  	border: 1px dotted <?=$color_80;?>;
    cursor: pointer;
  }
  .arenateam_header_off {
    clear: both;
    font-size: 13px;
    font-weight: bold;
    color: <?=$color_81;?>;
    background-color: <?=$color_82;?>;
    padding: 4px;
    margin: 3px;
    text-align: left;
  	border: 1px dotted <?=$color_83;?>;
    cursor: pointer;
  }
  .arenateam_box {
  	border: 1px solid <?=$color_84;?>;
    background-color: <?=$color_85;?>;
    width: 72px;
    font-size: 11px;
    font-weight: normal;
    padding: 0px;
    text-align: left;
  }
  .arenateam_member_row { 
    clear: both;
    border-top: 1px dotted <?=$color_07;?>;
    margin: 0px 5px 5px 5px;
  }
  .arenateam_member_header { 
    border-left: 1px dotted <?=$color_07;?>;
    border-right: 1px dotted <?=$color_07;?>;
    border-top: 1px dotted <?=$color_07;?>;
    font-size: 11px;
    font-weight: normal;
    color: <?=$color_03;?>;
    padding: 5px;
    margin: 0px 5px 0px 5px;
    background-color: <?=$color_88;?>;
    clear: both;
    display: block;
    height: 20px;
    line-height: 20px;
  }
  .arenateam_ele {
    font-size: 11px;
    font-weight: normal;
    color: <?=$color_03;?>;
    float: left;
    display: block;
    height: 20px;
    line-height: 20px;
  }    
  .arenateam_member { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    color: <?=$color_03;?>;
    text-align: left;
    padding-top: 6px;
    padding-bottom: 6px;
    padding-left: 4px;
    display: block;
  }
  .arenateam_member A {
    color: <?=$color_86;?>;
    text-decoration: none;
    display: block;
  }

/********************* NOTES DEFINITION ************************************************/
#notes {
  width: 600px;
}
  #notes #header {
    text-align: left;
    padding: 0px 0px 0px 3px;
    margin-bottom: 10px;
  }
  #notes #content {
    clear: both;
    text-align: left;
  }

  .note_control {
    margin: 4px;
    padding: 4px;
    color: <?=$color_78;?>;
    background-color: <?=$color_79;?>;
    clear: both;
  	border: 1px dotted <?=$color_80;?>;
  	font-size: 12px;
  	font-weight: bold;
  	text-align: right;
  }  
  
  .note_line {
    clear: both;
    border-bottom: 1px dotted <?=$color_03;?>;
    margin: 4px;
    padding-bottom: 5px;
  }  
    
  .note_line .note_date {
    font-size: 11px;
    color: <?=$color_80;?>;
    margin-left: 3px;
  }
  .note_line .note_body {
    font-size: 12px;
  }

  .note_line .note_body IMG {
    vertical-align: bottom;
  }
  
  .note_textarea {
    width: 100%;
    border: 1px solid <?=$color_80;?>;
    background-color: <?=$color_04;?>;
    color: <?=$color_18;?>;
    font-size: 11px;
    font-weight: bold;
  }
  
  .textleft {
    text-align: left;
  }
  
  
  .note_btn {
    width: 30%;
    border: 1px solid <?=$color_03;?>;
    background-color: <?=$color_80;?>;
    color: <?=$color_04;?>;
  }
  
/********************* REP DEFINITION **************************************************/
#reputation {
  width: 600px;
}
  #reputation #header {
    text-align: left;
    padding: 0px 0px 0px 3px;
    margin-bottom: 10px;
  }
  #reputation #content {
    clear: both;
    text-align: left;
  }
  
  .rep_submain {
    clear: both;
  }
  .rep_subheader {
    clear: both;
    font-weight: bold;
    color: <?=$color_18;?>;
    text-align: left;
    cursor: pointer;
  }
  .rep_subheader_off {
    clear: both;
    font-weight: bold;
    color: <?=$color_81;?>;
    text-align: left;
    cursor: pointer;
   }


  .rep_main {
    clear: both;
  }
  .rep_header {
    clear: both;
    font-size: 13px;
    font-weight: bold;
    color: <?=$color_78;?>;
    background-color: <?=$color_79;?>;
    padding: 4px;
    margin: 3px;
    text-align: left;
  	border: 1px dotted <?=$color_80;?>;
    cursor: pointer;
  }
  .rep_header_off {
    clear: both;
    font-size: 13px;
    font-weight: bold;
    color: <?=$color_81;?>;
    background-color: <?=$color_82;?>;
    padding: 4px;
    margin: 3px;
    text-align: left;
  	border: 1px dotted <?=$color_83;?>;
    cursor: pointer;
  }
  .rep_line {
    clear: both; 
    margin: 6px;
    padding: 2px;
  }  
  .rep_name { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 180px;
    margin-bottom: 4px;
    text-align: left;
  }
  .rep_box {
  	border: 1px solid <?=$color_84;?>;
    background-color: <?=$color_85;?>;
    width: 140px;
    float: left;
    font-size: 11px;
    font-weight: normal;
    padding: 1px;
    text-align: left;
    margin-bottom: 4px;
  }
  .rep_lvl { 
    float: left;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    padding-left: 10px;
    color: <?=$color_03;?>;
    text-align: left;
    margin-bottom: 4px;
  }
  .Exalted {
    background-color: #0AA087;
    display: block;
  }
  .Revered {
    background-color: #30A601;
    display: block;
  }
  .Honored {
    background-color: #74A001;
    display: block;
  }
  .Friendly {
    background-color: #A4A201;
    display: block;
  }
  .Neutral {
    background-color: #D2B130;
    display: block;
  }
  .Unfriendly {
    background-color: #D59B31;
    display: block;
  }
  .Hostile {
    background-color: #DD6F00;
    display: block;
  }
  .Hated {
    background-color: #B82E21;  
    display: block;
  }

/********************* SEARCH DEFINITION ***********************************************/
#search {
  width: 800px;
  clear: both;
  margin: 0px;
}
  #search #header {
    text-align: left;
    padding-bottom: 0px;
    padding-left: 3px;
    margin-bottom: 10px;
    margin-top: 10px;
  	font-size: 16px;
  	font-weight: bold;
    color: <?=$color_05;?>;
  }

  #search #header A {
    text-decoration: none;
    color: <?=$color_05;?>;
  }
  .me_on {
    color: <?=$color_102;?>;
  }

/********************* HEADERNAV DEFINITION ********************************************/
.headernav {
  clear: both;
  width: 750px;
  height: 30px;
  line-height: 30px;
}
.headernav .box_on {
  margin: 0px 2px 0px 8px;
  font-weight: bold;
  font-size: 12px;
  border-left: 1px dotted <?=$color_95;?>;
  border-right: 1px dotted <?=$color_95;?>;
  border-bottom: 1px dotted <?=$color_95;?>;
  padding: 2px;
  color: <?=$color_96;?>;
  text-decoration: none;
  text-align: center;
  background-color: <?=$color_97;?>;
  display: block;
  line-height: 30px;
} 
.headernav .box_off {
  margin: 0px 2px 0px 8px;
  font-weight: bold;
  font-size: 12px;
  border-left: 1px dotted <?=$color_98;?>;
  border-right: 1px dotted <?=$color_98;?>;
  border-bottom: 1px dotted <?=$color_98;?>;
  padding: 0px;
  color: <?=$color_99;?>;
  text-decoration: none;
  text-align: center;
  background-color: <?=$color_100;?>;
  display: block;
  line-height: 30px;
} 
.headernav .floatleft {
  float: left;
  clear: right;
}
.headernav .floatright {
  float: right;
  clear: right;
}
.headernav .nav, .headernav .nav A {
    text-align: left;
    padding: 3px;
  	font-size: 12px;
  	font-weight: bold;
    color: <?=$color_05;?>;
    text-decoration: none;
}


/********************* REPLY DEFINITION ************************************************/
#reply {
  width: 700px;
  clear: both;
  margin: 8px;
  margin-bottom: 0px;
}
  #reply #left {
    float: left;
    clear: right;
    width: 80px;
  }
  #reply #right {
    float: right;
    clear: right;
    width: 600px;
    border-left: 1px dotted <?=$color_03;?>;
    border-bottom: 1px dotted <?=$color_03;?>;
  }
  #reply #left #icon {
    line-height: 40px;
    width: 40px;
  	font-size: 11px;
  	font-weight: bold;
  }
  #reply #left #username {
    margin-top: 5px;
  	font-size: 12px;
  	font-weight: bold;
  	text-align: left;
  }
  #reply #right #title {
  	font-size: 12px;
  	font-weight: bold;
  	clear: both;
  	text-align: left;
  	border-bottom: 1px dotted <?=$color_03;?>;
  	padding-bottom: 3px;
  	padding-top: 3px;
  	padding-left: 5px;
  }
  #reply #right #body {
    margin-top: 8px;
  	font-size: 11px;
  	font-weight: normal;
  	clear: both;
  	text-align: left;
  	padding-left: 5px;
  }
  #reply #right #date {
    margin-top: 10px;
  	font-size: 10px;
  	font-weight: normal;
  	color: <?=$color_03;?>;
  	text-align: left;
  	padding-left: 5px;
  	margin-bottom: 5px;
	float: left;
  }

/********************* BROWSE DEFINITION ***********************************************/
#righter {
    float: left;
    width: 125px;  
    margin-left: 15px;
  }

#browse {
  width: 900px;
  clear: both;
  margin: 0px;
}
  #browse #header {
    text-align: left;
    padding-bottom: 0px;
    padding-left: 3px;
    margin-bottom: 10px;
    margin-top: 10px;
  	font-size: 14px;
  	font-weight: bold;
    color: <?=$color_05;?>;
  }

  #browse #header A {
    text-decoration: none;
    color: <?=$color_05;?>;
  }
  
  #browse .key {
    clear: both;
    text-align: left;
    padding-top: 5px;
    padding-left: 3px;
    padding-bottom: 5px;
  	font-size: 10px;
  	font-weight: bold;
  	color: <?=$color_03;?>;
  	width: 700px;
  }
    
  #browse #content {
    margin: 0px;
    padding: 0px;
    clear: both;
  }
  
  #browse #content .row {
    clear: left;
    float: left;
    margin: 0px;
    width: 750px;
  } 

  #browse #content .col {
    margin: 1px;
    margin-bottom: 1px;
    float: left;
    width: 140px;
    height: 35px;
  	background-color: <?=$color_02;?>;
  	line-height: 35px;
  	font-size: 10px;
  	font-weight: bold;
  } 
  
  .age1 { border: 1px dotted #92C901; }
  
  .age2 { border: 1px dotted #DD6F00; }
  
  .age3 { border: 1px dotted #800000; }
  
  .age1 A { 
    text-decoration: none;
    color: #aaaaaa;
    display: block;
  }
  .age2 A { 
    text-decoration: none;
    color: #777777;
    display: block;
  }
  .age3 A { 
    text-decoration: none;
    color: <?=$color_06;?>;
    display: block;
  }

/********************* TALENT DEFINITION ***********************************************/
.tlink {
  position: absolute;
  visibility: hidden;
  border: 1px dotted <?=$color_57;?>;
  line-height: 18px;
  z-index: 100;
  background-color: <?=$color_58;?>;
  width: auto;
  text-align: left;
}

.tlink A {
  padding: 0px;
  text-decoration: none;
}

.tlink A:hover { 
  background-color: <?=$color_59;?>;
  color: <?=$color_60;?>;
}

#talents {
  width: 600px;
}
  #talents #header {
    text-align: left;
    padding: 0px 0px 0px 3px;
    margin-bottom: 10px;
  }
  #talents .content {
    clear: both;
  }
  #talents .content .pane {
    float: left;
  	border: 1px dotted #444; 
  	margin: 0px 0px 0px 3px;
  	padding: 10px;
  	background-color: <?=$color_62;?>;
  	margin-top: -5px;
  	height: 340px;
  	overflow: hidden;
  } 
  #talents .content .pane_new {
  	clear: both;
  	border: 1px dotted #444; 
  	margin: 0px 0px 0px 3px;
  	padding: 10px;
  	background-color: <?=$color_62;?>;
  	margin-top: -5px;
  	min-height: 340px;
  }   
  
  #talents .content .row {
    clear: both;
  } 
  #talents .content .col_on, #talents .content .col, #talents .content .col_img {
    margin: 3px;
    float: left;
    width: 35px;
    height: 35px;
  	border: 1px solid <?=$color_63;?>;
  	background-color: <?=$color_64;?>;
  	line-height: 35px;
  	font-size: 10px;
  	font-weight: normal;
  } 
  #talents .content .col_img {
    filter:alpha(opacity=0);
    -moz-opacity:.0;
    opacity:.0;
  } 
  #talents .content .block {
    float: left;
    overflow: hidden;
    width: 35px;
    height: 35px;
    margin: 3px;
	    
  /**
    margin: 3px;
    float: left;
    width: 35px;
    height: 35px;
  	line-height: 35px;
  	font-size: 11px;
  	color: red;
  	background-color: #000;
  	display: block;
  	**/
  }
  
  .talico {
  	display: block;
  	height: 33px;
  	overflow: hidden;
  }
  
  .talcnt {
  	position: relative;
  	background-color: #000;
  	width: 12px;
  	font-size: 10px;
  	left: 23px;
  	top: 22px;
  }
  
  .full_clr {
  	color: #FCD600;
  }
  .empty_clr {
  	color: <?=$color_65;?>;
  }
  .half_clr {
  	color: <?=$color_69;?>;
  }
    
  #talents .content .empty {
  	border: 1px solid <?=$color_65;?>;
  	background-color: <?=$color_66;?>;
  	font-weight: normal;
  }
  #talents .content .full {
    border: 1px solid <?=$color_67;?>;
  	background-color: <?=$color_68;?>; 
  	font-weight: bold;
  }
  #talents .content .half {
  	border: 1px solid <?=$color_69;?>;
  	background-color: <?=$color_70;?>;
  	font-weight: bold;
  }
  #talents .content .empty_img {
  	border: 1px solid <?=$color_65;?>;
  	background-color: <?=$color_66;?>;
  	font-weight: normal;
  	background-repeat: repeat;
  }
  #talents .content .full_img {
    border: 1px solid #FCD600;
  	background-color: <?=$color_68;?>;
  	font-weight: bold;
  	background-repeat: repeat;
  }
  #talents .content .half_img {
  	border: 1px solid <?=$color_69;?>;
  	background-color: <?=$color_70;?>;
  	font-weight: bold;
  	background-repeat: repeat;
  }
  #talents .content .empty A, #talents .content .empty_img A {
    text-decoration: none;
    color: <?=$color_65;?>;
  } 
  #talents .content .full A, #talents .content .full_img A {
    text-decoration: none;
    color: <?=$color_67;?>;
  } 
  #talents .content .half A, #talents .content .half_img A {
    text-decoration: none;
    color: <?=$color_69;?>;
  } 
  #talents .content #rank_on {
    text-indent: 4px;
  }
  #talents .content #rank_on A { 
    text-decoration: none;
    text-indent: 4px;
    color: <?=$color_72;?>;
    font-weight: bold;
    font-size: 10px;
    display: block;
    white-space: nowrap;
  }
  #talents .content #rank_on A:hover { 
    background-color: <?=$color_73;?>;
    color: <?=$color_74;?>;
  }
  #talents .content #rank_off {
    text-indent: 4px;
    display: block;
  }
  #talents .content #rank_off A { 
    text-decoration: none;
    color: <?=$color_75;?>;
    font-weight: normal;
    font-size: 10px;
    display: block;
    white-space: nowrap;
  }
  #talents .content #rank_off A:hover { 
    background-color: <?=$color_76;?>;
    color: <?=$color_77;?>;
    display: block;
  }
  
  #talents .talent_tabs {
    clear: both;
    height: 40px; 
  }
  
  .noton {
	  opacity: 0.4;
	  -moz-opacity:0.40;
	  filter: alpha(opacity=40);  
  }

  
  #talents .tabinactive {
    float: left;
    padding: 5px;
    font-size: 12px;
    font-weight: bold;
    display: block;
    margin-left: 3px;
    background-color: #222;
    border: 1px dotted #444;
  }
  #talents .tabinactive A {
    display: block;
    text-decoration: none;
    color: <?=$color_75;?>;  
  }

  #talents .tabactive {
    float: left;
    padding: 5px;
    font-size: 12px;
    font-weight: bold;
    display: block;
    margin-left: 3px;
    background-color: #333;
    border: 1px dotted #666;
  }
  #talents .tabactive A {
    display: block;
    text-decoration: none;
    color: <?=$color_75;?>;  
  }


.export_calc {
	clear: both;
	font-size: 10px;
	text-align: left;
	margin-left: 10px;
}
.export_calc a {
	color: #666;
	text-decoration: none;
}
.export_calc a:hover {
	color: #9F9;
}

.glyph_grid {
	margin-bottom: 20px;
	overflow: hidden;
	clear: both;
	padding-top: 10px;
}

.glyphs_box {
	font-size: 10px;
	float: left;
	text-align: left;
	margin-left: 10px;
	margin-right: 20px;
}
.glyphs_box h3 {
	border-bottom: 1px solid #444;
	padding-bottom: 5px;
}
.glyphs_box a {
	text-decoration: none;
	color: #666;
}
.glyphs_box a:hover {
	color: #9F9;
}

  .glyphs {
    font-size: 10px;
    color: #aaa;
    clear: both;
    width: 486px;
    text-align: left;
    padding: 5px;
    margin-bottom: 5px;
    margin-left: 3px;
  	border: 1px dotted <?=$color_03;?>;
  	background-color: #151515;
  }
  
  .gl_row {
  	clear: both;
  	overflow: hidden;
    margin-bottom: 3px;
  }
  .gl {
  	float: left;
    overflow: hidden;
    padding-top: 3px;
  }
  .gl_img {
  	float: left;
  	width: 18px;
  	margin-right: 4px;
  }
  
  .glyphs .tx {
    color: #777;
  }
  
  .export {
    clear: both;
    font-size: 11px;
    font-weight: bold;
    text-align: left;
    width: 175px;
    float: left;
    padding: 5px;
    margin-top: 10px;
    margin-left: 3px;
  	border: 1px dotted <?=$color_03;?>;
    background-color: <?=$color_66;?>;
  }
  .export A {
    text-decoration: none;
    display: block;
  }
  
.tagit {
  background-color: <?=$color_66;?>;
	background-image: url(<?=$mesh_01;?>);
	background-repeat: repeat;
  padding: 5px;
	border: 1px solid #333;
	margin: 0px;
}

.frost  { color: #5B6BFF; }
.fire   { color: #FF3833; }
.arcane { color: #D1D1E1; }
.shadow { color: #BD2CC6; }
.holy   { color: #BDB25A; }
.nature { color: #31B618; }


.profile_content {
  width: 600px;
  float: left;
  clear: right;
  margin: 0px;
  padding-top: 0px;
}

.page_content {
  width: 750px;
  float: left;
  clear: right;
  margin: 0px;
  padding-top: 0px;
}

.page_ad {
  width: 125px;
  float: left;
  clear: right;
  margin-left: 10px;
  margin-top: 0px;
  padding-top: 0px;
}


.exf {
  vertical-align: center;
  line-height: 28px;
}


/*** Affiliate *****************************************************************************************/

#aff_header {
  text-align: left;
  clear: both;
  float: left;
}

.debug {
	clear: both;
	border: 1px solid red;
	font-size: 11px;
}

.talblock {
	cursor: pointer;
}

.swaptal {
	cursor: pointer;
}

.achievement_box {
    clear: both;
    color: <?=$color_78;?>;
    background-color: <?=$color_79;?>;
    padding: 4px;
    margin: 3px;
    text-align: left;
  	border: 1px dotted <?=$color_80;?>;
  	overflow: hidden;
}
.achievement_box .icon {
	float: left;
}
.achievement_box .info {
	float: left;
	margin-left: 10px;
	width: 440px;
}
.achievement_box .info .title {
	font-size: 12px;
	font-weight: bold;
	color: #fff;
}
.achievement_box .info .desc {
	font-size: 11px;
}
.achievement_box .info .reward {
	font-size: 11px;
	color: #EAC75F;
}
.achievement_box .info .completed_date {
	font-size: 11px;
	clear: both;
	color: #444;
}



.achievement_box .pts {
	float: right;
	width: 40px;
	text-align: center;	
	padding: 4px;
	background-color: #1a1a1a;
}
.achievement_box .pts .pt-this {
	font-size: 20px;
	font-weight: bold;
	color: #333;
}
.achievement_box .pts .pt-math {
	font-size: 11px;
	font-weight: normal;
}


.transmorg_link, .transmorg_link A {
	color: #FF80D2;
	text-decoration: none;
	text-indent: 7px;
	font-weight: normal;
	font-size: 10px;
	display: block;
	white-space: nowrap;
	clear: both;
	padding: 1px 0px 1px 0px !important;
	margin: 0 !important;
	line-height: 14px;
}

.transmorg_link:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}
.transmorg_link a:hover { 
  background-color: <?=$color_03;?>;
  color: <?=$color_02;?>;
}


.flash_pos {
	clear: both;
	overflow: hidden;
	border: 1px solid #BDF4CB;
	padding: 10px;
	color: #fff;
	width: 800px;
	margin: -1px auto 10px auto;
	cursor: pointer;
	font-size: 12px;
	background-color: #222;
}
.flash_neg {
	clear: both;
	overflow: hidden;
	border: 1px solid #FFA8A8;
	padding: 10px;
	color: #fff;
	width: 800px;
	margin: -1px auto 10px auto;
	cursor: pointer;
	font-size: 12px;
	background-color: #222;
}

.stream {
	clear: both;
	margin: 10px 0px 10px 0px;
}

.row_new {
	clear: both;
	overflow: hidden;
	margin-bottom: 10px;
}

.col_new {
	float: left;
	overflow: hidden;
	width: 174px;
	margin-right: 5px;
	border: 1px solid #333;
	min-height: 100px;
	max-height: 100px;
	padding: 5px;
}

.tal_icon {
	float: left;
	margin-right: 5px;
	width: 36px;
	margin-left: 0;
	padding: 0;
}
.tal_info {
	float: left;
	overflow: hidden;
	width: 132px;
	text-align: left;
}

.tal_name {
	font-size: 12px;
}

.tal_desc, .tal_castinfo {
	font-size: 10px;
}

.tal_castinfo {
	margin-bottom: 5px;
}

.tal_on {
	border: 1px solid #FCD600 !important;
}


/* CAKE SQL LOG */
#sql_log_frame_tab { padding: 3px 10px; background-color: #111; border: 1px solid #222; left: 10px; width: 100px; position: relative; cursor: pointer; text-align: center; color: #444; }
#sql_log_frame_tab:hover { background-color: #222; }
#sql_log_frame { width: 100%; position: fixed; bottom: 0px; z-index: 999; font-size: .8em; }
#sql_log_frame .sql_log_content { width: 99%; margin-right: auto; margin-left: auto; border: 1px solid #333; padding: 3px 0px 3px 0px; background-color: #000; max-height: 300px; overflow: auto;  }
#sql_log_frame .sql_log_content td, #sql_log_frame .sql_log_content th { padding: 2px 2px 2px 2px; }
#sql_log_frame .sql_log_content th {border-bottom: 1px solid #333; }
#sql_log_frame .sql_log_content tr:nth-child(even) { background-color: #222; }
.cake-sql-log { width: 100%; }
/* CAKE SQL LOG */