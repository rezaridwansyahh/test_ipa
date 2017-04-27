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
                  {{-- <div class="col-xs-12 col-sm-5 col-md-3">
                      <div class="post-thumbnail">
                          <div class="book-list-icon blue-icon"></div>
                          <img src="template/images/books-media/detail-page/300x454.jpg" alt="Book Image">
                      </div>
                  </div> --}}
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-md-9">
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
                    <div class="col-md-3">
                      <div class="post-right-content">
                          <h4>Available now</h4>
                          <p><strong>Total Copies:</strong> 01</p>
                          <p><strong>Available:</strong> 019780062419385</p>
                          <p><strong>Holds:</strong>  01</p>
                          <p><strong>On the shelves now at:</strong> Lawrence Public Library</p>
                          <p><strong>Call #:</strong> 747 STRUTT C</p>
                          <a href="#." class="available-location">Availability by Location <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                          <a href="#." class="btn btn-dark-gray" data-toggle="modal" data-target="#login-modal">Downloads</a>

                          {{-- <a href="#" data-toggle="modal" data-target="#login-modal">Login</a> --}}
                          <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog">
                          				<div class="loginmodal-container">
                          					<h1>Login to Your Account</h1><br>
                          				  <form method="get" action="http://ft.unj.ac.id/wp-content/uploads/2016/04/Panduan-Skripsi-Non-Skripsi-Final_Cetak.pdf">
                          					<input type="text" name="email" placeholder="Email">
                          					<input type="password" name="code" placeholder="Code">
                          					<input type="submit" name="login" class="login loginmodal-submit" value="Login" />
                                    {{-- <button name="login" class="login loginmodal-submit" download="http://ft.unj.ac.id/wp-content/uploads/2016/04/Panduan-Skripsi-Non-Skripsi-Final_Cetak.pdf">Login</button> --}}
                                    </form>

                          				  <div class="login-help">
                          					<a href="#">Register</a> - <a href="#">Forgot Password</a>
                          				  </div>
                          				</div>
                          		</div>
                          	</div>
                          <a href="#." class="btn btn-dark-gray">View sample</a>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
              <p><strong>Summary:</strong> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
          </div>
        </div>
      </div>
  </div>
@endsection
