<?
  include("inc/armorylite.class.php");
  $armorylite = new armorylite(); 

  $page_redirected_from = $_SERVER['REQUEST_URI'];  
  $server_url = "http://" . $_SERVER["SERVER_NAME"] . "/";
  $redirect_url = $_SERVER["REDIRECT_URL"];
  $redirect_url_array = parse_url($redirect_url);
  $end_of_path = strrchr($redirect_url_array["path"], "/");
  $GLOBALS["error_ad"] = true;

  switch(getenv("REDIRECT_STATUS"))
  {
  	# "400 - Bad Request"
  	case 400:
  	$error_code = "400 - Bad Request";
  	$explanation = "The syntax of the URL submitted by your browser could not be understood.  Please verify the address and try again.";
  	break;
  
  	# "401 - Unauthorized" 
  	case 401:
  	$error_code = "401 - Unauthorized";
  	$explanation = "This section requires a password or is otherwise protected.  If you feel you have reached this page in error, please return to the login page and try again, or contact the webmaster if you continue to have problems.";
  	break;
  
  	# "403 - Forbidden"
  	case 403:
  	$error_code = "403 - Forbidden";
  	$explanation = "This section requires a password or is otherwise protected.  If you feel you have reached this page in error, please return to the login page and try again, or contact the webmaster if you continue to have problems.";
  	break;
  
  	# "404 - Not Found"
  	case 404:
      $shortname = substr($page_redirected_from,1);
      $shortname = str_replace("/","",$shortname);
      $url = $armorylite->shortname_check($shortname);
      
      if ($url) {
        $_c = $armorylite->get_xml_raw($url);
        echo $_c;
#        header("location: " . $url);
        exit;
      } else {
        $error_code = "404 - Not Found";
        $explanation = "The requested resource '" . $page_redirected_from . "' could not be found on this server.  Please verify the address and try again.";
        break;
      }
  	   
  	# "500 - Internal Server Error"
  	case 500:
  	$error_code = "500 - Internal Server Error";
  	$explanation = "The server experienced an unexpected error.  Please verify the address and try again.";
  	break;
  }
  
  $page_title = "Error";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";
  include("inc/corp_header.php");
?>

<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/images/error.gif" alt="System Error" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">
        Woops - It looks like we have an error:
        <p />
        <div class="highlight"><?=$explanation;?></div>
        <p />
        If you need further assistance, please <a href="mailto:support@armorylite.com">contact us</a>.
        <p />
        Thanks!
      </div>

    </td>
    
    <td align="right" width="240">
      <? include("inc/corp_side.php"); ?>
    </td>

    <td width="5">&nbsp;</td>
	
  </tr> 
</table>

<?
  include("inc/corp_footer.php");
?>