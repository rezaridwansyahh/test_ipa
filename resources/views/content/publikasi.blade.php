@extends('base')
@section('title')
  Publikasi IPA.or.id
@endsection
@section('slider')
  @include('layout.banner')
@endsection

@section('content')
      <div class="books-media-list">
          <div class="container">
              <div class="row">
                  <!-- Start: Search Section -->
                  @include('layout.search')
                  <!-- End: Search Section -->
              </div>
              <div class="row">
                  <div class="col-md-9 col-md-push-3">
                      <div class="filter-options margin-list">
                          <div class="row">
                              <div class="col-md-4 col-sm-4">
                                  <select name="orderby">
                                      <option selected="selected">Default sorting</option>
                                      <option>Sort by popularity</option>
                                      <option>Sort by rating</option>
                                      <option>Sort by newness</option>
                                      <option>Sort by price</option>
                                  </select>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                  <div class="filter-result">Showing items 1 to 9 of 19 total</div>
                              </div>
                          </div>
                      </div>
                      <div class="books-list">
                        @for ($i=0; $i <=10 ; $i++)
                          <article>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="panel panel-default  panel--styled">
                                <div class="panel-body">
                                  <div class="col-md-12 panelTop">
                                    <div class="col-md-12">
                                      <h2 class="black">Product Name</h2>
                                      <p>Lorem ipsum dolor sit amet, altera propriae iudicabit eos ne. Vel ut accusam tacimates, prima oratio ius ea. Et duo alii verterem principes, te quo putent melius fabulas, ei scripta eligendi appareat duo.</p>
                                    </div>
                                  </div>
                                  <div class="col-md-12 panelBottom">
                                    <div class="col-md-4">
                                      <button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-shopping-cart"></span>   Add to Cart</button>
                                    </div>
                                    <div class="col-md-4" style="margin-left:10px">
                                      <button class="btn btn-success btn-xs"><a style="color:white" href="/detailpublikasidua"><span class="glyphicon glyphicon glyphicon-zoom-in"></span>   See Details</a></button>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="stars">
                                       <div id="stars" class="starrr"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          </article>
                        @endfor
                      </div>
                      <nav class="navigation pagination text-center">
                          <h2 class="screen-reader-text">Posts navigation</h2>
                          <div class="nav-links">
                              <a class="prev page-numbers" href="#."><i class="fa fa-long-arrow-left"></i> Previous</a>
                              <a class="page-numbers" href="#.">1</a>
                              <span class="page-numbers current">2</span>
                              <a class="page-numbers" href="#.">3</a>
                              <a class="page-numbers" href="#.">4</a>
                              <a class="next page-numbers" href="#.">Next <i class="fa fa-long-arrow-right"></i></a>
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
          <!-- Start: Staff Picks -->
          <section class="">

          </section>
          <!-- End: Staff Picks -->
      </div>
@endsection
