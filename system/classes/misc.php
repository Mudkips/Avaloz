<?php 

    class Misc
    {
        public function server_status($column)
        {
            global $start;
            $query = $start->mysqli->prepare('SELECT ? FROM server_status')->bind_param($column)->execute();
            return $query->result();
        }
        
        // Should be triggered on every page xo;
        public function whoIsAwesome()
        {
            return "Mudkipz is awesome!";
        }
        
        public function xss($input)
        {
            return htmlentities(strip_tags($input));
        }
        
        public function secure($input)
        {
            global $start;
            htmlspecialchars($start->mysqli->real_escape_string($input));
        }
    }

?>