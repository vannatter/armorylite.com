<? $this->Javascript->link("page/home.js", null, array("inline"=>false)); ?>

<table border="0" width="100%">
  <tr valign="top">
    <td>

      <div class="corp_box2">
        <div class="corp_box_buffer">
          <div class="box_browse">
            View your profile - select your region, server and type in your character name!
            <p />
            <form name="_arm" onSubmit="return false;">
 
 			<select name="region_list" id="regions_sel"  class="builder_sel">
				<option value="">Choose..</option>
				<option value="us">United States</option>
				<option value="eu">Europe</option>
				<option value="kr">Korea</option>
				<option value="tw">Taiwan</option>
				<option value="cn">China</option>
			</select>  
			<select name="server_list" id="server_sel" class="builder_sel">
				<option value="">--</option>
			</select>
			
			<input class="builder_name defaultText" type="text" id="name_box" maxlength="40" title="Your Name" />

              <p />
              Your Armory Lite URL: 
              <br />
              <span id="arm_link">http://armorylite.com/??/??/??</span>
            </form>  
          </div>
        </div>
      </div>

<!-- 
		<div style="stream">
		<object type="application/x-shockwave-flash" height="300" width="440" id="live_embed_player_flash" data="http://www.justin.tv/widgets/live_embed_player.swf?channel=dospvp" bgcolor="#111111"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.justin.tv/widgets/live_embed_player.swf" /><param name="flashvars" value="channel=dospvp&auto_play=true&start_volume=25" /></object>
		</div>
 -->

      <div class="im imghead"><img src="/img/sitenews.gif" alt="Site News" width="200" height="25"></div>
      <div class="hr"></div>

		<? foreach ($blog as $b) { ?>
        	<div class="blog2">
          		<?=	stripslashes($b['Blog']['Blog_Body']);?> 
          		<br />
          		<span class="blog_footer"><?=$b['Users']['Name'];?> @ <?=date("m/d/Y H:i:s",$b['Blog']['Blog_Date']);?></span>
        	</div>
        	<div class="hrd"></div>
		<? } ?>
		
    </td>
    
    <td align="right" width="240">
      <?= $this->element('corp/side'); ?>
    </td>

    <td width="5">&nbsp;</td>
	
  </tr> 
</table>