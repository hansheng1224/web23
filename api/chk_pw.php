<?php
include_once "base.php";
$chk=$User->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if($chk>0){
    $_SESSION['login']=$_POST['acc'];
}
echo $chk;
?>
