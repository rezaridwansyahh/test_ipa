
                      <div class="filter-options margin-list">
                          <div class="row">
                              <!--div class="col-md-4 col-sm-4">
                                  <select name="orderby">
                                      <option selected="selected">Default sorting</option>
                                      <option>Sort by popularity</option>
                                      <option>Sort by rating</option>
                                      <option>Sort by newness</option>
                                      <option>Sort by price</option>
                                  </select>
                              </div-->
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
                              <div class="panel panel-default  panel--styled">
                                <div class="panel-body">
                                  <div class="col-md-12 panelTop">
                                    <div class="col-md-12">
                                      <h2 class="black">{{ str_limit($jurnal['title'],50,'...') }}</h2>
                                      <p>{{ str_limit($jurnal['abstract'],150,'...') }}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-12 panelBottom">
                                    <!--div class="col-md-4">
                                      <button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-shopping-cart"></span>   Add to Cart</button>
                                    </div-->
                                    <div class="col-md-4" style="margin-left:10px">
                                      <div class="btn btn-success btn-xs"><a style="color:white" href="/publikasi/{{ $jurnal['id'] }}"><span class="glyphicon glyphicon glyphicon-zoom-in"></span>   See Details</a></div>
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