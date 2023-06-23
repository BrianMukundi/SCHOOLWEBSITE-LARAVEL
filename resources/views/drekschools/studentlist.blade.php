
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    </head>

    <body>



        <h3  style="margin-left:500px"> New Applicants list</h3><br>
        
        
        
    <table class="table">
      
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Application Level</th>
                <th>Guardian Name</th>
                <th>Guardian Phone Number</th>
                <th>Applied At</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            {{-- fetch data --}}
          
            @foreach ($newstudents as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->student_fname }}</td>
                <td>{{ $student->student_mname }}</td>
                <td>{{ $student->student_lname }}</td>
                <td>{{ $student->student_email }}</td>
                <td>{{ $student->student_tel }}</td>
                <td>{{ $student->student_gender }}</td>
                <td>{{ $student->student_dob }}</td>
                <td>{{ $student->application_level }}</td>
                <td>{{ $student->guardian_name }}</td>
                <td>{{ $student->guardian_tel }}</td>
                <td>{{ $student->created_at }}</td>
                <td>
                    <button class="btn btn-success" >Accept</button>
                    {{-- <button class="btn btn-danger">Reject</button> --}}
                </td>
            </tr>
           @endforeach
        </tbody>
    
    
      </table>
    </body>
</html>