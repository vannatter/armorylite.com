
<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/img/search.gif" alt="Search Armory" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">
      
        You can use the form below to search for Armory profiles anywhere in the world. 
        <p>
        Enter the full character name you are searching for, and you can either choose a specific region or you can 
        choose to search globally.
        <p>
        Unfortunately at this time the Armory does not allow wildcard searches; when they do, we will make sure we support them
        as well.
        <p>
        <div class="breaker"></div>
    
        <form name="_search" onSubmit="location.href='/search/'+document._search._country[document._search._country.selectedIndex].value+'/'+document._search._name.value; return false;">
        <div class="corp_box2">
          <div class="corp_box_buffer">
            <div class="breaker"></div>
            <div class="arm_box">
              <div class="arm_box_top">
                <span id="box_ele">
                <select class="w9 search_sel" name="_country">
                  <option value="all">All</option>
                  <option value="us">US</option>
                  <option value="eu">EU</option>
                  <option value="tw">TW</option>
                  <option value="kr">KR</option>
                  <option value="cn">CN</option>
                </select>
                </span>
                <span id="box_ele">
                  <input class="w12 defaultText" type="text" id="login" name="_name" maxlength="20" size="10" title="Search" />
                </span>
              </div>
            </div>        
            <div class="breaker"></div>
          </div>
        </div>
        </form>  

      </div>

    </td>
    
    <td align="right" width="240">
      <?= $this->element('corp/side'); ?>
    </td>

    <td width="5">&nbsp;</td>
	
  </tr> 
</table>
