<script language="javascript" type="text/javascript" src="/inc/power.php"></script>

<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/img/results.gif" alt="Search Results" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">

        <form name="_search" onSubmit="location.href='/search/'+document._search._country[document._search._country.selectedIndex].value+'/'+document._search._name.value; return false;">
        <div class="corp_box2">
          <div class="corp_box_buffer2">
            <div class="breaker"></div>
            <div class="arm_box">
              <div class="arm_box_top">
                <span id="box_ele">
                <select class="w9 search_sel" name="_country">
                  <option <? (($region=="all") ? " selected ":""); ?> value="all">All</option>
                  <option <? (($region=="us") ? " selected ":""); ?> value="us">US</option>
                  <option <? (($region=="eu") ? " selected ":""); ?> value="eu">EU</option>
                  <option <? (($region=="tw") ? " selected ":""); ?> value="tw">TW</option>
                  <option <? (($region=="kr") ? " selected ":""); ?> value="kr">KR</option>
                  <option <? (($region=="cn") ? " selected ":""); ?> value="cn">CN</option>
                </select>
                </span>
                <span id="box_ele">
                  <input style="width:530px" class="defaultText" type="text" id="login" name="_name" maxlength="20" size="10" title="Search" value="<?= $name; ?>" />
                </span>
              </div>
            </div>        
            <div class="breaker"></div>
            
        Searching for <b>'<?=ucwords(stripslashes($name))?>'</b> in <b>'<?=strtoupper($region);?>'</b>.
        If you'd like to revise your search results, use the form above to change your search criteria.
        <p>
            
            
          </div>
        </div>
        </form>  
              
        <div id="content">
          <div class="row">
          
			<table width=100% class=sortable><tr class=searchgrid_head><th>&nbsp;Name&nbsp;</th><th>&nbsp;Class&nbsp;</th><th>&nbsp;Lvl&nbsp;</th><th>&nbsp;Race&nbsp;</th><th>&nbsp;Guild&nbsp;</th><th>&nbsp;Server&nbsp;</th><th>&nbsp;Region&nbsp;</th></tr>
          
          	<? $cnt = 0; ?>
          	<? foreach ($searches as $s) { ?>
          	
				<tr class=searchgrid_row>
					<td class=searchgrid_col><a href="/<?= $s['Characters']['Region']; ?>/<?= $s['Characters']['Server']; ?>/<?= strtolower($s['Characters']['Toon']); ?>"><?= $s['Characters']['Toon']; ?></a></td>
					<td class=searchgrid_col><?= $this->Profile->getClass($s['Characters']['Class']); ?></td>
					<td class=searchgrid_col><?= $s['Characters']['Level']; ?></td>
					<td class=searchgrid_col><?= $this->Profile->getRace($s['Characters']['Race']); ?></td>
					<td class=searchgrid_col><?= $s['Characters']['Guild']; ?></td>
					<td class=searchgrid_col><?= $s['Characters']['friendly_server_name']; ?></td>
					<td class=searchgrid_col><?= $this->Profile->getRegion($s['Characters']['Region']); ?></td>
				</tr>          	
          		<? $cnt++; ?>
          	<? } ?>
          	<? if ($cnt == 0) { ?>
				<tr class=searchgrid_row>
					<td class="searchgrid_col" colspan="7">No results found, try another search.</td>
          	<? } ?>

			</table>

          </div>
        </div>

      </div>

    </td>
    
    <td width="5">&nbsp;</td>
	
  </tr> 
</table>
