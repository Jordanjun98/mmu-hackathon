<html>
<?php
///Establishing connection with database
$Connection=mysqli_connect('localhost','root','');
if($Connection){
  echo "Database connected<br>";
}
$Selected=mysqli_select_db($Connection,'userdata'); //Selecting database
if ($Selected){
  echo "Database selected<br>";
}

include('menteePage3.php');

if(isset($_POST["submit"])){
    if (!empty($_POST["ConsultID"]) &&!empty($_POST["Name"]) &&! empty($_POST["Contact"]) &&! empty($_POST["Email"]) &&! empty($_POST["Time_slot"]) &&! empty($_POST["Subject_code"])){
        $ConsultID = $_POST["ConsultID"];
        $Name = $_POST["Name"];
        $Contact_no = $_POST["Contact"];
        $Email = $_POST["Email"];
        $Time_slot = $_POST["Time"];
        $Subject_code = $_POST["Code"];
        $Connection=mysqli_connect('localhost','root','');  ///Establishing connection with database
        $Selected=mysqli_select_db($Connection,'userdata'); //Selecting database
                                          //belong to database
        $Query = "INSERT INTO UserInfo (consult_id,name,contact_no,email,time_slot,subject_code)
                  VALUES('$ConsultID','$Name','$Contact_no','$Email','$Time_slot','$Subject_code')";
        $Execute=mysqli_query($Connection,$Query);
          if ($Execute){
              echo "Successfully registered";
            }
          else{
            echo"Fail to update";
          }
      }
    else{
        echo "Please enter your name,contact no,email,time slot or subject_code";
      }
}
else{
  echo"error";
}




?>
</html>
