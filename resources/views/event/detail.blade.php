@extends('base')
@section('title')
  Convention Member Detail
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
                                <form class="form-horizontal" method="POST" action="{{ route('/update-email') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Registration Number</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="code" class="form-control" value="{{ $data['code'] }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{ $data['firstname'].' '.$data['lastname'] }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Company</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{ $data['company'] }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" value="{{ $data['email'] }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Update</button>
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
