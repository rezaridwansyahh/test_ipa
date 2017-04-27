@extends('base')
@section('title')
  ini detil
@endsection
@section('slider')
  @include('layout.banner')
@endsection
@section('content')
  <div class="booksmedia-detail-main">
      <div class="container">
          <div class="row">
              @include('layout.search')
          </div>
          <div class="row">
            <div class="booksmedia-detail-box">
                <div class="single-book-box">
                    <div class="post-thumbnail">
                        <div class="book-list-icon yellow-icon"></div>
                        <img alt="Book" src="template/images/books-media/list-view/300x465.jpg" />
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
                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
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
                            <h2 class="entry-title">The Great Gatsby</h2>
                            <ul>
                                <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                <li><strong>ISBN:</strong> 9781581573268</li>
                                <li>
                                    <div class="rating">
                                        <strong>Rating:</strong>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                    </div>
                                </li>
                                <li><strong>Edition:</strong> First edition</li>
                                <li><strong>Publisher:</strong> New York : Shaye Areheart Books, c2008</li>
                            </ul>
                        </header>
                        <div class="entry-content post-buttons">
                            <a href="#." class="btn btn-dark-gray">Downloads</a>
                            <a href="#." class="btn btn-dark-gray">View sample</a>
                            <a href="#." class="btn btn-dark-gray">Find Similar Titles</a>
                        </div>
                    </div>
                </div>
                <p><strong>Sinopsis:</strong> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                <ul class="detail-page-listing">
                    <li><strong>Length:</strong> 518 pages.</li>
                    <li><strong>Format:</strong> DVD</li>
                    <li><strong>Language Note:</strong> Icelandic dialogue; English subtitles.</li>
                    <li><strong>Genre :</strong> Feature films, Fiction films, Drama</li>
                    <li><strong>Topics:</strong> Friendship, Bullies, Pranks, School</li>
                    <li><strong>Time Period:</strong> 2000s -- 21st century</li>
                </ul>
                <div class="table-tabs" id="responsiveTabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">Copies: 05</a></li>
                        <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionB">Reviews (12)</a></li>
                        <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionC">Table of Contents</a></li>
                        <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionD">Novelist Recommendations</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sectionA" class="tab-pane fade in active">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Library Name</th>
                                        <th>Shelf Number</th>
                                        <th>Material Type</th>
                                        <th>Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Oak Park Public Library Main Branch</td>
                                        <td>B PURMORT</td>
                                        <td>Book</td>
                                        <td>In Processing</td>
                                    </tr>
                                    <tr>
                                        <td>Bedford Park Public Library District</td>
                                        <td>616.99 PUR</td>
                                        <td>Book</td>
                                        <td>Due 8/24/16</td>
                                    </tr>
                                    <tr>
                                        <td>Blue Island Public Library</td>
                                        <td>BIO PUR</td>
                                        <td>eBook</td>
                                        <td>Due 8/24/16</td>
                                    </tr>
                                    <tr>
                                        <td>Bridgeview Public Library</td>
                                        <td>B PUR</td>
                                        <td>DVD</td>
                                        <td>In Processing</td>
                                    </tr>
                                    <tr>
                                        <td>Eisenhower Public Library District</td>
                                        <td>616.994 PUR</td>
                                        <td>Magazine</td>
                                        <td>Checked In</td>
                                    </tr>
                                    <tr>
                                        <td>Forest Park Public Library</td>
                                        <td>BIO PURMORT</td>
                                        <td>Magazine</td>
                                        <td>Checked In</td>
                                    </tr>
                                    <tr>
                                        <td>Hinsdale Public Library</td>
                                        <td>B PUR</td>
                                        <td>Audio</td>
                                        <td>Checked In</td>
                                    </tr>
                                    <tr>
                                        <td>Oak Park Public Library Maze Branch</td>
                                        <td>616.99 PUR</td>
                                        <td>Audio</td>
                                        <td>Due 9/10/16</td>
                                    </tr>
                                    <tr>
                                        <td>River Grove Public Library District</td>
                                        <td>616.994 PURMORT</td>
                                        <td>Book</td>
                                        <td>Due 9/10/16</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="sectionB" class="tab-pane fade in">
                            <h5>Lorem Ipsum Dolor</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                        </div>
                        <div id="sectionC" class="tab-pane fade in">
                            <h5>Lorem Ipsum Dolor</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                        </div>
                        <div id="sectionD" class="tab-pane fade in">
                            <h5>Lorem Ipsum Dolor</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                        </div>
                        <div id="sectionE" class="tab-pane fade in">
                            <h5>Lorem Ipsum Dolor</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                        </div>
                        <div id="sectionF" class="tab-pane fade in">
                            <h5>Lorem Ipsum Dolor</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                        </div>
                    </div>
                </div>
                @include('layout.popular')
                <section>

                </section>
            </div>
          </div>
      </div>
  </div>
@endsection
