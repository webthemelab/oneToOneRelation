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
                    <form action="{{route('update.class')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Name:</label>
                          <input type="text" name="class_name" value="{{$classs->class_name}}" class="form-control">
                          <input type="hidden" name="id" value="{{$classs->id}}">
                        </div>

                        <button type="submit" class="btn btn-primary">update</button>
                      </form>
                </div>
            </div>
        </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
