<?
  header("Cache-Control: must-revalidate");
  $offset = 60 * 60 * 24 * 365;
  $ExpStr = "Expires: " . 
  gmdate("D, d M Y H:i:s",
  time() + $offset) . " GMT";
  header($ExpStr);
?>
