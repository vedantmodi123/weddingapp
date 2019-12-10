@extends('master')
<link rel="stylesheet" href="{{ asset('public/frontend/css/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/style2.css') }}">
@section('title')
Welcome
@endsection

@section('content')
<style>
.fa{
    font-size: 50px;
}
</style>
<article id='device'>
    <section id='app'>
        <div class="slider slider-nav">
            <div>
                <h3>Pick Up</h3>
            </div>
            <div>
                <h3>Drop-Off</h3>
            </div>
            <div>
                <h3>My Trips</h3>
            </div>
        </div>

        <div class="slider slider-for" id='content'>
            <div id='home'>
                <form id="pickform" method="POST" action="{{ route('book.flight') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="val_type" value="1">
                    <div class="text-input">
                        <input id="flight_num" name="flightno" type="text" placeholder="Enter Flight Number"
                            autocomplete="off" required />
                        <label for="flight_num">Flight Number</label>
                    </div>

                    <div class="text-input">
                        <input id="date" type="text" name="date" placeholder="Date of Flight" autocomplete="off"
                            required />
                        <label for="date">Date of Flight</label>
                    </div>

                    <div class="text-input">
                        <input id="nopeople" type="number" name="nopeople" placeholder="Total People Number"
                            autocomplete="off" required />
                        <label for="nopeople">Number of People</label>
                    </div>

                    <div id="holder" style="display: block;">
                        <div style="display:flex;">
                            <div class="button" onclick="window.location.href='{{ route('home') }}'" style="float:left;">
                                <p class="btnText">CANCEL</p>
                                <div class="btnTwo">
                                    <p class="btnText2">X</p>
                                </div>
                            </div>
                        
                            <div class="button" onclick="submitfunc();" style="float:right;">
                                <p class="btnText">READY?</p>
                                <div class="btnTwo">
                                    <p class="btnText2">GO!</p>
                                </div>
                            </div>
                            
                            <button class="submit" type="submit" style="display: none"></button>

                            
                        </div>
                    </div>
                </form>
            </div>

            <div id='save'>
                <form id="pickform" method="POST" action="{{ route('book.flight') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="val_type" value="1">
                    <div class="text-input">
                        <input id="flight_num" name="flightno" type="text" placeholder="Enter Flight Number"
                            autocomplete="off" required />
                        <label for="flight_num">Flight Number</label>
                    </div>

                    <div class="text-input">
                        <input id="date" type="text" name="date" placeholder="Date of Flight" autocomplete="off"
                            required />
                        <label for="date">Date of Flight</label>
                    </div>

                    <div class="text-input">
                        <input id="nopeople" type="number" name="nopeople" placeholder="Total People Number"
                            autocomplete="off" required />
                        <label for="nopeople">Number of People</label>
                    </div>

                    <div id="holder" style="display: block;">
                        <div style="display:flex;">
                            <div class="button" onclick="window.location.href='{{ route('home') }}'" style="float:left;">
                                <p class="btnText">CANCEL</p>
                                <div class="btnTwo">
                                    <p class="btnText2">X</p>
                                </div>
                            </div>
                            <div class="button" onclick="submitfunctwo();" style="float:right;">
                                <p class="btnText">READY?</p>
                                <div class="btnTwo">
                                    <p class="btnText2">GO!</p>
                                </div>
                            </div>
                            <button class="submittwo" type="submit" style="display: none"></button>
                        </div>
                    </div>
                </form>
            </div>

            <div id='profile'>
                @foreach($data as $dt)
                <div class="card">
                    <span style="font-size: 17px">Flight No. {{ $dt->flight_no }}</span>
                    <br>
                    <span style="font-size: 13px;">Type : @if($dt->val_type == 2) Drop-Off @else Pickup
                        @endif</span>
                    <br>
                    <span style="font-size: 13px;">No of People : {{ $dt->nopeople }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</article>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
<script>
    function submitfunc() {
        $('.submit').trigger('click');
    }
    function submitfunctwo() {
        $('.submittwo').trigger('click');
    }
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        mobileFirst: true,
        speed: 500
    });

    $('.slider-for').slick({
        mobileFirst: true,
        infinite: false,
        centerMode: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        asNavFor: '.slider-nav',
        mobileFirst: true,
        speed: 300,
        adaptiveHeight: true
    });

    const GRADIENT_ONE = [[255,255,255], [255,255,255]];
    const GRADIENT_TWO = [[255,255,255], [255,255,255]];
    const GRADIENT_THREE = [[255,255,255], [255,255,255]];

    // precision is 10 for 10ths, 100 for 100ths, etc.
    function roundUp(num, precision) {
        return Math.ceil(num * precision) / precision
    }

const interpolateRGB = function(color1, color2, factor) {
if (arguments.length < 3) { factor=0.5; } var result=color1.slice(); for (var i=0;i<3;i++) {
    result[i]=Math.round(result[i] + factor*(color2[i]-color1[i])); } return result; }; let
    h=document.getElementById('home'); let home_rect=h.getBoundingClientRect(); let prev_left=home_rect.left; let
    breakpoint_1=home_rect.left - home_rect.width; let breakpoint_2=breakpoint_1 - home_rect.width; setInterval(()=> {
    let rect = h.getBoundingClientRect();
    let left = rect.left;
    if (prev_left === left) return;
    let sliding;
    if (prev_left > left) sliding = 'left';
    if (prev_left < left) sliding='right' ; let slide; if (left> breakpoint_1) {
        if (sliding === 'left') slide = 2; // entering slide 2
        else slide = 1; // leaving slide 2 into slide 1

        let delta = home_rect.left - left;
        let factor = roundUp(delta / home_rect.width, 10);

        let [g0r, g0g, g0b] = interpolateRGB(GRADIENT_ONE[0], GRADIENT_TWO[0], factor);
        let [g1r, g1g, g1b] = interpolateRGB(GRADIENT_ONE[1], GRADIENT_TWO[1], factor);

        $('#app').css('background', `linear-gradient(11deg,
        rgb(${g1r}, ${g1g}, ${g1b}) 5%,
        rgb(${g0r}, ${g0g}, ${g0b})
        )` );
        }
        if (left <= breakpoint_1 && left>= breakpoint_2) {
            if (sliding === 'left') slide = 3; // entering slide 3
            else slide = 2; // leaving slide 3 into slide 2

            let delta = home_rect.left - left;
            let factor = roundUp(delta / home_rect.width, 10) - 1;

            let [g0r, g0g, g0b] = interpolateRGB(GRADIENT_TWO[0], GRADIENT_THREE[0], factor);
            let [g1r, g1g, g1b] = interpolateRGB(GRADIENT_TWO[1], GRADIENT_THREE[1], factor);

            $('#app').css('background', `linear-gradient(11deg,
            rgb(${g1r}, ${g1g}, ${g1b}) 5%,
            rgb(${g0r}, ${g0g}, ${g0b})
            )` );
            }

            // console.log(sliding, slide);

            prev_left = left;
            });
</script>
@endsection