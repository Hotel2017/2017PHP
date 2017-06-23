<?php
    header('Content-type:text/html;charset=utf-8');
    unset($_SESSION['identity']); 
    setcookie("username","",time()-3600);//销毁与客户端的卡号
    header('location:../hotel');
       
?>