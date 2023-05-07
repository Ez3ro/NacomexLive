<x-app-layout>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="card-header-title">
                    <div class="user1">
                        <div class="user1_pic">
                            <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                        </div>
                        <div class="user1_details">
                            <p>
                                <b>Richard Miles</b>
                            </p>
                            <p>
                                <small>1M subscribers</small>
                            </p>
                        </div>
                        <div class="live_user1">
                            <p>
                                <i class="fa-solid fa-tower-broadcast"></i> Live
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <nav class="card-header-actions">
                    <a class="card-header-action" data-toggle="collapse" href="#card1" aria-expanded="false" aria-controls="card1">
                        <i data-feather="minus-circle"></i>
                    </a>
                    <div class="dropdown">
                        <a class="card-header-action" href="#" role="button" id="card1Settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="card1Settings">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <a href="#" class="card-header-action">
                        <i data-feather="x-circle"></i>
                    </a>
                </nav> -->
            </div>
        </div>
        <div class="card collapse show" id="live_stream_video">
            <div class="card-body collapse show" id="card1">
                <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls></video>
                
                <!-- <div class="card-body collapse show" id="card1"><video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop=""></video></div> -->
                <div class="card-body">
                    <div class="card-video-details">
                        <a href="./layouts/view.html">
                            <h2 class="live-stream-title" style="color: #000;">MLS All Stars vs Liga MX All Stars Live</h2>
                        </a>
                        <p>
                            <span class="live_date">May 4, 2023</span>
                            <span class="live-views">19,255 views</span>
                        </p>
                        <p class="live-desc">Morocco continue to make history and get their first-ever win over Brazil after defeating them 2-1.</p>
                        <span class="tags">#morocco #brazil #casemiro</span>
                        <div class="live_links">
                            <button type="button" class="live_links1">Link 1</button>
                            <button type="button" class="live_links2">Link 2</button>
                            <button type="button" class="live_links3">Link 3</button>
                            <button type="button" class="live_links4">Link 4</button>
                        </div>
                        <div class="social_share">
                            <a href="#">
                                <i class="fa-solid fa-square-share-nodes"></i> Share
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-square-share-nodes"></i> Share
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="live-stream-slider">
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col xl-2 col-lg-3 col-md-4">
                                <div class="card" style="background-color: transparent; border: 0;">
                                    <div class="card-vid">
                                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                                    </div>
                                    <div class="card-body" style="border-bottom: 0; padding: 0;">
                                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    <div class="carousel-item">
                        <div class="col xl-2 col-lg-3 col-md-4">
                            <div class="card" style="background-color: transparent; border: 0;">
                                <div class="card-vid">
                                    <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                                </div>
                                <div class="card-body" style="border-bottom: 0; padding: 0;">
                                    <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="col xl-2 col-lg-3 col-md-4">
                            <div class="card" style="background-color: transparent; border: 0;">
                                <div class="card-vid">
                                    <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                                </div>
                                <div class="card-body" style="border-bottom: 0; padding: 0;">
                                    <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="col xl-2 col-lg-3 col-md-4">
                            <div class="card" style="background-color: transparent; border: 0;">
                                <div class="card-vid">
                                    <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                                </div>
                                <div class="card-body" style="border-bottom: 0; padding: 0;">
                                    <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="col xl-2 col-lg-3 col-md-4">
                            <div class="card" style="background-color: transparent; border: 0;">
                                <div class="card-vid">
                                    <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                                </div>
                                <div class="card-body" style="border-bottom: 0; padding: 0;">
                                    <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="col xl-2 col-lg-3 col-md-4">
                            <div class="card" style="background-color: transparent; border: 0;">
                                <div class="card-vid">
                                    <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                                </div>
                                <div class="card-body" style="border-bottom: 0; padding: 0;">
                                    <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="recommended-panel">
        <div class="card">
            <div class="card-header"> Recommended Channels </div>
                <div class="card-wrapper">
                    <div class="card-body-recommended">
                        <div class="notification-list notification-list--unread">
                            <div class="notification-list_img">
                                <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                            </div>
                            <div class="notification-list_detail">
                                <p>
                                    <b>Richard Miles</b>
                                </p>
                                <p>
                                    <small>1M subscribers</small>
                                </p>
                            </div>
                            <div class="notification-list_subscribe-btn">
                                <button class="subscribe-btn">
                                <i class="fa-solid fa-bell"></i> Subscribe </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body-recommended">
                        <div class="notification-list notification-list--unread">
                            <div class="notification-list_img">
                                <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                            </div>
                            <div class="notification-list_detail">
                                <p>
                                    <b>Richard Miles</b>
                                </p>
                                <p>
                                    <small>1M subscribers</small>
                                </p>
                            </div>
                            <div class="notification-list_subscribe-btn">
                                <button class="subscribe-btn">
                                <i class="fa-solid fa-bell"></i> Subscribe </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body-recommended">
                        <div class="notification-list notification-list--unread">
                            <div class="notification-list_img">
                                <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                            </div>
                            <div class="notification-list_detail">
                                <p>
                                    <b>Richard Miles</b>
                                </p>
                                <p>
                                    <small>1M subscribers</small>
                                </p>
                            </div>
                            <div class="notification-list_subscribe-btn">
                                <button class="subscribe-btn">
                                <i class="fa-solid fa-bell"></i> Subscribe </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body-recommended">
                        <div class="notification-list notification-list--unread">
                            <div class="notification-list_img">
                                <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                            </div>
                            <div class="notification-list_detail">
                                <p>
                                    <b>Richard Miles</b>
                                </p>
                                <p>
                                    <small>1M subscribers</small>
                                </p>
                            </div>
                            <div class="notification-list_subscribe-btn">
                                <button class="subscribe-btn">
                                <i class="fa-solid fa-bell"></i> Subscribe </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body-recommended">
                        <div class="notification-list notification-list--unread">
                            <div class="notification-list_img">
                                <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                            </div>
                            <div class="notification-list_detail">
                                <p>
                                    <b>Richard Miles</b>
                                </p>
                                <p>
                                    <small>1M subscribers</small>
                                </p>
                            </div>
                            <div class="notification-list_subscribe-btn">
                                <button class="subscribe-btn">
                                <i class="fa-solid fa-bell"></i> Subscribe </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body-recommended">
                        <div class="notification-list notification-list--unread">
                            <div class="notification-list_img">
                                <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                            </div>
                            <div class="notification-list_detail">
                                <p>
                                    <b>Richard Miles</b>
                                </p>
                                <p>
                                    <small>1M subscribers</small>
                                </p>
                            </div>
                            <div class="notification-list_subscribe-btn">
                                <button class="subscribe-btn">
                                <i class="fa-solid fa-bell"></i> Subscribe </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body-recommended">
                        <div class="notification-list notification-list--unread">
                            <div class="notification-list_img">
                                <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                            </div>
                            <div class="notification-list_detail">
                                <p>
                                    <b>Richard Miles</b>
                                </p>
                                <p>
                                    <small>1M subscribers</small>
                                </p>
                            </div>
                            <div class="notification-list_subscribe-btn">
                                <button class="subscribe-btn">
                                <i class="fa-solid fa-bell"></i> Subscribe </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn-viewall">View All</a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="recent-stream">
    <div class="container-fluid">
        <h2>RECENT STREAM VIDEOS</h2>
        <div class="recent-stream-wrapper">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-vid">
                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                        <p class="card-date">May 5, 2021</p>
                        <span class="card-tags">futbol</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-vid">
                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                        <p class="card-date">May 5, 2021</p>
                        <span class="card-tags">futbol</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-vid">
                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                        <p class="card-date">May 5, 2021</p>
                        <span class="card-tags">futbol</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-vid">
                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                        <p class="card-date">May 5, 2021</p>
                        <span class="card-tags">futbol</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-vid">
                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                        <p class="card-date">May 5, 2021</p>
                        <span class="card-tags">futbol</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-vid">
                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                        <p class="card-date">May 5, 2021</p>
                        <span class="card-tags">futbol</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-vid">
                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                        <p class="card-date">May 5, 2021</p>
                        <span class="card-tags">futbol</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-vid">
                        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted="" autoplay="" loop="" controls>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">MLS All Stars vs Liga MX All Stars Live</h5>
                        <p class="card-date">May 5, 2021</p>
                        <span class="card-tags">futbol</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-app-layout>