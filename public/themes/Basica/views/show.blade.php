@extends('Basica::layouts.main')
@section('title', $post->PostTitle)
@section('content')

<div class="section section-breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Blog</h1>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="blog-post blog-single-post">
          <div class="single-post-title">
            <h2>{{$post->PostTitle}}</h2>
          </div>

          <div class="single-post-image">
            <img src="../assets/img/{{$post->post_image}}" alt="Post Title">
          </div>
          <div class="single-post-info">
            <i class="glyphicon glyphicon-time"></i>{{$post->created_at}}
          </div>
          <div class="single-post-content">
            {!!$post->post!!}
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
