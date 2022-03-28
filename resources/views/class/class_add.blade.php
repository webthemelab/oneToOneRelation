<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Class Add</title>
</head>
<body>
        <div class="container">
            <h2>{{Session::get('sms')}}</h2>
            <div class="row">
                <div class="col-md-4">
                    <form action="{{route('add.class')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Name:</label>
                          <input type="text" name="class_name"class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                      </form>
                      <a href="{{route('add.section')}}" class="btn btn-success">Add Section</a>
                      <a href="{{route('add.shift')}}" class="btn btn-secondary">Add Shift</a>
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Class name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($classs as $row)
                          <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->class_name}}</td>
                            <td>
                                <a href="{{route('edit.class', $row->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('delete.class', $row->id)}}"  class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
