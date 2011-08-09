// ==UserScript==
// @name           Armorylite.com
// @description    Use Armorylite.com instead of the standard Armory.
// @include        *
// @exclude	    http://armorylite.com/*
// @exclude	    http://*.armorylite.com/*
// ==/UserScript==

var links = document.getElementsByTagName('a');
var s,t;
var _r, _s, _n;

for ( var r = 0; r < links.length; r++ ) {
  if ( check_it(links[r].href) ) {
    t = links[r].href.substr(links[r].href.indexOf('?'));
    p = t.split("&");
    _s = p[0];
    _n = p[1];

    if (!_s) { _s = "all"; } else { _s = _s.replace(/\?r\=/g, ''); }
    if (!_n) { _n = "all"; } else { _n = _n.replace(/n\=/g, ''); }

    if ((links[r].href.indexOf('://eu.wowarmory.com/') > 0) || (links[r].href.indexOf('://armory.wow-europe.com/') > 0)) {
      _r = "eu";
    } else {
      _r = "us";
    }

    s = document.createElement('span');
    s.innerHTML='<a style="text-decoration: none;" title="Armory Lite" href="http://armorylite.com/'+_r.toLowerCase()+'/'+_s.toLowerCase()+'/'+_n.toLowerCase()+'">[Al]</a> ';
    links[r].parentNode.insertBefore(s,links[r]);
    r++;
  }
}

function check_it ( u ) {
  var t;

  t = u.indexOf('://www.wowarmory.com/character-sheet.xml');
  if (t >= 0) { return (t < 8); }
  
  t = u.indexOf('://eu.wowarmory.com/character-sheet.xml') 
  if (t >= 0) { return (t < 8); }
  
  t = u.indexOf('://armory.wow-europe.com/character-sheet.xml')
  if (t >= 0) { return (t < 8); }
  
  t = u.indexOf('://armory.worldofwarcraft.com/character-sheet.xml')
  if (t >= 0) { return (t < 8); }
  
  return false;
}
