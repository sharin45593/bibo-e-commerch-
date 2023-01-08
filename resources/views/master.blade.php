<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link  href="{{ asset('fontant/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('fontant/css/style.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<body>

         <nav class="navbar  navbar-expand-lg  bg-dark ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Panda</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                    <a class="nav-link active"  href="{{ route('about')}}">ABOUT ME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="{{ route('media')}}">MEDIA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="{{ route('contact')}}">CONTACR US</a>
                  </li>

                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
         <!--header end-->

        @yield('contant')
         <!--footer start-->

    <footer>
        <div class=" bg-dark text-white mt-4 p-4 text-center">
            Panda &copy; all right reserve {{carbon\carbon::now()-> FORMAT('Y')}};
        </div>
    </footer>

</body>
</html>
