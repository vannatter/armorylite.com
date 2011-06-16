
        </div>

        <div class="footmain">
          <br><br>
          <?=$armorylite->show_ad("overall","wide");?>
          <br>        
        </div>
        
		<? include("inc/conflct.php"); ?>

      </div>
      <div class="corp_main_right">
        <?=$armorylite->show_ad("homepage","tall");?>      
      </div>


    </div>

    <script language="javascript">
      function profileupdater() {
        ajaxHelper('profilecount');
        setInterval("ajaxHelper('profilecount')",5000);
      }
      function profilecount_init() {
        return "/inc/ajax_profilecount.php";
      }
      function profilecount_ajax(res) {
        var tDiv = document.getElementById('pcount');
        var resultHTML = res;
        tDiv.innerHTML = resultHTML;
      }
    </script>
    
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
</html>

<!-- Armorylite.com - a conflct.com gaming network production <?=date("Y");?> -->
<!-- All information property of Blizzard Entertainment            -->
