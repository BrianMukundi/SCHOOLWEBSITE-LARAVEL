@include('components.session-card')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DREK INTERNATIONAL SCHOOL</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <!-- Load an icon library -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
       <style>

@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}
        body{
    font-family: sans-serif;
     
}

.logo img{
    height: 80px;
  }


img{
    width: 14%;
    margin-left: 1.9rem;
    margin-top: -4%;
}

.section{
    width: 100%;
    overflow: hidden;
    margin-top: 4%;
}

.section h1{
    color: black;
    line-height: 50px;
}

.section p{
    color: black;
}

.header{
    display: flex;
}

.btn-1{
    background-color: orangered;
    padding: 0.7rem 1rem;
    color: #fff;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

.btn-1:hoover{
    background-color: #666666;
}




.showcase{
    width: 100%;
    background-color: rgba(16, 227, 129, 0.676);
    
}
.showcase h1{
    margin-top: 5%;
    margin-bottom: 5%;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    text-decoration: underline;
}

#classes{
    display: flex;
    text-align: center;
   
}

#classes img{
    
    border-radius: 10px;
    border: 2px solid #000;
    width: 200px;
    height: 150px;

}

footer{
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1.2rem;
    margin-top: 4%;
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

.container{
    padding: 18px;
    margin-top: 5px;
    height: 2000px;
}


.container{
    width: 100%;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

container h1{
    margin-top: 5%;
    margin-bottom: 5%;
    text-align: center;
    font-family: 'Times New Roman', Times, serif; 
}

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

.slideshow-container{
    overflow: hidden;
    height: 400px;
    width: 100%;
}

.slideshow-container img{
    width: 100%;
    height: 600px;
}

.fa {
    padding: 20px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
}
  
.fa:hover {
    opacity: 0.7;
}
  
.fa-facebook {
    background: #3B5998;
    color: white;
}
  
.fa-twitter {
    background: #55ACEE;
    color: white;
}

.fa-instagram{
    background: rgb(212, 11, 11);
    color: white;
}

.fa-skype{
    background: #55ACEE;
    color: white;
}

.card{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: column;
    margin: 0px 20px;
    padding: 20px 20px;
    background-color: rgba(240, 100, 49, 0.557);
    border-radius: 10px;
    cursor: pointer;
}
.card .icon{
    font-size: 35px;
    margin-bottom: 10px;
}
.card h3{
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
    color: black;
    margin-bottom: 20px;
}
.card p{
    font-size: 11px;
    font-weight: 700;
    margin-bottom: 30px;
    line-height: 1.5;
    color: black;
}

.video{
    float: right;
}


  
  
       </style>

       {{-- CSS FOR LOGIN MODEL --}}

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
        
        .container2 {
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
        

        /* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
  
}

                
            </style>

    </head>

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
            <a href="#classes">CLASSES</a>
            <div class="topnav-right">
              
            <a class="active" onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;block&#39;" style="width:auto; border-radius: 5px; cursor: pointer;"></i>Login</a>
            {{-- <a href="/login">LOGIN</a> --}}
            <a class="active" onclick="document.getElementById(&#39;id03&#39;).style.display=&#39;block&#39;" style="width:auto; border-radius: 5px; cursor: pointer;"></i>Admin</a>
            </div>
            <a href="/News">NEWS</a>
            <a href="/contacts">CONTACTS</a> 
        </div>

<!-- BANNER -->

        <div class="slideshow-container">
            <img class="mySlides" src="images/children1.jpg">
            <img class="mySlides" src="images/hallway1.jpg">
            <img class="mySlides" src="images/classroom1.jpg">
            <img class="mySlides" src="images/library2.jpeg">
            <img class="mySlides" src="images/children.jpeg">
            <div class="w3-center w3-display-bottommiddle" style="width:100%">
              <div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
             <div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
              <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
              <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
              <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
            </div>
        </div>
        
           
<!--END OF BANNER-->
<br><br>
        
        <div class="header">
        <div class="section">
            <h1>WE ENSURE BETTER EDUCATION <br> FOR A BETTER WORLD</h1>
            <p>Welcome to Drek International Schools, where we inspire each child <br>
             to achieve their own individual personal excellence. As a result, <br>
             they grow to become valuable members of our global community. <br>
            Welcoming day students from 2years to 19years and boarders from 6years to 19years.</p>
        </div>
            <div class="video">
                <video width="500px" controls>
                    <source src="images/Video.mp4" type="video/mp4">
                </video>
            </div>
             {{-- <a href="#"><button class="btn-1">GET STARTED</button></a> --}}
        </div>
        
            
       
<!--FEATURES-->
            <div class="features">
                <button>Practical Exposure</button>
                <button>Learn Online Classes</button>
                <button>Huge Library</button>
                <button>Boarding and Day</button>
                <button>Education Systems</button>
            </div>
<!--END OF FEATURES-->
<!--END OF SECTION-->
    
<!--END OF WRAPPER-->

<!--SHOWCASE-->
    <div class="showcase">
        <h1>CLASSES WE OFFER</h1>
        <div id="classes">
            <div class="card">
                <div class="pre-school">
                    <h3>Pre-School</h3>
                    <img src="images/pre-school.jpg" width="25%" alt="pre-school">
                    <p>Drek Preschool offers young children (18 months to 6 years)
                         a stimulating and creative play-based learning <br> environment.
                          This is usually in a caring, family-style atmosphere which
                          is further enriched by the <br> culturally diverse community we encompass. </p>
                </div>    
            </div>
        
          
            <div class="card">
                <div class="primary">
                    <h3>Primary</h3>
                    <img src="images/pri.school_students.jpeg" width="25%" alt="primary">
                    <p>Drek Primary School focuses on bringing up an all-around child with both academics and co-curricular<br>
                         activities supported to the highest possible level.</p>
                </div> 
            </div>
            <div class="card">
                <div class="high school">
                    <h3>High School</h3>
                    <img src="images/secondary.school students 2.jpg" width="25%" alt="high school">
                    <p>Drek High School provides a diverse and stimulating environment, which
                         motivates and guides students to <br>
                         identify their strengths. We equip our students to <br> 
                         develop into effective young adults and world citizens.</p>
                </div>
            </div>
            <div class="card">
                <div class="university">
                    <h3>University</h3>
                    <img src="images/university_students.jpg" width="25%" alt="university">
                    <p>Drek University is one of the nation’s premier schools of education
                        known for excellence in both <br> qualitative and quantitative research
                        and <br> provides an environment where students can thrive.</p>
                </div>
            </div>
        </div>
        </div>

<br><br>
    {{-- showcase beg --}}

    


<!--END OF SHOWCASE-->



    {{-- facilities images --}}
    <div img class="img-responsive" >

    <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="/w3images/lights.jpg">
              <img src="images/library2.jpeg" class="img-circle" alt="Lights" style="width:100%">
              <div class="caption">
                <p>Library</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="/w3images/nature.jpg">
              <img src="images/assembly hall.jpg" class="img-circle" alt="Nature" style="width:100%">
              <div class="caption">
                <p>Assemly Hall</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
              <a href="/w3images/nature.jpg">
                <img src="images/swimming pool.jpg" class="img-circle" alt="Nature" style="width:100%">
                <div class="caption">
                  <p>swimming-pool</p>
                </div>
              </a>
            </div>
          </div>
    </div>
    
   
        <div class="col-md-4">
            <div class="thumbnail">
              <a href="/w3images/fjords.jpg">
                <img src="/images/accomodation.jpg" class="img-circle" alt="Fjords" style="width:100%">
                <div class="caption">
                  <p>Accomodation</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="/w3images/fjords.jpg">
                <img src="images/basketball court.jpg" class="img-circle" alt="Fjords" style="width:100%">
                <div class="caption">
                  <p>Basketball court</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="/w3images/fjords.jpg">
                <img src="images/football pitch1.jpg" class="img-circle" alt="Fjords" style="width:100%">
                <div class="caption">
                  <p>Football Pitch</p>
                </div>
              </a>
            </div>
          </div>
          
      </div>
    
    
    <div class="container">
        <h1>LOCATION MAP</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127640.51288056491!2d36.
            5565114376095!3d-1.3159485823190318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x
            182f1c809869d64b%3A0x199b5604a77f13f5!2sKaren%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1677055616198
            !5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


        <!-- student login modal start -->
        <div id="id01" class="modal">
  
            <form class="modal-content animate" action="login" method="POST" style="
            width: 400px;
          ">
               @csrf
              <div class="imgcontainer">
                <span onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;none&#39;" class="close" title="Close Modal">×</span>
                <p style="font-size: 22px;"><i class="fa fa-fw fa-user"></i>Student Login </p>
                <hr>
              </div>
          
              <div class="container2">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="user_name" >
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" >
                  
                <button type="submit">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>
          
              <div class="container2" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;none&#39;" class="cancelbtn">Cancel</button>
                <span class="psw"><a class="active" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:auto; border-radius: 5px; cursor: pointer;">Signup</a></span>
                
                <span class="psw" style="margin-right: 11px;"><a href="">Forgot  password?</a></span>
              </div>
            </form>
          </div>


          <!-- login modal end  -->

          {{-- admin login --}}
          <div id="id03" class="modal">
  
            <form class="modal-content animate" action="adminlogin" method="POST" style="
            width: 400px;
          ">
               @csrf
              <div class="imgcontainer">
                <span onclick="document.getElementById(&#39;id03&#39;).style.display=&#39;none&#39;" class="close" title="Close Modal">×</span>
                <p style="font-size: 22px;"><i class="fa fa-fw fa-user"></i>Admin Login </p>
                <hr>
              </div>
          
              <div class="container2">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="user_name" >
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" >
                  
                <button type="submit">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>
          
              <div class="container2" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;none&#39;" class="cancelbtn">Cancel</button>
                
                
              </div>
            </form>
          </div>


    
          {{-- student signup model --}}
          <div id="id02" class="modal">
  
            <form class="modal-content animate" action="users" method="post" style="
            width: 400px;
          ">
              @csrf
              <div class="imgcontainer">
                <span onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;none&#39;" class="close" title="Close Modal">×</span>
                <p style="font-size: 22px;">Signup </p>
                <hr>
              </div>
          
              <div class="container2">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="user_name" >
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" >
                  
                <button type="submit">Signup</button>
                
              </div>
          
              <div class="container2" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;none&#39;" class="cancelbtn">Cancel</button>
               
              </div>
            </form>
          </div>

          {{-- signup end --}}


    <footer>
        <p>Copyright &copy; 2019, Drek International School</p>
        <div class="socials">
            <div class="media">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <a href="#" class="fa fa-facebook"></a>
                <p>DrekInternationalSchool</p>
                <a href="#" class="fa fa-twitter"></a>
                <p>DrekInternationalSchool</p>
                <a href="#" class="fa fa-instagram"></a>
                <p>@_.DrekInternationalSchool</p>
                <a href="#" class="fa fa-skype"></a>
            </div>
        </div>
    </footer>

    
        <script>
       var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }

        function showDivs(n) {
         var i;
         var x = document.getElementsByClassName("mySlides");
         if (n > x.length) {slideIndex = 1}
         if (n < 1) {slideIndex = x.length} ;
         for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
         }
         x[slideIndex-1].style.display = "block";
        }
        var slideIndex = 0;
        carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
        }
        </script>

        {{-- LOGIN MODEL SCRIPT --}}
        
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
    <script>
        // Get the modal
        var modal = document.getElementById('id02');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>

{{-- admin modal js --}}

<script>
  // Get the modal
  var modal = document.getElementById('id03');
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>
        {{-- bootstrap js --}}
        <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </body>
</html>