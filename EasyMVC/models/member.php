<?php
require_once("config.php");
    class member{
        public $account;
        public function __construct()
         {
          $db = new DB();
         }
        //查詢會員帳號
        function read_member($account){
            $sql="select * from member where memAccount='".$account."'";
            $result = mysql_query($sql);
            return mysql_fetch_assoc($result);
        }
        //新增
        function create_register($memName,$memAccount,$memPassword,$memPasswordC,$memPhone,$memEmail,$RegTime){
             $query = "insert into member(memName,memAccount,memPassword,memPasswordC,memGroup,memPhone,memEmail,memDate)values('".$memName."','".$memAccount."','".$memPassword."','".$memPasswordC."','1','".$memPhone."','".$memEmail."','".$RegTime."')";
             $result = mysql_query($query);
        }
    }
?>