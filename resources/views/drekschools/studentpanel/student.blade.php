




<!DOCTYPE html>
<html>
<head>
  <title>Student Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 20px;
    }

    .header {
      background-color: #333;
      color: #fff;
      padding: 20px;
    }

    h1 {
      margin: 0;
    }

    .content {
      background-color: #fff;
      padding: 20px;
      margin-top: 20px;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }

    .student-info {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .student-info img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin-right: 20px;
    }

    .student-info h2 {
      margin: 0;
    }

    .course-list {
      list-style: none;
      padding: 0;
    }

    .course-list li {
      border-bottom: 1px solid #ccc;
      padding: 10px 0;
      display: flex;
      justify-content: space-between;
    }

    .course-list li:last-child {
      border-bottom: none;
    }

    .course-list li span {
      color: #888;
    }

    .course-list li a {
      text-decoration: none;
      color: #333;
      transition: color 0.3s;
    }

    .course-list li a:hover {
      color: #4CAF50;
    }
  </style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Student Dashboard</h1>
    </div>
{{-- navbar --}}
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Drekschools</a>
        </div>
        <ul class="nav navbar-nav">
          
          
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"> {{Session::get('user')['user_name']}} <span class="glyphicon glyphicon-user">
          <li><a href="logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </nav>

    {{-- nav end --}}
    <div class="content">
      <div class="student-info">
        {{-- <img src="student-avatar.jpg" alt="Student Avatar"> --}}
        <h2>Hello ,{{Session::get('user')['user_name']}}  </h2>
      </div>
      <h3></h3>
      <ul class="course-list">
        <li>
          <a href="#">Status</a>
          <span>in session</span>
        </li>
        <li>
          <a href="#">Reg No.</a>
          <span>112/2023</span>
        </li>
        <li>
          <a href="#">Level.</a>
          <span>University</span>
        </li>
        <li>
          <a href="#">Reg No.</a>
          <span>112/2023</span>
        </li>
        <li>
          <a href="#">Programme</a>
          <span>IT</span>
        </li>
        <li>
          <a href="#">Year.</a>
          <span>Year 2 term 3</span>
        </li>
      </ul>
    </div>
    {{-- navbar 2 --}}
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Services</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="#notices"><a href="#">Notices</a></li>
          <li><a href="/fee">Fees statement</a></li>
          <li><a href="#">Examinations</a></li>
          <li><a href="#">Classmates</a></li>
        </ul>
      </div>
    </nav>
  <div id="notices">
    <p>YOUR NOTICES</p>
  </div>


  </div>

  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>
