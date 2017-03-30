@extends('main')

@section('title', '| Login')

@section('content')
      <br>
      <br>
      <br>
      <br>
      <br>

      <div class="row">
        <div class="col-md-7 col-md-offset-2">
          {!! Form::open(['url' => '#']) !!}
          
          {!!  Form::label('email', 'Name:') !!}
          {!!  Form::text('email', null , array('class' => 'form-control')) !!}
        
        <br>
        
          {!!  Form::label('password', 'ID:') !!}
          {!!  Form::text('password', null , array('class' => 'form-control')) !!}
        
        <br>



          {!!  Form::label('password', 'Password:') !!}
          {!!  Form::password('password', array('class' => 'form-control')) !!}
        
        <br>
        

      {!! Form::close() !!}
      
      <br />
      <a href="http://localhost:8000/addNews" class="btn btn-block btn-success">Submit</a>
      
      </div>
      </div>
@endsection