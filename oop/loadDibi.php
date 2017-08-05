<?php
// 

    class loadDibi{
        public $db;

        public function loadDibi(){
            $db = new Dibi\Connection([
                'driver'   => 'mysqli',
                'host'     => MYSQL_HOSTNAME,
                'username' => MYSQL_USERNAME,
                'password' => MYSQL_PASSWORD,
                'database' => MYSQL_DATABASE
            ]);
            $this->db = $db;
            return true;
        }
    }