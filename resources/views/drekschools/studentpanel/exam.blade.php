<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="C:\school_website\Drekschools_website\logo.png">
    <link rel="stylesheet" href="css/d.css">

    <style>
        body{overflow: hidden;}
        header{position: relative;}
        .exam{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 80vh;
            width: 80%;
            margin: auto;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="C:\school_website\Drekschools_website\logo.png" alt="">
            <h2>D<span class="danger">I</span>S</h2>
        </div>
        <div class="navbar">
            <a href="/d">
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="/timetable" onclick="timetableAll()">
                <span class="material-icons-sharp">today</span>
                <h3>Time Table</h3>
            </a> 
            <a href="/exam" class="active">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Examination</h3>
            </a>
            <a href="/password">
                <span class="material-icons-sharp">password</span>
                <h3>Change Password</h3>
            </a>
            <a href="logout">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
        <div id="profile-btn" style="display: none;">
            <span class="material-icons-sharp">person</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>
    </header>

    <main>
        <div class="exam timetable">
            <h2>Exam Available</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Subject</th>
                        <th>Room no.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>13 May 2023</td>
                        <td>09-12 AM</td>
                        <td>CS200</td>
                        <td>38-718</td>
                    </tr>
                    <tr>
                        <td>16 May 2023</td>
                        <td>09-12 AM</td>
                        <td>DBMS130</td>
                        <td>38-718</td>
                    </tr>
                    <tr>
                        <td>18 May 2023</td>
                        <td>09-12 AM</td>
                        <td>MTH166</td>
                        <td>38-718</td>
                    </tr>
                    <tr>
                        <td>20 May 2023</td>
                        <td>09-12 AM</td>
                        <td>NS200</td>
                        <td>38-718</td>
                    </tr>
                    <tr>
                        <td>23 May 2023</td>
                        <td>09-12 AM</td>
                        <td>CS849</td>
                        <td>38-718</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    </main>

</body>

<script src="js/d.js"></script>
</html>