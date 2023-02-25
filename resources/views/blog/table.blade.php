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
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="container">

        <h2> Blog Table</h2>
        <hr>
        <a href="{{ route('blog.create') }}"><button type="button" class="btn btn-primary">create</button></a>
        <br>
        <br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>title</th>
                    <th>description</th>
                    <th>image</th>
                    <th>category name</th>
                    <th>action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->title }}</td>
                        <td>{{ $d->description }}</td>
                        <td><img src="{{ asset('uploads/' . $d->image) }}"width="50px"height="50px" alt="">
                        </td>

                        <!--relation-->
                        <td>{{ $d->category->name }}</td>
                        <!--relation-->


<td><a href="{{ route('blog.edit', $d->id) }}"> <button class="btn btn-success">edit</button></a>
    <a href="{{ route('blog.delete', $d->id) }}"> <button class="btn btn-danger">Delete</button></a></td>


                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$data->links()}}
    </div>

</body>

</html>
