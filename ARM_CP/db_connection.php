
<?php
        $s1= $_POST['s1'];
        $s2= $_POST['s2'];
        $s3= $_POST['s3'];
        $s4= $_POST['s4'];
        $s5= $_POST['s5'];
        $s6= $_POST['s6'];
        echo $s1,"," ,$s2,"," , $s3,"," ,$s4,"," ,$s5,"," ,$s6,"\r\n";


 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "armdb";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); }

   if(isset($_POST['start'])){
    $sql =("insert into armcp (s1,s2,s3,s4,s5,s6) values ('$s1','$s2','$s3','$s4','$s5','$s6')");}
 if ($conn->query($sql) === TRUE){
    echo "Data has been added successfully"; }
    else {
    echo "Error: " . $sql . "<br>" . $conn->error; } 
function CloseCon($conn)
 {
 $conn -> close();
 }
