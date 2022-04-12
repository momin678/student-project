<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student Crud Project</title>
    <style>
        img.fileImage{
            min-height: 200px;
            max-height: 200px;
            object-fit: contain;
        }
        p.fileName{
            white-space: nowrap;
            width: 150px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
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
              <a class="nav-link" href="#">Student <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">New Student</a>
            </li>
          </ul>
        </div>
      </nav>

    <!-- Optional JavaScript; choose one of the two! -->
    <section class="content">
        <div class="container-fluid">
            <div class="aiz-titlebar text-left mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">All Student</h1>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <a href="{{ route('student.create') }}" class="btn btn-primary">
                            <span>New Student</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card pt-2">
                <div class="row">
                    @foreach($students as  $student)
                    <div class="col-md-2 col-6">
                        <div class="card m-1">
                            <img class="card-img-top p-2 fileImage" src="{{asset('images/student-photo')}}/{{ $student->photo }}" >
                          <p class="fileName">{{$student->name}}</p>
                            <div class="btn-group btn-group-sm d-print-none"> 
                              <a href="{{ route('student.edit', $student->id) }}" class="btn btn-info border">Edit</a> 
                              <a href="{{ route('student-delete', $student->id) }}"  class="btn btn-primary border" >Delete</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div><!-- /.container-fluid -->
      </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>