<?php
session_start();
if(isset($_SESSION['Count'])){
$_SESSION['Count']++;


}
else{
$_SESSION['Count']=1;

}

echo "View Count". $_SESSION['Count'];

?>


/*
 <?php
session_start();

if(isset($_SESSION['Views'])){
    echo "Your session count is:" .$_SESSION['Views'];
    $_SESSION['Views']++;


}

else{
    $_SESSION['Views']=1;
    echo "Session dose not exiist ";

}

?> 
*/ 