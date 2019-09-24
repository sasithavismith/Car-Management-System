<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Car Application</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
</head>
<body>
  <div class="container-fluid">
      <div class="jumbotron jumbotron-fluid bg-danger p-1">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <h1 class="display-4 text-white">Cars</h1>
                      <p class="leade text-white">Newest Car in here...</p>
                  </div>
                  <div class="col-md-6">
                      <img src="img/1.jpg" alt="car">
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
               
              <form action="/create" method="post">
                {{csrf_field()}}
                  <div class="row form-group">
                      <div class="col-md-12">
                          <label for="" >Make:</label>
                          <input type="text" name="make" class="form-control" required>
                      </div>
                      <div class="col-md-12">
                        <label for="" >Model:</label>
                        <input type="text" name="model" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="" >Produced on</label>:</label>
                        <input type="date" name="Produced_on" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success w-50 float-right">Create</button>
                    </div>
                </div>
              </form>
          </div>
          <div class="col-md-6">
              <table class="table  table-dark table-striped table-hover">
                  <tr>
                  <th>ID</th>
                  <th>Make</th>
                  <th>Model</th>
                  <th>Produced on</th>
                  </tr>
  @foreach($CAR as $cars)
  <tr>
  <td>{{$cars->id}}</td>
  <td>{{$cars->make}}</td>
  <td>{{$cars->model}}</td>
  <td>{{$cars->produced_on}}</td>
  </tr>
  @endforeach 
              </table>
          </div>
      </div>
  </div>  
</body>
</html>