<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 style="text-align: center">Apartment form</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" placeholder="Name" name="name">
                        @error('name')
                        <div class="error-message alert-danger ">
                            *{{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control" placeholder="Address" name="address">
                        @error('address')
                        <div class="error-message alert-danger ">
                            *{{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Price:</label>
                        <input type="number" class="form-control" placeholder="Price" name="price">
                        @error('price')
                        <div class="error-message alert-danger ">
                            *{{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Status:</label>
                        <input type="number" class="form-control" placeholder="Status" name="status">
                        @error('general')
                        <div class="error-message alert-danger ">
                            *{{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>General:</label>
                        <input type="text" class="form-control" placeholder="General" name="general">
                        @error('description')
                        <div class="error-message alert-danger ">
                            *{{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Description:</label>
                        <input type="text" class="form-control" placeholder="description" name="description">
                        @error('thumbnail')
                        <div class="error-message alert-danger ">
                            *{{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label>Thumbnail:</label>
                    <input type="text" class="form-control" placeholder="Thumbnail" name="thumbnail">
                    @error('status')
                    <div class="error-message alert-danger ">
                        *{{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
</body>
</html>
