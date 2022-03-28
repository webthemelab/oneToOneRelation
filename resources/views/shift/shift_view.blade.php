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
            <h2>View Shit:</h2>
            <h2>{{Session::get('sms')}}</h2>
            <div class="row">

                <div class="col-md-8">
                    <a href="{{route('home')}}" class="btn btn-secondary">Home</a>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Class name</th>
                            <th>Section name</th>
                            <th>Shift name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($shifts as $row)
                          <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row['classses']['class_name']}}</td>
                            <td>{{$row['sections']['section_name']}}</td>
                            <td>{{$row->shift_name}}</td>
                            <td>
                                <a href="{{route('edit.shift', $row->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('delete.shift', $row->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete???');">Delete</a>
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
