<!DOCTYPE html>
<html lang ="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet", href="Admission.css">
    <title>Admission Form</title>
    <style>
        body {
           background-image: url(/images/bg12.jpg);
           background-repeat: no-repeat;
           background-size: cover;
        }

        /* new */

        html {
    background: rgba(233, 225, 225, 0.479);
}
.logo img{
    height: 80px;
}
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: auto;
    width: 75vw;
    background: url(https://www.shutterstock.com/image-vector/back-school-set-different-signs-abstract-1453000499);
    padding: 25px;
}

.container h1 {
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(29, 50, 145);
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 5px;
}

.container h2 {
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(50, 14, 148);
    font-size: 25px;
    font-weight: bold;
    margin-top: 10px;
}

.form-wrapper {
    margin: 15px;
    width: 100%;
}

.form {
    width: 90%;
}

#studentimage {
    height: 80px;
    width: 80px;
    border-radius: 5px;
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(59, 55, 55);
    font-weight: bold;
}

p {
    font-family: Arial, Helvetica, sans-serif;
    color: Black;
    font-size: 17px;
}

.form-action {
    display: flex;
    margin: auto;
    align-items: center;
    font-family: Arial, Helvetica, Arial, Helvetica, sans-serif;
    width: 80%;
    font-weight: bold;
}

.form-action label {
    width: 150px;
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
}

.form-item input {
    margin: 5px 15px;
    height: 22px;
    width: 100%;
    font-size: 13px;
    font-weight: bold;
    border: 1px black solid;
    border-radius: 5px;
}

.form-item select {
    margin: 5px 0px;
    width: max-content;
}

.genders {
    display: flex;
    align-items: center;
    font-family: Arial, Helvetica, sans-serif;
    margin-left: 16px;
    font-size: 14px;
    font-weight: bold;
}

.genders input {
    width: 20px;
}

hr {
    margin-top: 15px;
    width: 80%;
}

h3 {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    text-align: center;
}
.same-perm{
    display: flex;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    text-align: center;
    font-size: 13px;
    margin: 5px 105px;
}

.register {
    margin: 25px;
    background: #287bb3;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    padding: 7px 20px;
    border-radius: 5px;
    color: #fbfbfb;
    border: 0;
    cursor: pointer;
}

.register:hover {
    color: #3a3636;
}

@media screen and (max-width: 640px) {
    .container {
        width: 90vw;
        padding: 10px 5px;
    }
    .form-item label {
        font-size: 14px;
        font-weight: bold;
    }
    .form-item input {
        margin: 5px 10px;
        font-size: 12px;
        font-weight: bold;
    }
    .genders {
        margin-left: 10px;
        font-size: 13px;
        font-weight: bold;
    }
    .genders input {
        width: 15px;
    }
    .same-perm{

    font-size: 13px;
    font-weight: bold;
    margin: 5px 50px;
}
    .register {
        margin: 25px;
        font-size: 15px;
        font-weight: bold;
        padding: 7px 10px;
    }
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

    </style>

    {{-- style for footer --}}

    <style>

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
  /* display: inline; */
}
.lastlast{
  display: flex;
  border: 3px solid #1b0f0f;
}

.topnav-right{
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
        <div class="topnav-right">
              
          <a class="active" onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;block&#39;" style="width:auto; border-radius: 5px; cursor: pointer;"></i>LOGIN</a>
          {{-- <a href="/login">LOGIN</a> --}}
          </div>
        <a href="/News">NEWS</a>
        <a href="/contacts">CONTACTS</a> 
    </div>
    <div class="container">
        <div class="logo">
            {{-- <img src="/images/dreklogo.jpeg" alt="logo"> --}}
        </div>
        <h1>DREK INTERNATIONAL SCHOOL</h1>
        <h2>STUDENT REGISTRATION FORM</h2>
        <hr>

        <div class="form-wrapper">
           
            <form action="applicants" method="post">
                
              @csrf
            
                <div class="form-item">
                  
                    {{-- <label for="username">STUDENT'S NAME:</label><br><br> --}}
                    <label for="student_fname">First Name:</label>
                    <input type="text" id="student_fname" name="student_fname" required>
                
                    <label for="student_mname">Middle Name:</label>
                    <input type="text" id="student_mname" name="student_mname">
                
                    <label for="student_lname">Last Name:</label>
                    <input type="text" id="student_lname" name="student_lname" required>
                
                    <label for="student_email">Email:</label>
                    <input type="email" id="student_email" name="student_email" required>
                
                    <label for="student_tel">Telephone:</label>
                    <input type="tel" id="student_tel" name="student_tel" required>
                
                    <label for="student_gender">Gender:</label>
                    <select id="student_gender" name="student_gender" required>
                      <option value="">Select</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                    </select>
                
                    <label for="student_dob">Date of Birth:</label>
                    <input type="date" id="student_dob" name="student_dob" required>
                
                    <label for="application_level">Application Level:</label>
                    <input type="text" id="application_level" name="application_level" required>
                
                    <label for="guardian_name">Guardian Name:</label>
                    <input type="text" id="guardian_name" name="guardian_name" required>
                
                    <label for="guardian_tel">Guardian Telephone:</label>
                    <input type="tel" id="guardian_tel" name="guardian_tel" required>
                
                    <button type="submit">Submit</button>
                
             </form>
        </div>
        
       

    </div>
    <

   

    {{-- footer --}}

     
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
            {{-- <a href="#" class="twitter"></a>
            <a href="#" class="linkedin"></a>
            <a href="#" class="facebook"></a>
            <a href="#" class="skype"></a>
            <a href="#" class="flickr"></a> --}}
            <h4 class="footertext">Copyright &copy; 2023 designed by Drek Schools</h4>
          </div>
        </section>
      </footer>

</body>

</html>