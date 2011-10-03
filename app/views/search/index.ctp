<script language="javascript" type="text/javascript" src="/inc/power.php"></script>

<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/img/results.gif" alt="Search Results" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">

        <form name="_search" onSubmit="location.href='/search/'+document._search._country[document._search._country.selectedIndex].value+'/'+document._search._name.value; return false;">
        <div class="corp_box2">
          <div class="corp_box_buffer">
            <div class="breaker"></div>
            <div class="arm_box">
              <div class="arm_box_top">
                <span id="box_ele">
                <select class="w9" name="_country">
                  <option <? (($_z=="all") ? " selected ":""); ?> value="all">All</option>
                  <option <? (($_z=="us") ? " selected ":""); ?> value="us">US</option>
                  <option <? (($_z=="eu") ? " selected ":""); ?> value="eu">EU</option>
                  <option <? (($_z=="tw") ? " selected ":""); ?> value="tw">TW</option>
                  <option <? (($_z=="kr") ? " selected ":""); ?> value="kr">KR</option>
                  <option <? (($_z=="cn") ? " selected ":""); ?> value="cn">CN</option>
                </select>
                </span>
                <span id="box_ele">
                  <input value="<?=ucwords(stripslashes($_r));?>" class="w13" type="text" id="login" name="_name" maxlength="20" size="10" value="Search" onFocus="ghost_txt_inc(this, 'Search', 'login_on')" onBlur="ghost_txt_out(this, 'Search', 'login')">
                </span>
              </div>
            </div>        
            <div class="breaker"></div>
          </div>
        </div>
        </form>  
              
        Searching for <b>'<?=ucwords(stripslashes($_r))?>'</b> in <b>'<?=strtoupper($_z);?>'</b>.
        If you'd like to revise your search results, use the form above to change your search criteria.
        We've also included Powered By links for characters we have information on to help you find people easier.
        <p>
        
        <div id="content">
          <div class="row">
            <?=$dump;?>
          </div>
        </div>

      </div>

    </td>
    
    <td width="5">&nbsp;</td>
	
  </tr> 
</table>
