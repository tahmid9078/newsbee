@extends('main')

@section('title', '| Sports')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <br>
          <br>
          <br>
          <br>
                 
        </div>
      </div> <!-- end of header row -->
      <div class="row">
        <div class="col-md-8 col-md-offset-1">
      
          @foreach($news as $data)
            <div class="post">

              <h3>{{ $data -> title }}</h3>
              <p>{{ substr($data -> description, 0,255) . "...." }} <br /> <br><a href="#" class="btn btn-primary ">Read more!</a>
            </div>
            <hr>
          @endforeach
          
        </div>
        
      </div>
@endsection