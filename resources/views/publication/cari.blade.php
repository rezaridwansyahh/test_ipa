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
                                <form class="form-horizontal" method="POST" action="/publikasi">
                                    <legend><b>SEARCH</b></legend>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Title</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" placeholder="Title">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Author</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="author" class="form-control" placeholder="Author">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Abstract</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="abstract" class="form-control" placeholder="Abstract">
                                        </div>
                                    </div>

                                    {{-- <div class="form-group">
                                        <label class="col-sm-2 control-label">ISBN</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="isbn" class="form-control" placeholder="ISBN">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Year</label>
                                        <div class="col-sm-4">
                                        <input type="text" name="year_start" class="form-control" placeholder="Year">
                                        </div>
                                        <div class="col-sm-1">
                                        <p style="padding-top: 15px">to</p>
                                        </div>
                                        <div class="col-sm-4">
                                        <input type="text" name="year_end" class="form-control" placeholder="Year">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Keyword</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="keyword" class="form-control" placeholder="Keyword">
                                        </div>
                                    </div> --}}
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
