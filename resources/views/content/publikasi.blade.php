@extends('base')
@section('title')
  {{ $title }}
@endsection
@section('bcrumb_title')
  Publications
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
              </div>
              <div class="row">
                  <div class="col-md-9 col-md-push-3" id="daftar_buku">
                      <div class="filter-options margin-list">
                          <div class="row">
                              {{--
                              <div class="col-md-4 col-sm-4">
                                  <select name="orderby">
                                      <option selected="selected">Default sorting</option>
                                      <option>Sort by popularity</option>
                                      <option>Sort by rating</option>
                                      <option>Sort by newness</option>
                                      <option>Sort by price</option>
                                  </select>
                              </div>
                              --}}
                              <div class="col-md-4 col-sm-4">
                                  <div class="filter-result">Showing items {{ $data['from'] }} to {{ $data['to'] }} of {{ $data['total'] }} total</div>
                              </div>
                          </div>
                      </div>
                      <div class="books-list">
                        @foreach($data['data'] as $jurnal)
                          <article>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="/publikasi/{{ $jurnal['id'] }}"><h5 class="black">{{ str_limit($jurnal['title'],65,'...') }}</h5></a>
                                    <p>{{ str_limit($jurnal['abstract'],150,'...') }}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          </article>
                        @endforeach
                      </div>
                      <nav class="navigation pagination text-center">
                          <h2 class="screen-reader-text">Posts navigation</h2>
                          <div class="nav-links">
                              <div class="prev page-numbers"><i class="fa fa-long-arrow-left"></i> Previous</div>
                              @if($data['current_page'] > 1)
                                @if($data['current_page']-2 >= 1)
                                  <div class="page-numbers hal">{{ $data['current_page']-2 }}</div>
                                @endif
                                @if($data['current_page']-1 >= 1)
                                  <div class="page-numbers hal">{{ $data['current_page']-1 }}</div>
                                @endif
                              @endif
                              <span class="page-numbers current">{{ $data['current_page'] }}</span>
                              @if($data['current_page'] < $data['last_page'])
                                @if($data['current_page']+1 <= $data['last_page'])
                                  <div class="page-numbers hal">{{ $data['current_page']+1 }}</div>
                                @endif
                                @if($data['current_page']+2 <= $data['last_page'])
                                  <div class="page-numbers hal">{{ $data['current_page']+2 }}</div>
                                @endif
                              @endif
                              <div class="next page-numbers">Next <i class="fa fa-long-arrow-right"></i></div>
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
@section('js_more')
  <script>
    function pagination(){
      window.scrollTo(0,0);
      $(".next.page-numbers").click(function(){
        $.ajax({
          type:"POST",
          url:"/ajax/publikasi/next",
          success:function(msg){
            $('#daftar_buku').html(msg);
            pagination();
          },
          error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
          }
        });
      });
      $(".prev.page-numbers").click(function(){
        $.ajax({
          type:"POST",
          url:"/ajax/publikasi/prev",
          success:function(msg){
            $('#daftar_buku').html(msg);
            pagination();
          }
        });
      });
      $(".hal.page-numbers").click(function(){
        hal = $(this).html();
        $.ajax({
          type:"POST",
          url:"/ajax/publikasi/hal",
          data:"id="+hal,
          success:function(msg){
            $('#daftar_buku').html(msg);
            pagination();
          },
          error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
          }
        });
      });
    }
    $(function(){
      pagination();
    });
  </script>
@endsection
