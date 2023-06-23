<!DOCTYPE html>
<html>
<head>
    <title>School Management Admin Panel</title>
    {{-- <link rel="stylesheet" type="text/css" href="style.css"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
<style>

    /* Style the sidebar - fixed full height */
.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  padding-top: 16px;
  border: #333;
}

/* Style sidebar links */
.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #090909;
  display: block;
}

/* Style links on mouse-over */
.sidebar a:hover {
  color: #f90d0d;
}

/* Style the main content */
.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

/* Add media queries for small screens (when the height of the screen is less than 450px, add a smaller padding and font-size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
    
    
    <style>

        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

nav {
    background-color: #f2f2f2;
    border-bottom: 1px solid #ccc;
    padding: 10px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
}

nav ul li a {
    color: #333;
    text-decoration: none;
    padding: 10px;
}

.dashboard-stats {
    display: flex;
    justify-content: space-between;
}

.stat-card {
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
    width: 30%;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}


.bottom{
    background-color: rgb(0, 255, 208);
    
}

.icon{
    margin-left: 50px;
}
    </style>
</head>
<body>
  
    <div class="main">
    <header>
        <h1>Drekschools</h1>
    </header>
    
   

    <!-- The sidebar -->
<div class="sidebar">
    <img class="icon" src="/images/icon.jpeg" width="50px" height="50px">
     <a href="#" style="margin-left: 35px"> {{Session::get('admin')['user_name']}} 
     <br><br>
     {{-- <a href="#"> {{Session::get('user')['user_name']}} <span class="glyphicon glyphicon-user"> --}}
    <a href="#home"><i class="fa fa-fw fa-home"></i> Dashboard</a>
    <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
    <a href="#clients"><i class="fa fa-fw fa-user"></i> Students</a>
    <a href="drekschools.studentlist"><i class="fa fa-fw fa-user"></i> New</a>
    <a href="#clients"><i class="fa fa-fw fa-user"></i> Teachers</a>
    <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Courses</a>
    <a href="#clients"><i class="fa fa-fw fa-wrench"></i> settings</a>
    <br><br><br><br><br>
    {{-- bottom --}}
    
    
    
    <a class="bottom" href="logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
  

</div>

    

   
        <h2>Dashboard</h2>
        <div class="dashboard-stats">
            <div class="stat-card">
                <h3>Total Students</h3>
                <p>500</p>
            </div>
            <div class="stat-card">
                <h3>Total Teachers</h3>
                <p>30</p>
            </div>
            <div class="stat-card">
                <h3>Total Courses</h3>
                <p>20</p>
            </div>
        </div>
    

</div>
   

    <script>
        
    </script>
</body>
</html>
