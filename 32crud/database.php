<?php 
    class Database{
        private $db_host ="localhost";
        private $db_user ="root";
        private $db_pass =1234;
        private $db_name = "db_exo_ci4";
        private $mysqli ="";
        private $result = array();
        public $conn = false;
        public function __construct(){
            if(!$this->conn){
                $this->mysqli = new mysqli($this->db_host, $this->db_user,$this->db_pass,$this->db_name);
                $this->conn = true;
                if($this->mysqli->connect_error){
                    array_push($this->result, $this->mysqli->connect_error);
                    return 'error';
                }
            }else{
                return true;
            }
        }
        public function insert($table, $params=array()){
            if($this->tableExists($table)){
                
                $tablesColumns = implode(', ', array_keys($params));
                $tableValues = implode("', '",$params);
                //print_r($tableValues);
                $sql = "INSERT INTO $table ($tablesColumns) VALUES ('$tableValues') ";
                if($this->mysqli->query($sql)){
                    array_push($this->result, $this->mysqli->insert_id);
                    return true;
                    
                }else{
                    array_push($this->result, $this->mysqli->error);
                    return false;
                }
            }else{
                //print_r($this->result);\
                return false;
            }
            
        }
        public function update($table, $params=array(), $where = array()){
            if($this->tableExists($table)){
                $args = array();         $args_cond = array();

                foreach($params as $key => $value){
                    $args[] = "$key = '$value'";
                }
                $dataToSet = implode(' , ',$args);
                
                foreach($where as $key => $value){
                    $args_cond[] = "$key = '$value'";
                }
                $dataCondition = implode(' AND ', $args_cond);
                $sql = "UPDATE $table SET $dataToSet WHERE $dataCondition";
//                echo $sql;
                if($this->mysqli->query($sql)){
                    array_push($this->result, $this->mysqli->affected_rows);
                    return true;
                    
                }else{
                    array_push($this->result, $this->mysqli->error);
                    return false;
                }
            }else{
                return false;
            }
            
        } 
        public function select($table, $rows="*", $join=null, $where=null, $order=null, $limit=null){
            if($this->tableExists($table)){
                $sql = "SELECT $rows FROM $table";
                $q = $this->mysqli->query($sql);
                if($q){
                    $this->result = $q->fetch_all(MYSQLI_ASSOC);
                    return true;
                }else{
                    array_push($this->result, $this->mysqli->error);
                    return false;
                }
            }else{
                return false;
            }
        }
        public function sqlSelect($sql){
            $query = $this->mysqli->query($sql);
            if($query){
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true;
            }else{
                array_push($this->result, $this->mysqli->error);
            }
        }
        public function delete($table, $where = array()){
            foreach($where as $key => $value){
                    $args_cond[] = "$key = '$value'";
                }
                $dataCondition = implode(' AND ', $args_cond);
                $sql = "DELETE FROM $table WHERE $dataCondition";
//                echo $sql;
                if($this->mysqli->query($sql)){
                    array_push($this->result, $this->mysqli->affected_rows);
                    return true;
                    
                }else{
                    array_push($this->result, $this->mysqli->error);
                    return false;
                }
            
        }
        public function tableExists($table){
            $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
            $tableInDb = $this->mysqli->query($sql);
            if($tableInDb){
                if($tableInDb->num_rows ==1){
                    return true;
                }else{
                 array_push($this->result, $table." does not exist in this database");
                 return false;
                }
               
            }
        }
        public function getResult(){
            $val = $this->result;
            $this->result = array();
            return $val;
        }
        public function __destruct(){
            if($this->conn){
                if($this->mysqli->close()){
                    $this->conn = false;
                    return true;
                }
                
            }else{
                return false;
            }
        }

    }
    
?>