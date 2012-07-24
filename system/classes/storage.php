<?php

        # Joopies MySQLi class #
        # Source https://github.com/Joopie1994/TazqonCMSOriginal/master/includes/class.mysqli.php #
        # 100% Credits to Joopie #
	
	//Defining the new edited stmt class
	class new_stmt extends mysqli_stmt
	{
		//Defining needed variables
		private $is_assoc = false;
		private $row = array();
		//Execute the query and store the results etc
		//Returns true/false
		public function execute()
		{
			$return = parent::execute();
			
			$this->store_result();
			
			return $return;
		}
		
		//Set a reference to get the values in a array
		private function stmt_assoc(array &$out)
		{
			$data = $this->result_metadata();
			
			$fields = array();
			$out = array();
			while ($field = $data->fetch_field())
			{
				$fields[] =& $out[$field->name];
			}
			
			call_user_func_array(array($this, 'bind_result'), $fields);
		}
		
		//Check if there is a row availible if so return it if not return false
		public function next_record()
		{
			if (!$this->is_assoc)
			{
				$this->is_assoc = true;
				
				$this->stmt_assoc($this->row);
			}
			
			if (!$this->fetch())
			{
				$this->is_assoc = false;
				
				$this->row = array();
			}
			
			$data = array();
			foreach ($this->row as $key => $value) //Dunno, good fix still (y)
			{
				$data[$key] = $value;
			}
			
			return ($this->is_assoc) ? $data : false;
		}
		
		//Returns the a value that you requested for, works the same as mysql_result()
		public function result($field = null, $row = null)
		{
			$row = ($row == null) ? 0 : $row;
			$field = ($field == null) ? 0 : $field;
			
			$this->data_seek($row);
			$_row = $this->next_record();

			if ($field !== 0)
			{
				$keys = array_keys($_row);
				
				return $_row[$keys[$field]];
			}
			
			return current($_row);
		}
		
		//Close the shit Ghehe
		function __destruct()
		{
			$this->close();
		}
	}
	
	//Defining the new mysqli class
	class nMySQLi extends MySQLi
	{
		//Defining needed variables
		private $stmt = null;
		private $override = array( //The functions we override
					'old_stmt_init' => 'stmt_init',
					'old_prepare' => 'prepare',
					'old_bind_param' => 'bind_param',
					'old_execute' => 'execute'
				);
		
		//Count the queries that's been executed.
		public static $count = 0;
		
		//Returns if connected
		public function connected()
		{
			return (bool)$this;
		}
		
		//Disconnect it
		public function disconnect()
		{
			return $this->close();
		}
		
		//Construct new stmt class
		public function stmt_init() //Overrided
		{
			return new new_stmt($this);
		}
		
		//Prepare the new query and returns this
		public function prepare($sql) //Overrided
		{
			$this->stmt = $this->stmt_init();
			
			if (!$this->stmt->prepare($sql))
			{
				exit($this->stmt->error);
			}
			
			return $this;
		}
		
		//Gets the type
		private function gettype($value)
		{	
			if (is_array($value)) return 'a';
			if (is_bool($value)) return 'b';
			if (is_double($value)) return 'd';
			if (is_string($value)) return 's';
			if (is_numeric($value)) return 'i';
			
			return 'u';
		}
		
		//Bind params fix for 5.3 or higher
		private function getrightparams(array &$array, array &$out)
		{
			if (strnatcmp(phpversion(),'5.3') >= 0)
			{
				foreach ($array as $key => $value)
				{
					$out[] =& $array[$key];
				}
			}
			else
			{
				$out = $array;
			}
		}
		
		//Bind the params to the stmt
		public function bind_param() //Overrided
		{
			$args = func_get_args();
			$paramTypes = '';
			
			foreach ($args as $value)
			{
				$paramTypes .= $this->gettype($value);
			}
			
			$params = array($paramTypes);
			$this->getrightparams($args, $params);
			
			call_user_func_array(array($this->stmt, 'bind_param'), $params);
			
			return $this;
		}
		
		//Execute the query
		public function execute() //Overrided
		{
			if (!$this->stmt->execute())
			{				
				exit($this->stmt->error);
			}
			
			self::$count++;
			
			return $this->stmt;
		}
		
		//Call the old function of the MySQLi class without the new one
		//Returns the normaly result of that function
		//False on error
		function __call($method, $arguments)
		{
			if (in_array($method, array_keys($this->override)))
			{
				return call_user_func_array(array(parent, $this->override[$method]), $arguments);
			}
			
			return null;
		}
	}
	
?>