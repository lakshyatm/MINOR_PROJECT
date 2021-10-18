<?php 

class Cart
{
    public $db=null;

    public function __construct(DBController $db){
        if(!isset($db->con))return null;
        $this->db=$db;
    }

    //insert into cart
    public function insertintocart($params,$table="cart")
    {
        if($this->db->con != null)
        {
            if($params !=null)
            {
                //insert into cart('user_id',"item_id") values ("","")
                $columns = implode(',', array_keys($params));
                
                $values = implode(',' , array_values($params));
               
                
                // create sql query
                $query = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                
                //excute
                $result = $this->db->con->query($query);
                return $result;
          
            }
        } 

    }

    //insert into Wishlist
    public function insertintowish($params,$table="wishlist")
    {
        if($this->db->con != null)
        {
            if($params !=null)
            {
                //insert into cart('user_id',"item_id") values ("","")
                $columns = implode(',', array_keys($params));
                
                $values = implode(',' , array_values($params));
               
                
                // create sql query
                $query = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                
                //excute
                $result = $this->db->con->query($query);
                return $result;
          
            }
        } 

    }

    //to get user_id and item_id
    public function addtocart($userid,$itemid){
        if(isset($userid) && isset($itemid)){
            $params=array(
               "user_id"=>$userid,
               "item_id"=>$itemid, 
            );

            //successful insertion
            $result=$this->insertintocart($params);
            if($result){
                header("Location: " . $_SERVER['PHP_SELF']);//reload page
            }
        }
    }

    //to get user_id and item_id
    public function addtowish($userid,$itemid){
        if(isset($userid) && isset($itemid)){
            $params=array(
               "user_id"=>$userid,
               "item_id"=>$itemid, 
            );

            //successful insertion
            $result=$this->insertintowish($params);
            if($result){
                header("Location: " . $_SERVER['PHP_SELF']);//reload page
            }
        }
    }

    public function deletecart($item_id = null, $table = 'cart'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function deletewish($item_id = null, $table = 'wishlist'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function deleteallcart($user_id = null,$table = 'cart'){
     
            if($user_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE user_id={$user_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
      
    }
    
    //Calculate Subtotal
    public function subtotal($arr){
        if(isset($arr)){
            $sum=0;
            foreach($arr as $item){
                $sum+=floatval($item[0]);
            }
            return $sum;
        }
    }

    //For peventing Dublicate in the cart
    public function getcartid($cartArray = null, $key = "item_id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }
    //For peventing Dublicate in the cart
    public function getwishid($cartArray = null, $key = "item_id"){
        if ($cartArray != null){
            $wish_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $wish_id;
        }
    }
}

?>