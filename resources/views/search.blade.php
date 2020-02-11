<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Image Search</title>
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="{{route('index')}}">Image Search</a>
</nav>

<main role="main" class="container">
    <div class="col-md-12">
        {{$images->render()}}
        <div class="row">
            @foreach($images as $image)
                <figure class="col-md-4">
                    <a href="{{$image->getLink()}}" data-size="400x400">
                       @component('component/image')
                           @slot('type', $image->getType())
                           @slot('src', $image->getSrc())
                       @endcomponent
                    </a>
                </figure>
            @endforeach
        </div>
        {{$images->render()}}
    </div>
</main>
</body>
</html>
