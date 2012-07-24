<?php 

    class Misc
    {
        public function server_status($column)
        {
            global $start;
            $query = $start->mysqli->prepare('SELECT '. $column .' FROM server_status')->execute();
            $result = $query->result();
            return $result;
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
        
        public function hash($input)
        {
            global $start;
            return $start->config['hashing']['type']($input . $start->config['hashing']['salt']);
        }
        
        public function redir($address)
        {
            header('Location: ' . $address);
        }
    }

?>