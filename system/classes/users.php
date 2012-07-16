<?php 

    class Users
    {
        public function name2id($name)
        {
            global $start;
            $query = $start->mysqli->prepare("SELECT id FROM users WHERE username=?")->bind_param($name)->execute();
            return $query->result();
        }
        
        public function name2mail($name)
        {
            global $start;
            $query = $start->mysqli->prepare("SELECT mail FROM users WHERE username=?")->bind_param($name)->execute();
            return $query->result();
        }
        
        public function id2name($id)
        {
            global $start;
            $query = $start->mysqli->prepare("SELECT username FROM users WHERE id=?")->bind_param($id)->execute();
            return $query->result();
        }
        
        public function id2mail($id)
        {
            global $start;
            $query = $start->mysqli->prepare("SELECT mail FROM users WHERE id=?")->bind_param($id)->execute();
            return $query->result();
        }
        
        public function mail2id($mail)
        {
            global $start;
            $query = $start->mysqli->prepare("SELECT id FROM users WHERE mail=?")->bind_param($mail)->execute();
            return $query->result();
        }
        
        public function mail2name($mail)
        {
            global $start;
            $query = $start->mysqli->prepare("SELECT username FROM users WHERE mail=?")->bind_param($mail)->execute();
            return $query->result();
        }
        
        public function validName($name)
        {
            if(preg_match('/^[a-zA-Z0-9._:,-]+$/i', $name))
            {
                return true;
            }
                return false;
        }
        
        public function nameTaken($name)
        {
            global $start;
            $query = $start->mysqli->prepare("SELECT * FROM users WHERE username=?")->bind_param($name)->execute();
            if($query->num_rows > 0)
            {
                return true;
            }
                return false;
        }
        
        public function validEmail($mail)
        {
            if(preg_match("/^[a-z0-9_\.-]+@([a-z0-9]+([\-]+[a-z0-9]+)*\.)+[a-z]{2,7}$/i", $mail))
            {
                return true;
            }
                return false;
        }
        
        public function emailTaken($mail)
        {
            global $start;
            $query = $start->mysqli->prepare("SELECT * FROM users WHERE email=?")->bind_param($mail)->execute();
            if($query->num_rows > 0)
            {
                return true;
            }
                return false;
        }
        
        public function findUser($id, $column)
        {
            global $start;
            $query = $start->mysqli->prepare("SELECT ? FROM users WHERE id=?")->bind_param($column, $id)->execute();
            return $query->result();
        }
        
        public function validLogin($user, $pass)
        {
            global $start;
            $query = $start->mysqli->prepare("SELECT * FROM users WHERE username=? AND password=?")->bind_param($user, $pass)->execute();
            if($query->num_rows > 0)
            {
                return true;
            }
                return false;
        }
        
        
    }

?>