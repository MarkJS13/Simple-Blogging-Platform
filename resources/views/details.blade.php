<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        name="description"
        content="{{ $post->meta->meta_description ? $post->meta->meta_description : '' }}"
    >
    <meta
        name="keywords"
        content="{{ $post->meta->meta_keywords ? $post->meta->meta_keywords : '' }}"
    >
    <meta
        name="robot"
        content="{{ $post->meta->meta_robots ? $post->meta->meta_robots : '' }}"
    > 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/index.js') }}" defer > </script>
    <title>Blog Post</title>
</head>
<body>

    <div class="dashboard">
        <header>
            <div class="blogger-name">
                Blogger's Blogposts
            </div>

            <div>
                <span class="light-bulb material-symbols-outlined"> tips_and_updates </span>
            </div>


            <div class="logout">

                <span class="material-symbols-outlined">
                    logout
                </span>
            </div>
        </header>

        <div class="detail-box">
                <h1> {{ $post->title }} </h1>
                <h2> {{ $post->subtitle }} </h2>
                <h3> {{ $post->min_to_read }} </h3>
                <h3> Date Published: {{ $post->created_at }} </h3>

                <p>
                    {{ $post->body }}
                </p>

                
                <p>
                    Categories:
                    @foreach ($post->categories as $category)
                        {{ $category->title }}
                    @endforeach
                </p>
        </div>

        <div class="back">
            <span class="material-symbols-outlined"> <a href="{{ route('post.display') }}">keyboard_return</a> </span>
        </div>

        <div class="modify">
            <button type="submit"> <a href="{{ route('post.edit', $post->id) }}"> Edit </a> </button>
            
        </div>

        <div class="modify delete">
            <button type="submit"> Delete </button>
        </div>

        

    </div>

    <div class="modal">
        <div class="warning">
            <h1> Are you sure you want to delete this post? </h1>
            <div class="choice">
                <form action="{{ route('post.destroy', $post->id) }}"  method="POST">
                    @csrf
                    @method('DELETE')
                    <button> Yes </button>
                </form>

                <button class="no">
                    No
                </button>
            </div>
        </div>
    </div>
    
</body>
</html>