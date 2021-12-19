<?php
session_start();
const ADMIN_EMAIL = 'admin@admin.com';
const ADMIN_PASSWORD = '111111';
//echo $_POST['email'].$_POST['password'];
if($_POST['email']==ADMIN_EMAIL && $_POST['password']==ADMIN_PASSWORD)
{
    $_SESSION['auth']=false;
    header('Location: ?controller=users');
}
else if($_POST['email']=="" && $_POST['password']=="")
{
    header('Location: ?controller=index');
}
else
{
    $_SESSION['auth']=true;
    $_SESSION['email']=$_POST['email'];
    header('Location: ?controller=users&action=checkAuth&email='.$_POST['email']);
}