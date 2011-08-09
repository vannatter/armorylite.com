
  <div class="profile_content">

    <? $nav_page = "guild"; ?>
    <? include_once("navigation.php"); ?>

    <script language="javascript" type="text/javascript" src="/inc/power.php"></script>

    <div id="profile">
      <div id="guild">
        <div id="header">
          <? include("bit_guild_name.php"); ?>
          <? include("bit_guild_region.php"); ?>
        </div>

        <div id="content">
          <?
          if (is_array($this->xml['PAGE'][0]['GUILDINFO'][0]['GUILD'][0]['MEMBERS'][0]['CHARACTER'])) {
            ?>
              <div class="guild_header">
                <div class="h_guild_member_name"><b>Member Name</b></div>
                <div class="h_guild_class"><b>Class</b></div>
                <div class="h_guild_lvl on"><b>Lvl</b></div>
                <div class="h_guild_gender"><b>Gender</b></div>
                <div class="h_guild_race"><b>Race</b></div>
                <div class="h_guild_rank"><b>Rank</b></div>
              </div>
            <?
            foreach ( $this->xml['PAGE'][0]['GUILDINFO'][0]['GUILD'][0]['MEMBERS'][0]['CHARACTER'] as $pk => $pv ) {
              if (strtolower($pv['ATTRIBUTES']['NAME']) == strtolower($this->n)) {
                $highlight = "me";
                $highlight_name = "me_name";
              } else {
                $highlight = "";
                $highlight_name = "";
              }
              ?>
              <div class="guild_line">
                <div class="guild_member_name <?=$highlight_name;?>"><A href="/<?=strtolower(urlencode(stripslashes($this->z)));?>/<?=strtolower(urlencode(stripslashes($this->r)));?>/<?=strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['NAME'])));?>"><?=$pv['ATTRIBUTES']['NAME'];?></a></div>
                <div class="<?=$highlight;?> guild_class class_<?=$pv['ATTRIBUTES']['CLASSID'];?>"><?=$this->class_array[$pv['ATTRIBUTES']['CLASSID']];?></div>
                <div class="guild_lvl <?=$highlight;?>"><?=$pv['ATTRIBUTES']['LEVEL'];?></div>
                <div class="guild_gender <?=$highlight;?>"><?=$this->gender_array[$pv['ATTRIBUTES']['GENDERID']];?></div>
                <div class="guild_race <?=$highlight;?>"><?=$this->race_array[$pv['ATTRIBUTES']['RACEID']];?></div>
                <div class="guild_rank <?=$highlight;?>"><?=$pv['ATTRIBUTES']['RANK'];?></div>
              </div>
              <?
            }        
          } else {
              echo "<div class=\"guild_header\">No data found.</div>" . r;
          }
          ?>        

        </div>

      </div>
    </div>

    <? include_once("foot.php"); ?>
      
    </div>

    <div class="page_ad">
      <?=$this->show_ad("homepage","tall");?>      
      <br /><br />
      <?=$this->show_ad("homepage","tallhouse");?>      
    </div>
