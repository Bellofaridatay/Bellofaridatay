<?php

include("config.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $uname = test($_POST['uname']);
    $lname = test($_POST['lname']);
    $fname = test($_POST['fname']);
    $oname = test($_POST['oname']);
    $pword = test($_POST['pword']);
    $cpword = test($_POST['cpword']);
    $age = test($_POST['age']);


    if($pword == $cpword){

        $dbc = conn();

       // $query = 'SELECT * FROM userinfo WHERE 1';
      // $query = "INSERT INTO userinfo (LastName,FirstName,MiddleName,age,userid) VALUES ($lname,$fname,$oname,$age,$uname)";

      //INSERT INTO userinfo (LastName, FirstName, MiddleName, age, userid) VALUES ('abdul','yusuf', 'o', '21','n1')

        $query = "INSERT INTO userinfo (LastName, FirstName, MiddleName, age, userid) VALUES ('" . $lname . "','" . $fname . "','" . $oname . "','" . $age. "','". $uname."')";

         if($dbc->query($query)) {

            echo "$lname registered!!!";
            
          //  header("Location: login.php");

         }
        



    }

    else {

        echo "Wrong password!!!";
        //header("Location: index.php");
    }


}


function test($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



?>