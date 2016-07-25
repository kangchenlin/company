<?php
header('Content-Type: text/html; charset=utf-8');
    class machineController extends Controller{
        
        //產品畫面
        function special() {
            $machine = $this->model("special");
            $data = $machine->page();
            //   $number = 6; //設定顯示幾筆資料
            $total = mysql_num_rows($data); //取得查詢結果的筆數
            $pages = ceil($total / 6); //計算總頁數
                 									
            //根據 $_GET['p'] 參數值決定從第幾頁開始
            //變數$p由1算起
            $p = $_GET['page'];
                if ($p == '') {
                 $p = 1;
                }
            $start = ($p - 1) * 6; //設定查詢 LIMIT子句的第一個參數
            //查詢machine資料表的記錄
            //$resultArray = $machine->readpage($start,6);
            $data = Array();   //先設定$data是一個陣列
            $data['p'] = $p;
            $data['pages'] = $pages;
            $data['resultArray'] = $machine->readpage($start,6);
            $this->view("specials",$data);
        }
        //詳細說明
        function single(){
            $machine = $this->model("special");
            $ID = $_GET['ID'];
            $row = $machine->read_machine($ID);
            $this->view("single",$row);
        }
        //產品新增畫面
        function machinenew(){
            $this->view("specialsNew");
        }
        //新增產品
        function machineinsert(){
            $insert = $this->model("special");
            if (isset($_POST['submit'])){
    
                $maName = $_POST["maName"];
                $maClass = $_POST["maClass"];
                $maExplain = $_POST["maExplain"];
                
                $tmp_dir = 'views/images/';
                
                $filename = $_FILES["uploadfile"]["name"][0]; //上傳圖檔(暫存位置)
                $filename1 = $_FILES["uploadfile"]["name"][1]; 
                $filename2 = $_FILES["uploadfile"]["name"][2];
                
                $updir = $tmp_dir.$filename;
                $updir1 = $tmp_dir.$filename1;
                $updir2 = $tmp_dir.$filename2;

                //判斷檔案是否存在
                if (is_uploaded_file($_FILES['uploadfile']['tmp_name'][0])||(is_uploaded_file($_FILES['uploadfile']['tmp_name'][1]))||(is_uploaded_file($_FILES['uploadfile']['tmp_name'][2])))
                {
                    //判斷是否有移動檔案
                    if (!move_uploaded_file($_FILES['uploadfile']['tmp_name'][0],$updir)||(!move_uploaded_file($_FILES['uploadfile']['tmp_name'][1],$updir1))||(!move_uploaded_file($_FILES['uploadfile']['tmp_name'][2],$updir2)))
                    {
                        //echo 'cannot move file to '.$tmp_dir;
                        $this->view("special");
                    }
                    //echo '<p>file upload success</p>';
                    $data = Array();
                    $insert->create_machine($maName,$maClass,$maExplain,$updir,$updir1,$updir2);
                    echo '<script>alert("新增成功");</script>';
                    $this->special();
                }
            }
        }
        //修改畫面
        function machineedit(){
            $edit = $this->model("special");
            $ID = $_GET["ID"];
            $row = $edit->read_machine($ID);
            $this->view("specialsEdit",$row);
        }
        //修改產品
        function machineupdate(){
            $update= $this->model("special");
            if (isset($_POST['submit'])){   //修改產品
    
                $ID = $_POST['ID'];
                $maName = $_POST['maName'];
                $maClass = $_POST['maClass'];
                $maExplain = $_POST['maExplain'];
                
                $tmp_dir = 'views/images/';
                
                $file = $_FILES["uploadfile"]["name"][0];
                $file1 =$tmp_dir.$file;
             
                move_uploaded_file($_FILES['uploadfile']['tmp_name'][0],$file1);
                
                $update->update_machine($ID,$maName,$maClass,$maExplain,$file1);
                echo '<script>alert("修改成功");</script>';
                header("Location: single?ID=$ID");
            }
        }
        //刪除產品
        function machinedelete(){
            $delete= $this->model("special");
            $ID = $_GET['ID'];
            
            $filename = $_GET['filename'];
            $maImage = $_GET['maImage'];
            $maImage_1 = $_GET['maImage_1'];
            
            if (file_exists($filename)||($maImage)||($maImage_1))  //刪除資料夾裡的圖片檔
            {
                unlink($filename);
                unlink($maImage);
                unlink($maImage_1);
                
                $delete->delete_machine($ID);
                header("Location: special");
            }
        }
    } 
?>