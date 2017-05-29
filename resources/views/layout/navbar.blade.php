<header id="header-v1" class="navbar-wrapper">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="row">
                    <div class="col-md-3">
                        <div class="navbar-header">
                            <div class="navbar-brand">
                                <h1>
                                    <a href="http://ipa.or.id">
                                        <img src="/Template/images/logo_white-alt.png" alt="Indonesia Petroleum Association" />
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!-- Header Topbar -->
                        <div class="header-topbar hidden-sm hidden-xs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="topbar-info">
                                      @if (!session()->has('access_token'))
                                      <a href="/login"><i class="fa fa-lock"></i>Login / Register</a>
                                      {{-- <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                                      <span>/</span>
                                      <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>support@libraria.com</a> --}}
                                      @else
                                      <a href="javascript:void(0);"><i class="fa fa-lock"></i>Welcome, {{ session()->get('nama') }}</a>
                                      @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="topbar-links">
                                        @if (session()->has('access_token'))
                                        <a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>, 
                                        <form id="logout-form" action="{{ route('logout') }}" method="post" style="display:none;">{{ csrf_field() }}</form>
                                        <SPAN>|</SPAN>
                                        @endif
                                        {{-- <a href="javascript:void(0);">EN</a>
                                        <SPAN>|</SPAN>
                                        <a href="javascript:void(0);">ID</a>
                                        <span>|</span>
                                        <div class="header-cart dropdown">
                                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                            <small>0</small>
                                          </a>
                                            <div class="dropdown-menu cart-dropdown">
                                                <ul>
                                                    <li class="clearfix">
                                                        <img src="template/images/64x80.jpg" alt="cart item" />
                                                        <div class="item-info">
                                                            <div class="name">
                                                                <a href="#">The Great Gatsby</a>
                                                            </div>
                                                            <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                            <div class="price">1 X $10.00</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <img src="template/images/64x80.jpg" alt="cart item" />
                                                        <div class="item-info">
                                                            <div class="name">
                                                                <a href="#">The Great Gatsby</a>
                                                            </div>
                                                            <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                            <div class="price">1 X $10.00</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <img src="/template/images/64x80.jpg" alt="cart item" />
                                                        <div class="item-info">
                                                            <div class="name">
                                                                <a href="#">The Great Gatsby</a>
                                                            </div>
                                                            <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                            <div class="price">1 X $10.00</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="cart-total">
                                                    <div class="title">SubTotal</div>
                                                    <div class="price">$30.00</div>
                                                </div>
                                                <div class="cart-buttons">
                                                    <a href="cart.html" class="btn btn-dark-gray">View Cart</a>
                                                    <a href="checkout.html" class="btn btn-primary">Checkout</a>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse hidden-sm hidden-xs">
                          <ul class="nav navbar-nav">
                              <li><a href="http://ipa.or.id">Home</a></li>
                              <!--li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index.html">Commite</a>
                                <ul class="dropdown-menu">
                                  <li><a href="http://www.ipa.or.id/page/associate-members" data-href="page/associate-members"><div>Associate Members</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/commercial-lng-gas" data-href="page/commercial-lng-gas"><div>Commercial / LNG & Gas</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/communications-and-engagement" data-href="page/communications-and-engagement"><div>Communications and Engagement</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/convention" data-href="page/convention"><div>Convention</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/environment-and-safety" data-href="page/environment-and-safety"><div>Environment and Safety</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/exploration" data-href="page/exploration"><div>Exploration</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/finance-and-tax" data-href="page/finance-and-tax"><div>Finance & Tax</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/human-resources" data-href="page/human-resources"><div>Human Resources</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/data-management" data-href="page/data-management"><div>IT & Data Management</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/professional-division" data-href="page/professional-division"><div>Professional Division</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/regulatory-affairs" data-href="page/regulatory-affairs"><div>Regulatory Affairs</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/supply-chain-management" data-href="page/supply-chain-management"><div>Supply Chain Management</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/social-investment" data-href="page/social-investment"><div>Social Investment</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/unconventional-gas" data-href="page/unconventional-gas"><div>Unconventional Gas</div></a></li>
                                </ul>
                              </li-->
                              <li><a href="http://committee.ipa.or.id">Committee</a></li>
                              <li><a href="http://membership.ipa.or.id">Membership</a></li>
                              <li class="dropdown">
                                  <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">Publications</a>
                                  <ul class="dropdown-menu">
                                      <li><a href="http://publication.ipa.or.id/publikasi"><div>Publication Database</div></a></li>
                                      <li><a href="http://publication.ipa.or.id/convention"><div>Publication Convention 2017</div></a></li>
                                      <li><a href="http://publication.ipa.or.id/dvd"><div>Books and DVD's</div></a></li>
                                  </ul>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu hidden-lg hidden-md">
                    <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                    <div id="mobile-menu">
                        <ul>
                            <li class="mobile-title">
                                <h4>Indonesia PA</h4>
                                <a href="#" class="close"></a>
                            </li>
                            <li>
                                <a href="index.html">Abouts</a>
                                <ul>
                                  <li><a href="http://www.ipa.or.id/#section-mission" data-href="#section-mission"><div>Mission</div></a></li>
                                  <li><a href="http://www.ipa.or.id/#section-supervisory" data-href="#section-supervisory"><div>The Supervisory Board</div></a></li>
                                  <li><a href="http://www.ipa.or.id/#section-board-director" data-href="#section-board-director"><div>The Board Of Director</div></a></li>
                                  <li><a href="http://www.ipa.or.id/#section-secretariat" data-href="#section-secretariat"><div>Secretariat</div></a></li>
                                  <li><a href="http://www.ipa.or.id/#" data-href="#"><div>IPA Committees</div></a>
                                    <ul class="sub-level">
                                      <li><a href="http://www.ipa.or.id/page/associate-members" data-href="page/associate-members"><div>Associate Members</div></a></li>
                                      <li><a href="http://www.ipa.or.id/page/commercial-lng-gas" data-href="page/commercial-lng-gas"><div>Commercial / LNG & Gas</div></a></li>
                                      <li><a href="http://www.ipa.or.id/page/communications-and-engagement" data-href="page/communications-and-engagement"><div>Communications and Engagement</div></a></li>
                                      <li><a href="http://www.ipa.or.id/page/convention" data-href="page/convention"><div>Convention</div></a></li>
                                      <li><a href="http://www.ipa.or.id/page/environment-and-safety" data-href="page/environment-and-safety"><div>Environment and Safety</div></a></li>
                                      <li><a href="http://www.ipa.or.id/page/exploration" data-href="page/exploration"><div>Exploration</div></a></li>
                                      <li><a href="http://www.ipa.or.id/page/finance-and-tax" data-href="page/finance-and-tax"><div>Finance & Tax</div></a></li>
                                      <li><a href="http://www.ipa.or.id/page/human-resources" data-href="page/human-resources"><div>Human Resources</div></a></li>
                                      <li><a href="http://www.ipa.or.id/page/data-management" data-href="page/data-management"><div>IT & Data Management</div></a></li>
                                      <li><a href="http://www.ipa.or.id/page/professional-division" data-href="page/professional-division"><div>Professional Division</div></a></li>
                                      <li><a href="http://www.ipa.or.id/page/regulatory-affairs" data-href="page/regulatory-affairs"><div>Regulatory Affairs</div></a></li>
                                      <li><a href="http://www.ipa.or.id/page/supply-chain-management" data-href="page/supply-chain-management"><div>Supply Chain Management</div></a></li>
                                      <li><a href="http://www.ipa.or.id/page/social-investment" data-href="page/social-investment"><div>Social Investment</div></a></li>
                                      <li><a href="http://www.ipa.or.id/page/unconventional-gas" data-href="page/unconventional-gas"><div>Unconventional Gas</div></a></li>
                                    </ul>
                                </li>
                                  <li><a href="http://www.ipa.or.id/#section-member" data-href="#section-member"><div>IPA Member</div></a></li>
                                  <li><a href="http://www.ipa.or.id/#section-constitution" data-href="#section-constitution"><div>Constitution</div></a></li>
                                  <li><a href="http://www.ipa.or.id/#section-annual-report" data-href="#section-annual-report"><div>Annual Report</div></a></li>
                                  <li><a href="http://www.ipa.or.id/#section-care-program" data-href="#section-care-program"><div>Care Program</div></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="books-media-list-view.html">The Industry</a>
                                <ul>
                                  <li><a href="http://www.ipa.or.id/page/indonesia-overview" data-href="page/indonesia-overview"><div>Indonesia Overview</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/basin-map" data-href="page/basin-map"><div>Basin Map</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/oil" data-href="page/oil"><div>Oil</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/gas" data-href="page/gas"><div>Gas</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/cbm" data-href="page/cbm"><div>CBM</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/geothermal" data-href="page/geothermal"><div>Renewables</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/statistics" data-href="page/statistics"><div>Statistics</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/contract-awarding-procedures" data-href="page/contract-awarding-procedures"><div>Contract Awarding Procedures</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/laws-and-regulations" data-href="page/laws-and-regulations"><div>Regulations</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/industri-csr" data-href="page/industri-csr"><div>Industry CSR</div></a></li>
                                  <li><a href="http://www.ipa.or.id/glossary/" data-href="glossary/"><div>Glossary</div></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="news-events-list-view.html">Events</a>
                                <ul>
                                  <li><a href="http://www.ipa.or.id/field_trip/" data-href="field_trip/"><div>Field Trips</div></a></li>
                                  <li><a href="http://www.ipa.or.id/event/" data-href="event/"><div>Short Courses</div></a></li>
                                  <li><a href="http://www.ipa.or.id/others/" data-href="others/"><div>Others</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/convex-archive" data-href="page/convex-archive"><div>Convex Archive</div></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Publications</a>
                                <ul>
                                  <li><a href="http://www.ipa.or.id/page/under-construction" data-href="page/under-construction"><div>Publication Database</div></a></li>
                                  <li><a href="http://www.ipa.or.id/page/under-construction" data-href="page/under-construction"><div>Books and DVD's</div></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">News</a>
                                <ul>
                                  <li><a href="http://www.ipa.or.id/newsletter/" data-href="newsletter/"><div>Newsletter</div></a></li>
                                  <li><a href="http://www.ipa.or.id/press/" data-href="press/"><div>Press Release</div></a></li>
                                  <li><a href="http://www.ipa.or.id/gallery/" data-href="gallery/"><div>Gallery</div></a></li>
                                </ul>
                            </li>
                            <li><a href="services.html">Contact</a></li>
                            <li><a href="contact.html">2017 IPA</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
