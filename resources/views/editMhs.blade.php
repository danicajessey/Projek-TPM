<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="p-5">
        <h1 class="text-center">Edit student attendance</h1>
        <form action="{{route('update', $mhs->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('patch')
          <div class="mb-3">
            <label for="" class="form-label">NIM</label>
            <input value="{{$mhs->nim}}" type="text" class="form-control" id="" name="nim">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input value="{{$mhs->name}}"type="text" class="form-control" id="" name="name">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Subjek</label>
            <input value="{{$mhs->subjek}}"type="text" class="form-control" id="" name="subjek">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Class</label>
            <input value="{{$mhs->class}}"type="text" class="form-control" id="" name="class">
          </div>
          <div class="mb-3">
              <label for="" class="form-label">Date</label>
              <input value="{{$mhs->dateSubjek}}" type="date" class="form-control" id="" name="dateSubjek">
          </div>
        <div class="mb-3">
          <label for="" class="form-label">Attendance</label>
          <input value="{{$mhs->attendance}}" class="form-check-input" type="radio" name="attendance" id="" value="" checked>
      </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="attendance" id="" value="Present"checked>
          <label class="form-check-label" for="Present">
            Present
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="attendance" id="" value="Absent">
          <label class="form-check-label" for="Absent">
            Absent
          </label>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input type="File" class="form-control" id="" name="image">
        </div>
        @error('image')
        <div class="alert alert-danger" role="alert">{{$message}}</div>
       @enderror
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
