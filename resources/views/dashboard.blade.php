


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

    <x-app-layout>

    <div class="dashboard">


        <section class="post-tiles">
            <ul>
                @foreach ($posts as $post)

                <li>
                    <span class="title-span"> {{ $post->title }} </span>
                    <span class="date-span">{{ $post->created_at }} </span>
                    <span class="view"><a href="{{ route('post.show', $post->id) }}"> View details </a></span>
                </li>
                                    
                @endforeach

            </ul>
        </section>

        <div class="modify">
            <button> <a href="{{ route('post.create') }}"> Add</a>  </button>
        </div>

    </div>

</x-app-layout>
    
</body>
</html>