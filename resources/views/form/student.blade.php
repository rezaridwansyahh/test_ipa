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
        <div class="filter-box">
          <section class="search-filters">
            <div class="container">
                <div class="filter-box">
                    <div class="col-md-3">
                      @include('convention.info')
                    </div>
                    <div class="col-md-9">
                        {{-- <form class="form-horizontal" method="POST" action="{{ route('/cari-user') }}"> --}}
                        <form class="form-horizontal">
                            <legend><b>REGISTER FOR STUDENT</b></legend>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Saluation</label>
                                <div class="col-sm-10">
                                  <select class="form-control" name="saluation">
                                    <option>Mr</option>
                                    <option>Mrs</option>
                                    <option>Ms</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="firstname" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Member No</label>
                                <div class="col-sm-10">
                                  <input type="number" name="member_no" class="form-control" placeholder="Member Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Department</label>
                                <div class="col-sm-10">
                                  <input type="text" name="department" class="form-control" placeholder="Department">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Faculty</label>
                                <div class="col-sm-10">
                                  <input type="text" name="faculty" class="form-control" placeholder="Faculty">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">University</label>
                                <div class="col-sm-10">
                                  <input type="text" name="university" class="form-control" placeholder="University">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Mailing Address</label>
                                <div class="col-sm-10">
                                  <input type="text" name="mailing_address" class="form-control" placeholder="Mailing Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Postal Code</label>
                                <div class="col-sm-10">
                                  <input type="text" name="postal_code" class="form-control" placeholder="Postal COde">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Mobile</label>
                                <div class="col-sm-10">
                                  <input type="number" name="email" class="form-control" placeholder="Mobile Phone Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </section>
        </div>
    </div>
  <!-- End: Welcome Section -->
@endsection
