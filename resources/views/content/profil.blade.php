@extends('base')
@section('title')
  Profile Page
@endsection
@section('bcrumb_title')
  Profile Page
@endsection
@section('slider')
  @include('layout.banner')
@endsection
@section('content')
  <br />
  <br />
  <div class="container">
  	<div class="row">
  		<div class="col-md-offset-1 col-md-10">
      	 <div class="well profile">
              <div class="col-sm-12">
                  <div class="col-xs-12 col-sm-8">
                      <h3 class="black">{{ $data['name'].' '.$data['last_name'] }}</h3>
                      <hr>
                      <p><strong>Position:</strong> {{ $data['position'] }}</p>
                      <p><strong>Company:</strong> {{ $data['company'] }}</p>
                      <p><strong>Address:</strong> {{ $data['adddress'] }}</p>
                      <p><strong>Member No</strong> <span class="tags">{{ $data['member_no'] }}</span></p>
                  </div>
                  <div class="col-xs-12 col-sm-4 text-center">
                      <figure>
                          <img src="https://pbs.twimg.com/profile_images/722804923314741249/4vCXyPdo.jpg" alt="{{ $data['name'].' '.$data['last_name'] }}" class="img-circle img-responsive">
                          <figcaption class="ratings">
                            {{--
                              <p>Ratings
                              <a href="#">
                                  <span class="fa fa-star"></span>
                              </a>
                              <a href="#">
                                  <span class="fa fa-star"></span>
                              </a>
                              <a href="#">
                                  <span class="fa fa-star"></span>
                              </a>
                              <a href="#">
                                  <span class="fa fa-star"></span>
                              </a>
                              <a href="#">
                                   <span class="fa fa-star-o"></span>
                              </a>
                              </p>
                            --}}
                          </figcaption>
                      </figure>
                  </div>
              </div>
              <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                {{--
                  <h2><strong> 20,7K </strong></h2>
                  <p><small>Followers</small></p>
                  <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                --}}
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                {{--
                    <h2><strong>245</strong></h2>
                    <p><small>Following</small></p>
                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
                --}}
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                {{--
                    <h2><strong>43</strong></h2>
                    <p><small>Snippets</small></p>
                    <div class="btn-group dropup btn-block">
                      <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu text-left" role="menu">
                        <li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an email </a></li>
                        <li><a href="#"><span class="fa fa-list pull-right"></span> Add or remove from a list  </a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="fa fa-warning pull-right"></span>Report this user for spam</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="btn disabled" role="button"> Unfollow </a></li>
                      </ul>
                    </div>
                  --}}
                </div>
              </div>
      	 </div>
  		</div>
  	</div>
  </div>
@endsection
