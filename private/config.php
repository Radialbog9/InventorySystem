<?php
  class ServerConfig {
    //DO NOT EDIT ABOVE THIS LINE

    public static $database_ip = "localhost";
    public static $database_username = "wip";
    public static $database_password = "wip";
    public static $database_name = "wip_inventorysystem";

    //DO NOT EDIT BELOW THIS LINE
    public static $database_conn = new mysqli($database_ip, $database_username, $database_password, $database_name);
  }
