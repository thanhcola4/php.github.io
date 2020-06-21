<nav class="navbar navbar-default navbar-fixed-top">
    <div class="" data-virtual-container="">
        <div class="container">
            <div class="navbar-header">                              
                <form action="" method="post" class="navbar-form scrollable-dropdown-menu navbar-left" role="search">
                    <span class="twitter-typeahead" style="position: relative; display: inline-block;">
                        <input type="text" name="keyphrase" class="form-control autocomplete-binded tt-input" data-game-search="" data-head-search="" data-wishlist-link="https://taigame.org/wishlist" placeholder="Tìm game" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;">
                        <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                        <div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;">
                            <div class="
                            \tt-dataset tt-dataset-games"></div>
                        </div>
                    </span>
                    <button class="fa fa-search"></button>
                </form>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="">Game PC</a></li>
                    <li><a href="" title="T?i game Android">Android</a></li>
                    
                    <li class="dropdown">
                            <button class="btn btn-success btn-xs dropdown-toggle navbar-btn" data-toggle="dropdown" aria-expanded="false">
                                    Gia nhập <span class="caret"></span>
                            </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{URL::to('/dangnhap')}}" rel="nofollow" data-link-ajax="">
                                <i class="fa fa-sign-in"></i> &nbsp; Đăng nhập
                                </a>
                            </li>
                            <li><a href="{{URL::to('/dangky')}}" method="post" rel="nofollow"><i class="fa fa-edit"></i> &nbsp; Ðăng ký</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>