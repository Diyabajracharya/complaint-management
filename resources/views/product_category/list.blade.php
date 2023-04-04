

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no">
    <title> Complaint Management</title>

    <link rel="shortcut icon" href={{asset("assets_2/images/fav.jpg")}}>
    <link rel="stylesheet" href={{asset("assets_2/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("assets_2/css/fontawsom-all.min.css")}}>
    <link rel="stylesheet" href={{asset("assets_2/css/animate.css")}}>
    <link rel="stylesheet" href={{asset("assets_2/plugins/slider/css/owl.carousel.min.css")}}>
    <link rel="stylesheet" href={{asset("assets_2/plugins/slider/css/owl.theme.default.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("assets_2/css/style.css")}} />
</head>

<body>

<!--####################### Header Starts Here ###################-->
<header class="container-fluid">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="cont-det">
                        <li>987987090</li>
                        <li>complaint@mail.com</li>
                    </ul>
                </div>
                <div class="col-md-6 d-none d-lg-block">
                    <ul class="social-link">
                        <li><a><i class="fab fa-github"></i></a></li>
                        <li><a><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a><i class="fab fa-twitter"></i></a></li>
                        <li> <a><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo">
                    <a href="index.html">
                        <img src={{asset("assets_2/images/logo.png")}} alt="">
                    </a>

                    <a data-toggle="collapse" data-target="#nav-head" href="#nav-head" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                </div>
                <div class="col-md-9 ">
                    <div class="contact d-none d-md-block">
                        <ul>
                            <li>
                                <div class="cont-ro">
                                    <div class="ico">
                                        <i class="fas fa-phone-volume"></i>
                                    </div>
                                    <div class="det">
                                        <p>Contact Us</p>
                                        <b>3456456</b>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cont-ro">
                                    <div class="ico">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="det">
                                        <p>Contact Us</p>
                                        <b>45456456</b>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div id="nav-head" class="nav-part d-none d-md-block">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about_us.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="">Pages</a></li>
                            <li><a href="contact_us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Product Categories</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-product-hunt"></i> Product</a></li>
                <li><i class="fas fa-angle-double-right"></i> Category</li>
            </ul>
        </div>
    </div>
</div>


<!--####################### Services Starts Here ###################-->

<div class="service-container container-fluid">
    <div class="container">
        <div class="row">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add Product Category
            </button>            <table class="table">
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$category->name}}</td>
                        <td></td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{action([\App\Http\Controllers\ProductController::class,'keep'])}}" enctype="multipart/form-data">
                    @csrf
                    <label>Category:</label>
                    <input type="text" name="name" required>

                    <input type="Submit">
                </form>
            </div>
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--            </div>--}}
        </div>
    </div>
</div>

{{--<!--####################### footer Starts Here ###################-->--}}
{{--<footer>--}}
{{--    <div class="inner">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3 foot-about">--}}
{{--                    <h4>About US</h4>--}}

{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit libero pellentesque libero interdum, id mattis felis dictum. Praesent eget lacus tempor justo efficitur malesuada. Cras ut suscipit nisi.</p>--}}

{{--                    <ul>--}}
{{--                        <li>23 Rose Stren Melbourn</li>--}}
{{--                        <li>sales@smarteyeapps.com</li>--}}
{{--                        <li>+91 876 766 554</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--                <div class="col-md-3 foot-post">--}}
{{--                    <h4>Latest Posts</h4>--}}

{{--                    <div class="post-row">--}}
{{--                        <div class="image">--}}
{{--                            <img src="{{asset('assets_2/images/blog/blog_01.jpg' )}}alt="">--}}
{{--                        </div>--}}
{{--                        <div class="detail">--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="post-row">--}}
{{--                        <div class="image">--}}
{{--                            <img src="{{asset('assets_2/images/blog/blog_02.jpg')}} alt="">--}}
{{--                        </div>--}}
{{--                        <div class="detail">--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="post-row">--}}
{{--                        <div class="image">--}}
{{--                            <img src={{asset("assets_2/images/blog/blog_03.jpg")}} alt="">--}}
{{--                        </div>--}}
{{--                        <div class="detail">--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3 foot-services">--}}
{{--                    <h4>Our Services</h4>--}}

{{--                    <ul>--}}
{{--                        <li><a href="">Target Statergy</a></li>--}}
{{--                        <li><a href="">Web Analytics</a></li>--}}
{{--                        <li><a href="">Page Monitering</a></li>--}}
{{--                        <li><a href="">Page Optimization</a></li>--}}
{{--                        <li><a href="">Target Statergy</a></li>--}}
{{--                        <li><a href="">Email Marketing</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--                <div class="col-md-3 foot-news">--}}
{{--                    <h4>News Letter</h4>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, vehicula eget eros. </p>--}}

{{--                    <div class="input-group mb-3">--}}
{{--                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <span class="input-group-text" id="basic-addon2"><i class="fas fa-long-arrow-alt-right"></i></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <ul>--}}
{{--                        <li><i class="fab fa-facebook-square"></i></li>--}}
{{--                        <li><i class="fab fa-twitter-square"></i></li>--}}
{{--                        <li><i class="fab fa-linkedin"></i></li>--}}
{{--                        <li><i class="fab fa-tumblr-square"></i></li>--}}
{{--                        <li><i class="fab fa-github-square"></i></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
{{--<div class="copy">--}}
{{--    <div class="container">--}}
{{--        <a href="https://www.smarteyeapps.com/">2015 &copy; All Rights Reserved | Designed and Developed by Smarteyeapps.com</a>--}}

{{--        <span>--}}
{{--                <a href=""><i class="fab fa-github"></i></a>--}}
{{--                <a href=""><i class="fab fa-google-plus-g"></i></a>--}}
{{--                <a href="https://in.pinterest.com/prabnr/pins/"><i class="fab fa-pinterest-p"></i></a>--}}
{{--                <a href="https://twitter.com/prabinraja89"><i class="fab fa-twitter"></i></a>--}}
{{--                <a href="https://www.facebook.com/freewebtemplatesbysmarteye"><i class="fab fa-facebook-f"></i></a>--}}
{{--            </span>--}}
{{--    </div>--}}

</div>

</body>
<script src={{asset("assets_2/js/jquery-3.2.1.min.js")}}></script>
<script src={{asset("assets_2/js/popper.min.js")}}></script>
<script src={{asset("assets_2/js/bootstrap.min.js")}}></script>
<script src={{asset("assets_2/plugins/scroll-fixed/jquery-scrolltofixed-min.js")}}></script>
<script src={{asset("assets_2/plugins/slider/js/owl.carousel.min.js")}}></script>
<script src={{asset("assets_2/js/script.js")}}></script>


</html>
