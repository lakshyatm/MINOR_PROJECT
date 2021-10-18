<?php

// Use to fetch product data
class Product
{
    public $db = null;
 
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getproduct($item_id=null,$table = 'product'){
        if(isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} where item_id={$item_id}");

            $resultArray = array();

            // fetch product data 
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }

    }

    public function getcartproduct($user_id=null,$table = 'cart'){
        if(isset($user_id)){
            $result = $this->db->con->query("SELECT item_id FROM {$table} where user_id={$user_id}");

            $resultArray = array();

            // fetch product data 
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }

    }
    public function getwishproduct($user_id=null,$table = 'wishlist'){
        if(isset($user_id)){
            $result = $this->db->con->query("SELECT item_id FROM {$table} where user_id={$user_id}");

            $resultArray = array();

            // fetch product data 
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }

    }
    
}