<!DOCTYPE html>
<html>
    <title></title>
    <head>
        <link rel="stylesheet" href="lib.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<style>

body, html {
    height: 100%;
  }
  
  * {
    box-sizing: border-box;
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
  
  
  .logo{
    margin-top: 10px;
    display: flex;
    background-color: rgba(255, 68, 0, 0.55);
    margin-left: 10px;
  }
  
.logo h1{
  margin-left: 10px;
  text-align: left;
  font-family: 'Times New Roman', Times, serif;
}

.logo img{
  margin-top: 10px;
  height: 150px;
  margin-left: 10px;
  
 
}

  .bg-image {
    /* The image used */
    width: 100%;
  
 
   
  
    /* Full height */
    height: ;
  
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  /* Position text in the middle of the page/image */
.bg-text {
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
    color: white;
    font-weight: bold;
    border: 3px solid #f1f1f1;
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 80%;
    padding: 20px;
    text-align: center; 
    
  }
  .text{
    display:flex;
    background-color: rgb(189, 220, 220);
    font-weight: bold;
    top: 50%;
    left: 50%;
    z-index: 2;
    padding: 20px;
    text-align: center;
  }
  .text1{
    margin-left: 100px;
    border: 3px solid #a84f4f;
  }
  .text2{
  margin-left: 500px;
  border: 3px solid #a84f4f;
  }
  .column {
    margin-top: 50px;
    float: left;
    width: 33.33%;
    padding: 5px;
  }
  
  /* Clear floats after image containers */
  .row::after {
    content: "";
    clear: both;
    display: table;
  }
  .row {
    display: flex;
  }
  
  .column {
    flex: 33.33%;
    padding: 5px;
  }
  .p1 {
    text-transform: uppercase;
    text-indent:20px;
    text-align: justify;
   
    color:rgb(10, 9, 8);
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
   }
   .allimages{
    
    
  
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
   }

   .line1{
    margin-left: 50px;
  
  }
  .line2{
    margin-left: 150px;
  
  }
  
  .contacts1{
      text-align: left;
      display: inline;
      margin-left: 150px;
      text-transform: lowercase;
      
      
  }
  .contacts2{
  
  text-align: justify;
  margin-left: 150px;
  
  
  
  }
  .last{
      background-color: #1bc0d6;
     display: flex;
      
  }
  .logo2 img{
    height: 70px;
    width: 70px;
    margin-left: 10px;
  }
  .dr{
    display:inline-flex
   
  }
  .lastlast{
    display: flex;
    border: 3px solid #1b0f0f;
  }

  #footer .twitter {
    background-image: url(http://manstyle.coralixthemes.com/dark/img/dark/icons/footer-icons.png);
    background-repeat: no-repeat;
    background-position: 0 0;
  }
  #footer .linkedin {
    background-image: url(http://manstyle.coralixthemes.com/dark/img/dark/icons/footer-icons.png);
    background-repeat: no-repeat;
    background-position: -78px 0;
  }
  #footer .facebook {
    background-image: url(http://manstyle.coralixthemes.com/dark/img/dark/icons/footer-icons.png);
    background-repeat: no-repeat;
    background-position: -233px 0;
  }
  #footer .skype {
    background-image: url(http://manstyle.coralixthemes.com/dark/img/dark/icons/footer-icons.png);
    background-repeat: no-repeat;
    background-position: -156px 0;
  }
  #footer .flickr {
    background-image: url(http://manstyle.coralixthemes.com/dark/img/dark/icons/footer-icons.png);
    background-repeat: no-repeat;
    background-position: -310px 0;
  }
  #footer a {
    height: 56px;
    width: 56px;
    display: inline-block;
    margin: 10px;
  }
  #footer a:hover {
    transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
  }
  #footer .twitter:hover {
    background-position: 0 -56px;
  }
  #footer .facebook:hover {
    background-position: -233px -56px;
  }
  #footer .skype:hover {
    background-position: -156px -56px;
  }
  #footer .linkedin:hover {
    background-position: -78px -56px;
  }
  #footer .flickr:hover {
    background-position: -310px -56px;
  }
  .bg-dark-1{
    background-color: hsl(326, 100%, 62%);
  background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
 
   
  }
.footertext{
    color: #04AA6D;
    text-align: center;
}
.bg-dark-1{
    align-items: end;
    align-content: end;
}

.topnav-right{
  float: right;
}

</style>

    </head>
    <header>
       
      <div class="logo">
        <img src="images/logo.jpg" alt="logo"> 
        <h1>DREK<br> INTERNATIONAL<br> SCHOOL</h1>
    </div>
    </header>
    <div class="navbar">
      <a href="/">HOME</a>
    
      <a href="/Admission">ADMISSIONS</a>
      <a href="/drek102">ABOUT</a>
      <a href="/Library">LIBRARY</a>
      <div class="topnav-right">
              
        <a class="active" onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;block&#39;" style="width:auto; border-radius: 5px; cursor: pointer;"></i>LOGIN</a>
        {{-- <a href="/login">LOGIN</a> --}}
        </div>
      <a href="/News">NEWS</a>
      <a href="/contacts">CONTACTS</a> 
  </div>

    <body>
      

         
<!--NAVIGATION-->
        
 

        <div class="bg-image">
      
        <div class="kenya">
            <div class="nairobi">
              <img src="images/lib1.webp" alt="" style="width:100%">
        
            </div>
            <div class="nairobi">
              <img src="images/lib2.webp" alt="" style="width:100%">
                 </div>
            <div class="nairobi">
              <img src="images/lib3.webp" alt="" style="width:100%">
            </div>
            <div class="nairobi">
              <img src="images/Banner2.webp" alt="" style="width:100%">
            </div>
            <div class="nairobi">
              <img src="images/lib4.png.webp" alt="" style="width:100%">
            </div>
            <div class="nairobi">
              <img src="images/lib5.png.webp" alt="" style="width:100%">
            </div>
            <div class="nairobi">
              <img src="images/lib6.png.jpg" alt="" style="width:100%">
            </div>
            <div class="nairobi">
              <img src="images/lib7.png.jpg" alt="" style="width:100%">
            </div>
            </div>
          </div>

<div class="bg-text">
  <h1>OUR LIBRARY</h1>
  <p>One of biggest pride as a school is our infrastructure. Our Library offers a comfortable and condusive environment to expand their outside class work.</p>
</div>
<div class="allimages">

<div class="row">
  <div class="column">
    <iframe style="width:100%" height="315px"
src="https://www.youtube.com/embed/iNjxfGJxpns" >
</iframe>
<p class="p1"> Click to watch our Library Tour Guide</p>
  </div>
  <div class="column">
    <img src="images/book1.png.jpg" alt="" style="width:100%">
    <p class="p1"> We offer a variety of books and reading materials. Students are also able to acquire these materials through our elearning platform</p>
  </div>
  <div class="column">
    <img src="images/book2.png.jpg" alt="" style="width:100%">
    <p class="p1"> Reading is a culture we embrace as a school. Students are encouraged to make good use of Library resourses </p>
  </div>
</div>

<div class="row">
  <div class="column">
    <img src="images/book3.png.jpg" alt="" style="width:100%">
<p class="p1"> As the technology grows, we also grow in terms of our content delivery. learn more about elearning</p>
  </div>
  <div class="column">
    <img src="images/book4.png.jpg" alt="" style="width:100%">
    <p class="p1">  Sign up today to get access to the resourses on or elearning platforms.</p>
  </div>
  <div class="column">
    <img src="images/book6.png.jpg" alt="" style="width:100%">
    <p class="p1"> Advanced Technology helps in coming up with in innovative ideas to help in our community. </p>
  </div>
</div>
</div>
  
</div>
<div class="text">
<div class="text1">
    <h1>Opening Hours</h1>
    <p>Weekdays from 7.00am</p>
    <p>Weekends from 8.00am</p>
</div>

<div class="text2">
    <h1>Closing Hours</h1>
    <p>Weekdays at 5.00pm</p>
    <p>Weekends at 1.00pm</p>
    </div>
</div>

<div class="last">
  <div class="contacts">
    <div class="logo2">
      <img src="last_logo.png" alt="">
      <div class="dr"> DREKS</h3>
   </div>
    
  
  </div>
  <div class="lastlast">
  <div class="line1">
    <h2>courses</h2>
    <p>Home</p><br>
    <p>All courses</p><br>
    <p>Online courses</p><br>
    <p>Free courses</p><br>
    <p>scholarship program</p><br>
    </div>
    <div class="line2">
      <h2>School</h2>
      <p>About us</p><br>
      <p>support center</p><br>
      <p>Terms</p><br>
      <p>Privacy</p><br>
      <p>Blog</p><br>
    </div>
<div class="contacts1">
  <h2>Address</h2>
  
  <p>DREK SCHOOLS</p> <br>
  <p>WANDA VISION CITY</p><br> 
  <p>RUN TOGETHER STREET</p> <br>
  <p>STREET ADDRESS 999</p> <br>
  <p>VISION</p> <br>
 <br>
</div>
<div class="contacts2">
  <h2>Contacts</h2>
  <p>Tel:+1 999 911 920</p><br>
  <p>Email us:dreksschools@gmail.com</p><br>
  <p>follow us @dreksschools on all social media platforms </p><br>
</div>
</div>
</div>
</div>
<footer class="bg-dark-1">
  <section id="footer" class="py-5">
    <div class="container text-center">
      <a href="#" class="twitter"></a>
      <a href="#" class="linkedin"></a>
      <a href="#" class="facebook"></a>
      <a href="#" class="skype"></a>
      <a href="#" class="flickr"></a>
      <h4 class="footertext">Copyright &copy; 2023 designed by Drek Schools</h4>
    </div>
  </section>
</footer>
    <script>
    var slideIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("nairobi");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1}
      x[slideIndex-1].style.display = "block";
      setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
    </body>
</html>