<?php
// 

    class loadDibi{
        public $dibi;

        public function loadDibi(){
            $db = new Dibi\Connection([
                'driver'   => 'mysqli',
                'host'     => MYSQL_HOSTNAME,
                'username' => MYSQL_USERNAME,
                'password' => MYSQL_PASSWORD,
                'database' => MYSQL_DATABASE
            ]);
            $this->dibi = $db;
            return true;
        }
    }