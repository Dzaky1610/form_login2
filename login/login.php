<?php

include 'connection.php';
$email=$_POST['email'];
$password=$_POST['password'];
$query_sql="SELECT * FROM admin WHERE email='$email' AND password ='$password'";
$result=mysqli_query($conn,$query_sql);

if(mysqli_num_rows($result) > 0){
 echo" <script>
    alert('anda berhasil login')
    window.location='home.php'
    </script>";


}else{
    echo"<script>
    alert('anda gagal login')
    window.location='index.php'
    </script>";
}







?>