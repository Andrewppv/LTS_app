<?php
/**
 * Created by PhpStorm.
 * User: cytronex8
 * Date: 24.11.17
 * Time: 18:11
 */

class dbWrapper extends dbInfo{

    private $mysqli;
public function __construct(){
    //Connect to database.
        $this->mysqli = new mysqli(dbInfo::$DB_HOST, dbInfo::DB_USER, dbInfo::DB_PASS, dbInfo::DB_NAME);
    //Set encoding
        $this->mysqli->query('SET NAMES urf8');
    //Set internal encoding to UTF-8
        mb_internal_encoding("UTF-8");
        echo 'TEST';
    }

    private function select($table = null, $rows = null, $where = null, $order = null){
        $query_data = 'SELECT ' .$rows. ' FROM ' .$table;
        if($where != null){
            $query_data .= ' WHERE ' .$where;
        }
        if($order != null){
           $query_data .= ' ORDER BY ' .$order;
        }
        $result = $this->mysqli->query($query_data);

        if($this->mysqli->error){
            echo "ERROR: ".$this->mysqli->error;
        }
        $arr = array();

        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }

    return $arr;
    }
}