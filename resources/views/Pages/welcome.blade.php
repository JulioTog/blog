  @extends('main')

  @section('title', '~ Home')
  @section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to my blog</h1>
            <p class="lead">Thank you for visiting</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
        </div>
        </div>
      </div> <!-- end of row -->
      <div class="row">
        <div class="col-md-8">
            @foreach ($posts as $post )

          <div class="text">
                <h3> {{ $post->title }}</h3>
                <p> {{ $post->body }}</p>
                <a href="{{url('blog/'.$post->slug)}}"class="btn btn-primary">Read more</a>
          </div>
          <hr>
        @endforeach
        </div>
        <div class="col-md-3 col-md-offset-1" >
          <h2>sidebar</h2>
        </div>

      </div>
@endsection
