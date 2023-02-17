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

        <h2> Table</h2>
        <hr>

        <button><a href="{{ route('category.create') }}">create</a></button>
        <br>
        <br>
        <!--message-->
        @if (session()->has('msg'))
            <div class="alert alert-success alert-dismissable">
                {{ session()->get('msg') }}
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            </div>
        @endif
        <!--message-->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Acton</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->name }}</td>
                        <td><a href="{{ route('category.edit', $d->id) }}"><button type="button"
                                    class="btn btn-success">edit</button>
                                <a href="{{ route('category.delete', $d->id) }}"><button type="button"
                                        class="btn btn-danger">delete</button></td></a>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
