<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

</head>

<body>
    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container">

            <h2>Edit form</h2>
            <form action="{{ route('blog.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">title:</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title"
                        value="{{ $data->title }}">
                </div>

                <div class="form-group">
                    <label for="description">description</label>
                    <textarea type="text" class="form-control" id="description" placeholder="Enter description"
                        name="description" value="{{ $data->title }}"></textarea>
                </div>

                <div class="form-group">
                    <label for="image"> image:</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter image" name="image"
                        value="{{ $data->title }}">
                </div>
                <br>
                {{-- <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    @foreach ($category as $d)

                    <li><a href="#">{{ $d->name }}</a></li>
                    @endforeach
                </ul>
              </div> --}}
                {{--
               <label for="cars">Choose category:</label>
              <select name="cars" id="cars">
                @foreach ($category as $d)



                <option value="volvo">{{ $d->name }}</option>
                @endforeach
              </select> --}}
                <!--dropdown-->
                {{-- <label for="cars">Choose a category:</label>
              <select name="category_id" id="cars">

                @foreach ($category as $d)
                <option value="{{$d->id}}">{{ $d->name }}</option>
                @endforeach
              </select> --}}



                <div class="mb-3 col-md-6">
                    <label class="form-label" for="category_id">Choose a category<span class="text-danger">
                            *</span></label>
                    <select class="form-control" name="category_id">
                        <option selected="" disabled="">Choose a category</option>
                        @foreach ($category as $d)
                            <option {{ $d['id'] == $data['category_id'] ? 'selected' : '' }}
                                value="{{ $d['id'] }}">{{ $d['name'] }}</option>
                        @endforeach
                    </select>

                </div>





                <!--enddropdown-->
                {{-- <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Choose Category
                </button>
                <div class="dropdown-menu">
                    @foreach ($category as $d)
                  <a class="dropdown-item" href="{{$d->id}}">{{$d->name}}</a>
                   <div class="dropdown-divider"></div>
                   @endforeach
                </div>
              </div>
              <br>
              <br> --}}
                <br>
                <button type="submit" class="btn btn-default">update</button>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#description' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
            </form>
        </div>


</body>

</html>
