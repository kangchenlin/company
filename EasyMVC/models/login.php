<?php  
require_once("config.php");         
    class login{
        public $account;
        public $password;
        public function __construct(){
          $db = new DB();
         }
        //判斷是否有該會員的帳號
        function login_check($account,$password){
            $sql = "SELECT * from member where memAccount = '".$account."' and memPassword = '".$password."';";
        	$result = mysql_query($sql);
    		return mysql_fetch_row($result);
        }
        //登出
        function logout(){
            unset($_SESSION['username']);
        }
        
    }        
?>