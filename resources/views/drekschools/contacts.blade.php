<!DOCTYPE html>
<html>
    <title></title>
<header>
 

{{-- <div class="navbar">
  <a href="/">HOME</a>
  <a href="/aboutdrek">ABOUT</a>
  <a href="/Admission">ADMISSIONS</a>
  <a href="#students'-portal">STUDENTS' PORTAL</a>
  <a href="/Library">LIBRARY</a>
  <a href="/drek102">LOGIN</a>
  <a href="/News">NEWS</a>
  <a href="/contacts">CONTACTS</a> 
</div> --}}

</header>

    <head>
      
      <style>
        body, html {
    height: 100%;
  }
  
  * {
    box-sizing: border-box;
  }
  .logo img{
    height: 80px;
  }
  



/* new nav */

  
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
    /* margin-top: 10px; */
    display: flex;
    background-color: rgba(255, 68, 0, 0.55);
    /* margin-left: 10px; */
    
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
    background-image: url("images/banner3.jpg");
 
   
  
    /* Full height */
    height: 100%;
  
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
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
  * {
    box-sizing: border-box;
  }
  
  /* Style inputs */
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  /* Style the container/contact section */
  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
  }
  
  /* Create two columns that float next to eachother */
  .column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
  }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
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
    background-color: #FF3CAC;
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
  display: inline;
}
.lastlast{
  display: flex;
  border: 3px solid #1b0f0f;
}

.topnav-right{
  float: right;
}

      </style>


        <link rel="stylesheet" href="cont.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>

   

       
<!--NAVIGATION-->
      
 

    <body>

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
              
    <a class="active" onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;block&#39;" style="width:auto; border-radius: 5px; cursor: pointer;"></i>LOGIN</a>
    {{-- <a href="/login">LOGIN</a> --}}
    </div>
  <a href="/News">NEWS</a>
  <a href="/contacts">CONTACTS</a> 
</div>



        <div class="bg-image"></div>
        <div class="bg-text">
            <h1>CONNECT WITH US...</h1>
            <p>You are not going to hit a ridiculously long phone menu when you call us .At DREK SCHOOLS we provide the exceptional service we'd want to experience ourselves</p>
        </div>
            <div class="container">
                <div style="text-align:center">
        
                </div>
                <div class="row">
                    
                  <div class="column">
                   
                    <img src="images/img4.jpg" style="width:100%">
                  </div>
                  <div class="column"> 
                    <h3>Comment section..</h3>
                    <form action="comment" method="POST">
                      @csrf
                      <label for="fname">First Name</label>
                      <input type="text" id="fname" name="fname" placeholder="Your name..">
                      <span style="color:red">@error('firstname'){{$message}}@enderror</span>
                      <br>
                      <label for="lname">Last Name</label>
                      <input type="text" id="lname" name="lname" placeholder="Your last name..">
                      <span style="color:red">@error('lastname'){{$message}}@enderror</span>
                      <br>
                      <label for="lname">Zipcode</label>
                      <input type='text' id='zip' name="zipcode" placeholder="Your location zip code..">
                      <span style="color:red">@error('zipcode'){{$message}}@enderror</span>
                      <br> 
                      <label for="country">country</label>
                      <select id="country" name="country">
                        <option value="australia">EUROPE</option>
                        <option value="canada">AFRICA</option>
                        <option value="usa">USA</option>  
                        <option value="usa">ASIA</option>
                      </select>
                      <span style="color:red">@error('country'){{$message}}@enderror</span>
                      <br>
                      <label for="subject">Subject</label>
                      <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>

                      <span style="color:red">@error('subject'){{$message}}@enderror</span>
                      <br>
                      <input type="submit" 
                      
            
	
                      value="Submit">
                    </form>
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
             
    </body>
</html>