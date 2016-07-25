<?php session_start()?>
<?php
    class newController extends Controller{
        function news() {
             $new = $this->model("news");
             $data = $new->page();
             //$number = 6; //設定顯示幾筆資料
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
             $data = Array();           //先設定$data是一個陣列
             $data['pages'] = $pages;
             $data['p'] = $p;
             $data['dataArray'] = $new->read_page($start,6);
             //$dataArray = $new->read_page($start,6);
             $this->view("new",$data);
        }
        //留言頁面
        function newinsert(){
            $read = $this->model("news");
            $account = $_SESSION['username'];
            $row = $read->read_new($account);
            $this->view("newinsert",$row);
        }
        //新增留言
        function newadd(){
            header('Content-Type: text/html; charset=utf-8');
            $insert = $this->model("news");
            $ID = $_POST['ID'];
            if (isset($_POST['button'])){  
                
                $username = $_SESSION['username'];
                $memName = $_POST['memName'];
                $memEmail =$_POST['memEmail'];
                $guestSubject =$_POST['guestSubject'];
                $guestContent =$_POST['guestContent'];
                $guestTime = date("Y:m:d H:i:s");
                
                $insert->create_new($username, $memName,$memEmail,$guestSubject,$guestContent,$guestTime);
                $a='送出成功';
    		    $b='<meta http-equiv=REFRESH CONTENT=1;url=https://lab-jennylin.c9users.io/EasyMVC/new/news>';
    		    $this->message($a,$b);
            }
        }
        //回覆留言頁面
        function newreply(){
            $reply = $this->model("news");
            $ID = $_GET['ID'];
            $row = $reply->read_reply($ID);
            $this->view("newReply",$row);
        }
        //回覆留言
        function replyupdate(){
            $update = $this->model("news");
            
            if (isset($_POST['button'])){
                
                $ID = $_POST["ID"];
                $guestReply = $_POST["guestReply"];
                
                $update->edit_new($ID,$guestReply);
                $a='回覆成功';
    		    $b='<meta http-equiv=REFRESH CONTENT=1;url=https://lab-jennylin.c9users.io/EasyMVC/new/news>';
    		    $this->message($a,$b);
            }
        }
        public function message($a,$b){
            $this->view("message",Array($a,$b));
        }
    }