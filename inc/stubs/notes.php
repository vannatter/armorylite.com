  <div class="profile_content">

    <? $nav_page = "notes"; ?>
    <? include_once("navigation.php"); ?>

    <form name="frm_notes" method="post" action="/postnote.php">
    <input type="hidden" name="rurl" value="<?=$this->lite_url?>">
    <input type="hidden" name="chid" value="<?=$this->chid;?>">
    
    <div id="profile">
      <div id="notes">
        <div id="header">
          <? include("bit_char_name.php"); ?>
          <? include("bit_char_guild.php"); ?>
          <? include("bit_char_demographics.php"); ?>
        </div>

        <div id="content">

          <div class="note_control">
            <input onClick="note_swap(this)" type="checkbox" name="filter_1" checked> User Notes       
            &nbsp;&nbsp;
            <input onClick="note_swap(this)" type="checkbox" name="filter_0" checked> System Notes       
            &nbsp;&nbsp;
          </div>

          <? if ($_COOKIE["armorylite_user"]) { ?>

          <div class="note_control note_input">
            <textarea name="input_notes" class="note_textarea" rows="5"></textarea>
            <input type="button" name="btn_notes" class="note_btn" value="Post Comments" onClick="note_submit();">
          </div>
          
          <? } ?>
        
          <?
            $res = $this->comments_get($this->chid, $this->x);
            while ($row = $this->db->fetch_array($res)) {
              ?>
              <div class="note_line" id="ntype_<?=$row["Comment_Type"];?>">
                <? if ($row["Comment_Type"] == "1") { ?>
                  <div class="note_body">
                    <img src="/images/blip.gif" width="16" height="16" alt="User Note">
                    &nbsp;
                    <?=stripslashes($row["Body"]);?>
                    <span class="note_date"><?=$this->get_username($row["Member_ID"]);?> @ <?=date("m/d/Y g:i A",$row["Comment_Date"]);?></span>
                  </div>
                <? } else { ?>
                  <div class="note_body">
                    <img src="/images/ico.gif" width="16" height="16" alt="System Note">
                    &nbsp;
                    <?=$row["Body"];?>
                    <span class="note_date"><?=date("m/d/Y g:i A",$row["Comment_Date"]);?></span>
                  </div>
                <? } ?>
              </div>
              <?
            } 
            echo "<div class='botnav'>" . $this->comments_nav($this->chid, $this->x, $this->lite_url) . "</div>"; 
          ?>

        </div>

      </div>
    </div>
    </form>

    <? include_once("foot.php"); ?>
      
    </div>

    <div class="page_ad">
    <?=$this->show_ad("homepage","tall");?>      
    </div>
