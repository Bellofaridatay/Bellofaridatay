<?php

include("config.php");


function query_fxn($uname){

    $dbc = conn();
  
    $query = "SELECT * FROM userinfo WHERE uname='".$uname."'";
  
    $res = $dbc->query($query);
  
    if ($res->num_rows > 0) {
      while($row= $res->fetch_assoc()) {
        $fname = $row["FirstName"];
        $pword = $row["pass"];
        $age = $row["age"];

      }
     // $val = [TRUE,$fname]
  
        return array(FALSE,$fname,$pword,$age);
      }
  
         else return array(TRUE);
  
  }
  



  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $uname = test($_POST['uname']);
    $pword = test($_POST['pword']);


    $res = query_fxn($uname);

    if($res[0]) echo 'User does not exist!!!';
    

    else{

         $pword = md5($pword);

         if($res[2] == $pword){

            echo 'Welcome, ' . $res[1] . '. Your age is ' . $res[3];
        }

        else echo 'Incorrect Password!!!';

    }

  }

  function test($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>