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
    <h1 class="text-center">Edit Apartment</h1>
    <form class="pt-4" action="" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" value="{{$edit->name}}" class="form-control" name="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sel1">Type: </label>
                    <input type="text" value="{{$edit->address}}" class="form-control" name="address">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Price:</label>
                    <input type="text" value="{{$edit->price}}" class="form-control" name="price">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>General:</label>
                    <input type="text" value="{{$edit->general}}" class="form-control" name="general">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" value="{{$edit->description}}" class="form-control" name="description">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Status:</label>
                    <input type="text" value="{{$edit->status}}" class="form-control" name="status">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Thumbnail:</label>
                    <input type="text" value="{{$edit->thumbnail}}" class="form-control" name="thumbnail">
                </div>
            </div>
        </div>
        <div class="row">
            <button class="btn btn-primary pt-4">Submit</button>
        </div>

    </form>
</div>
</body>
</html>

