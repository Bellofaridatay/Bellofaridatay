<?php

include("config.php");

function query_fxn($uname){

    $dbc = conn();
  
    $query = "SELECT username FROM sigin WHERE username='".$uname."'";
  
    $res = $dbc->query($query);
  
    if ($res->num_rows > 0) {
      while($row= $res->fetch_assoc()) $uname = $row["username"];
  
     // $val = [TRUE,$fname]
  
        return array(FALSE,$uname);
      }
  
         else return array(TRUE);
  
  }
  
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
      $uname = test($_POST['uname']);
      $pword = test($_POST['pword']);
  
  
      if($uname == $pword){
  
          $dbc = conn();


          $res = query_fxn($uname);


      if ($res[0]){
  

        $query = "INSERT INTO sigin (username) VALUES ('" . $uname . "')";

         if($dbc->query($query)) {

            echo "$uname registered!!!";
            
          //  header("Location: login.php");

         }
      } 
         
        else echo $res[1].",already exists!!!!";

             
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