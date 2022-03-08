<!--Footer-->
<footer class="footer_top padding-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 footer_panel heading_space">
                <a href="{{ route('home') }}" class="footer_logo bottom30">
                    <img style="width: 250px;" src="{{ asset('images/logo.png') }}" alt="envas">
                </a>
                <p class="bottom30">
                    Based in the Malaysia, Apacling have offices in a number of different locations which enables us to remain in touch
                    with all local demands, needs and requirements.
                </p>
                <ul class="social_icon heading_top">
                    <li><a href="{{ route('home') }}" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{ route('home') }}" class="twitter"><i class="icon-twitter4"></i></a></li>
                    <li><a href="{{ route('home') }}" class="dribble"><i class="icon-dribbble5"></i></a></li>
                    <li><a href="{{ route('home') }}" class="instagram"><i class="icon-instagram"></i></a></li>
                    <li><a href="{{ route('home') }}" class="vimo"><i class="icon-vimeo4"></i></a></li>
                </ul>
            </div>

            <div class="col-sm-4 footer_panel heading_space"></div>

            <div class="col-sm-4 footer_panel heading_space">
                <h3 class="heading bottom30">Useful <span class="green_t">Links</span></h3>
                <ul class="links">
                    <li><a href="{{ route('home') }}"><i class="icon-chevron-small-right"></i>Home</a></li>
                    <li><a href="{{ route('about') }}"><i class="icon-chevron-small-right"></i>About Us</a></li>
                    <li><a href="{{ route('home') }}"><i class="icon-chevron-small-right"></i>Services</a></li>
                    <li><a href="{{ route('home') }}"><i class="icon-chevron-small-right"></i>Why Us</a></li>
                    <li><a href="{{ route('home') }}"><i class="icon-chevron-small-right"></i>Careers</a></li>
                    <li><a href="{{ route('home') }}"><i class="icon-chevron-small-right"></i>Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright &copy; <?php echo date('Y'); ?> <a href="{{ route('home') }}">{{ config('app.name') }}</a>. all rights
                    reserved.</p>
            </div>
        </div>
    </div>
</div>
<!--Footer Ends-->
