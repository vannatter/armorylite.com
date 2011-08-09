

      <? if ($GLOBALS["error_ad"] == true) { ?>
          <br><br>
          <? if(isset($this)) { ?>
            <?=$this->show_ad("overall","wide");?>
          <? } else { ?>
            <?=$armorylite->show_ad("overall","wide");?>
          <? } ?>
          <br>
      <? } ?>
        
    </div>

    <script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-4667823-1");
    pageTracker._initData();
    pageTracker._trackPageview();
    </script>

    <script type="text/javascript">
    _qoptions={
    qacct:"p-dcKIXFKPCjebI"
    };
    </script>
    <script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
    <noscript>
      <img src="http://pixel.quantserve.com/pixel/p-dcKIXFKPCjebI.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
    </noscript>

  </body>
  </div>

<? if (DEBUG) { ?>
<? if(isset($this)) { ?>
  <? if ($this->is_dev) { ?>
<pre class="clearboth">
<?= $this->debug; ?>
</pre>
  <? } ?>
<? } else { ?>
  <? if ($armorylite->is_dev) { ?>
<pre class="clearboth">
<?= $armorylite->debug; ?>
</pre>
  <? } ?>
<? } ?>
<? } ?>

</html>

<!-- Armorylite.com - a conflct.com gaming network production <?=date("Y");?> -->
<!-- All information property of Blizzard Entertainment            -->
