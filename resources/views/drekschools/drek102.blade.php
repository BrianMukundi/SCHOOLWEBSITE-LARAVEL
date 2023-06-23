<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>DREK SCHOOLS</title>
<!--fav-icon-->
<link rel="icon" type="image/x-icon" href="images\studinclass.jpg">


<link rel="stylesheet" href="drek.css">


{{-- NAVBAR STYLE --}}

<style>
    .logo{
    margin-top: 0px;
    display: flex;
    background-color: rgba(255, 68, 0, 0.55);
}

.logo h1{
    margin-left: 10px;
    text-align: left;
    font-family: 'Times New Roman', Times, serif;
}

.logo img{
    margin-top: 2px;
    height: 150px;
}
    
.navbar{
    overflow: hidden;
    background-color: #666666;
    top: 0;
    width: 100%;
}

.navbar a{
    float: left;
    display: block;
    color: #eeeeee;
    text-align: center;
    padding: 15px 18px;
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif;
    font-size: 18px;
}

.navbar a:hover{
    color: orangered;
}

</style>

<style>

 
body{background-color:white);
}

*{
    box-sizing: border-box;
}
ul{
    list-style: none;
}
a{
    text-decoration: none;
}
button{
    outline: none;
    border: none;
}
input{
    outline: none;
    border: none;
}
.main{

    width:100%;
    height:470px;
    position: relative;
}

.active{
    background-color: #F14D5D;
    color: #080808;
}

.home-content{
    display: flex;
    justify-content: space-around;
    align-items: center;
    position: absolute;
    left: 50%;
    top:50%;
    transform: translate(-50%,-50%);
    width:90%;

}
.home-img{
    width:500px;
    height:400px;
    margin:20px;
}
.home-img img{
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
}
.home-text{
    width:500px;
    margin: 20px;
}
.home-text h1{
    font-size: 3.5rem;
    line-height: 55px;
    color:#22252e;
    letter-spacing: 1px;
    font-weight: 700;
    margin: 0px;
}
.home-text p{
    font-size: 1rem;
    color:#777474;
}
.home-text span{
    color: #F14D5D;
    text-decoration: underline;
}
.main-login{
    width:120px;
    height:40px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #F14D5D;
    color:#080808;
    box-shadow: 5px 10px 30px rgba(219, 74, 6, 0.5);
    text-transform: uppercase;
    transition: 0.3s ease-in-out;
}

.arrow{
    align-self: end;
    width:50%;
    border-right: 1px solid #F14D5D;
    height: 20%;
    margin-bottom:20em ;
    position: absolute;
    bottom: 5px;
    right: 70px;
    animation: arrow-animation ease 1.5s;

}
.arrow::after{
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 11px 11px 0px 11px;
    border-color: #F14D5D transparent transparent transparent;
    right: -0.7em;
    bottom: -2px;
}
.scroll{
    position: absolute;
    bottom: 260px;
    right:55px;
    font-weight: 600;
}
@keyframes arrow-animation{
    0%{
        bottom: 70px;
        opacity: 0.2;
    }
    100%{
        bottom: 5px;
        opacity: 1;
    }
}
.services{
    background-size: 1000px;
    background-position: center;
}
.services-heading{
    margin-top: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-direction: column;
}
.services-heading h2{
    line-height: 55px;
    font-size: 2.2rem;
    color:#22252e;
    letter-spacing: 1px;
    font-weight: 700;
    margin: 0px;
}
.services-heading p{
    font-size: 1rem;
    color:#777474;
    width:50%;
}
.box-container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin: 20px 30px;
}
.box{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width:600px;
    height: 700px;
    text-align: center;
    box-shadow: 2px 2px 20px rgba(90,118,253,0.15);
    border-radius: 10px;
    background-color:blue;
    margin: 20px;
    flex-grow: 1;
}
.box img{
    height:200px;
    margin:5px;
}
.box font{
    font-size: 1.5rem;
    color: #22252e;
    letter-spacing: 1px;
    font-weight: 700;
}
.box p{
    font-size: 1rem;
    color: #777474;
    display: block;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 500px;
}
.box a{
    width:150px;
    height:40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid #5a76fd;
    text-transform: uppercase;
    margin: auto;
    border-radius: 5px;
    font-weight: 600;
    font-size: 0.9rem;
    color:#5a76fd;
    margin:0px;
}
.box a:hover{
    background-color: #5a76fd;
    color:#060505;
    box-shadow: 5px 10px 30px rgba(90,118,253,0.5);
    transition: all ease 0.3s;
}

.box{
    width:300px;
    height: 500px;
    background-color: rgb(219, 128, 9);
    box-shadow: 2px 2px 30px rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    border-radius: 10px;
    margin: 20px;
    position: relative;
}

.section-5-text{
    text-align: center;
    padding-bottom: 40px;
}
.section-5-text h1{
    font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 2.5rem;
line-height: 47px;
color: #000000;
}
.section-5-text p{
    font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 1rem;
line-height: 21px;
color: #545454;
}
.section-5-text-btn{
    margin-top: 90px;
    margin-bottom: 60px;
}
.section-5-text-btn input{
    width: 30%;
height: 53px;
border: none;
outline: none;
font-size:20px;
background: #0e0d0d;
box-shadow: 5px 10px 30px rgba(219, 74, 6, 0.5);
padding-left: 20px;
}
.section-5-text-btn button{
    background: #fd0000;
    width: 221px;
height: 53px;
margin-left: 15px;
font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 21px;
text-align: center;

color: #090909;
}
footer{
    width:100%;
    text-align: center;
    padding: 0px 5%;
    border-top: 1px solid rgba(231, 9, 9, 0.2);
}
footer a,
footer p{
    color:#000000;
}
nav .menu-btn{
    display: none;
}
@media(max-width:1100px){
    nav{
        justify-content: space-between;
        height: 65px;
    }
    .menu{
        display: none;
        position: absolute;
        top: 65px;
        left: 0px;
        background-color: #070707;
        border-bottom: 4px solid #F14D5D;
        width:100%;
    }
    .menu li{
        width:100%;
    }
    nav .menu li a{
        width:100%;
        height: 40px;
        justify-content: center;
        align-items: center;
        margin:0px;
        padding: 25px;
        border:1px solid rgba(38,38,38,0.03);
    }
    nav .menu-icon{
        cursor: pointer;
        float: right;
        padding: 28px 20px;
        position: relative;
        user-select: none;
    }
    nav .menu-icon .nav-icon{
        background-color: #333333;
        display: block;
        height: 2px;
        position: relative;
        transition: background 0.2s ease-out;
        width:18px;
    }
    nav .menu-icon .nav-icon:before,
    nav .menu-icon .nav-icon:after{
        background: #333333;
        content: '';
        display: block;
        height: 100%;
        position: absolute;
        transition: all ease-out 0.2s;
        width:100%;
    }
    nav .menu-icon .nav-icon:before{
        top: 5px;
    }
    nav .menu-icon .nav-icon:after{
        top:-5px;
    }
    nav .menu-btn:checked ~ .menu-icon .nav-icon{
        background: transparent;
    }
    nav .menu-btn:checked ~ .menu-icon .nav-icon:before{
        transform: rotate(-45deg);
        top: 0;
    }
    nav .menu-btn:checked ~ .menu-icon .nav-icon:after{
        transform: rotate(45deg);
        top: 0;
    }
    nav .menu-btn{
        display: none;
    }
    nav .menu-btn:checked ~ .menu{
        display: block;
    }
    .home-img{
        display: none;
    }
    .home-text{
        width:100%;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
        height: 45vh;
        margin: 0px;
    }
    .home-content{
        text-align: center;
        width:100%;
        margin:0px;
        position: static;
        transform: translate(0px,70px);
        box-shadow: 2px 2px 30px rgba(255, 102, 55, 0.178);
    }
    .home-text h1{
        color:rgb(0, 0, 0);
        padding: 0px 20px;
        font-size: 2.5rem;
    }
    .home-text p{
        color:rgba(32, 32, 32, 0.85);
        margin: 10px 0px 20px 0px;
        width:50%;
    }
    
    .about-img{
        display: none;
    }
    .about-text{
        width:100%;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
        height: 45vh;
        margin: 0px;
    }
    .about-content{
        text-align: center;
        width:100%;
        margin:0px;
        position: static;
        transform: translate(0px,70px);
        box-shadow: 2px 2px 30px rgba(255, 102, 55, 0.178);
    }
    .about-text h1{
        color:rgb(0, 0, 0);
        padding: 0px 20px;
        font-size: 2.5rem;
    }
    .about-text p{
        color:rgba(32, 32, 32, 0.85);
        margin: 10px 0px 20px 0px;
        width:50%;
    }
    
    .arrow{
        height: 70px;
    }
   
   .main{
  
        padding: 75px 0px 0px 0;
        background: url('images/hero-bg.png') no-repeat center center;
        background-size: cover;
        height: 900px;
   }.arrow{
       left: 2%;
       margin-bottom: 15em;
   }.scroll{
       left: 48%;
       bottom: 200px;
   }
}
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
  border: 1px solid #090909;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: rgb(14, 14, 14);
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

.topnav-right{
    float: right;
}


</style>
</head>
<body>
    



         
<!--NAVIGATION-->
<div class="logo">
    <img src="images/logo.jpg" alt="logo"> 
    <h1>DREK<br> INTERNATIONAL<br> SCHOOL</h1>
</div>

     
<!--NAVIGATION-->
    
<div class="navbar">
    <a href="/">HOME</a>
   
    <a href="/Admission">ADMISSIONS</a>
    <a href="/drek102">ABOUT</a>
    <a href="/Library">LIBRARY</a>
   
    <div class="topnav-right">
      
        <a class="active2" onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;block&#39;" style="width:auto; border-radius: 5px; cursor: pointer;"></i>LOGIN</a>
        {{-- <a href="/login">LOGIN</a> --}}
        </div>
    <a href="/News">NEWS</a>
    <a href="/contacts">CONTACTS</a> 
</div>



    <section class="main" style="";>

        <!--main-content-->
        <div class="home-content">
            
            <!--text-->
            <div class="home-text">
                
                <h3 style="color: rgb(11, 10, 10); letter-spacing: 3px;">Welcome to DREK SCHOOLS</h3>
                <h1 style="color: rgb(11, 10, 10);"> About Us...</h1>
                <p style="color: black;">The purpose of Schools is to prepare students with promise
                    to enhance their intellectual, physical, social, emotional, spiritual,
                    and artistic growth so that they may realize their power for good
                    as citizens</p>
            <!--login-btn-->
            <a href="/Admission" class="main-login" style="border-radius: 5px;">Apply Now</a>
            </div>
            <!--img-->
            <div class="home-img" style="width": 650px;>
                <img src="images\universitycampus.jpg" width="500px" style="text-shadow: 20px 22px;">
                <marquee width="100%" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                    <a href="file:///C:/Users/Admin/AppData/Local/Temp/Rar$EXa13912.44270/College-Website-Template-using-HTML-CSS-main/indexdrek.html#" style="color: white;">Admission open for 13th March 2023, Kindergaten, Primary,Secondary and University at 1<sup>st</sup> September.</a>
                    </marquee>
                    <marquee width="100%" direction="right" onmouseover="this.stop();" onmouseout="this.start();">
                    <a href="file:///C:/Users/Admin/AppData/Local/Temp/Rar$EXa13912.44270/College-Website-Template-using-HTML-CSS-main/indexdrek.html#" style="color: white;">Admission open for 13th March 2023, Kindergaten, Primary,Secondary and University at 1<sup>st</sup> September</a>
                    </marquee>
            </div>
            
        </div>
        
        <!--arrow-->
        <div class="arrow"></div>
        <span class="scroll">Scroll</span>
    </section>
    
    <!--services----------------------->
    <section class="services">
        <!--heading----------->
        <div class="services-heading">
            <h2>OUR PROFESSIONAL LEVELS</h2>
            <p style=color:black>We are a group of schools offering from kindergaten,primary school, high school and University level Education</p>
        </div>
        <!--box-container----------------->
        <div class="box-container">
            <!--box-1-------->
            <div class="box">
                <img src="images/kindergaten.jpg">
                <font>Kindergaten</font>
                <p>At DREK SCHOOLS we offer education from the beginer stage that is kindergaten for your three to five years children</p>
                <!--btn--------->
                <a href="/Admission">Apply Now</a>
            </div>
            <!--box-2-------->
            <div class="box">
                <img src="images/studinclass.jpg">
                <font>Primary School</font>
                <p>This includes classes from the 1<sup>st</sup> grade to the 9<sup>th</sup>grade.</p>
                <!--btn--------->
                <a href="/Admission">Apply Now</a>
            </div>
            <!--box-3-------->
            <div class="box">
                <img src="images\highschool.jpg">
                <font>High School</font>
                <p>Includes Form one to Form Six</p>
                <!--btn--------->
                <a href="/Admission">Apply Now</a>
            </div>
            <!--box-4-------->
            <div class="box">
                <img src="images\laptop-girl.jpg">
                <font>University</font>
                <p>In this level, we offer quite the number of tertiary level training.Divided in four main schools i.e Computing-Hospitality</p>
                <!--btn--------->
                <a href="/Admission">Apply Now</a>
            </div>
            <!--box-1-------->
            
        </div>
    </section>
    
    <!--footer------------->
    <footer>
        <p style=color:red>Copyright (C) - 2023 | Developed by <a href="https://kush.lexdigital.in/">Vokeh Maoiro</a> </p>
    </footer>
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



</body></html>