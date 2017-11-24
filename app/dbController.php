<?php
/**
 * Created by PhpStorm.
 * User: cytronex8
 * Date: 24.11.17
 * Time: 12:47
 */
include ("dbInfo.php");
class dbController{
/*
* Data of connect to database.
*/
    private $db_host = "";
    private $db_user = "";
    private $db_pass = "";
    private $db_name = "";
    private $connectStatus = null;

/*
* Connect to database function.
*/
    public function connect(){
        $connectEstablishment = new mysqli($this->db_host,$this->db_user, $this->db_pass, $this->db_name);
                if($connectEstablishment->connect_error){
                    die('Ошибка подключения: (' . $connectEstablishment->connect_errno .') ' . $connectEstablishment->connect_error);
                }
    }
/*
* Database disconnect function.
*/
    public function disconnect(){

        /*if($this->connectStatus){
            if(@mysqli_close()){
                $this->connectStatus = false;
                return true;
            } else {
                return false;
            }
        }*/
    }
    public function select($table = null, $rows = null, $where = null, $order = null){
        $query_data = 'SELECT' .$rows. 'FROM' .$table;
        if($where != null){
           $query_data .= ' WHERE ' .$where;
        }
        if($order != null){
            $query_data .= ' ORDER BY ' .$order;

        }


    }
    public function insert(){

    }
    public function delete(){

    }
    public function update(){

    }

}
