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
    <a class="navbar-brand" href="#">Image Search</a>
</nav>

<main role="main" class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="jumbotron">
        <div class="container">
        <form action="{{route('search')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-xs-12 mb-2">
                <label class="mr-sm-2" for="imageDisplayed">Image Search</label>
                <input type="text" class="form-control" id="imageSearch" name="search" placeholder="Search">
            </div>
            <div class="form-row">
                <div class="col col-xs-12 mb-2">
                        <label class="mr-sm-2" for="imageDisplayed">Amount of images displayed</label>
                        <input type="text" class="form-control" id="imageDisplayed" name="displayed" placeholder="5" value="5">
                </div>
                <div class="col col-xs-12 mb-2">
                        <label class="mr-sm-2" for="imagePulled">Amount of images pulled</label>
                        <input type="text" class="form-control" id="imagePulled" name="pulled" placeholder="25" value="25">
                </div>
            </div>
            <div class="col-xs-12">
                <button class="btn btn-info">Search</button>
            </div>
        </form>
        </div>
    </div>
</main>
</body>
</html>
