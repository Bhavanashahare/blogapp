<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <h2>Edit</h2>
        <form action="{{ route('category.update', $data->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">category Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"
                    value="{{ $data->name }}">
<!--validation-->
                 @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <!--validation-->

            <button type="submit" class="btn btn-default">update</button>
        </form>
    </div>

</body>

</html>
