<? include_once("compress.php"); ?>

var disappeardelay=250;
var enableanchorlink=0; 
var hidemenu_onclick=1; 
var ie5=document.all;
var ns6=document.getElementById&&!document.all;
var ghost_var = "";
var which_tab = "";

function ajaxHelper(functionName) {
  var xmlHttp;
  // Firefox, Opera 8.0+, Safari, SeaMonkey
  try {    
    xmlHttp=new XMLHttpRequest();
  }
  catch (e) {   
    // Internet Explorer 
    try {    
      xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e) {   
      try {      
        xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");      
      }
      catch (e) {      
        return false;      
      }    
    }  
  } 
 
  xmlHttp.onreadystatechange=function() {
    //The request is complete == state 4
    if (xmlHttp.readyState==4) {
      var response=xmlHttp.responseText;
      //Send reponse to _ajax hook of passed function name
      eval(functionName + "_ajax" + '(\'' + response + '\')');
    }
  }
 
  //Get request string from _setup hook of passed function name
  var requestString = eval(functionName+"_init" + '()');
  if (requestString) {
    xmlHttp.open("GET", requestString, true);
    xmlHttp.send(null);
  }
}

function addP() {
	try {
		window.external.AddSearchProvider('http://armorylite.com/inc/alsearch.xml');
	}
	catch(e) {
		alert('Search engine integration requires either Firefox 2 or Internet Explorer 7.');
	}
}

function addD() {
	try {
		window.external.AddSearchProvider('http://armorylite.com/inc/direct.xml');
	}
	catch(e) {
		alert('Search engine integration requires either Firefox 2 or Internet Explorer 7.');
	}
}


function filtergear(z, r, s) {
  xx = document._gear._filter[document._gear._filter.selectedIndex].value;
  window.location.href = '/score/' + z + '/' + r + '/' + xx;
}

function filterstats(z, r, s) {
  xx = document._stats._filter[document._stats._filter.selectedIndex].value;
  window.location.href = '/stats/' + z + '/' + r + '/' + xx;
}

function filterbrowse(url) {
  window.location.href = url + "/" + document._browse._sort[document._browse._sort.selectedIndex].value;
}

function togmenu() {
  if (document.getElementById('my_block').style.visibility == 'visible') {
    document.getElementById('darkBackgroundLayer').style.visibility = 'hidden';   
    document.getElementById('darkBackgroundLayer').style.display = 'none';

    document.getElementById('my_block').style.visibility = 'hidden';   
    document.getElementById('my_block').style.display = 'none';
    document.getElementById(which_tab).className = 'box_on';
    document.getElementById('my_nav').className = 'my_off';
  } else {
    document.getElementById('darkBackgroundLayer').style.visibility = 'visible';   
    document.getElementById('darkBackgroundLayer').style.display = '';

    document.getElementById('my_block').style.visibility = 'visible';   
    document.getElementById('my_block').style.display = '';
    which_tab = find_nav();
    clear_nav();
    document.getElementById('my_nav').className = 'my_on';
  }
}

function mnu_on(i) {
  document.getElementById(i).className = 'my_ele_on';
}

function mnu_off(i) {
  document.getElementById(i).className = 'my_ele';
}


function talent_toggle(id) {
  if (id == '1') {
    if (document.getElementById('grid_1')) {
      document.getElementById('grid_1').style.visibility = 'visible';   
      document.getElementById('grid_1').style.display = '';
    }
    if (document.getElementById('grid_2')) {
      document.getElementById('grid_2').style.visibility = 'hidden';   
      document.getElementById('grid_2').style.display = 'none';
    }
    if (document.getElementById('grid_2')) {
      document.getElementById('talenttab_2').className = 'tabinactive';
    }
    if (document.getElementById('grid_1')) {
      document.getElementById('talenttab_1').className = 'tabactive';
    }
  } else {
    if (document.getElementById('grid_2')) {
      document.getElementById('grid_2').style.visibility = 'visible';   
      document.getElementById('grid_2').style.display = '';
    }
    if (document.getElementById('grid_1')) {
      document.getElementById('grid_1').style.visibility = 'hidden';   
      document.getElementById('grid_1').style.display = 'none';
    }
    if (document.getElementById('grid_1')) {
      document.getElementById('talenttab_1').className = 'tabinactive';
    }
    if (document.getElementById('grid_2')) {
      document.getElementById('talenttab_2').className = 'tabactive';
    }
  }
}

function togglenotes(user_id) {
  if (document.getElementById('notes_block').style.visibility == 'visible') {
    document.getElementById('notes_block').style.visibility = 'hidden';   
    document.getElementById('notes_block').style.display = 'none';
    document.getElementById(which_tab).className = 'box_on';
    document.getElementById('notes_nav').className = 'box_off';
  } else {
    document.getElementById('notes_block').style.visibility = 'visible';   
    document.getElementById('notes_block').style.display = '';
    which_tab = find_nav();
    clear_nav();
    document.getElementById('notes_nav').className = 'box_on';
    //ajaxHelper('getnotes');
  } 
}

function forumjump() {
  xi = document._forum._jump[document._forum._jump.selectedIndex].value;
  window.location.href = '/forums/?f=' + xi;
}

function find_nav() {
  var tabs = new Array('main_nav','talents_nav','rep_nav','skills_nav','guild_nav','arena_nav','my_nav');
  var found = "";
  
  for (x in tabs) {
    if (document.getElementById(tabs[x]).className == 'box_on') {
      found = tabs[x];
      break;
    }
  }
  return found;  
}

function clear_nav() {
  var tabs = new Array('main_nav','talents_nav','rep_nav','skills_nav','guild_nav','arena_nav','my_nav');
  for (x in tabs) {
    document.getElementById(tabs[x]).className = 'box_off';
  }
}

function note_swap(id) {
  _name = id.name;
  if (_name == 'filter_0') {
    _filter = 'ntype_'+0;    
  } else {
    _filter = 'ntype_'+1;
  }
  
  if (id.checked) {
    _e = document.getElementsByTagName('div');
    for (var _i = 0; _i < _e.length; _i++) {
      if (_e[_i].id == _filter) {
        _e[_i].style.visibility = 'visible';   
        _e[_i].style.display = '';  
      }
    }
  } else {
    _e = document.getElementsByTagName('div');
    for (var _i = 0; _i < _e.length; _i++) {
      if (_e[_i].id == _filter) {
        _e[_i].style.visibility = 'hidden';   
        _e[_i].style.display = 'none';  
      }
    }
  }
}

function note_submit() {
  if (document.frm_notes.input_notes.value.length > 0) {
    document.frm_notes.submit();
  }
}


function stat_hide() {
  document.getElementById('stats_base_main').style.visibility = 'hidden';   
  document.getElementById('stats_melee_main').style.visibility = 'hidden';   
  document.getElementById('stats_ranged_main').style.visibility = 'hidden';   
  document.getElementById('stats_spell_main').style.visibility = 'hidden';   
  document.getElementById('stats_defense_main').style.visibility = 'hidden';   
  document.getElementById('stats_arena_main').style.visibility = 'hidden';   

  document.getElementById('stats_base_main').style.display = 'none';   
  document.getElementById('stats_melee_main').style.display = 'none';   
  document.getElementById('stats_ranged_main').style.display = 'none';   
  document.getElementById('stats_spell_main').style.display = 'none';   
  document.getElementById('stats_defense_main').style.display = 'none';   
  document.getElementById('stats_arena_main').style.display = 'none';   
  
  document.getElementById('stats_base_head').className = 'stats_head_off';   
  document.getElementById('stats_melee_head').className = 'stats_head_off'
  document.getElementById('stats_ranged_head').className = 'stats_head_off'   
  document.getElementById('stats_spell_head').className = 'stats_head_off'  
  document.getElementById('stats_defense_head').className = 'stats_head_off'   
  document.getElementById('stats_arena_head').className = 'stats_head_off'
}

function stat_show(iid,hid) {
  if (document.getElementById(iid).style.visibility == 'visible') {
    document.getElementById(iid).style.visibility = 'hidden';   
    document.getElementById(iid).style.display = 'none';
    document.getElementById(hid).className = 'stats_head_off';   
  } else {
    document.getElementById(iid).style.visibility = 'visible';   
    document.getElementById(iid).style.display = '';
    document.getElementById(hid).className = 'stats_head_on';   
  }
}

function arenateam_swap(iid,hid) {
  if (document.getElementById(iid).style.display == '') {
    document.getElementById(iid).style.visibility = 'hidden';   
    document.getElementById(iid).style.display = 'none';
    document.getElementById(hid).className = 'arenateam_header_off';   
  } else {
    document.getElementById(iid).style.visibility = 'visible';   
    document.getElementById(iid).style.display = '';
    document.getElementById(hid).className = 'arenateam_header';   
  }
}

function rep_swap(iid,hid) {
  if (document.getElementById(iid).style.display == '') {
    document.getElementById(iid).style.visibility = 'hidden';   
    document.getElementById(iid).style.display = 'none';
    document.getElementById(hid).className = 'rep_header_off';   
  } else {
    document.getElementById(iid).style.visibility = 'visible';   
    document.getElementById(iid).style.display = '';
    document.getElementById(hid).className = 'rep_header';   
  }
}

function repsub_swap(iid,hid) {
  if (document.getElementById(iid).style.display == '') {
    document.getElementById(iid).style.visibility = 'hidden';   
    document.getElementById(iid).style.display = 'none';
    document.getElementById(hid).className = 'rep_subheader_off';   
  } else {
    document.getElementById(iid).style.visibility = 'visible';   
    document.getElementById(iid).style.display = '';
    document.getElementById(hid).className = 'rep_subheader';   
  }
}


function skill_swap(iid,hid) {
  if (document.getElementById(iid).style.display == '') {
    document.getElementById(iid).style.visibility = 'hidden';   
    document.getElementById(iid).style.display = 'none';
    document.getElementById(hid).className = 'skill_header_off';   
  } else {
    document.getElementById(iid).style.visibility = 'visible';   
    document.getElementById(iid).style.display = '';
    document.getElementById(hid).className = 'skill_header';   
  }
}

function ghost_txt_out (fld, def, id) {
	if (fld.value == def) {
		fld.value = def;
	}
	if (fld.value == "") {
		if (ghost_var == def) {
			fld.value = def;
		} else {
			fld.value = ghost_var;
			ghost_var = "";
		}
	}
	fld.id = id;
}

function ghost_txt_inc (fld, def, id) {
	ghost_var = fld.value;
	fld.value = "";
	fld.id = id;
}

function do_arm_build(pag) {
  if (pag == "server") {
    xx = document._arm._server[document._arm._server.selectedIndex].value;
    cc = xx.split("_");
    document._arm._servername.value = cc[0];
    document._arm._country.value = cc[1];
    document._arm._name.value = "Your Name";
    document.getElementById("arm_link").innerHTML = "<a href='http://armorylite.com/" + document._arm._country.value.toLowerCase() + "/" + document._arm._servername.value.toLowerCase() + "/" + document._arm._name.value.toLowerCase() + "'>http://armorylite.com/" + document._arm._country.value.toLowerCase() + "/" + document._arm._servername.value.toLowerCase() + "/" + document._arm._name.value.toLowerCase() + "</a>";
  }
  if (pag == "user") {
    document.getElementById("arm_link").innerHTML = "<a href='http://armorylite.com/" + document._arm._country.value.toLowerCase() + "/" + document._arm._servername.value.toLowerCase() + "/" + document._arm._name.value.toLowerCase() + "'>http://armorylite.com/" + document._arm._country.value.toLowerCase() + "/" + document._arm._servername.value.toLowerCase() + "/" + document._arm._name.value.toLowerCase() + "</a>";
  }
}












function getposOffset(what, offsettype) {
  var totaloffset=(offsettype=="left")? what.offsetLeft+5 : what.offsetTop-10;
  var parentEl=what.offsetParent;
  while (parentEl!=null) {
    totaloffset=(offsettype=="left")? totaloffset+parentEl.offsetLeft : totaloffset+parentEl.offsetTop;
    parentEl=parentEl.offsetParent;
  }
  return totaloffset;
}

function showhide(obj, e, visible, hidden) {
  if (ie5||ns6) {
    dropmenuobj.style.left=dropmenuobj.style.top=-500;
  }
  if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover") {
    obj.visibility=visible;
  } else if (e.type=="click") {
    obj.visibility=hidden;
  }
}

function iecompattest() {
  return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body;
}

function clearbrowseredge(obj, whichedge) {
  var edgeoffset=0;
  if (whichedge=="rightedge") {
    var windowedge=ie5 && !window.opera? iecompattest().scrollLeft+iecompattest().clientWidth-15 : window.pageXOffset+window.innerWidth-15;
    dropmenuobj.contentmeasure=dropmenuobj.offsetWidth;
    if (windowedge-dropmenuobj.x < dropmenuobj.contentmeasure) {
      edgeoffset=dropmenuobj.contentmeasure-obj.offsetWidth;
    }
  } else {
    var topedge=ie5 && !window.opera? iecompattest().scrollTop : window.pageYOffset;
    var windowedge=ie5 && !window.opera? iecompattest().scrollTop+iecompattest().clientHeight-15 : window.pageYOffset+window.innerHeight-18;
    dropmenuobj.contentmeasure=dropmenuobj.offsetHeight;
    if (windowedge-dropmenuobj.y < dropmenuobj.contentmeasure) {
      edgeoffset=dropmenuobj.contentmeasure+obj.offsetHeight;
      if ((dropmenuobj.y-topedge)<dropmenuobj.contentmeasure) {
        edgeoffset=dropmenuobj.y+obj.offsetHeight-topedge;
      }
    }
  }
  return edgeoffset;
}

function dropdownmenu(obj, e, dropmenuID) {

  if (window.event) {
    event.cancelBubble=true;
  } else if (e.stopPropagation) {
    e.stopPropagation();
  }
  
  if (typeof dropmenuobj!="undefined") {
    dropmenuobj.style.visibility="hidden";
  }

  clearhidemenu();
  
  if (ie5||ns6) {
    obj.onmouseout=delayhidemenu;
    dropmenuobj=document.getElementById(dropmenuID);
    
    if (hidemenu_onclick) {
      dropmenuobj.onclick=function(){dropmenuobj.style.visibility='hidden'};
    }
    dropmenuobj.onmouseover=clearhidemenu;
    dropmenuobj.onmouseout=ie5? function(){ dynamichide(event)} : function(event){ dynamichide(event)};
    showhide(dropmenuobj.style, e, "visible", "hidden");

    if ( (dropmenuID == 'cnt_15') || (dropmenuID == 'cnt_16') || (dropmenuID == 'cnt_17') ) {
      dropmenuobj.x=getposOffset(obj, "left")-7;
      dropmenuobj.y=getposOffset(obj, "top")+10;
    } else if ( dropmenuID == 'nav_my' ) {
      dropmenuobj.x=getposOffset(obj, "left")+0;
      dropmenuobj.y=getposOffset(obj, "top")+10;
    } else {
      dropmenuobj.x=getposOffset(obj, "left")+29;
      dropmenuobj.y=getposOffset(obj, "top")-27;
    }


//    dropmenuobj.x=getposOffset(obj, "left");
//    dropmenuobj.y=getposOffset(obj, "top");

    dropmenuobj.style.left=dropmenuobj.x-clearbrowseredge(obj, "rightedge")+"px";
    dropmenuobj.style.top=dropmenuobj.y-clearbrowseredge(obj, "bottomedge")+obj.offsetHeight+"px";
  }
  return clickreturnvalue();
}

function clickreturnvalue() {
  if ((ie5||ns6) && !enableanchorlink) {
      return false;
  } else {
    return true;
  }
}

function contains_ns6(a, b) {
  while (b.parentNode) {
    if ((b = b.parentNode) == a) {
      return true;
    }
  }
  return false;
}

function dynamichide(e) {
  if (ie5&&!dropmenuobj.contains(e.toElement)) {
    delayhidemenu();
  }
  else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget)) {
    delayhidemenu();
  }
}

function delayhidemenu() {
  delayhide=setTimeout("dropmenuobj.style.visibility='hidden'",disappeardelay);
}

function clearhidemenu() {
  if (typeof delayhide!="undefined") {
    clearTimeout(delayhide);
  }
}

function jumpAff() {
  x = document.aff.afflist[document.aff.afflist.selectedIndex].value;
  window.location.href = '/admin/affiliate.php?act=edit&id=' + x;
}
