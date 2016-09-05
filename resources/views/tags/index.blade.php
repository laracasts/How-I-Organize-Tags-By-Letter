<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.1.2/css/bulma.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="section hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Tags</h1>
                <p class="subtitle">
                    Every tag on the site.
                </p>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <ul class="has-columns has-text-centered">
                @foreach ($tags as $letter => $tagCollection)
                    <div class="letter-group">
                        <h3 class="title is-1 letter">{{ $letter }}</h3>

                        <ul>
                            @foreach ($tagCollection as $tag)
                                <li class="title is-5">
                                    <a href="/tags/{{ $tag->name }}">{{ $tag->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>