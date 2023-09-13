@extends('layouts.includes.default')
@section('title', 'OG CONSULTANCY | E SERVICES')
@section('main_content')
<style>
    .home_banner {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) , url(../assets/images/blur.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 100vh;
    display: flex;
    align-items: center;
}
h2{
      font-size: 5rem;
    text-align: center;
    justify-content: center;
    display: flex;
    align-items: center;
    color:#fff;
}
</style>
    <!--@include('sections.e_services_section')-->
   <section class="home_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="slide__title aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">WEBSITE UNDER MAINTANANCE <br> FOR 5 WORKING DAYS
                      </h2>

                    

                    
                </div>
            </div>
        </div>

    </section>
    
@endsection