<header class="header desk version3 page-title-section-version1 one-page-side sl-true full-width-false search-false cart-false sidebar-toggle-false iversion-dark effect-overline hover-effect-fill megamenu-hover-effect-underline subeffect-fade fixed-true fiversion-dark wiversion-light">
    <div class="header-content">
        <div class="header-body">
            <div class="container nz-clearfix">
                <div class="logo logo-desk">
                    <a href="{{ route('monsterat-index') }}" title="Montserrat">
                        <img class="normal-logo" id="img_ed83_1" src="{{ asset('front/monsterat/upload/logo_black%402.png') }}" alt="Montserrat">
                        <img class="fixed-logo" id="img_ed83_2" src="{{ asset('front/monsterat/upload/logo_black%402.png') }}" alt="Montserrat">
                    </a>
                </div>
                <div class="social-links header-social-links nz-clearfix">
                    <a class="icon-facebook" href="#" title="facebook" target="_blank"></a>
                    <a class="icon-twitter" href="#" title="twitter" target="_blank"></a>
                    <a class="icon-googleplus" href="#" title="google" target="_blank"></a>
                    <a class="icon-youtube" href="#" title="youtube" target="_blank"></a>
                </div>
                <nav class="header-menu desk-menu nz-clearfix">
                    <ul  class="menu">
                        <li class="menu-item current-menu-item current_page_item menu-item-home menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Home</span><span class="di icon-arrow-right9"></span></a>
                            <ul class="sub-menu">
                                @include('front.monsterat.pages.headers.links.home_links')
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children megamenu2-1" data-mm="true" data-mmc="4"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Headers</span><span class="di icon-arrow-right9"></span></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Headers</span><span class="di icon-arrow-right9"></span></a>
                                    <ul class="sub-menu">
                                        @include('front.monsterat.pages.headers.links.headers_desc_links1')
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Headers</span><span class="di icon-arrow-right9"></span></a>
                                    <ul class="sub-menu">
                                        @include('front.monsterat.pages.headers.links.headers_desc_links2')
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Page Titles</span><span class="di icon-arrow-right9"></span></a>
                                    <ul class="sub-menu">
                                        @include('front.monsterat.pages.headers.links.headers_desc_links3')
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Pages</span><span class="di icon-arrow-right9"></span></a>
                            <ul class="sub-menu">
                                @include('front.monsterat.pages.headers.links.pages_desc_links')
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Blog</span><span class="di icon-arrow-right9"></span></a>
                            <ul class="sub-menu">
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="blog_layout=small.html"><span class="mi"></span><span class="txt">Small</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="blog_layout=medium.html"><span class="mi"></span><span class="txt">Medium</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="blog_layout=large.html"><span class="mi"></span><span class="txt">Large</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="blog_layout=list.html"><span class="mi"></span><span class="txt">List</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="blog_layout=standard.html"><span class="mi"></span><span class="txt">Standard</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="blog_layout=standard_sidebar.html"><span class="mi"></span><span class="txt">Standard With Sidebar</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="blog_layout=sidebar.html"><span class="mi"></span><span class="txt">Sidebar Active</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="retina-theme-today.html"><span class="mi"></span><span class="txt">Single Post</span><span class="di icon-arrow-right9"></span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Works</span><span class="di icon-arrow-right9"></span></a>
                            <ul class="sub-menu">
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="projects_layout=small-standard.html"><span class="mi"></span><span class="txt">Small Standard</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="projects_layout=medium-standard.html"><span class="mi"></span><span class="txt">Medium Standard</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="projects_layout=large-standard.html"><span class="mi"></span><span class="txt">Large Standard</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="projects_layout=small-image.html"><span class="mi"></span><span class="txt">Small Image</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="projects_layout=medium-image.html"><span class="mi"></span><span class="txt">Medium Image</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="projects_layout=large-image.html"><span class="mi"></span><span class="txt">Large Image</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="projects_layout=small-image-nogap.html"><span class="mi"></span><span class="txt">Small Image No Gap</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="projects_layout=medium-image-nogap.html"><span class="mi"></span><span class="txt">Medium Image No Gap</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="great-happy-woman.html"><span class="mi"></span><span class="txt">Single Project Simple</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="projects_layout=wide.html"><span class="mi"></span><span class="txt">Single Project Wide</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="painting-and-repairing.html"><span class="mi"></span><span class="txt">Single Project Extended</span><span class="di icon-arrow-right9"></span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="4"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Shop</span><span class="di icon-arrow-right9"></span></a>
                            <ul class="sub-menu">
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="shop_layout=small.html"><span class="mi"></span><span class="txt">Small</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="shop_layout=medium.html"><span class="mi"></span><span class="txt">Medium</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="shop_layout=left.html"><span class="mi"></span><span class="txt">Sidebar Left</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="shop_layout=right.html"><span class="mi"></span><span class="txt">Sidebar Right</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="shop_sidebar_single=left.html"><span class="mi"></span><span class="txt">Single Product Sidebar Left</span><span class="di icon-arrow-right9"></span></a></li>
                                <li class="menu-item" data-mm="false" data-mmc="2"><a href="coffee-milkshake.html"><span class="mi"></span><span class="txt">Single Product Sidebar Right</span><span class="di icon-arrow-right9"></span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</header>
