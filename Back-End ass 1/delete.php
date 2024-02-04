<?php

include("config.php");

  function delete_user($uname){

    $dbc = conn();
  
    $query = "DELETE * FROM signin WHERE userid='".$uname."'";
  
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
  
    if (isset($_POST["delete"]))
    $uname = test($_POST['uname']);


    $res = query_fxn($uname);

    if($res[0]) echo 'User does not exist!!!';
    

    else{
         if($res[2] == $pword){

            echo  . $res[1] . '. have been removes from the database ';
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