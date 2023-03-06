<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>


</head>

<body>

    <div class="container">
        {{-- validation --}}
        @if (count($errors) > 0)
        <div class = "alert alert-danger">
           <ul>
              @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
              @endforeach
           </ul>
        </div>
      @endif
      {{-- validation --}}
        <h2>Blog form</h2>
        <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">title:</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{old('title')}}">
            </div>

            <div class="form-group">
                <label for="description">description</label>
                <textarea type="text" class="form-control" id="description" placeholder="Enter description"
                    name="description" value="{{old('description')}}"></textarea>
            </div>

            <div class="form-group">
                <label for="image"> image:</label>
                <input type="file" class="form-control" id="image" placeholder="Enter image" name="image" value="">
            </div>



            <br>
            {{-- <label for="cars">Choose a category:</label>
            <select name="category_id" id="cars">

              @foreach ($category as $d)
              <option value="{{$d->id}}">{{ $d->name }}</option>
              @endforeach
            </select> --}}
            <!--dropdown-->
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                    @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
              </div>
              <!--enddropdown-->
            <button type="submit" class="btn btn-default">Submit</button>
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
