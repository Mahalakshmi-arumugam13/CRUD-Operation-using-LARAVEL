<html>
   @include('layouts.header')
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-3 bg-primary mt-4" >
                    <h2>Add Student Details </h2>

                    <form method="POST" action="editemp">

                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Student Name <input class="form-control" type="text" name="studentname" value="{{$studentdetail->studentname}}"> </label>
                        </div>

                        <div class="form-group">
                            <label for="">Email <input class="form-control" type="email" name="email" value="{{$studentdetail->email}}"> </label>
                        </div>

                        <div class="form-group">
                            <label for="">Phone  <input class="form-control" type="text" name="phone" value="{{$studentdetail->phone}}"> </label>
                        </div>

                        <div class="form-group">
                            <label for="">Gender <input class="form-control" type="text" name="gender" value="{{$studentdetail->gender}}"> </label>
                        </div>

                        <div class="form-group">
                            <label for="">Grade <input class="form-control" type="text" name="grade" value="{{$studentdetail->grade}}"> </label>
                        </div>



                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success" value="Update details">
                            <a href="{{url('home')}}" class="btn btn-secondary mt-3 mb-3">Go Back</a>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>


        </div>
    </body>
</html>


