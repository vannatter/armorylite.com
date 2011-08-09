<?
  if (defined("MYSQL_INC")) {
    return; 
  }
  define("MYSQL_INC", true); 

  class db {
    var $appname;
    var $appvalues = array (
                            "armorylite_dev" => array("hostname" => "localhost",
                                              "dbname"   => "armorylite",
                                              "username" => "root",
                                              "password" => "icetea"),
    
                            "armorylite" => array("hostname" => "localhost",
                                              "dbname"   => "armorylite",
                                              "username" => "root",
                                              "password" => "icetea"),
                                              
                            "tracker" => array("hostname" => "localhost",
                                              "dbname"   => "tracker",
                                              "username" => "tracker",
                                              "password" => "tr@ck3r")                                                                                               
                           );
    var $persistent = false;
    var $serverconn;
    var $dbconn;
    var $errors = array();

    function db($p_appname, $p_persistent=false) {
      if (!$this->appvalues[$p_appname]) {
        $this->errors[100] = "$p_appname is not a defined application. fix the appvalues in mysql.class.php.";
        return false;
      }
      $this->appname = $p_appname;
      $this->persistent = $p_persistent;
      return true;
    }

    function connect() {
      if ($this->serverconn) {
        return $this->serverconn;
      }
      if ($persistent) {
        $this->serverconn = @mysql_pconnect($this->appvalues[$this->appname]["hostname"], 
                                           $this->appvalues[$this->appname]["username"], 
                                           $this->appvalues[$this->appname]["password"] );
      } else {
        $this->serverconn = @mysql_connect($this->appvalues[$this->appname]["hostname"], 
                                          $this->appvalues[$this->appname]["username"], 
                                          $this->appvalues[$this->appname]["password"] );
      }
      if (!mysql_errno()) {
        $this->errors[mysql_errno()] = mysql_error();
      }
      return $this->serverconn;
    }
    
    function select_db() {
      if ($this->dbconn) {
        return $this->dbconn;
      }
      if (!$this->serverconn) {
        if (!connect()) {
          return false;
        }
      }
      $this->dbconn = mysql_select_db($this->appvalues[$this->appname]["dbname"], $this->serverconn);
      if (!mysql_errno()) {
        $this->errors[mysql_errno()] = mysql_error();
      }
      return $this->dbconn;
    }

    function query($p_sql) {
      if (!$this->connect()) {
        return false;
      }
      if (!$this->select_db()) {
        return false;
      }
      $result = mysql_query($p_sql, $this->serverconn);
      if (!$result) {
        $this->errors[mysql_errno()] = mysql_error();
        return $result;
      }
      return $result;
    }

    function num_rows($p_resultid) {
      $result = mysql_num_rows($p_resultid);
      if (!mysql_errno()) {
        $this->errors[mysql_errno()] = mysql_error();
      }
      return $result;
    }
  
    function num_fields($p_resultid) {
      $result = @mysql_num_fields($p_resultid);
      if (!mysql_errno()) {
        $this->errors[mysql_errno()] = mysql_error();
      }
      return $result;
    }

    function affected_rows() {
      $result = @mysql_affected_rows();
      if (!mysql_errno()) {
        $this->errors[mysql_errno()] = mysql_error();
      }
      return $result;
    }

    function insert_id() {
      $result = @mysql_insert_id();
      if (!mysql_errno()) {
        $this->errors[mysql_errno()] = mysql_error();
      }
      return $result;
    }

    function fetch_array($p_resultid) {
      $result = @mysql_fetch_array($p_resultid);
      if (!mysql_errno()) {
        $this->errors[mysql_errno()] = mysql_error();
      }
      return $result;
    }

    function free_result($p_resultid) {
      $result = @mysql_free_result($p_resultid);
      if (!mysql_errno()) {
        $this->errors[mysql_errno()] = mysql_error();
      }
      return $result;
    }

    function data_seek($p_resultid, $p_rowid) {
      $result = mysql_data_seek($p_resultid, $p_rowid);
      if (!mysql_errno()) {
        $this->errors[mysql_errno()] = mysql_error();
      }
      return $result;
    }

    function close() {
      $result = @mysql_close($this->serverconn);
      if (!mysql_errno()) {
        $this->errors[mysql_errno()] = mysql_error();
      }
      return $result;
    }
}; 

?>
