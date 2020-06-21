@extends('master')

        <div class="background-top">
            <div class="background-bottom">
              <div class="" data-virtual-container="">
                    <div class="general-page container">
                        <div class="row index-page">
                            <div class="col-sm-8">
                                <div id="hit-games" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#hit-games" data-slide-to="0" class=""></li>
                                        <li data-target="#hit-games" data-slide-to="1" class=""></li>
                                        <li data-target="#hit-games" data-slide-to="2" class=""></li>
                                        <li data-target="#hit-games" data-slide-to="3" class="active"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item">
                                            <a href="{{URL::to('/game/terraria')}}" title="Terraria">
                                                <img src="images/iggame/TER4.jpg" alt="Terraria logo">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{URL::to('/game/stardewvalley')}}" title="Stardew Valley">
                                                <img src="images/iggame/STAR.jpg" alt="Stardew Valley">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{URL::to('/game/broforce')}}" title="Broforce">
                                                <img src="images/iggame/bro.jpg" alt="Broforce">
                                            </a>
                                        </div>
                                        <div class="item active">
                                            <a href="{{URL::to('/game/ws4')}}" title="Witch Spring 4">
                                                <img src="images/iggame/ws4.jpg" alt="Witch Spring 4 ">
                                            </a>
                                        </div>
</div>
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#hit-games" role="button" data-slide="prev">
                                    <span class="fa fa-chevron-left prev" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#hit-games" role="button" data-slide="next">
                                    <span class="fa fa-chevron-right next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                    <hr class="transition-timer-carousel-progress-bar" style="width: 98%;">
                                </div>
                                <h2 class="game-section-header">Game mới</h2>
                                <div class="game-section row">
                                    <div class="col-sm-4 col-xs-6">
                                        <a href="{{URL::to('/game/terraria')}}" title="Terraria">
                                        <img src="images/iggame/TER4.jpg" alt="Terraria logo">
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <a href="{{URL::to('/game/stardewvalley')}}" title="Stardew Valley">
                                        <img src="images/iggame/STAR.jpg" alt="Stardew Valley">
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <a href="{{URL::to('/game/broforce')}}" title="Broforce">
                                        <img src="images/iggame/bro.jpg" alt="Broforce">
                                        </a>
                                    </div>
                                   
                                </div>
                                <h2 class="game-section-header">Mới có update</h2>
                                <div class="game-section row">
                                    <div class="col-sm-4 col-xs-6">
                                        <a href="{{URL::to('/game/terraria')}}" title="Terraria">
                                        <img src="images/iggame/TER4.jpg" alt="Terraria logo">
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <a href="{{URL::to('/game/stardewvalley')}}" title="Stardew Valley">
                                        <img src="images/iggame/STAR.jpg" alt="Stardew Valley">
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <a href="{{URL::to('/game/ws4')}}" title="Witch Spring 4">
                                            <img src="images/iggame/ws4.jpg" alt="Witch Spring 4 ">
                                        </a>
                                    </div>
                                    
                                </div>
                                <h2 class="game-section-header">Game hot</h2>
                                <div class="game-section row">
                                    <div class="col-sm-4 col-xs-6">
                                        <a href="{{URL::to('/game/terraria')}}" title="Terraria">
                                        <img src="images/iggame/TER4.jpg" alt="Terraria logo">
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <a href="{{URL::to('/game/stardewvalley')}}" title="Stardew Valley">
                                        <img src="images/iggame/STAR.jpg" alt="Stardew Valley">
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <a href="{{URL::to('/game/broforce')}}" title="Broforce">
                                        <img src="images/iggame/bro.jpg" alt="Broforce">
                                        </a>
                                    </div>
                                </div>

                                {{-- <p class="text-right"><a href="" class="btn btn-success">Xem thêm »</a></p> --}}

                                
                               
                            </div>
                                

                        

        <script type="text/javascript" src="//taigame.org/static/v9/js/bogo.js"></script>
      
        <script src="//taigame.org/static/v9/evercookie/swfobject-2.2.min.js"></script>
        <script src="//taigame.org/static/v9/evercookie/evercookie.js"></script>
