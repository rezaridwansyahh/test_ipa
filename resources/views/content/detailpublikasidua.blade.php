@extends('base')
@section('title')
  Indonesia Petroleum Association | Publikasi | {{ $data['title'] }}
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
                          <p><strong>Volume:</strong> {{ $data['volume'] }}</p>
                          <p><strong>Page:</strong> {{ $data['pages'] }}</p>
                          <p><strong>Series:</strong> {{ $data['series'] }}</p>
                          <p><strong>Language:</strong> {{ $data['language'] }}</p>
                          <p><strong>ISBN:</strong> {{ $data['isbn'] }}</p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="post-right-content">
                        @if($data['is_event']==0)
                          <a href="/publikasi/download/{{ $data['id'] }}" class="btn btn-dark-gray">Download</a>
                        @else
                          <button data-toggle="modal" data-target="#login-event" class="btn btn-dark-gray">Download</button>
                        @endif

                          {{-- <a href="#" data-toggle="modal" data-target="#login-modal">Login</a> --}}
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
              <p><strong>Abstract:</strong> 
              {{ $data['abstract'] }} </p>
          </div>
        </div>
      </div>
  </div>

  <div class="modal fade" id="login-event" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Login to Your Account</h1><br>
          <p id="errormessage" align="center" style="font-weight: bold">
          </p>
          <form action="/publikasi/download/event" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $data['id'] }}">
          <input type="text" name="email" placeholder="Email">
          <input type="password" name="code" placeholder="Code">
          <input id="submit" type="submit" name="login" class="login loginmodal-submit" value="Login" />
          </form>
        </div>
    </div>
  </div>

@endsection
