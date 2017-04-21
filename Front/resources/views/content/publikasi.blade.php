@extends('base')
@section('title')
  Ini Publikasi
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
                          <article>
                              <div class="single-book-box">
                                  <div class="post-thumbnail">
                                      <div class="book-list-icon red-icon"></div>
                                      <a href="books-media-detail-v1.html"><img alt="Book" src="template/images/books-media/list-view/300x465.jpg" /></a>
                                  </div>
                                  <div class="post-detail">
                                      <div class="books-social-sharing">
                                          <ul>
                                              <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                              <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                              <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                              <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                              <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                          </ul>
                                      </div>
                                      <div class="optional-links">
                                          <ul>
                                              <li>
                                                  <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                      <i class="fa fa-shopping-cart"></i>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                      <i class="fa fa-heart"></i>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                      <i class="fa fa-search"></i>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                      <i class="fa fa-print"></i>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                      <header class="entry-header">
                                          <div class="row">
                                              <div class="col-sm-6">
                                                  <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                  <ul>
                                                      <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                      <li><strong>ISBN:</strong> 9781581573268</li>
                                                  </ul>
                                              </div>
                                              <div class="col-sm-6">
                                                  <ul>
                                                      <li><strong>Edition:</strong> First editio</li>
                                                      <li><strong>Local Availability:</strong> 0 (of 1)</li>
                                                      <li>
                                                          <div class="rating">
                                                              <strong>Rating: </strong>
                                                              <span>☆</span>
                                                              <span>☆</span>
                                                              <span>☆</span>
                                                              <span>☆</span>
                                                              <span>☆</span>
                                                          </div>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </header>
                                      <div class="entry-content">
                                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                      </div>
                                      <footer class="entry-footer">
                                          <a class="btn btn-dark-gray" href="books-media-detail-v1.html">Read More</a>
                                      </footer>
                                  </div>
                              </div>
                          </article>
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
                  <div class="col-md-3 col-md-pull-9">
                      @include('layout.side')
                  </div>
              </div>
          </div>
          <!-- Start: Staff Picks -->
          <section class="">

          </section>
          <!-- End: Staff Picks -->
      </div>
@endsection
