<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('customer/view')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-center">{{$title}}</h2>
        <form action="{{$url}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Enter Name" value="{{$customer->name??''}}">
                <small id="helpId" class="text-danger">
                    @error('name')
                    {{ $message}}
                    @enderror
                </small>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" id="" class="form-control" placeholder="Enter Email" value="{{$customer->name??''}}">
                <small id="helpId" class="text-danger">
                    @error('email')
                    {{ $message}}
                    @enderror
                </small>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" id="" class="form-control" placeholder="Enter Password" aria-describedby="helpId">
                <small id="helpId" class="text-danger">
                    @error('password')
                    {{ $message}}
                    @enderror
                </small>
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="text" name="password_confirmation" id="" class="form-control" placeholder="Enter Password" aria-describedby="helpId">
                <small id="helpId" class="text-danger">
                    @error('confirm_password')
                    {{ $message}}
                    @enderror
                </small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

</body>

</html>