<?php
   session_start();

?>
<?php 
       if(isset($_POST['username']) && isset($_POST['password'])){
            
            $username=$_POST['username'];
            $password=$_POST['password'];

              include 'lib/conn.php';
            


            $query="SELECT username,password FROM user WHERE username='$username' AND password='$password' ";
            $result=mysqli_query($conn,$query) or die("Error:".mysqli_error($conn));
            $row=mysqli_num_rows($result);
            $array=mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($row<=0){
                echo "false";

            }
            else{
                 $_SESSION['username']=$username;
                echo $username;

            }
        }
?>