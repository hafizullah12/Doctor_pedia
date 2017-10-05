<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
  

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <form method="POST" action="/doctors/create" class="form-control-range">
             {{ csrf_field() }}
          <div class="form-group">
            <label class="col-sm-2">Name</label>
            <div class="col-sm-10">
           <input type="text" name="name" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label for="specialist" class="col-sm-2 control-label">Specialist</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  placeholder="write your degignation" name="specialist">
            </div>
          </div>
            <div class="form-group">
            <label for="location" class="col-sm-2 control-label">Location</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  placeholder="write your location" name="location">
            </div>
          </div>
           <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Phone No:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  placeholder="write your location" name="phone">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10"> 
              <input type="submit" value="Regiter" class="btn btn-success float-right"></div>
            </div>
         
        </form>
      </div>
    </div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>