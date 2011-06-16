<? include_once("compress.php"); ?>
<? header("Content-type: text/css"); ?>

HTML { 
  min-height: 100%; 
  margin-bottom: 1px; 
}  
A {
  color: #7D7DFF;
}

.alignleft {
  text-align: left;  
}
.floatleft {
  float: left;
  clear: right;
}
.lr {
  clear: both;
  padding: 3px;
}

.tagit {
  background-color: #222;
	background-image: url(/images/mesh.gif);
	background-repeat: repeat;
  padding: 5px;  
	border: 1px solid #666;
	margin: 0px;
}

/**** sortable table style ***************************************************/
.sortable {
  padding: 3px;
  margin: 3px;
  font-family: verdana;
  font-weight: normal;
  font-size: 11px;
}

.sortable thead {
  height: 25px;
  background-color:#bbb;
  color:#666666;
  font-size: 12px;
  font-weight: bold;
  cursor: pointer;
}

.searchgrid_row {
  padding: 3px;
  margin: 3px;
  font-family: verdana;
  font-weight: normal;
  font-size: 11px;
}

.searchgrid_col {
  padding: 3px;
  margin: 3px;
  font-family: verdana;
  font-weight: normal;
  font-size: 11px;
  border-bottom: 1px dotted #aaa;
}
.searchgrid_col A {
  color: #333;
  text-decoration: none;
  display: block;
}

/*****************************************************************************/


.slot {
  font-family: verdana;
  font-weight: bold;
  font-size: 20px;
  padding: 0px;
  margin-top: 2px;
  margin-bottom: 4px;
  color: #666;
  text-decoration: none;
  text-align: center;
  width: 36px;
  height: 36px;
  line-height: 36px;
}

  .grid_ele { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    margin-bottom: 3px;
    color: #888;
    text-align: left;
    border-bottom: 1px dotted #333;
    border-left: 1px solid #fff;
    padding-bottom: 6px;
    padding-left: 4px;
    display: block;
  }
  .grid_ele A {
    color: #888;
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

.slot_5 A {
  color: #FF8000; 
  text-decoration: none;
}
.slot_4 A {
  color: #A335EE; 
  text-decoration: none;
}
.slot_3 A {
  color: #0070DD; 
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
/*******************************************************************************************************************/

/*******************************************************************************************************************/
.slot_color_5 { 
  border: 1px dotted #FF8000;
}

.slot_color_4 { 
  border: 1px dotted #A335EE;
}

.slot_color_3 { 
  border: 1px dotted #0070DD;
}

.slot_color_2 { 
  border: 1px dotted #009500;
}

.slot_color_1 { 
  border: 1px dotted #aaa;
}

.slot_color_0 { 
  border: 1px dotted #aaa;
}
/***************************************************************************************************************/


.sub {
	font-family: verdana;
	font-size: 17px;
	font-weight: bold;
	color: #000000;
}
.sub2, .sub2 A {
  margin-top: 1px;
  margin-bottom: 2px;
	font-family: verdana;
	font-size: 13px;
	font-weight: bold;
	color: #666666;
	text-decoration: none;
}

.sub3, .sub3 A {
  margin-top: 3px;
	font-family: verdana;
	font-size: 11px;
	font-weight: normal;
	color: #999999;
	text-decoration: none;
}

.sub4 {
  padding: 3px;
  font-family: verdana;
  font-size: 11px;
  font-weight: normal;
  color: #999999;
  text-align: center;
  border: 1px dotted #666;
  background-color: #eee;
  margin-bottom: 2px;
}

.sub6 {
  padding: 4px;
  font-family: verdana;
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  text-align: center;
  border: 1px dotted #666;
  background-color: #eee;
  margin-bottom: 2px;
}
.qual_5, .qual_5 A { color: #FF8000; text-decoration: none; }
.qual_4, .qual_4 A { color: #A335EE; text-decoration: none; }
.qual_3, .qual_3 A { color: #0070DD; text-decoration: none; }
.qual_2, .qual_2 A { color: #009500; text-decoration: none; }
.qual_1, .qual_1 A { color: #666666; text-decoration: none; }

.err {
  padding: 3px;
  font-family: verdana;
  font-size: 11px;
  font-weight: bold;
  text-align: left;
  color: #FF9A35;
  margin-bottom: 3px;
}

.subw {
  padding: 3px;
  font-family: verdana;
  font-size: 11px;
  font-weight: bold;
  color: #fff;
  text-align: center;
  border: 1px dotted #333;
  width: 100%;
  background-color: #FF9A35;
}

.hpx {
  width: 100%;
  clear: both;
}

.hp {
  padding: 3px;
  font-family: verdana;
  font-size: 11px;
  font-weight: normal;
  color: #fff;
  text-align: center;
  border: 1px dotted #175401;
  background-color: #247B01;
  margin-bottom: 2px;
  float: left;
  margin-right: 2px;
  width: 43%;
}

.mana {
  padding: 3px;
  font-family: verdana;
  font-size: 11px;
  font-weight: normal;
  color: #fff;
  text-align: center;
  border: 1px dotted #153664;
  background-color: #205497;
  margin-bottom: 2px;
  float: right;
  width: 42%;
}

.rage {
  padding: 3px;
  font-family: verdana;
  font-size: 11px;
  font-weight: normal;
  color: #fff;
  text-align: center;
  border: 1px dotted #7D0000;
  background-color: #C10000;
  margin-bottom: 2px;
  float: right;
  width: 42%;
}

.energy {
  padding: 3px;
  font-family: verdana;
  font-size: 11px;
  font-weight: normal;
  color: #fff;
  text-align: center;
  border: 1px dotted #6F6F00;
  background-color: #C6C600;
  margin-bottom: 2px;
  float: right;
  width: 42%;
}

.prof {
  padding: 3px;
  font-family: verdana;
  font-size: 10px;
  font-weight: normal;
  color: #247B01;
  text-align: center;
  border: 1px dotted #4BA800;
  background-color: #C7FF99;
  margin-top: 2px;
  clear: left;
}

#char_grid {
  margin-top: 2px;
  margin-left: 2px;
  margin-right: 3px;
  margin-bottom: 2px;
  border: 1px dotted #aaa;
  padding: 2px;
  font-family: verdana;
  clear: both;
}

#stats_char {
  width: 398px;
  margin: auto;
  padding-top: 6px;
  margin-bottom: -6px;
  padding-left: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  text-align: left; 
}

#stats_arena {
  margin-top: 0px;
  clear: both;
}
#stats_base {
  margin-top: 0px;
  clear: both;
}
#stats_melee {
  margin-top: 0px;
  clear: both;
}
#stats_ranged {
  margin-top: 0px;
  clear: both;
}
#stats_spell {
  margin-top: 0px;
  clear: both;
}
#stats_defense {
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
  border: 1px dotted #aaa;
  width: 35px;
  height: 20px;
  text-align: center;
  background-color: #FBFBFB;
  margin-top: 2px;
  margin-bottom: 0px;
  margin-left: 2px;
  margin-right: 0px;
  padding: 0px;
  line-height: 20px;
  color: #ccc;
  font-family: verdana;
  font-size: 10px;
  font-weight: bold;
  cursor: default;
}

/*******************************************************************************************************************/
/*******************************************************************************************************************/

.main_link_5 { 
  text-decoration: none;
  text-indent: 4px;
  color: #FF8000;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_5 A { 
  text-decoration: none;
  text-indent: 4px;
  color: #FF8000;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_5 A:hover { 
  background-color: #999999;
  color: #222222;
}

.main_link_4 { 
  text-decoration: none;
  text-indent: 4px;
  color: #A335EE;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_4 A { 
  text-decoration: none;
  text-indent: 4px;
  color: #A335EE;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_4 A:hover { 
  background-color: #999999;
  color: #222222;
}

.main_link_3 { 
  text-decoration: none;
  text-indent: 4px;
  color: #0070DD;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_3 A { 
  text-decoration: none;
  text-indent: 4px;
  color: #0070DD;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.main_link_3 A:hover { 
  background-color: #999999;
  color: #222222;
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
  background-color: #999999;
  color: #222222;
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
  background-color: #999999;
  color: #222222;
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
  background-color: #999999;
  color: #222222;
}

/*****************************************************************************************/
.gem_link_5 { 
  text-decoration: none;
  text-indent: 7px;
  color: #FF8000;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_5 A { 
  text-decoration: none;
  text-indent: 7px;
  color: #FF8000;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_5 A:hover { 
  background-color: #999999;
  color: #222222;
}

.gem_link_4 { 
  text-decoration: none;
  text-indent: 7px;
  color: #A335EE;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_4 A { 
  text-decoration: none;
  text-indent: 7px;
  color: #A335EE;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_4 A:hover { 
  background-color: #999999;
  color: #222222;
}

.gem_link_3 { 
  text-decoration: none;
  text-indent: 7px;
  color: #0070DD;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_3 A { 
  text-decoration: none;
  text-indent: 7px;
  color: #0070DD;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
.gem_link_3 A:hover { 
  background-color: #999999;
  color: #222222;
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
  background-color: #999999;
  color: #222222;
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
  background-color: #999999;
  color: #222222;
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
  background-color: #999999;
  color: #222222;
}

.dur_link { 
  text-decoration: none;
  text-indent: 7px;
  font-weight: normal;
  font-size: 10px;
  color: #aaaaaa;
  display: block;
  white-space: nowrap;
}
.dur_link A:hover { 
  background-color: #999999;
  color: #222222;
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
  background-color: #999999;
  color: #222222;
}

/*******************************************************************************************************************/
/*******************************************************************************************************************/

.alink {
  position:absolute;
  visibility: hidden;
  border:1px dotted #666666;
  line-height: 18px;
  z-index: 100;
  background-color: #eeeeee;
  width: auto;
  text-align: left;
}

.alink A {
  padding: 1px;
  text-decoration: none;
  text-align: left;
}

.alink A:hover { 
  background-color: #999999;
  color: #222222;
}


.tlink {
  position:absolute;
  visibility: hidden;
  border:1px dotted #666666;
  line-height: 18px;
  z-index: 100;
  background-color: #eeeeee;
  width: auto;
  text-align: left;
}

.tlink A {
  padding: 0px;
  text-decoration: none;
  text-align: left;
}

.tlink A:hover { 
  background-color: #999999;
  color: #222222;
}



.stats_head_on {
  font-family: verdana;
  font-size: 11px;
  font-weight: normal;
  background-color: #F1FA85;
  color: #000000;
  text-align: left;
  text-indent: 5px;
  padding: 2px;
  border:1px dotted #666;
  cursor: pointer;
}

.stats_head_off {
  font-size: 11px;
  font-weight: normal;
  background-color: #eee;
  color: #444;
  text-align: left;
  text-indent: 5px;
  padding: 2px;
  border:1px dotted #666;
  cursor: pointer;
}

.stats_main {
  margin: 6px;
  margin-top: 0px;
  font-family: verdana;
  font-size: 11px;
  font-weight: normal;
  color: #000;
  background-color: #fff;
  text-align: center;
  text-indent: 10px; 
  padding: 2px;
  border-left:1px dotted #666;
  border-right:1px dotted #666;
  border-bottom:1px dotted #666;
}

.stats_item {
  text-align: left;
  font-family: verdana;
  font-size: 11px;
  font-weight: normal;
  text-indent: 0px;
  padding: 1px;
}

.stats_lbl {
  text-align: left;
}

.stats_val {
  text-align: left;
  font-weight: bold;
  color: #666;
}

.stats_val2 {
  text-align: left;
  font-weight: bold;
  color: #aaa;
}

BODY {
  margin: 0px;
  margin-top: 0px;
  text-align: center;
  background-color: #ffffff;
}


/***************************************************************************************/
/**** navigation ***********************************************************************/

#navigation {
  clear: both;
  width: 600px;
  height: 20px;
  margin-bottom: 10px;
  padding-bottom: 2px;
}

#navigation .box_space {
  width: 20px;
  display: block;
  float: left;
}

#navigation .box_on {
  float: left;
  width: 60px;
  clear: right;
  font-family: verdana;
  font-weight: bold;
  font-size: 10px;
  border-left: 1px dotted #aaa;
  border-right: 1px dotted #aaa;
  border-bottom: 1px dotted #aaa;
  padding: 2px;
  margin-left: 2px;
  color: #666;
  text-decoration: none;
  text-align: center;
  background-color: #F3F3F3;
  display: block;
  line-height: 15px;
} 

#navigation .box_off {
  float: left;
  width: 60px;
  clear: right;
  font-family: verdana;
  font-weight: bold;
  font-size: 10px;
  border-left: 1px dotted #ccc;
  border-right: 1px dotted #ccc;
  border-bottom: 1px dotted #ccc;
  padding: 2px;
  margin-left: 2px;
  color: #666;
  text-decoration: none;
  text-align: center;
  background-color: #ffffff;
  display: block;
  line-height: 15px;
} 

#navigation .box_on A {
  text-decoration: none;
  color: #55AAFF;
  display: block;
}

#navigation .box_off A {
  text-decoration: none;
  color: #bbbbbb;
  display: block;
}

/***************************************************************************************/
#notes_block {
  text-align: center;
  position: absolute;
  width: 600px;
  padding: 0px;
  border: 1px dotted #aaa;
  height: 480px;
	background-image: url(/images/meshlight.gif);
	background-repeat: repeat;
  background-color: #eee;
  filter:alpha(opacity=85);
  -moz-opacity:.85;
  opacity:.85;
  clear: both;
}

#armorylite {
  margin-left: auto; 
  margin-right: auto; 
  width: 600px;
  min-height: 100%;
}

#armorylite_wide {
  margin-left: auto; 
  margin-right: auto; 
  width: 800px;
  min-height: 100%;
}

#profile_wide {
  width: 800px;
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
  text-align: center;
  width: 180px;
  clear: both;
  vertical-align: top;
  padding-top: 2px;
}

.horiz {
  float: left;
  clear: right;
  margin-top: 0px;
  margin-right: 4px;
  vertical-align: top;
}

#char_left {
  float: left;
  width: 55px;
  margin: 0px;
  clear: right;
  padding-left: 0px;
}

#char_mid {
  float: left;
  width: 420px;
  margin: 0px;
  clear: right;
  padding: 0px;
}

#char_right {
  float: left;
  width: 55px;
  margin: 0px;
  clear: right;
  padding: 0px;
}

#char_buffs {
  width: 35px;
  margin: 0px;
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
  font-family: verdana;
  font-size: 10px;
  font-weight: normal;
  color: #aaa;
  text-decoration: none;
}


/***************************************************************************************/
/******************** HOMEPAGE DEFINITION **********************************************/
#homepage {
  width: 650px;
}

  #homepage #header {
    margin-top: 20px;
    font-family: verdana;
    font-size: 24px;
    font-weight: bold;
    float: right;
  }

  #header #block {
    width: 30px;
    height: 30px;
    border:1px dotted #666;
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
    background-color: #B7C9DB;
  }
  .block_b {
    background-color: #7D7DFF;
  }
  .block_c {
    background-color: #9BD1E1;
  }
  
  #homepage #body {
    clear: both;
    font-family: verdana;
    font-size: 18px;
    font-weight: bold;
    color: #666;
    padding-top: 20px;
    text-align: left;
  }

  #homepage #body A {
    color: #7D7DFF;
  }
  
  #homepage #body .highlight {
    color: #2B768C;
  }
  
  #homepage #body #left {
    float: left;
    clear: right;
    width: 400px;
    text-align: left;
  }     

  #homepage #body #right {
    float: left;
    clear: right;
    width: 230px;
    text-align: left;
  } 
  
  #text_block {
    font-family: verdana;
    font-size: 11px;
    font-weight: bold;
    color: #ffffff;
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
    margin-top: 15px;
    margin-top: 0px;
    font-family: verdana;
    font-size: 14px;
    font-weight: bold;
    color: #888;
    background-color: #eee;
    text-align: center;
    padding: 10px;
    border:2px dotted #666;
    margin-bottom: 15px;
  }  

  #lnk {
    margin: 0px;
    font-family: verdana;
    font-size: 12px;
    font-weight: bold;
    color: #888;
    background-color: #fff;
    text-align: left;
    padding: 5px;
    border:2px dotted #B7C9DB;
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
  	color: #7D7DFF;
  	text-decoration: underline;
  }
  
  SELECT {
  	background: #fff;
  	border: 1px solid #aaa;
  	width: 200px;
  	font-family: verdana, helvetica, serif;
  	color: #999;
  	font-size: 12px;
  }

  #login_nocenter {
  	background: #fff;
  	border: 1px solid #aaa;
  	font-family: verdana, helvetica, serif;
  	color: #999;
  	font-size: 12.5px;
  }
  
  #login {
  	background: #fff;
  	border: 1px solid #aaa;
  	font-family: verdana, helvetica, serif;
  	color: #999;
  	font-size: 12.5px;
  	text-align: center;
  }
  
  #login_on {
  	background: #7D7DFF;
  	border: 1px solid #fff;
  	font-family: verdana, helvetica, serif;
  	color: #fff;
  	font-size: 12.5px;
  	text-align: center;
  }

  #login_l {
  	background: #fff;
  	border: 1px solid #aaa;
  	font-family: verdana, helvetica, serif;
  	color: #999;
  	font-size: 12.5px;
  	text-align: center;
  }
  
  #login_on_l {
  	background: #7D7DFF;
  	border: 2px dotted #fff;
  	font-family: verdana, helvetica, serif;
  	color: #fff;
  	font-size: 12.5px;
  	text-align: center;
  	font-weight: bold;
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

/***************************************************************************************/
/********************* SKILLS DEFINITION ***********************************************/

#skills {
  width: 600px;
}
  #skills #header {
    text-align: left;
    padding-bottom: 0px;
    padding-left: 3px;
    margin-bottom: 10px;
  }
  #skills #content {
    margin: 0px;
    padding: 0px;
    clear: both;
    text-align: left;
  }
  .skill_main {
    clear: both;
  }
  .skill_header {
  	border: 1px dotted #bbb;
    font-family: verdana;
    font-size: 13px;
    font-weight: bold;
    color: #666;
    background-color: #eee;
    padding: 4px;
    margin: 3px;
    text-align: left;
    cursor: pointer;
  }
  .skill_header_off {
  	border: 1px dotted #bbb;
    font-family: verdana;
    font-size: 13px;
    font-weight: bold;
    color: #999;
    background-color: #eee;
    padding: 4px;
    margin: 3px;
    text-align: left;
    cursor: pointer;
  }
  .skill_line {
    clear: both; 
    margin: 6px;
    padding: 2px;
  }  
  .skill_name { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 180px;
    margin-bottom: 4px;
    color: #aaa;
    text-align: left;
  }
  .skill_box {
  	border: 1px solid #aaa;
    background-color: #fff;
    width: 140px;
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    padding: 1px;
    text-align: left;
    margin-bottom: 4px;
  }
  .skill_lvl { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    padding-left: 10px;
    color: #666;
    margin-bottom: 4px;
  }

/***************************************************************************************/
/********************* GUILD DEFINITION ************************************************/

#guild {
  width: 600px;
}
  #guild #header {
    text-align: left;
    padding-bottom: 0px;
    padding-left: 3px;
    margin-bottom: 10px;
  }
  #guild #content {
    margin: 0px;
    padding: 0px;
    clear: both;
    text-align: left;
  }
  .guild_header {
  	border: 1px dotted #bbb;
    font-family: verdana;
    font-size: 13px;
    font-weight: bold;
    color: #666;
    background-color: #eee;
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
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 145px;
    margin-bottom: 3px;
    color: #aaa;
    text-align: left;
    border-bottom: 1px dotted #bbb;
    border-left: 1px solid #fff;
    padding-bottom: 6px;
    padding-left: 4px;
    display: block;
  }
  .guild_member_name A {
    color: #aaa;
    text-decoration: none;
    display: block;
  }
  
  .guild_lvl { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 50px;
    color: #666;
    text-align: left;
    margin-bottom: 3px;
    border-bottom: 1px dotted #bbb;
    padding-bottom: 6px;
    display: block;
  }
  .guild_rank { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 80px;
    color: #666;
    text-align: left;
    margin-bottom: 3px;
    border-bottom: 1px dotted #bbb;
    padding-bottom: 6px;
    display: block;
  }
  .guild_gender { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    color: #666;
    text-align: left;
    margin-bottom: 3px;
    border-bottom: 1px dotted #bbb;
    padding-bottom: 6px;
  }
  .guild_race { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    color: #666;
    text-align: left;
    margin-bottom: 3px;
    border-bottom: 1px dotted #bbb;
    padding-bottom: 6px;
  }
  .guild_class { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    color: #666;
    text-align: left;
    margin-bottom: 3px;
    border-bottom: 1px dotted #bbb;
    padding-bottom: 6px;
  }

  .me {
    border-bottom: 1px solid #55AAFF;
  }
  .me_name {
    border-bottom: 1px solid #55AAFF;
    border-left: 1px solid #55AAFF;
  }

  .h_guild_member_name { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 145px;
    color: #666;
    text-align: left;
    padding-left: 4px;
  }
  .h_guild_lvl { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 50px;
    color: #666;
    text-align: left;
  }
  .h_guild_rank { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 80px;
    color: #666;
    text-align: left;
  }
  .h_guild_gender { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    color: #666;
    text-align: left;
  }
  .h_guild_race { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    color: #666;
    text-align: left;
  }
  .h_guild_class { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    color: #666;
    text-align: left;
  }

  .guild_header .on {
    color: #55AAFF;
  }

/***************************************************************************************/
/********************* ARENA TEAM DEFINITION *******************************************/
#arenateam {
  width: 600px;
}
  #arenateam #header {
    text-align: left;
    padding-bottom: 0px;
    padding-left: 3px;
    margin-bottom: 10px;
  }
  #arenateam #content {
    margin: 0px;
    padding: 0px;
    clear: both;
    text-align: left;
  }
  .arenateam_header {
    font-family: verdana;
    font-size: 13px;
    font-weight: bold;
    color: #444;
    background-color: #dedede;
    padding: 4px;
    margin: 3px;
    text-align: left;
  	border: 1px dotted #444;
    cursor: pointer;
  }
  .arenateam_header_off {
    font-family: verdana;
    font-size: 13px;
    font-weight: bold;
    color: #999;
    background-color: #dedede;
    padding: 4px;
    margin: 3px;
    text-align: left;
  	border: 1px dotted #666;
    cursor: pointer;
  }
  .arenateam_quickstats {
  
  }

  .arenateam_box {
  	border: 1px solid #666;
    background-color: #fff;
    width: 72px;
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    padding: 0px;
  }

  .arenateam_member_row { 
    clear: both;
    border-top: 1px dotted #333;
    margin-bottom: 5px;
    margin-left: 5px;
    margin-right: 5px;
  }

  .arenateam_member_header { 
    border-left: 1px dotted #333;
    border-right: 1px dotted #333;
    border-top: 1px dotted #333;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    color: #666;
    padding: 5px;
    margin-top: 0px;
    margin-left: 5px;
    margin-right: 5px;
    background-color: #eee;
    clear: both;
    display: block;
    height: 20px;
    line-height: 20px;
  }
  
  .arenateam_ele {
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    color: #666;
    float: left;
    display: block;
    height: 20px;
    line-height: 20px;
  }
    
  .arenateam_member { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    color: #666;
    text-align: left;
    padding-top: 6px;
    padding-bottom: 6px;
    padding-left: 4px;
    display: block;
  }
  .arenateam_member A {
    color: #888;
    text-decoration: none;
    display: block;
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


/***************************************************************************************/
/********************* REP DEFINITION **************************************************/

#reputation {
  width: 600px;
}
  #reputation #header {
    text-align: left;
    padding-bottom: 0px;
    padding-left: 3px;
    margin-bottom: 10px;
  }
  #reputation #content {
    margin: 0px;
    padding: 0px;
    clear: both;
    text-align: left;
  }
  .rep_main {
    clear: both;
  }
  .rep_header {
  	border: 1px dotted #bbb;
    font-family: verdana;
    font-size: 13px;
    font-weight: bold;
    color: #666;
    background-color: #eee;
    padding: 4px;
    margin: 3px;
    text-align: left;
    cursor: pointer;
  }
  .rep_header_off {
  	border: 1px dotted #bbb;
    font-family: verdana;
    font-size: 13px;
    font-weight: bold;
    color: #999;
    background-color: #eee;
    padding: 4px;
    margin: 3px;
    text-align: left;
    cursor: pointer;
  }
  .rep_line {
    clear: both; 
    margin: 6px;
    padding: 2px;
  }  
  .rep_name { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 180px;
    margin-bottom: 4px;
    color: #aaa;
    text-align: left;
  }
  .rep_box {
  	border: 1px solid #aaa;
    background-color: #fff;
    width: 140px;
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    padding: 1px;
    text-align: left;
    margin-bottom: 4px;
  }
  .rep_lvl { 
    float: left;
    font-family: verdana;
    font-size: 11px;
    font-weight: normal;
    width: 100px;
    padding-left: 10px;
    color: #666;
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


/***************************************************************************************/
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
  	font-family: verdana;
  	font-size: 16px;
  	font-weight: bold;
    color: #999999;
  }

  #search #header A {
    text-decoration: none;
    color: #999999;
  }

  .me_on {
    color: #0079F2;
  }

/***************************************************************************************/
/********************* HEADERNAV DEFINITION ********************************************/

.headernav {
  clear: both;
  width: 800px;
  height: 30px;
  line-height: 30px;
}

.headernav .box_on {
  margin: 0px;
  font-family: verdana;
  font-weight: bold;
  font-size: 12px;
  border-left: 1px dotted #55AAFF;
  border-right: 1px dotted #55AAFF;
  border-bottom: 1px dotted #55AAFF;
  padding: 2px;
  margin-top: 0px;
  margin-right: 2px;
  margin-left: 8px;
  color: #111;
  text-decoration: none;
  text-align: center;
  background-color: #F3F3F3;
  display: block;
  line-height: 30px;
} 

.headernav .box_off {
  margin: 0px;
  font-family: verdana;
  font-weight: bold;
  font-size: 12px;
  border-left: 1px dotted #666;
  border-right: 1px dotted #666;
  border-bottom: 1px dotted #666;
  padding: 0px;
  margin-top: 0px;
  margin-right: 0px;
  margin-left: 8px;
  color: #666;
  text-decoration: none;
  text-align: center;
  background-color: #fff;
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
  	font-family: verdana;
  	font-size: 12px;
  	font-weight: bold;
    color: #999999;
    text-decoration: none;
}

/***************************************************************************************/
/********************* REPLY DEFINITION ************************************************/

#reply {
  width: 800px;
  clear: both;
  margin: 8px;
  margin-bottom: 0px;
}
  #reply #left {
    float: left;
    clear: right;
    width: 90px;
  }
  #reply #right {
    float: right;
    clear: right;
    width: 700px;
    border-left: 1px dotted #666;
    border-bottom: 1px dotted #666;
  }
  #reply #left #icon {
    line-height: 40px;
    width: 40px;
  	font-family: verdana;
  	font-size: 11px;
  	font-weight: bold;
  	color: #666;
  }
  #reply #left #username {
    margin-top: 5px;
  	font-family: verdana;
  	font-size: 12px;
  	font-weight: bold;
  }
  #reply #right #title {
  	font-family: verdana;
  	font-size: 12px;
  	font-weight: bold;
  	clear: both;
  	text-align: left;
  	border-bottom: 1px dotted #666;
  	padding-bottom: 3px;
  	padding-top: 3px;
  	padding-left: 5px;
  }
  #reply #right #body {
    margin-top: 8px;
  	font-family: verdana;
  	font-size: 11px;
  	font-weight: normal;
  	clear: both;
  	text-align: left;
  	padding-left: 5px;
  }
  #reply #right #date {
    margin-top: 10px;
  	font-family: verdana;
  	font-size: 10px;
  	font-weight: normal;
  	color: #666;
  	clear: both;
  	text-align: left;
  	padding-left: 5px;
  	margin-bottom: 5px;
  }
  
/***************************************************************************************/
/********************* BROWSE DEFINITION ***********************************************/

#browse {
  width: 800px;
  clear: both;
  margin: 0px;
}
  #browse #header {
    text-align: left;
    padding-bottom: 0px;
    padding-left: 3px;
    margin-bottom: 10px;
    margin-top: 10px;
  	font-family: verdana;
  	font-size: 16px;
  	font-weight: bold;
    color: #999999;
  }

  #browse #header A {
    text-decoration: none;
    color: #999999;
  }
  
  #browse .key {
    clear: both;
    text-align: left;
    padding-top: 10px;
  	font-family: verdana;
  	font-size: 10px;
  	font-weight: bold;
  	color: #666666;
  }
    
  #browse #content {
    margin: 0px;
    padding: 0px;
    clear: both;
  }
  
  #browse #content .row {
    clear: both;
    margin: 0px;
  } 

  #browse #content .col {
    margin: 1px;
    margin-bottom: 1px;
    float: left;
    width: 140px;
    height: 35px;
  	background-color: #efefef;
  	line-height: 35px;
  	font-family: verdana;
  	font-size: 10px;
  	font-weight: bold;
  } 
  
  .age1 { border: 1px dotted #008000; }
  
  .age2 { border: 1px dotted #DD6F00; }
  
  .age3 { border: 1px dotted #800000; }
  
  .age1 A { 
    text-decoration: none;
    color: #444444;
    display: block;
  }
  .age2 A { 
    text-decoration: none;
    color: #777777;
    display: block;
  }
  .age3 A { 
    text-decoration: none;
    color: #aaaaaa;
    display: block;
  }

  
/***************************************************************************************/
/********************* TALENT DEFINITION ***********************************************/

#talents {
  width: 600px;
}
  #talents #header {
    text-align: left;
    padding-bottom: 0px;
    padding-left: 3px;
    margin-bottom: 10px;
  }
  #talents #content {
    margin: 0px;
    padding: 0px;
    clear: both;
  }
  #talents #content .pane {
    float: left;
  	border: 1px dotted #aaa;
  	margin-left: 3px;
  	margin-top: 0px;
  	margin-bottom: 0px;
  	padding: 3px;
  	margin-right: 0px;
  } 

  #talents #content .row {
    clear: both;
  } 

  #talents #content .col {
    margin: 1px;
    float: left;
    width: 35px;
    height: 35px;
  	border: 1px solid #fff;
  	background-color: #fff;
  	line-height: 35px;
  	font-family: verdana;
  	font-size: 10px;
  	font-weight: normal;
  } 
  #talents #content .col A {
    text-decoration: none;
    color: #efefef;
  } 

  #talents #content .empty {
  	border: 1px solid #ddd;
    margin: 1px;
    float: left;
    width: 35px;
    height: 35px;
  	background-color: #efefef;
  	line-height: 35px;
  	font-family: verdana;
  	font-size: 11px;
  	font-weight: normal;
  }
  #talents #content .full {
    border: 1px solid #A63A3A;
    margin: 1px;
    float: left;
    width: 35px;
    height: 35px;
  	background-color: #E1E1E1; 
  	line-height: 35px;
  	font-family: verdana;
  	font-size: 11px;
  	font-weight: bold;
  }
  #talents #content .half {
  	border: 1px solid #22BA00;
    margin: 1px;
    float: left;
    width: 35px;
    height: 35px;
  	background-color: #E1E1E1;
  	line-height: 35px;
  	font-family: verdana;
  	font-size: 11px;
  	font-weight: bold;
  }

  #talents #content .empty_img {
  	border: 1px solid #555;
    margin: 1px;
    float: left;
    width: 35px;
    height: 35px;
  	background-color: #fff;
  	line-height: 35px;
  	font-family: verdana;
  	font-size: 11px;
  	font-weight: normal;
  	background-image: url(/images/meshlight.gif);
  	background-repeat: repeat;
  }
  #talents #content .full_img {
    border: 1px solid #A63A3A;
    margin: 1px;
    float: left;
    width: 35px;
    height: 35px;
  	background-color: #fff; 
  	line-height: 35px;
  	font-family: verdana;
  	font-size: 11px;
  	font-weight: bold;
  	background-image: url(/images/meshlight.gif);
  	background-repeat: repeat;
  }
  #talents #content .half_img {
  	border: 1px solid #22BA00;
    margin: 1px;
    float: left;
    width: 35px;
    height: 35px;
  	background-color: #fff;
  	line-height: 35px;
  	font-family: verdana;
  	font-size: 11px;
  	font-weight: bold;
  	background-image: url(/images/meshlight.gif);
  	background-repeat: repeat;
  }

  
  #talents #content .col_on {
    margin: 1px;
    float: left;
    width: 35px;
    height: 35px;
  	border: 1px solid #bbb;
  	background-color: #efefef;
  	line-height: 35px;
  	font-family: verdana;
  	font-size: 10px;
  	font-weight: normal;
  } 
  #talents #content .col_on A {
    text-decoration: none;
    color: #bbb;
  } 
  
  #talents #content .empty A {
    text-decoration: none;
    color: #999;
  } 
  #talents #content .full A {
    text-decoration: none;
    color: #A63A3A;
  } 
  #talents #content .half A {
    text-decoration: none;
    color: #22BA00;
  } 

  #talents #content .empty_img A {
    text-decoration: none;
    color: #999;
  } 
  #talents #content .full_img A {
    text-decoration: none;
    color: #A63A3A;
  } 
  #talents #content .half_img A {
    text-decoration: none;
    color: #22BA00;
  } 
    
  #talents #element {
    text-align: left;
    font-family: verdana;
    font-size: 14px;
    font-weight: bold;
    color: #666;
    margin-top: 10px;
    border-bottom: 1px dotted #336699;
  }



#talents #content #rank_on {
  color: #333333;
  text-indent: 4px;
}
#talents #content #rank_on A { 
  text-decoration: none;
  text-indent: 4px;
  color: #333333;
  font-weight: bold;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
#talents #content #rank_on A:hover { 
  background-color: #999999;
  color: #222222;
}


#talents #content #rank_off {
  color: #888888;
  text-indent: 4px;
}
#talents #content #rank_off A { 
  text-decoration: none;
  color: #888888;
  font-weight: normal;
  font-size: 10px;
  display: block;
  white-space: nowrap;
}
#talents #content #rank_off A:hover { 
  background-color: #999999;
  color: #222222;
}

.frost  { color: #2C2F81; }
.fire   { color: #FF3833; }
.arcane { color: #A3A3A3; }
.shadow { color: #BD2CC6; }
.holy   { color: #BDB25A; }
.nature { color: #31B618; }
