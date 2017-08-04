<?php
/** this->dibi->fetch giving dibi (which is extended) command
*   to use method "fetch" with command for mysql (defined in config/config.mysql.php)
*   
*   dibi will return array Dibi/Object, saved in array with index of database column. -> render with array index array["XXX"]
*
*   class useDatabaseExample extends loadDibi{
*      
*        public function tellMe(){
*            $render = $this->dibi->fetch("SELECT * FROM testing WHERE 1");
*            printf($render["papando"]);
*        }
*    }
*
**/