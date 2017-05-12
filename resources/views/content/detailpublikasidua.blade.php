@extends('base')
@section('title')
  {{ $title }}
@endsection
@section('bcrumb_title')
  Detail Publication
@endsection
@section('slider')
  @include('layout.banner')
@endsection
@section('content')
  <div class="booksmedia-detail-main">
      <div class="container">
        <div class="row">
          {{--@include('layout.search')--}}
        </div>
        <div class="row">
          <div class="booksmedia-detail-box">
              <div class="detailed-box">
                  {{-- <div class="col-xs-12 col-sm-5 col-md-3">
                      <div class="post-thumbnail">
                          <div class="book-list-icon blue-icon"></div>
                          <img src="template/images/books-media/detail-page/300x454.jpg" alt="Book Image">
                      </div>
                  </div> --}}
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-md-9">
                      <div class="post-center-content">
                          <h2>{{ $data['title'] }}</h2>
                          <p><strong>Author:</strong> {{ $data['authors'] }}</p>
                          <p><strong>Proceeding Title:</strong> {{ $data['proceeding_title'] }}</p>
                          <p><strong>Conference Name:</strong> {{ $data['conference_name'] }}</p>
                          <p><strong>Place:</strong> {{ $data['place'] }}</p>
                          <p><strong>Publisher:</strong> {{ $data['publisher'] }}</p>
                          <p><strong>Language:</strong> {{ $data['language'] }}</p>
                          <p><strong>ISBN:</strong> {{ $data['isbn'] }}</p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="post-right-content">
                          <a href="/convention/download/{{ $data['id'] }}" class="btn btn-dark-gray">Download</a>
                          {{-- <a href="#" data-toggle="modal" data-target="#login-modal">Login</a> --}}
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-12" style="margin-bottom:40px;">
              <div class="col-md-12">
              <div class="col-md-12">
              <p style="text-align:justify"><strong>Abstract:</strong> 
              {{ $data['abstract'] }} </p>
              </div>
              </div>
              </div>
          </div>
        </div>
      </div>
  </div>

@endsection
