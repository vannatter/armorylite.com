<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/img/browse.gif" alt="Browse Armory Lite" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">
      
        You can browse characters we have discovered by clicking any of the servers below. This list is always being
        updated as we discover new servers, so check back soon if you don't see your server listed.
        <p>
        <div class="breaker"></div>
    
        <div class="corp_box2">
          <div class="corp_box_buffer">
              <table width="100%">
              <?
                $x = 0;
                $r = 2;
              ?>
              <? foreach ($servers as $server) { ?>
                <?= (($x==0) ? "<tr>":""); ?>
                  <td class="td">
                    <a href="/<?=strtolower($server['Servers']['region']);?>/<?=strtolower($server['Servers']['url_name']);?>/"><?=$server['Servers']['server_name'];?> (<?=strtoupper($server['Servers']['region']);?>)</a>
                  </td>
                <?
                  $x++;
                  if ($x == 2) {
                    echo "</tr>";
                    $x = 0;
                  } 
                ?>      
              <? } ?>
              
              <?= (($x <= 2) ? "</tr>":""); ?>

              </table>
          </div>
        </div>

      </div>

    </td>
    
    <td align="right" width="240">
      <?= $this->element('corp/side'); ?>
    </td>

    <td width="5">&nbsp;</td>
	
  </tr> 
</table>
