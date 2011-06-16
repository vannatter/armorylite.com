<script language="javascript">

function ajax_getItem(item_id) { 
  xmlHTTP=GetXmlHttpObject();
  
  if (xmlHTTP==null) {
    alert ("Browser does not support HTTP Request");
    return false;
  }

  var url="/inc/ajax_item.php?item_id="+item_id+"&x="+Math.random();
  xmlHTTP.onreadystatechange=stateChanged;
  xmlHTTP.open("GET",url,true);
  xmlHTTP.send(null);
}

function stateChanged() { 
  if (xmlHTTP.readyState==4 || xmlHTTP.readyState=="complete") { 
    document.getElementById("txtHint").innerHTML = xmlHTTP.responseText;
  } 
}

function GetXmlHttpObject() {
  var xmlHTTP=null;
  try {
    xmlHttp = new XMLHttpRequest();
  } catch (e) {
    try {
      xmlHTTP = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      xmlHTTP = new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
  return xmlHTTP;
}

</script>
