

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
    <h2>Hello {{auth()->user()->name}}!</h2>
        </div>
        <div class="col-lg-6 ">
    <a href="logout">Logout</a>
        </div>

    </div>
  <p class="mt-3 float-left">Student Details</p>
  <a href="addstudents" class="mt-3 btn btn-primary float-right">Add Students</a>

  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>S.no</th>
          <th>Student Name</th>
          <th>Gender</th>
          <th>Phone Number</th>
          <th>Email</th>
          <th>Grade</th>

          <th>Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($studentdetail as $stu )

        <tr>


          <td> {{$stu->id}} </td>
          <td>{{$stu->studentname}}</td>
          <td>{{$stu->gender}}</td>
          <td>{{$stu->phone}}</td>
          <td>{{$stu->email}}</td>
          <td>{{$stu->grade}}</td>

          <td><a href="/{{$stu->id}}/view">view</a> <a href="/{{$stu->id}}/edit">Edit</a> <a href="/{{$stu->id}}/delete">Delete</a> </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

</body>
</html>



