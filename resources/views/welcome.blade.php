@extends('layouts.master')

@section('title')
    Glint Laravel SPA
@endsection

@section('content')
    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Welcome to Glint</h3>

                <h1>
                    We are a creative group <br>
                    of people who design <br>
                    influential brands and <br>
                    digital experiences.
                </h1>

                <div class="home-content__buttons">
                    <a href="#contact" class="smoothscroll btn btn--stroke">
                        Start a Project
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        More About Us
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->
@endsection