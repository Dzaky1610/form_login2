



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>


    <!-- Style form login -->

    

   
    <style>

       body{
        background: linear-gradient(135deg, #c8e6c9, #f48fb1);
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-attachment: fixed;
        display:flex;
        align-items:center;   
        justify-content:center;
        height:100vh;
        margin:0;
       }

       .login-container{
        background:rgba(255,255,255,0.5);
        padding:20px;
        border-radius:5px;
        text-align:center;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
       }

       .login-container h2{

        color:rgb(97, 216, 190);
        margin-bottom:20px;
      
       }

       .login-container input{

        width:100%;
        padding:5px;
        margin: 5px 0;
        border:1px solid #ccc;
        border-radius:5px;
        outline-color: rgb(97, 216, 190);

       }

       .login-container button{
          background-color:rgb(97, 216, 190);
          color:#ffffffff;
          padding:10px 20px;
          border:none;
          border-radius:5px;
          cursor:pointer;

       }

       
       button:hover{
         background-color: #f48fb1;
         color:white;
       }
       

       a{
         color:rgb(97, 216, 190);
         text-decoration: none;
       }

       a:hover{
         color:aliceblue;
       }


       



    </style>


</head>
<body>


          <!--  Kerangka login nya -->

<!-- pembungkus  -->

            <div class="login-container">

            
             <h2>Login</h2>  <!-- header(judul) -->

                <!-- form loginnya -->
             <form action="login.php" method="post">
                  <input type="email" name="email" id="email" placeholder="Masukan email">
                  <input type="password" name="password" id="password" placeholder="Masukan Password">
                  <button type="submit">Login</button>
                  <p>You don't have any account?<a href="registerform.php"> Klik here</a></p> 

                



             </form>   




            </div> <!--penutup pembungkus  -->



    
</body>
</html>