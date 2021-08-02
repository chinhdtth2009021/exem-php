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
    <h1 style="text-align: center">List Apartment</h1>
    <table class="table table-dark table-hover">Product
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Price</th>
            <th>General</th>
            <th>Description</th>
            <th>Thumbnail</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $apartment)
            <tr>
                <td>{{$apartment->id}}</td>
                <td>{{$apartment->name}}</td>
                <td>{{$apartment->address}}</td>
                <td>{{$apartment->price}}$</td>
                <td>{{$apartment->general}}</td>
                <td>{{$apartment->description}}</td>
                <td><img src="{{$apartment->thumbnail}}" alt="" width="50px"></td>
                <td>{{$apartment->status}}</td>
                <td>
                    <a href="/apartment/edit/{{$apartment->id}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="/apartment/delete/{{$apartment->id}}"
                       onclick="return confirm('bạn chắc chắn muốn xóa chứ?')">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
</body>
</html>
