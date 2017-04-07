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
          <div class="post">
            <h3>Post title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit...</p>
              <a href="#"class="btn btn-primary">Read more</a>
          </div>
          <hr>
          <div class="post">
            <h3>Post title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
              ...</p>
              <a href="#"class="btn btn-primary">Read more</a>
          </div>
          <hr>
          <div class="post">
            <h3>Post title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
              ...</p>
              <a href="#"class="btn btn-primary">Read more</a>
          </div>
          <hr>
          <div class="post">
            <h3>Post title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
              ...</p>
              <a href="#"class="btn btn-primary">Read more</a>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1" >
          <h2>sidebar</h2>
        </div>
      </div>
@endsection
