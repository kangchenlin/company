<?php session_start()   ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/EasyMVC/views/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/EasyMVC/views/css/new.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<title>New</title>

<body>
<div class="header-bg">
    <div class="wrap">
        <div class="h-bg">
            <div class="total">
                 <div class="logo">
                     <div class="header"><a href="index.php"><img src="/EasyMVC/views/images/logo.jpg" alt="" /></a></div>
                 </div><div class="clear"></div>
                  <div class="menu">
                      <div class="top-nav">
                        <ul>
                           <li><a href="/EasyMVC/index/home">Home</a></li>
                           <li><a href="/EasyMVC/machine/special">Specials</a></li>
                           <li class="active"><a href="/EasyMVC/new/news">new</a></li>
                           <li><a href="/EasyMVC/index/contact">Contact</a></li>
                           <?php if($_SESSION['username'] == null){ ?>
                           <li><a href="/EasyMVC/index/signin">log in</a></li>
                           <?php }else{?>
                           <li><a href="/EasyMVC/index/logout">log out</a></li>
                           <?php }?>
                        </ul>
                      <div class="clear"></div>
                     </div>
                  </div>
                  <div class="top">
                  <?php if($_SESSION['username'] != 'admin' && $_SESSION['username'] != null ) {
                        echo '<a href="newinsert"><button type="button" class="btn btn-primary btn-lg">我要留言</button></a>';
                  }?> 
                  </div><br>
                  <?php
                     foreach($data['dataArray'] as $rs){
                  ?>
                   <div class="container">
                      <div class="CSSTableGenerator">
                         <table align="center">
                            <tr>
                               <td>
                                <?php echo $rs['guestSubject']?>
                               </td>
                               <td>
                               <?php if($_SESSION['username'] == 'admin' ) { ?>
                                      <a href="newreply?ID=<?php echo $rs['ID'] ?>">Reply</a>
                               <?php }?>
                               </td>
                            </tr>
                            <tr>
                               <td width="25%">名字</td>
                               <td width="75%">
                                <?php echo $rs['guestName']?>
                               </td>
                            </tr>
                            <tr>
                               <td>信箱</td>
                               <td>
                                <?php echo $rs['guestEmail']?>
                               </td>
                            </tr>
                            <tr>
                               <td>留言內容</td>
                               <td>
                                <?php echo $rs['guestContent']?>
                               </td>
                            </tr>
                            <tr>
                            <?php if($rs['guestReply'] !=null){?>
                              <td>回覆內容</td>
                               <td>
                                <?php echo $rs['guestReply']?>
                              </td>
                            </tr>
                            <?php }?>
                         </table>
                      </div>
                   </div><br>
                   <?php } ?>
                    <div class="clear"></div>
        			<div class="paging">
        				<p align="center">頁數:
							<?php
							//輸出直接跳頁的連結
							for($i=1;$i<=$data['pages'];$i++){
								echo "<a href=news?page=$i>$i</a>"; 
							}
							?>
						</p>
						<p align="center">第<?php echo $data['p']?>頁/共有<?php echo $data['pages']?>頁</p>
						<p>&nbsp;</p>
        			</div>
            </div>
      </div>
   </div>
</div>
</body>
</html>