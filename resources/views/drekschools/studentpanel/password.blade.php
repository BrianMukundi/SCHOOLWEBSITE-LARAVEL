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
        header{position: relative;}
        .change-password-container{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 90vh;
        }
        .change-password-container form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: var(--border-radius-2);
            padding : 3.5rem;
            background-color: var(--color-white);
            box-shadow: var(--box-shadow);
            width: 95%;
            max-width: 32rem;
        }
        .change-password-container form:hover{box-shadow: none;}
        .change-password-container form input[type=password]{
            border: none;
            outline: none;
            border: 1px solid var(--color-light);
            background: transparent;
            height: 2rem;
            width: 100%;
            padding: 0 .5rem;
        }
        .change-password-container form .box{
            padding: .5rem 0;
        }
        .change-password-container form .box p{
            line-height: 2;
        }
        .change-password-container form h2+p{margin: .4rem 0 1.2rem 0;} 
        .btn{
            background: none;
            border: none;
            border: 2px solid var(--color-primary) !important;
            border-radius: var(--border-radius-1);
            padding: .5rem 1rem;
            color: var(--color-white);
            background-color: var(--color-primary);
            cursor: pointer;
            margin: 1rem 1.5rem 1rem 0;
            margin-top: 1.5rem;
        }
        .btn:hover{
            color: var(--color-primary);
            background-color: transparent;
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
            <a href="/exam">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Examination</h3>
            </a>
            <a href="/password" class="active">
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

    <div class="change-password-container">
        <form action="">
            <h2>Create new password</h2>
            <p class="text-muted">Your new password must be different from previous used passwords.</p>
            <div class="box">
                <p class="text-muted">Current Password</p>
                <input type="password" id="currentpass">
            </div>
            <div class="box">
                <p class="text-muted">New Password</p>
                <input type="password" id="newpass">
            </div>
            <div class="box">
                <p class="text-muted">Confirm Password</p>
                <input type="password" id="confirmpass">
            </div>
            <div class="button">
                <input type="submit" value="Save" class="btn">
                <a href="d.html" class="text-muted">Cancel</a>
            </div>
            <a href="#"><p>Forget password?</p></a>
        </form>    
    </div>

</body>

<script src="js/d.js"></script>

</html>