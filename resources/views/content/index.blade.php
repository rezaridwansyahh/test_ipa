@extends('base')
@section('title')
  Home
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
                              @include('layout.sidekiributton')
                            </div>
                            <div class="col-md-9">
                              @include('layout.sidekananlogin')
                            </div>
                        </div>
                    </div>
                  </section>
              </div>
        </div>
    </div>
  <!-- End: Welcome Section -->
@endsection
