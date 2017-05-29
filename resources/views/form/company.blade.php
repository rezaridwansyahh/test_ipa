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
                            <legend><b>REGISTER FOR COMPANY</b></legend>
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
                                <label class="col-sm-2 control-label">Name Of Company</label>
                                <div class="col-sm-10">
                                  <input type="text" name="company_name" class="form-control" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Business Address</label>
                                <div class="col-sm-10">
                                  <input type="text" name="business_address" class="form-control" placeholder="Business Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Telephone Number</label>
                                <div class="col-sm-10">
                                  <input type="number" name="telephone_number" class="form-control" placeholder="Telephone Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Faximile Number</label>
                                <div class="col-sm-10">
                                  <input type="number" name="fax_number" class="form-control" placeholder="Fax Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Company Representative</label>
                                <div class="col-sm-10">
                                  <input type="text" name="company_representative" class="form-control" placeholder="Company Representative">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email Address</label>
                                <div class="col-sm-10">
                                  <input type="mail" name="email_representative" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Alternate Company Representative</label>
                                <div class="col-sm-10">
                                  <input type="text" name="alternate_company_representative" class="form-control" placeholder="Alternate Company Representative">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email Address</label>
                                <div class="col-sm-10">
                                  <input type="mail" name="email_alternate_representative" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Producing or Non Producing</label>
                              <div class="col-sm-10">
                                <form>
                                  <label class="radio-inline">
                                    <input type="radio" name="producing">Producing
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="non_producing">Non-Producing
                                  </label>
                                </form>
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
