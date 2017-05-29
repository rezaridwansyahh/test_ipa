@extends('base')
@section('title')
  Home
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
                            <div class="col-md-12">
                              @include('convention.info')
                            </div>
                        </div>
                    </div>
                  </section>
              </div>
        </div>
    </div>
  <!-- End: Welcome Section -->
@endsection
