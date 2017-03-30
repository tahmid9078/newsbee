@extends('main')

@section('title', '| Homepage')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
          <br> <br>
            <h1 class = "welcome">Welcome to newsBee</h1>
            <p class="lead  welcome">one stop solution for all the latest news</p>
          </div>          
        </div>
      </div> <!-- end of header row -->

      <div class="row">
        <div class="col-md-8 col-md-offset-1">
          @foreach($news as $data)
            <div class="post">
              <h3>{{ $data -> title }}</h3>
              <h6>{{ $data -> catagory }}</h6>
              <p>{{ substr($data -> description, 0,255) . ".." }} <br /><br> <a href="#" class="btn btn-primary ">Read more!</a>
            </div>
            <hr>
          @endforeach
          

        </div>
      </div>
@endsection