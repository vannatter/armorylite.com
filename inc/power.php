<?
  $len = 10;
  $chars = "abcdefghijkmnopqrstuvwxyz023456789";
  srand((double)microtime()*1000000);
  $i = 0;
  $rand = "";
  while ($i <= $len) {
      $num = rand() % 33;
      $tmp = substr($chars, $num, 1);
      $rand = $rand . $tmp;
      $i++;
  }
?>

function ALP() {
  var b = document.getElementsByTagName("body")[0];
  var d = document.createElement("div");

  d.setAttribute("id","alp_mnu");
  d.setAttribute("className","alp_main");
  d.innerHTML='';
  b.appendChild(d); 

  var lk = document.links, l, k=0;
  while(l=lk[k++]) {
    if (l.addEventListener) {
  		l.addEventListener("mouseover", ALP_omov, false);
  		l.addEventListener("mouseout", ALP_omou, false);
  	}	else if (l.attachEvent) {
      l.attachEvent("onmouseover", ALP_omov);
      l.attachEvent("onmouseout", ALP_omou);
    } else {
      l.onmouseover = ALP_omov;
      l.onmouseout  = ALP_omou;
    }
  }

  <? if ($_GET["inline"] == "1") { ?>
  
  <? } else { ?>
    var cN = document.createElement('link');
    cN.type = 'text/css';
    cN.rel = 'stylesheet';
    cN.href = 'http://armorylite.com/inc/style_powered.php?s=p&<?=$rand;?>';
    cN.media = 'all';
    cN.title = 'poweredbyAL';
    document.getElementsByTagName("head")[0].appendChild(cN);
  <? } ?>
}

function ALP_omov(o) {

  _e = o || window.event;
  _u = this.href;

  if (_u) {
    _t = _u.match(/armorylite\.com\/(.+)\/(.+)\/(.+[^\/])/);
    
    if (_t) {
      if (((_t[1].toLowerCase() == "us") || (_t[1].toLowerCase() == "eu") || (_t[1].toLowerCase() == "kr") || (_t[1].toLowerCase() == "tw") || (_t[1].toLowerCase() == "cn")) && (_t[3].indexOf('/') < 1)) {
    
        document.getElementById("alp_mnu").className = 'alp_main';
        document.getElementById("alp_mnu").style.visibility = 'visible';   
        document.getElementById("alp_mnu").style.display = '';
  
        <? if ($_GET["inline"] == "1") { ?>
          document.getElementById("alp_mnu").style.position = 'absolute';
          document.getElementById("alp_mnu").style.backgroundColor = '#222222';
          document.getElementById("alp_mnu").style.backgroundImage = 'url(http://armorylite.com/images/mesh_powered.gif)';
          document.getElementById("alp_mnu").style.padding = '5px';
          document.getElementById("alp_mnu").style.width = '250px';
          document.getElementById("alp_mnu").style.border = '2px solid #000000';
          document.getElementById("alp_mnu").style.fontSize = '12px';
          document.getElementById("alp_mnu").style.color = '#ffffff';
          document.getElementById("alp_mnu").style.fontFamily = 'arial';
          document.getElementById("alp_mnu").style.zIndex = '90000';
        <? } ?>      
        
        document.getElementById("alp_mnu").innerHTML = '<div class=alp_content><center>Loading...</center></div>';
  
        if (document.all) { 
          cX = _e.clientX; 
          cY = _e.clientY;
        } else {
          cX = _e.pageX; 
          cY = _e.pageY;
        }
  
        if (self.pageYOffset) {
        	rX = self.pageXOffset;
        	rY = self.pageYOffset;
      	} else if (document.documentElement && document.documentElement.scrollTop) {
        	rX = document.documentElement.scrollLeft;
        	rY = document.documentElement.scrollTop;
        } else if (document.body) {
          rX = document.body.scrollLeft;
          rY = document.body.scrollTop;
        }
  
        if(document.all) {
          cX += rX; 
          cY += rY;
        }
  
        document.getElementById("alp_mnu").style.left = (cX+10) + "px";
        document.getElementById("alp_mnu").style.top  = (cY+10) + "px";
  
        _x = "z=" + escape(_t[1]) + "&r=" + escape(_t[2]) + "&n=" + escape(_t[3]);
        ALP_r("http://armorylite.com/inc/ajax_powered?il=<?=$_GET["inline"];?>&"+_x);
      }
    }
  }
}

function ALP_p(_tt, _rt) {
  document.getElementById("alp_mnu").innerHTML = '<div class=alp_content>' + _tt + '</div>';
}

function ALP_r(_x) {
  hD = document.getElementsByTagName("head")[0];         
  nS = document.createElement('script');
  nS.type = 'text/javascript';
  nS.src = _x;
  hD.appendChild(nS);
}

function ALP_omou() {
  document.getElementById("alp_mnu").style.visibility = 'hidden';   
  document.getElementById("alp_mnu").style.display = 'none';
}

window.onload = ALP;
