@extends('website.layout')

@section('page_title')
    Home
@endsection

@section('page_styles')
@endsection

<?php
$banner_path = 0;
?>

@section('page_content')
    <section id="comming_soon" class="padding">
        <div class="comming_center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1 class="text-uppercase">Coming Soon</h1>
                        <p class="bottom30">Our website is under construction, follow us for update now!</p>
                        <form class ="callus bottom40" role = "form">
                            <div class = "row">
                                <div class ="col-sm-3"></div>
                                <div class ="col-sm-6">
                                    <div class = "input-group">
                                        <input type="email" class ="form-control" placeholder="Email">
                                        <span class = "input-group-btn">
                    <button class ="btn btn-coming btn-green" type ="button"> Subscribe</button>
                  </span>
                                    </div>
                                </div>
                                <div class ="col-sm-3"></div>
                            </div><!-- /.row -->
                        </form>
                        <div id="clockdiv">
                            <div class="count-inner">
                                <span class="days"></span>
                                <div class="smalltext">Days</div>
                            </div>
                            <div class="count-inner">
                                <span class="hours"></span>
                                <div class="smalltext">Hours</div>
                            </div>
                            <div class="count-inner">
                                <span class="minutes"></span>
                                <div class="smalltext">Minutes</div>
                            </div>
                            <div class="count-inner">
                                <span class="seconds"></span>
                                <div class="smalltext">Seconds</div>
                            </div>
                        </div>
                        <ul class="social_icon top30">
                            <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
                            <li><a href="#." class="dribble"><i class="icon-dribbble5"></i></a></li>
                            <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
                            <li><a href="#." class="vimo"><i class="icon-vimeo4"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page_scripts')
    <script>
        function getTimeRemaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }

        function initializeClock(id, endtime) {
            var clock = document.getElementById(id);
            var daysSpan = clock.querySelector('.days');
            var hoursSpan = clock.querySelector('.hours');
            var minutesSpan = clock.querySelector('.minutes');
            var secondsSpan = clock.querySelector('.seconds');

            function updateClock() {
                var t = getTimeRemaining(endtime);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                    clearInterval(timeinterval);
                }
            }

            updateClock();
            var timeinterval = setInterval(updateClock, 1000);
        }

        var deadline = new Date(Date.parse(new Date()) + 23 * 24 * 60 * 60 * 1000);
        initializeClock('clockdiv', deadline);</script>
@endsection
