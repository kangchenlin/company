<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
class indexController extends Controller {
    //首頁畫面   
    function home() {
        $this->view("index");
    }
    //聯絡畫面
    function contact() {
        $this->view("contact");
    }
    //登入畫面
    function signin() {
        $this->view("signin");
    }
    //登入判斷
    function login(){
        $user = $this->model("login");
        if (isset($_POST['login'])){
            $account = $user->account = $_POST['memAccount'];
            $password = $user->password= $_POST['memPassword'];
            $row = $user->login_check($account);
            //判斷帳號與密碼是否為空白以及MySQL資料庫裡是否有這個會員
            if($account != null && $password != null && $row[1] == $account && $row[2] == $password){
    	        	//將帳號寫入session，方便驗證使用者身份
    		        $_SESSION['username'] = $account;
    		      //  echo $_SESSION['username'];
    		        //echo '登入成功!';
    		        $this->view("index");
    		}else{
    		        echo '登入失敗!';
    		        $this->view("signin");
    		}
        }
    }
    //登出
    function logout(){
        $user = $this->model("login");
        $user->logout();
        header("Location:signin");

    }
    //註冊畫面
    function register(){
        $this->view("memadd");
    }
    //新增會員
    function memberadd(){
        $member = $this->model("member");
        $account = $member->account = $_POST['memAccount'];
        $row = $member->read_member($account);
    
        if (isset($_POST['add'])){
            
            $memName = $_POST["memName"];
            $memAccount = $_POST["memAccount"];
            $memPassword = $_POST["memPassword"];
            $memPasswordC = $_POST["memPasswordC"];
            $memPhone = $_POST["memPhone"];
            $memEmail = $_POST["memEmail"];
            $RegTime = date("Y-m-d"); 
            
            if($row>0){
            	echo '<script>alert("帳號重複")</script>';
            	$this->view("memadd");
            }else{
                $member->create_register($memName,$memAccount,$memPassword,$memPasswordC,$memPhone,$memEmail,$RegTime);
                echo '<script>alert("註冊成功");</script>';
                $this->view("signin");
            }
        }
    }
}
?>