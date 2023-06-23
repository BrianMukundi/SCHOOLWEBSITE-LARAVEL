<?php
session_start();



if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // something was posted
   $user_name = $_POST['user_name'];
   $password =  $_POST['password'];

   if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
   {
    // READ FROM db
    
    $query = "select * from  users where user_name = '$user_name' limit 1";

  

    $result=mysqli_query ($con,$query);

    if($result){
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] == $password){

                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location:index.php");
                die;
            }
        }
    }

    echo "Wrong Username or Password";

   }
   else{
    echo "please enter valid data";
   }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <style> 
  
       
       
    @media(max-width:720px){
        .home-text p{
            width:70%;
            text-align: center;
        }
        .home-content h1{
            font-size: 1.9rem;
            padding: 10px 10px;
            line-height: 30px;
        }
        .about-text p{
            width:70%;
            text-align: center;
        }
        .about-content h1{
            font-size: 1.9rem;
            padding: 10px 10px;
            line-height: 30px;
        }
        .services{
            margin-top: -120px;
        }
        .services-heading{
            margin:20px;
    
        }
        .services-heading h2{
            font-size: 1.7rem;
            line-height: 40px;
        }
        .services-heading p{
            width:100%;
        }
        .box{
            width:100%;
            margin: 20px 0px !important;
            padding: 0px 20px;
            flex-grow: 1;
        }
        .box img{
            height: 100px;
            width:100%;
            object-fit: contain;
        }
        .section-5-text{
            margin-top: -250px;
        }
        .section-5-text-btn input{
            width: 80%;
        }
        .section-5-text-btn button{
            margin-top:20px;
        }
        footer p,a{
            font-size: 0.9rem;
            text-align: center;
        }
        footer{
            padding: 0px 10px;
        }
    }
    
        /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    
    /* Set a style for all buttons */
    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    
    button:hover {
      opacity: 0.8;
    }
    
    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }
    
    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }
    
    img.avatar {
      width: 40%;
      border-radius: 50%;
    }
    
    .container {
      padding: 16px;
    }
    
    span.psw {
      float: right;
      padding-top: 16px;
    }
    
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;
    }
    
    /* Modal Content/Box */
    .modal-content {
        width: 400px;
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }
    
    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }
    
    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }
    
    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)} 
      to {-webkit-transform: scale(1)}
    }
      
    @keyframes animatezoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }
    
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
    }
    
            
        </style>
        <li><a class="active" onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;block&#39;" style="width:auto; border-radius: 5px; cursor: pointer;">Login</a></li>
        

         <!-- login modal start -->
         <div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post" style="
  width: 400px;
">
     @csrf
    <div class="imgcontainer">
      <span onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;none&#39;" class="close" title="Close Modal">×</span>
      <p style="font-size: 22px;">Student Login </p>
      <hr>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user_name" >

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" >
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;none&#39;" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="signup.php">Signup</a></span>
      
      <span class="psw" style="margin-right: 11px;"><a href="">Forgot  password?</a></span>
    </div>
  </form>
</div>
<!-- login modal end  -->

<script>
            // Get the modal
            var modal = document.getElementById('id01');
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
    </body>
</html>