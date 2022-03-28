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
                <h2>Add Shift:</h2>
                <div class="col-md-4">
                    <form action="{{route('shift.update')}}" method="POST">
                        @csrf
                        <input type="hidden" name="shift_id" value="{{$shift->id}}">
                        <div class="mb-3">
                          <label class="form-label">Shift Name:</label>
                          <input type="text" name="shift_name" value="{{$shift->shift_name}}" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Class Name:</label>
                            <select name="class_id"class="form-control">
                                <option value="" selected disabled>Select</option>
                                @foreach ($classses as $row)
                                <option value="{{$row->id}}" {{$row->id==$shift->class_id ? 'selected':''}}>{{$row->class_name}}</option>

                                @endforeach

                            </select>
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Section Name:</label>
                            <select name="section_id"class="form-control">
                                <option value="" selected disabled>Select</option>
                                @foreach ($sections as $row)
                                <option value="{{$row->id}}" {{$row->id==$shift->section_id ? 'selected':''}}>{{$row->section_name}}</option>

                                @endforeach

                            </select>
                          </div>


                        <button type="submit" class="btn btn-primary">update</button>
                      </form>
                      <br>
                      <a href="{{url('/')}}" class="btn btn-warning">Home</a>

                </div>

            </div>
        </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
