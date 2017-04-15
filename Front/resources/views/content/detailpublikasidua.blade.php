@extends('base')
@section('title')
  Ini Publikasi Dua
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
              <div class="detailed-box">
                  <div class="col-xs-12 col-sm-5 col-md-3">
                      <div class="post-thumbnail">
                          <div class="book-list-icon blue-icon"></div>
                          <img src="template/images/books-media/detail-page/300x454.jpg" alt="Book Image">
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-6">
                      <div class="post-center-content">
                          <h2>The Great Gatsby</h2>
                          <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                          <p><strong>ISBN:</strong> 9781581573268, 9780062419385</p>
                          <p><strong>Rating:</strong> </p>
                          <p><strong>Edition:</strong> First edition</p>
                          <p><strong>Publisher:</strong> New York : Shaye Areheart Books, c2008</p>
                          <p><strong>Length:</strong> 518 pages.</p>
                          <p><strong>Format:</strong> DVD</p>
                          <p><strong>Language Note:</strong> Icelandic dialogue; English subtitles.</p>
                          <p><strong>Genre :</strong> Feature films, Fiction films, Drama</p>
                          <p><strong>Topics:</strong> Friendship, Bullies, Pranks, School</p>
                          <div class="actions">
                              <ul>
                                  <li>
                                      <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Add To Cart">
                                          <i class="fa fa-shopping-cart"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Like">
                                          <i class="fa fa-heart"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Mail">
                                          <i class="fa fa-envelope"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Search">
                                          <i class="fa fa-search"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Print">
                                          <i class="fa fa-print"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Print">
                                          <i class="fa fa-share-alt"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3 ">
                      <div class="post-right-content">
                          <h4>Available now</h4>
                          <p><strong>Total Copies:</strong> 01</p>
                          <p><strong>Available:</strong> 019780062419385</p>
                          <p><strong>Holds:</strong>  01</p>
                          <p><strong>On the shelves now at:</strong> Lawrence Public Library</p>
                          <p><strong>Call #:</strong> 747 STRUTT C</p>
                          <a href="#." class="available-location">Availability by Location <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                          <a href="#." class="btn btn-dark-gray">Downloads</a>
                          <a href="#." class="btn btn-dark-gray">View sample</a>
                          <a href="#." class="btn btn-dark-gray">Find Similar Titles</a>
                      </div>
                  </div>
                  <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
              <p><strong>Summary:</strong> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>

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
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                      </div>
                      <div id="sectionC" class="tab-pane fade in">
                          <h5>Lorem Ipsum Dolor</h5>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                      </div>
                      <div id="sectionD" class="tab-pane fade in">
                          <h5>Lorem Ipsum Dolor</h5>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                      </div>
                      <div id="sectionE" class="tab-pane fade in">
                          <h5>Lorem Ipsum Dolor</h5>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                      </div>
                      <div id="sectionF" class="tab-pane fade in">
                          <h5>Lorem Ipsum Dolor</h5>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
  </div>
@endsection