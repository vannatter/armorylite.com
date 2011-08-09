<?
  include("../inc/armorylite.class.php");

  $_f = strtolower(stripslashes($_GET["f"]));
  $_t = strtolower(stripslashes($_GET["t"]));

  if (!$_f) { $_f = 1; }
  if (!is_numeric($_f)) { $_f = 1; }

  if (!$_t) { $_t = 0; }
  if (!is_numeric($_t)) { $_t = 0; }

  if (!$_s) { $_s = 0; }
  if (!is_numeric($_s)) { $_s = 0; }

  $GLOBALS["main_container"] = "armorylite_wide";
  $armorylite = new armorylite();

  if ($_t) {
    $rec = $armorylite->forum_postlist($_t,$_s);
    $nav = $armorylite->forum_postnav($_t,$_s);
    
    $_thisthread = ( (strlen(htmlspecialchars(ucwords(stripslashes($armorylite->forum_getthreadtitle($_t))))) > 30) ? (substr(htmlspecialchars(ucwords(stripslashes($armorylite->forum_getthreadtitle($_t)))),0,27) . "...") : (htmlspecialchars(ucwords(stripslashes($armorylite->forum_getthreadtitle($_t))))) );
    $_thisforum = $armorylite->forum_getname($_f);

    $armorylite->print_header_info("Forums - " . ucwords($_thisforum) . " - " . $_thisthread);
?>
  <div id="profile_wide">
   <div class="page_content">
    <div class="headernav">
      <div class="floatleft nav"><a href="/"><img src="/images/logo_mid_<?=(($_COOKIE["armorylite_style"] == "l")?"light":"dark");?>.gif" width="106" height="38" border="0" alt="Armory Lite"></a></div>
      <div class="box_on floatleft nav">
        &nbsp;<a href="/forums/reply.php?f=<?=$_f;?>&t=<?=$_t;?>">Reply</a>&nbsp;
      </div>

      <div class="box_off floatleft nav"><a href="/forums/">Forums</a> > <a href="/forums/?f=<?=$_f;?>"><?=$_thisforum;?></a> > <?=$_thisthread;?>&nbsp;</div>
    </div>

    <div id="browse">
      <div id="content">
        <div class="row">

          <br>
          
          <? while ($dat = $armorylite->db->fetch_array($rec)) { ?>
      
            <?
              $lvl = $dat["accesslevel"];
              if ($lvl >= 99) {
                $c1 = "qual_5";
                $c2 = "slot_color_5";
              } else if ( ($lvl < 99) && ($lvl >= 50) ) {
                $c1 = "qual_4";
                $c2 = "slot_color_4";
              } else if ( ($lvl < 50) && ($lvl >= 40) ) {
                $c1 = "qual_3";
                $c2 = "slot_color_3";
              } else if ( ($lvl < 40) && ($lvl >= 30) ) {
                $c1 = "qual_2";
                $c2 = "slot_color_2";
              } else if ( ($lvl < 2) ) {
                $c1 = "qual_1";
                $c2 = "slot_color_1";
              }
            ?>

            <div id="reply">
              <div id="left">
                <div class="<?=$c2;?>" id="icon"><?= (($dat["Icon"]) ? "<img width='38' height='38' src='/icons/".$dat["Icon"]."'>" : "O_o");?></div>
                <div class="<?=$c1;?>" id="username">
                  <?=ucwords($dat["username"]);?>
                </div>              
              </div>
              <div id="right">
                <div id="title">
                  <?=htmlspecialchars(stripslashes($dat["Post_Title"]));?>
                </div>
                <div id="body">
                  <?=nl2br(htmlspecialchars(stripslashes($dat["Post_Body"])));?>
                </div>
                <div id="date">
                  <?=date("F j, Y h:i",$dat["Post_Date"]);?>
                </div>
              </div>
            </div>
            <div id="reply">
            &nbsp;
            </div>           
          <? } ?>

          <div class="footmain">
            <br><br>
            <?=$armorylite->show_ad("overall","wide");?>
            <br>        
          </div>
          
		<? include("../inc/conflct.php"); ?>    
        
        </div>
      </div>

      <div class="key">
        <?=$nav;?>
      </div>

     </div>
    </div>  

    <div class="page_ad">
      <?=$armorylite->show_ad("homepage","tall");?>      
    </div>

  </div>
  </form>


<?  
  } else {
    $_thisforum = $armorylite->forum_getname($_f);
    $armorylite->print_header_info("[Al] Forums " . " - " . ucwords($_thisforum));
    $rec = $armorylite->forum_threadlist($_f,$_s);
    $nav = $armorylite->forum_threadnav($_f,$_s);
?>

  <div id="profile_wide">
   <div class="page_content">
    <form name="_forum">
    <div class="headernav">
      <div class="floatleft nav"><a href="/"><img src="/images/logo_mid_<?=(($_COOKIE["armorylite_style"] == "l")?"light":"dark");?>.gif" width="106" height="38" border="0" alt="Armory Lite"></a></div>
      <div class="box_on floatleft nav"><a href="/forums/post.php?f=<?=$_f;?>">New Post</a>&nbsp;</div>
      <div class="box_off floatleft nav"><a href="/forums/">Forums</a> > <a href="/forums/?f=<?=$_f;?>"><?=$_thisforum;?></a>&nbsp;</div>

      <div class="box_on floatright nav">
        &nbsp;Jump: <select onChange="forumjump()" class="w6" name="_jump">
        <option value="">-----</option> 
        <?=$armorylite->forum_getnames();?>
        </select>&nbsp;
      </div>
    </div>
    </form>

    <div id="browse">
      <div id="content">
        <div class="row">

          <table width=100% class="sortable">
            <tr class="searchgrid_head">
              <th>&nbsp;Topic Title&nbsp;</th>
              <th>&nbsp;Creator&nbsp;</th>
              <th>&nbsp;Posts&nbsp;</th>
              <th>&nbsp;Last Post&nbsp;</th>
            </tr>
            
            <? while ($dat = $armorylite->db->fetch_array($rec)) { ?>
              <tr class=searchgrid_row>
                <td class=searchgrid_col><a href="/forums/?f=<?=$dat["Group_ID"];?>&t=<?=$dat["Topic_ID"];?>"><?=((strlen(htmlspecialchars(ucwords(stripslashes($dat["Topic_Name"])))>50)) ? substr(htmlspecialchars(ucwords(stripslashes($dat["Topic_Name"]))),0,40) . "..." : htmlspecialchars(ucwords(stripslashes($dat["Topic_Name"]))));?></a></td>
                <td class=searchgrid_col>
                  <?
                    $lvl = $dat["accesslevel"];
                    if ($lvl >= 99) {
                      echo "<span class=qual_5>" . ucwords($dat["username"]) . "</span>";
                    } else if ( ($lvl < 99) && ($lvl >= 50) ) {
                      echo "<span class=qual_4>" . ucwords($dat["username"]) . "</span>";
                    } else if ( ($lvl < 50) && ($lvl >= 40) ) {
                      echo "<span class=qual_3>" . ucwords($dat["username"]) . "</span>";
                    } else if ( ($lvl < 40) && ($lvl >= 30) ) {
                      echo "<span class=qual_2>" . ucwords($dat["username"]) . "</span>";
                    } else if ( ($lvl < 2) ) {
                      echo "<span class=qual_1>" . ucwords($dat["username"]) . "</span>";
                    }
                  ?>
                &nbsp;</td>
                <td class=searchgrid_col><?=$dat["cnt"];?>&nbsp;</td>
                <td sorttable_customkey="<?=date("YmdHis",$dat["Last_Reply"]);?>" class=searchgrid_col><?=date("F j, Y h:i",$dat["Last_Reply"]);?>&nbsp;</td>
              </tr>
            <? } ?>
          </table>

          <div class="footmain">
            <br><br>
            <?=$armorylite->show_ad("overall","wide");?>
            <br>        
          </div>
          
		<? include("../inc/conflct.php"); ?>

        </div>
      </div>

      <div class="key">
        <?=$nav;?>
      </div>

     </div>      
    </div>  

    <div class="page_ad">
      <?=$armorylite->show_ad("homepage","tall");?>      
    </div>
        
  </div>

  
<?
  }
  $armorylite->print_footer_info();
?>
