

<!DOCTYPE html>
<html lang="en">
@include ('layouts.header')
<body>

<div class="container mt-3">


  <h4 class="mt-3 float-left">Student Details</h4>
  <a href="{{url('home')}}" class="btn btn-secondary mt-3 mb-3">Go Back</a>

  <div class="table-responsive">
    <table class="table table-bordered">

      <tbody>



        <tr>


          <td>Name</td>
          <td> {{$studentdetail->studentname}} </td>
        </tr>

<tr>
          <td>Gender</td>
          <td>{{$studentdetail->gender}}</td>
        </tr>

<tr>
          <td>Phone</td>
          <td>{{$studentdetail->phone}}</td>
        </tr>

          <tr>
          <td>Gmail</td>
          <td>{{$studentdetail->email}}</td>
        </tr>

          <tr>
          <td>Grade</td>
          <td>{{$studentdetail->grade}}</td>



        </tr>

      </tbody>
    </table>
  </div>
</div>

</body>
</html>



