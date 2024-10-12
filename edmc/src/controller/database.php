<?php
class database
{
    private $host = "";
    private $user = "";
    private $pass = "";
    private $dbname = "";
    private $con = null;
    private $status = false;

    function __construct()
    {
        $this->con = $this->initDatabase();
    }

    public function getCon(){
        return $this->con;
    }
    public function getStatus(){
        return $this->status;
    }


    private function initDatabase(){
        try {
            $this->con = null;
            $this->status = true;
        } catch (PDOException $th) {
            return null;
        }
    }
}
