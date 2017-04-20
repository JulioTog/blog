@extends('main')

@section('title', '~View Post')

@section('content')
<div class="row">
  <div class="col-md-8">

      <h1>{{$post->title}}</h1>
      <p class="lead"> {{$post->body}}</p>
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
          {!!Html::linkRoute('posts.edit','Edit', array($post->id), array('class'=>'btn btn-primary btn-block',))!!}
        </div>
        <div class="col-sm-6">
          {!!Form::open(array('route'=>array('posts.destroy',$post->id), 'method'=>'DELETE'))!!}
          {{Form::submit('Delete', array('class'=>'btn btn-danger btn-block'))}}
          {!!Form::close()!!}
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        {{ Html::linkroute('posts.index', '<<See all post',[],['class'=>'btn btn-default btn-block btn-h1-spacing']) }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
