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
    <table class="table table-dark table-hover">
        <thead>
        <form id="form-filter">
            @csrf
            <div class="col-md-3 form-group">
                <input type="text" placeholder="Search..." class="search-int form-control" id="search" name="search">
            </div>
        </form>
        <tr>
            <th>Book Id</th>
            <th>Author Id</th>
            <th>Title</th>
            <th>ISBN</th>
            <th>Pub Year</th>
            <th>Available</th>

        </tr>
        </thead>
        <tbody>
        @foreach($list as $library)
            <tr>
                <td>{{$library->bookId}}</td>
                <td>{{$library->authorId}}</td>
                <td>{{$library->title}}</td>
                <td>{{$library->ISBN}}</td>
                <td>{{$library->pub_year}}</td>
                <td>@if($library->available == 1)
                        <p class="text-success">Còn Sach</p>
                    @else
                        <p class="text-danger">Hết Sach</p>
                    @endif
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
</body>
</html>
