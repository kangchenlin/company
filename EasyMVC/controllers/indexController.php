<?php
session_start();

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
            if($account != null && $password != null && $row[1] == $account && $row[2] == $password){
    	        	//將帳號寫入session，方便驗證使用者身份
    		        $_SESSION['username'] = $account;
    		      //  echo $_SESSION['username'];
    		        $a='登入成功!';
    		        $b='<meta http-equiv=REFRESH CONTENT=1;url=https://lab-jennylin.c9users.io/EasyMVC/index/home>';
    		        $this->message($a,$b);
    		}else{
    		        $a='登入失敗!';
    		        $b='<meta http-equiv=REFRESH CONTENT=1;url=https://lab-jennylin.c9users.io/EasyMVC/index/signin>';
    		        $this->message($a,$b);
    		}
        }
    }
    //登出
    function logout(){
        $user = $this->model("login");
        $user->logout();
        $this->view("signin");
        //header("Location:signin");
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
                $a='帳號重複!';
    		    $b='<meta http-equiv=REFRESH CONTENT=1;url=https://lab-jennylin.c9users.io/EasyMVC/index/memadd>';
    		    $this->message($a,$b);
            }else{
                $member->create_register($memName,$memAccount,$memPassword,$memPasswordC,$memPhone,$memEmail,$RegTime);
                $a='註冊成功';
    		    $b='<meta http-equiv=REFRESH CONTENT=1;url=https://lab-jennylin.c9users.io/EasyMVC/index/signin>';
    		    $this->message($a,$b);
            }
        }
    }
    public function message($a,$b){
        $this->view("message",Array($a,$b));
    }
}
?>