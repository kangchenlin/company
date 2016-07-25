<?php
require_once("config.php");
    class special{
        public function __construct()
         {
          $db = new DB();
         }
        //新增
        function create_machine($maName,$maClass,$maExplain,$updir,$updir1,$updir2){
            $query = "insert into machine (maName,maClass,filename,maImage,maImage_1,maExplain) values ('".$maName."','".$maClass."','$updir','$updir1','$updir2','".$maExplain."')";
            $result = mysql_query($query);
        }
        //查詢
        function read_machine($ID){
            $commandText = "select * from machine where ID='".$ID."'";
            $result = mysql_query ( $commandText);
            return mysql_fetch_assoc($result);
        }
        //查詢machine裡面的所有資料
        function page(){
            return mysql_query("select * from machine");
        }
        //查詢machine資料表的記錄
        function readpage($start,$number){
           $data =  mysql_query("select *from machine limit $start,$number");
           while($row = mysql_fetch_assoc($data)){       //$i當索引值　
           $i++;
           $resultArray[$i]["ID"] = $row["ID"];
           $resultArray[$i]["filename"] = $row["filename"];
           $resultArray[$i]["maName"] = $row["maName"];
           $resultArray[$i]["maImage"] = $row["maImage"];
           $resultArray[$i]["maImage_1"] = $row["maImage_1"];
           }
           return $resultArray;
        }
        //修改
        function update_machine($ID,$maName,$maClass,$maExplain,$file){
            $query = "update machine set filename='".$file."',maName='".$maName."',maClass='".$maClass."',maExplain='".$maExplain."' where ID='".$ID."'";
            mysql_query($query);
        }
        //刪除
        function delete_machine($ID){
            $query="DELETE from machine where ID ='".$ID."'";
            mysql_query($query);
        }
    }

?>