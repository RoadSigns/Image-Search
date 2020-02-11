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

    @if (session('error'))
        <div class="alert alert-danger">
            <p>{{ session('error')}}</p>
        </div>
    @endif

    <div class="jumbotron">
        <div class="container">
        <form action="{{route('search')}}" method="get" enctype="multipart/form-data">
            <div class="col-xs-12 mb-2">
                <label class="mr-sm-2" for="imageDisplayed">Image Search</label>
                <input type="text" class="form-control" id="imageSearch" name="search" placeholder="Search">
            </div>
            <div class="form-row">
                <div class="col col-xs-12 mb-2">
                        <label class="mr-sm-2" for="imageDisplayed">Amount of images displayed</label>
                        <input type="text" class="form-control" id="imageDisplayed" name="display" placeholder="6" value="6">
                </div>
                <div class="col col-xs-12 mb-2">
                        <label class="mr-sm-2" for="imageTotal">Total Images</label>
                        <input type="text" class="form-control" id="imageTotal" name="total" placeholder="24" value="24">
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
