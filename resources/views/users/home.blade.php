@extends('master')

@section('title')
Welcome
@endsection

@section('content')
<style>
.fa{
    font-size: 50px;
}
</style>
<!-- Our First Divider -->
<section class="parallax bgc-overlay-white5 ulockd_bgi4" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="subscriber-form subscribe">
                <img src="{{ asset('public/images/Wedding_ring.png') }}"
                                        class="wedding-ring" alt="">
                </div>
            </div>
        </div>
        <div class="row ulockd-mrgn1225">
            <a href="{{ URL::to('/pickup/air') }}">
                <div class="col-xs-4 col-sm-4 col-md-4 home-block">
                    <div class="ulockd-ffact-one text-center">
                        <p>Pickup & Drop-off</p>
                        <i class="fa fa-7x fa-taxi"></i>
                    </div>
                </div>
            </a>
            <a href="#" >
                <div class="col-xs-4 col-sm-4 col-md-4 home-block">
                    <div class="ulockd-ffact-one text-center">
                        <p>Gift Pickup</p>
                        <i class="fa fa-gift"></i>
                    </div>
                </div>
            </a>
            <a href="#" >
                <div class="col-xs-4 col-sm-4 col-md-4 home-block">
                    <div class="ulockd-ffact-one text-center">
                        <p>Hair & Makeup</p>
                        <i class="fa fa-magic"></i>
                    </div>
                </div>
            </a>
            <a href="#" >
                <div class="col-xs-4 col-sm-4 col-md-4 home-block">
                    <div class="ulockd-ffact-one text-center">
                        <p>Photographer</p>
                        <i class="fa fa-camera"></i>
                    </div>
                </div>
            </a>
            
            <a href="#" >
                <div class="col-xs-4 col-sm-4 col-md-4 home-block">
                    <div class="ulockd-ffact-one text-center">
                        <p>Playlist</p>
                        <i class="fa fa-music"></i>
                    </div>
                </div>
            </a>
            <a href="#" >
                <div class="col-xs-4 col-sm-4 col-md-4 home-block">
                    <div class="ulockd-ffact-one text-center">
                        <p>View Menu</p>
                        <i class="fa fa-edit"></i>
                    </div>
                </div>
            </a>
            <a href="#" >
                <div class="col-xs-4 col-sm-4 col-md-4 home-block">
                    <div class="ulockd-ffact-one text-center">
                        <p>Photos</p>
                        <i class="fa fa-image"></i>
                    </div>
                </div>
            </a>
            <a href="#" >
                <div class="col-xs-4 col-sm-4 col-md-4 home-block">
                    <div class="ulockd-ffact-one text-center">
                        <p>Upload Photos</p>
                        <i class="fa fa-upload"></i>
                    </div>
                </div>
            </a>
            <a href="#" >
                <div class="col-xs-4 col-sm-4 col-md-4 home-block">
                    <div class="ulockd-ffact-one text-center">
                        <p>Reported Issues</p>
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                </div>
            </a>
            <!-- <a href="#" >
                <div class="col-xs-4 col-sm-4 col-md-4 home-block">
                    <div class="ulockd-ffact-one text-center">
                        <p>Feedback</p>
                        <i class="fa fa-comment"></i>
                    </div>
                </div>
            </a> -->
        </div>
    </div>
</section>


@endsection