<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student Crud Project</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('student.index') }}">Student <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('student.create') }}">New Student</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container">
        <form action="{{ route('student.update', $student_info->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
            <div class="form-group row mt-3">
              <label for="colFormLabel" class="col-sm-2 ">Full Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="colFormLabel" name='name' placeholder="Student name" value="{{$student_info->name}}">
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="colFormLabel" class="col-sm-2 ">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="" name="email" value="{{$student_info->email}}">
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="colFormLabel" class="col-sm-2 ">Phone</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="colFormLabel" placeholder="" name="phone" value="{{$student_info->phone}}">
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="colFormLabel" class="col-sm-2 ">Gender</label>
              <div class="col-sm-10">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male" {{ ($student_info->gender=="Male")? "checked" : "" }}>
                <label class="form-check-label" for="flexRadioDefault1" >
                    Male
                </label>
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Female" {{ ($student_info->gender=="Female")? "checked" : "" }}>
                <label class="form-check-label" for="flexRadioDefault1">
                   Female
                </label>
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="exampleFormControlSelect1" class="col-sm-2">Class select</label>
              <div class="col-sm-10">
                <select class="form-control" id="exampleFormControlSelect1" name="class">
                    <option>Select Class</option>
                    <option value="1" {{ ($student_info->class=="1")? "selected" : "" }}>1</option>
                    <option value="2" {{ ($student_info->class=="2")? "selected" : "" }}>2</option>
                    <option value="3" {{ ($student_info->class=="3")? "selected" : "" }}>3</option>
                    <option value="4" {{ ($student_info->class=="4")? "selected" : "" }}>4</option>
                    <option value="5" {{ ($student_info->class=="5")? "selected" : "" }}>5</option>
                    <option value="6" {{ ($student_info->class=="6")? "selected" : "" }}>6</option>
                    <option value="7" {{ ($student_info->class=="7")? "selected" : "" }}>7</option>
                    <option value="8" {{ ($student_info->class=="8")? "selected" : "" }}>8</option>
                    <option value="9" {{ ($student_info->class=="9")? "selected" : "" }}>9</option>
                    <option value="10" {{ ($student_info->class=="10")? "selected" : "" }}>10</option>
                </select>
                </div>
            </div>
            <div class="form-group row mt-3">
              <label for="colFormLabel" class="col-sm-2 ">Education Year</label>
              <div class="col-sm-10">
                <input type="number" min="1900" max="2022" step="1" value="{{$student_info->education_year}}" name="education_year"/>
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="colFormLabel" class="col-sm-2 ">Photo</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="colFormLabel" placeholder="" name="photo">
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="colFormLabel" class="col-sm-2 ">Address</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"> {{ $student_info->address }}</textarea>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>