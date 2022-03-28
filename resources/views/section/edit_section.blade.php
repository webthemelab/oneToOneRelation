<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div class="conatainer">
    <div class="row" style="margin-left: 5px; margin-top:5px;">
        <div class="col-md-4">
            <h2>Edit Section:</h2>
            <form action="{{route('update.section')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$section->id}}">

                <div class="mb-3">
                    <label  class="form-label">Class name</label>
                    <select name="class_id" class="form-select">
                        <option value="" selected disabled>Select</option>
                        @foreach ($classes as $row)
                        <option value="{{$row->id}}" {{$row->id==$section->class_id? 'selected':''}}>{{$row->class_name}}</option>

                        @endforeach
                    </select>

                  </div>

                <div class="mb-3">
                  <label  class="form-label">Section name</label>
                  <input type="text" name="section_name" value="{{$section->section_name}}" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>

              </form>


        </div>{{--col md 4--}}
    </div>
</div>















<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
