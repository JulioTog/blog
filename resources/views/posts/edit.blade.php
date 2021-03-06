@extends('main')
@section('title', '~edit')
@section('content')
  <div class="row">
    {!!Form::model($post, ['route' => ['posts.update', $post->id],  'method' => 'PUT' ])!!}
    <div class="col-md-8">
        {{Form::label('title', 'Title:')}}
        {{Form::text('title', null, ['class'=> 'form-control input-lg'])}}
        {{Form::label('slug','Slug:', array('class'=>'form-spacing-top'))}}
        {{Form::text('slug', null,array('class'=>'form-control '))}}
        {{Form::label('body','Body:', ['class'=>'form-spacing-top'])}}
        {{Form::textarea('body',null,['class'=>'form-control'])}}
    </div>
    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Created At:</dt>
          <dd>{{date('d, M Y H:i', strtotime($post->created_at))}}</dd>
          <dt></dt>
        </dl>
        <dl class="dl-horizontal">
          <dt>Last Updated:</dt>
          <dd>{{date('d, M Y H:i', strtotime($post->updated_at))}}</dd>
          <dt></dt>
        </dl>
        <hr>

        <div class="row">
          <div class="col-sm-6">
            {{Form::submit('Save Changes', ['class'=>'btn btn-success btn-block'])}}

          </div>
          <div class="col-sm-6">
            {!!Html::linkroute('posts.show','Cancel', array($post->id),array('class'=>'btn btn-danger btn-block')) !!}

          </div>
        </div>
      </div>
    </div>
    {!!Form::close()!!}
  </div>
@endsection
