<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div class="conatainer">
    <div class="row" style="margin-left: 5px; margin-top:5px;">
        <div class="col-md-4">
            <h2>{{Session::get('sms')}}</h2>
            <form action="{{route('store.section')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label  class="form-label">Class name</label>
                    <select  name="class_id" class="form-select">
                        <option value="" selected disabled>Select</option>
                        @foreach ($classes as $row)


                       <option value="{{$row->id}}">{{$row->class_name}}</option>


                    @endforeach
                    </select>
                  </div>

                <div class="mb-3">
                  <label  class="form-label">Section name</label>
                  <input type="text" name="section_name" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
                <a href="{{url('/')}}" class="btn btn-success">Home</a>
              </form>


        </div>{{--col md 4--}}

        <div class="col-md-8">
            <h2>{{Session::get('message')}}</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Class name</th>
                        <td>Section name</td>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($sections as $row)
                   <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row['classses']['class_name']}}</td>
                      <td>{{$row->section_name}}</td>
                      <td>
                          <a href="{{route('edit.section', $row->id)}}" class="btn btn-info">Edit</a>
                          <a href="{{route('delete.section',$row->id)}}" class="btn btn-danger">Delete</a>
                      </td>
                   </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>















<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
