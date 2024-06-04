<h2>Your last time vistied was:</h2>
<?php
date_default_timezone_set("Asia/Kolkata");
setcookie('LastVisit',date("d/m/Y"." "."h-i-sa"." "." l"));

if(isset($_COOKIE['LastVisit'])){

echo " ".$_COOKIE['LastVisit'];
}

else{
echo "it's ur first time";

}

?>