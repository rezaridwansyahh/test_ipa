@extends('base')
@section('title')
  Convention Member Search
@endsection
@section('bcrumb_title')
  <a href="http://publikasi.ipa.or.id/event">Convention Member Search</a>
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
                                <form class="form-horizontal" method="POST" action="{{ route('/cari-user') }}">
                                    <legend><b>SEARCH</b></legend>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Registration Number</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="code" class="form-control" placeholder="Code">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </section>
              </div>
        </div>
    </div>
  <!-- End: Welcome Section -->
@endsection
