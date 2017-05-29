@extends('base')
@section('title')
  List of Convention Publication {{ date("Y") }}
@endsection
@section('bcrumb_title')
  <a href="http://publication.ipa.or.id/convention">Convention Search</a>
@endsection
@section('slider')
  @include('layout.banner')
@endsection

@section('content')
      <div class="books-media-list">
          <div class="container">
              <div class="row">
                  <!-- Start: Search Section -->
                  <!-- @include('layout.search') -->
                  <!-- End: Search Section -->
                  <section class="search-filters">
                    <div class="container">
                        <div class="filter-box">
                            <div class="col-md-3">
                              @include('convention.info')
                            </div>
                            <div class="col-md-9">
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
                                    <p style="text-align:justify"><strong>Abstract:</strong> 
                                    {{ $data['abstract'] }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </section>
              </div>
        </div>
    </div>
  <!-- End: Welcome Section -->
@endsection
