@extends('layouts.main')



@section('jumbotron')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{{ $jumbotron_title }}</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="{{ $route['page'] }}" role="button">Learn more &raquo;</a></p>
        </div>
    </div>
@endsection



@section('content')
    <div class="col-md-4">
        <h2>Page</h2>
        <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
        <p><a class="btn btn-secondary" href="{{ $route['page'] }}" role="button">View page &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>About</h2>
        <p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur,
            vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?</p>
        <p><a class="btn btn-secondary" href="{{ $route['about'] }}" role="button">View about &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>Article 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non mattis odio, nec faucibus ante.
            Praesent ligula nisl, tincidunt non ante et, eleifend luctus magna. Sed consequat justo nec est semper.</p>
        <p><a class="btn btn-secondary" href="{{ $route['article'][2] }}" role="button">View Article 2 &raquo;</a></p>
    </div>
@endsection



