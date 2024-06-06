<html>
   @include('layouts.header')
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-3 bg-primary mt-4" >
                    <h2>Add Student Details </h2>

                    <form method="POST" action="studentdetail">
                        <div class="form-group">
                            <label for="">Student Name <input class="form-control" type="text" name="studentname"> </label>
                        </div>

                        <div class="form-group">
                            <label for="">Email <input class="form-control" type="email" name="email"> </label>
                        </div>

                        <div class="form-group">
                            <label for="">Phone  <input class="form-control" type="text" name="phone"> </label>
                        </div>

                        <div class="form-group">
                            <label for="">Gender <input class="form-control" type="text" name="gender"> </label>
                        </div>

                        <div class="form-group">
                            <label for="">Grade <input class="form-control" type="text" name="grade"> </label>
                        </div>



                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success" value="Add details">
                        </div>
                        @csrf
                    </form>
                </div>
            </div>


        </div>
    </body>
</html>


