<?php
require_once("config.php");
    class news{
        public function __construct()
         {
          $db = new DB();
         }
        //查詢留言者的資料
        function read_new($account){
			$query = 'SELECT * from member where memAccount="'.$account.'"';
			$result = mysql_query($query);
			return mysql_fetch_assoc($result);
        }
        //查詢guest裡面的所有資料
        function page(){
               return mysql_query("select * from guest");
        }
          
       //查詢guest資料表的記錄
       function read_page($start,$number){
       $data =  mysql_query("select *from guest order by `guestTime` desc limit $start,$number");
           for($i=1;$i<=mysql_num_rows($data);$i++){
    			$rs=mysql_fetch_assoc($data);
    			 $dataarray[$i]['ID'] = $rs['ID'];
    			 $dataarray[$i]['guestSubject'] = $rs['guestSubject'];
    			 $dataarray[$i]['guestName'] = $rs['guestName'];
    			 $dataarray[$i]['guestEmail'] = $rs['guestEmail'];
    			 $dataarray[$i]['guestContent'] = $rs['guestContent'];
    			 $dataarray[$i]['guestReply'] = $rs['guestReply'];
    
           }
            return $dataarray;
        }
          
        //查詢
        function read_reply($ID){
            $query = "select * from guest where ID='".$ID."'";
            $result = mysql_query($query);
            return mysql_fetch_assoc($result);

        }
        //新增
        function create_new($username, $memName,$memEmail,$guestSubject,$guestContent,$guestTime){
            $query1="insert into guest(memberID,guestName,guestEmail,guestSubject,guestTime,guestContent,guestReply)values('".$username."','".$memName."','".$memEmail."','".$guestSubject."','".$guestTime."','".$guestContent."','')";
            mysql_query($query1);
        }
        //回覆
        function edit_new($ID,$guestReply){
            $query = "update guest set guestReply='".$guestReply."' where ID='".$ID."'";
            $result = mysql_query($query);
        }

    }
?>