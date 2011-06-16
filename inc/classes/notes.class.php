<?

  class notes extends armorylite {
    
    var $db;

    function __construct() {
      $this->db = $armorylite->db;
    }

    function __destruct() {
      $armorylite->db->close();
      return true;
    }

  }
?>
