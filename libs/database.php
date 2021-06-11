<?php
class database{
    private $HOST = 'localhost';
    private $DB = 'truekeapp';
    private $USER = 'root';
    private $PASS = '';

    public function select($table, $data){        
        $sql = "SELECT * 
                FROM $table
                WHERE 1 ";
        foreach ($data as $key => $value) {
            $sql .= "AND $key = '$value'";
        }
        return $this->query($sql);
    }

    public function insert($table, $data){
        $sql = "INSERT INTO $table SET ";
        foreach($data as $key => $value){
            $sql .= "$key = '$value',";
        }
        $sql = rtrim($sql,',');
        return $this->query($sql);
    }    

    public function update($table, $data){
        $sql = "UPDATE $table SET ";
        foreach ($data as $key => $value) {
            $sql .= "$key = '$value',";
        }
        $sql = rtrim($sql,',');
        $sql .= " WHERE id = ".$data['id'];
        return $this->query($sql);
    }

    public function delete($table, $data){
        $sql = "DELETE FROM $table WHERE id = ".$data['id'];
        return $this->query($sql);
    }

    public function query($sql){
        $response = [];
        $mysqli = new mysqli($this->HOST, $this->USER, $this->PASS, $this->DB);
        if($mysqli->connect_errno){
            $response['execute'] = false;
            $response['errorMessage'] = $mysqli->connect_error;
        }else{
            $result = $mysqli->query($sql);
            if($result === TRUE){
                $response['execute'] = true;
                $response['last_insert'] = $mysqli->insert_id;
            }else if(is_object($result)){
                $response['execute'] = true;
                $response['data'] = [];
                while($fila = $result->fetch_assoc()){
                    $response['data'][] = $fila;
                }
            }else{
                $response['execute'] = false;
                $response['errorMessage'] = $mysqli->error;
            }
        }
        return $response;
    }
}