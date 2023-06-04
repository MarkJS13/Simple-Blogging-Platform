<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/index.js') }}" defer > </script>
    <title>Blog Post</title>
</head>
<body>

    <div class="add-form">
        <h1> Create a new blogpost </h1>

        <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div>
                <label for=""> Title: </label>
                <input type="text" name="title" value="{{ $post->title }}">
            </div>
            
            <div>
                <label for=""> Subtitle: </label>
                <input type="text" name="subtitle" value="{{ $post->subtitle }}">
            </div>
            
            <div>
                <label for=""> Content: </label>
                <textarea name="body"> {{ $post->body }} </textarea> 
            </div>

            <div>
                <label for=""> Minutes To Read </label>
                <input type="number" min="1" name="min_to_read" value="{{ $post->min_to_read }}">
            </div>
            
            <div>
                <button type="submit"> Save Changes </button>
            </div> 
        </form>
    </div>

    @if ($errors->any())
    <div class="alert alert-success">
        <h1>Something is wrong....</h1>
    @foreach ($errors->all() as $error)
    <ul>
        <p class="display-error"> {{ $error }}</p>
    </ul>

    @endforeach
    </div>
    @endif
    
    
</body>
</html>