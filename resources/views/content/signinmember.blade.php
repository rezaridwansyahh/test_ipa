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
                            <article class="page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <form id=ipa-login action="{{ route('/') }}" class="checkout woocommerce-checkout" method="post" autocomplete="off">
                                                {{ csrf_field() }}
                                                <h1 align="center">CONVENTION LOGIN</h1>
                                                <div class="row">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <div class="woocommerce-info">
                                                            <div class="col-sm-12">
                                                                <p class="input-required">
                                                                    <label>
                                                                        <span class="first-letter">Email Address</span>  
                                                                        <span class="second-letter">*</span>
                                                                    </label>
                                                                    <input type="email" class="input-text" name="email" value="">
                                                                </p>
                                                                <p class="input-required">
                                                                    <label>
                                                                        <span class="first-letter">Code Number</span>  
                                                                        <span class="second-letter">*</span>
                                                                    </label>
                                                                    <input type="password" class="input-text" name="codenumber">
                                                                </p>
                                                                <input type="submit" class="btn btn-default" name="Login" value="Login">
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                    </div><!-- .entry-content -->
                              </article>
                        </div>
                    </div>
                  </section>
              </div>
        </div>
    </div>
  <!-- End: Welcome Section -->
@endsection

{{-- CONVENTION LOGIN --}}