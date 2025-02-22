@extends('layouts.layout')
@section('main')
    

        <div class="main-content buttons-with-margin">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="header">
                                        <h4 class="title">Colors</h4>
                                    </div>
                                    <div class="content">
                                        <button class="btn btn-default btn-fill btn-wd">Default</button>
                                        <button class="btn btn-primary btn-fill btn-wd">Primary</button>
                                        <button class="btn btn-info btn-fill btn-wd">Info</button>
                                        <button class="btn btn-success btn-fill btn-wd">Success</button>
                                        <button class="btn btn-warning btn-fill btn-wd">Warning</button>
                                        <button class="btn btn-danger btn-fill btn-wd">Danger</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="header">
                                        <h4 class="title">Styles</h4>
                                    </div>
                                    <div class="content">
                                        <button class="btn btn-wd">Default</button>
                                        <button class="btn btn-fill btn-wd">Fill</button>
                                        <button class="btn btn-fill btn-round btn-wd">Fill + Round</button>
                                        <button class="btn btn-round btn-wd">Round</button>
                                        <button class="btn btn-simple btn-wd">Simple</button>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="header">
                                        <h4 class="title">Buttons with Label</h4>
                                    </div>
                                    <div class="content">
                                        <button type="button" class="btn btn-wd btn-success">
                                            <span class="btn-label">
                                                <i class="fa fa-check"></i>
                                            </span>
                                            Success
                                        </button>

                                        <button type="button" class="btn btn-wd btn-danger">
                                            <span class="btn-label">
                                                <i class="fa fa-times"></i>
                                            </span>
                                            Danger
                                        </button>

                                        <button type="button" class="btn btn-wd btn-info">
                                            <span class="btn-label">
                                                <i class="fa fa-exclamation"></i>
                                            </span>
                                            Info
                                        </button>

                                        <button type="button" class="btn btn-wd btn-warning">
                                            <span class="btn-label">
                                                <i class="fa fa-warning"></i>
                                            </span>
                                            Warning
                                        </button>

                                        <button type="button" class="btn btn-wd btn-default">
                                            <span class="btn-label">
                                                <i class="fa fa-arrow-left"></i>
                                            </span>
                                            Left
                                        </button>

                                        <button type="button" class="btn btn-wd btn-default">
                                            Right
                                            <span class="btn-label btn-label-right">
                                                <i class="fa fa-arrow-right"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="header">
                                        <h4 class="title">Sizes</h4>
                                    </div>
                                    <div class="content">
                                        <button class="btn btn-lg btn-fill">Large</button>
                                        <button class="btn btn-fill">Default</button>
                                        <button class="btn btn-sm btn-fill">Small</button>
                                        <button class="btn btn-xs btn-fill">X-Small</button>


                                        <br>
                                        <button class="btn btn-round btn-lg btn-fill">Large</button>
                                        <button class="btn btn-round btn-fill">Default</button>
                                        <button class="btn btn-round btn-sm btn-fill">Small</button>
                                        <button class="btn btn-round btn-xs btn-fill">X-Small</button>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="header">
                                        <h4 class="title">Button Group</h4>
                                    </div>
                                    <div class="content">
                                        <div class="btn-group">
                                           <button type="button" class="btn btn-default">Left</button>
                                           <button type="button" class="btn btn-default">Middle</button>
                                           <button type="button" class="btn btn-default">Right</button>
                                        </div>

                                        <br><br>
                                        <div class="btn-group">
                                           <button type="button" class="btn btn-default">1</button>
                                           <button type="button" class="btn btn-default">2</button>
                                           <button type="button" class="btn btn-default">3</button>
                                           <button type="button" class="btn btn-default">4</button>
                                        </div>
                                        <div class="btn-group">
                                           <button type="button" class="btn btn-default">5</button>
                                           <button type="button" class="btn btn-default">6</button>
                                           <button type="button" class="btn btn-default">7</button>
                                        </div>
                                        <div class="btn-group">
                                           <button type="button" class="btn btn-default">8</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="header">
                                        <h4 class="title">Pagination</h4>
                                    </div>

                                    <div class="content">
                                        <ul class="pagination">
                                            <!--
                                                color-classes: "pagination-blue", "pagination-azure", "pagination-orange", "pagination-red", "pagination-green"
                                            -->
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li class="active"><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>

                                        <ul class="pagination pagination-no-border">
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li class="active"><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>


                            <div class="header">
                                <h4 class="title">Social buttons</h4>
                            </div>

                            <div class="content">
                                <div class="row">
                                    <div class="col-md-3 social-buttons-demo">
                                        <h4 class="title"><small> Filled </small></h4>
                                        <button class="btn btn-social btn-fill btn-twitter">
                                            <i class="fa fa-twitter"></i> Connect with Twitter
                                        </button><br>
                                        <button class="btn btn-social btn-fill btn-facebook">
                                            <i class="fa fa-facebook-square"></i> Share · 2.2k
                                        </button><br>
                                        <button class="btn btn-social btn-fill btn-google">
                                            <i class="fa fa-google-plus-square"></i> Share on Google+
                                        </button><br>
                                        <button class="btn btn-social btn-fill btn-linkedin">
                                            <i class="fa fa-linkedin-square"></i> Connect with Linkedin
                                        </button><br>
                                        <button class="btn btn-social btn-fill btn-pinterest">
                                            <i class="fa fa-pinterest"></i> Pint it · 212
                                        </button><br>
                                        <button class="btn btn-social btn-fill btn-youtube">
                                            <i class="fa fa-youtube-play"></i> View on Youtube
                                        </button><br>
                                        <button class="btn btn-social btn-fill btn-tumblr">
                                            <i class="fa fa-tumblr-square"></i> Repost
                                        </button><br>
                                        <button class="btn btn-social btn-fill btn-github">
                                            <i class="fa fa-github"></i> Connect with Github
                                        </button><br>
                                        <button class="btn btn-social btn-fill btn-behance">
                                            <i class="fa fa-behance-square"></i> Follow us
                                        </button><br>
                                        <button class="btn btn-social btn-fill btn-dribbble">
                                            <i class="fa fa-dribbble"></i> Find us on Dribbble
                                        </button><br>
                                        <button class="btn btn-social btn-fill btn-reddit">
                                            <i class="fa fa-reddit"></i> Repost · 232
                                        </button><br>
                                        <button class="btn btn-social btn-fill btn-stumbleupon">
                                            <i class="fa fa-stumbleupon"></i> View on StumbleUpon
                                        </button><br>
                                    </div>

                                    <div class="col-md-1 social-buttons-demo">
                                        <h4 class="title"><small>Light</small></h4>
                                        <button class="btn btn-social btn-round btn-twitter">
                                            <i class="fa fa-twitter"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-round btn-facebook">
                                            <i class="fa fa-facebook"> </i>
                                        </button><br>
                                        <button class="btn btn-social btn-round btn-google">
                                            <i class="fa fa-google-plus"> </i>
                                        </button><br>
                                        <button class="btn btn-social btn-round btn-linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-round btn-pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-round btn-youtube">
                                            <i class="fa fa-youtube"> </i>
                                        </button><br>
                                        <button class="btn btn-social btn-round btn-tumblr">
                                            <i class="fa fa-tumblr"> </i>
                                        </button><br>
                                        <button class="btn btn-social btn-round btn-github">
                                            <i class="fa fa-github"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-round btn-behance">
                                            <i class="fa fa-behance"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-round btn-dribbble">
                                            <i class="fa fa-dribbble"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-round btn-reddit">
                                            <i class="fa fa-reddit"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-round btn-stumbleupon">
                                            <i class="fa fa-stumbleupon"></i>
                                        </button><br>
                                    </div>
                                    <div class="col-md-1 social-buttons-demo">
                                        <h4 class="title"><small>Simple</small></h4>
                                        <button class="btn btn-social btn-simple btn-twitter">
                                            <i class="fa fa-twitter"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-facebook">
                                            <i class="fa fa-facebook-square"> </i>
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-google">
                                            <i class="fa fa-google-plus-square"> </i>
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-linkedin">
                                            <i class="fa fa-linkedin-square"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-youtube">
                                            <i class="fa fa-youtube"> </i>
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-tumblr">
                                            <i class="fa fa-tumblr-square"> </i>
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-github">
                                            <i class="fa fa-github"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-behance">
                                            <i class="fa fa-behance"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-dribbble">
                                            <i class="fa fa-dribbble"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-reddit">
                                            <i class="fa fa-reddit"></i>
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-stumbleupon">
                                            <i class="fa fa-stumbleupon"></i>
                                        </button><br>
                                    </div>
                                    <div class="col-md-3 social-buttons-demo">
                                       <h4 class="title"><small>With Text</small></h4>
                                        <button class="btn btn-social btn-simple btn-twitter">
                                            <i class="fa fa-twitter"></i> Connect with Twitter
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-facebook">
                                            <i class="fa fa-facebook-square"></i> Share · 2.2k
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-google">
                                            <i class="fa fa-google-plus-square"></i> Share on Google+
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-linkedin">
                                            <i class="fa fa-linkedin-square"></i> Connect with Linkedin
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-pinterest">
                                            <i class="fa fa-pinterest"></i> Pint it · 212
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-youtube">
                                            <i class="fa fa-youtube-play"></i> View on Youtube
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-tumblr">
                                            <i class="fa fa-tumblr-square"></i> Repost
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-github">
                                            <i class="fa fa-github"></i> Connect with Github
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-behance">
                                            <i class="fa fa-behance-square"></i> Follow us
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-dribbble">
                                            <i class="fa fa-dribbble"></i> Find us on Dribbble
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-reddit">
                                            <i class="fa fa-reddit"></i> Repost · 232
                                        </button><br>
                                        <button class="btn btn-social btn-simple btn-stumbleupon">
                                            <i class="fa fa-stumbleupon"></i> View on StumbleUpon
                                        </button><br>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
        

@endsection
        
