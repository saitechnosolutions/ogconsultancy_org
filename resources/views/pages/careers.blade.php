@extends('layouts.includes.default')
@section('title', 'OG CONSULTANCY Careers')
@section('main_content')
     <!-- flat slider -->
  <section class="flat-slider">

      <div class="container-fluid">
          <div class="row">
              <div class="swiper-container mainslider">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <div class="slider-item">
                              <div class="slider-left " >
                                  <div class="slider-left-content " >
                                      <div class="boxv">
                                          <img class="boxvim" src="assets/images/mark-page/OG Career Logo.png" alt="images" >
                                      </div>
                                      <div>
                                      <h3>INTRODUCTION</h3>
                                      <!--<h2>Reputed Immigration Consultant </h2>-->
                                      <p class="cars1">OG Career is a renowned educational and professional guidance company that specializes in providing English language courses for adults and kids of all age groups. With expertise in IELTS and PTE exam preparation, OG Career is a trusted resource for individuals seeking to improve their language skills for immigration purposes. Additionally, the company offers comprehensive consultation services, including guidance for higher education and internships in various countries, including Sri Lanka.</p></div>
                                      <div class="button-slider">
                                          <a href="{{ route('contact') }}" class="button readmore">Contact Us</a>

                                      </div>
                                  </div>
                              </div>
                              <div class="slider-right about_update">
                                  <div class="image-slider">
                                      <img src="{{ asset('assets/images/mark-page/career banner1.jpg') }}"
                                          alt="images" style="margin-left:60px;">
                                  </div>
                                  <div class="mark-slider-1">
                                      <img src="assets/images/mark-page/mark-slide-item-1.png" alt="images">
                                  </div>
                                  <div class="mark-slider-2">
                                      <img src="assets/images/mark-page/mark-slide-item-2.png" alt="images">
                                  </div>
                                  <div class="mark-slider-3">
                                      <img src="assets/images/mark-page/mark-slide-item-3.png" alt="images">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--<div class="swiper-slide">-->
                      <!--    <div class="slider-item">-->
                      <!--        <div class="slider-left">-->
                      <!--            <div class="slider-left-content">-->
                      <!--                <h3>CAREERS</h3>-->
                                      <!--<h2>Reputed Immigration Consultant </h2>-->
                      <!--                <p>We assist individuals in securing internship placements that align with their interests and career goals, providing them with invaluable exposure to different work environments and enhancing their prospects for future employment.</p>-->
                      <!--                <div class="button-slider">-->
                      <!--                    <a href="{{ route('contact') }}" class="button readmore">Contact Us</a>-->
                      <!--                    {{-- <a href="#" class="video button btn-slider readmore">Call-->
                      <!--                        Me Back</a> --}}-->
                      <!--                </div>-->
                      <!--            </div>-->
                      <!--        </div>-->
                      <!--        <div class="slider-right about_update wow fadeInRight">-->
                      <!--            <div class="image-slider">-->
                      <!--                <img src="{{ asset('assets/images/image-box/about_update_1.jpg') }}"-->
                      <!--                    alt="images">-->
                      <!--            </div>-->
                      <!--            <div class="mark-slider-1">-->
                      <!--                <img src="assets/images/mark-page/mark-slide-item-1.png" alt="images">-->
                      <!--            </div>-->
                      <!--            <div class="mark-slider-2">-->
                      <!--                <img src="assets/images/mark-page/mark-slide-item-2.png" alt="images">-->
                      <!--            </div>-->
                      <!--            <div class="mark-slider-3">-->
                      <!--                <img src="assets/images/mark-page/mark-slide-item-3.png" alt="images">-->
                      <!--            </div>-->
                      <!--        </div>-->
                      <!--    </div>-->
                      <!--</div>-->
                  </div>
                  <!--<div class="swiper-button-next btn-slide-next"></div>-->
                  <!--<div class="swiper-button-prev btn-slide-prev active"></div>-->
              </div>
          </div>
      </div>
  </section>
  <!-- /flat slider -->

  <!-- flat features -->
  
  
  <section class="tf-space flat-testimonial">
      <div class="">
          <div class="container countries_container " id="canada">
              <div class="row align-items-center">
                  <div class="col-md-6 ">
                      <div class="testimonial-content-left">
                          <div class="testimonial-post lawyer_section_image_container">
                              <div class="main-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"
                                  style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                  <img src="{{ asset('assets/images/mark-page/who are we1.jpg') }}" alt="images">
                              </div>
                              <div class="mark-post-1">
                                  <img src="assets/images/mark-image/mark-post-testimonial.png" alt="images">
                              </div>
                              <div class="mark-post-2 lawyer_section_mark2">
                                  <img src="assets/images/mark-image/mark-testimonial-2.png" alt="images">
                              </div>

                              <div class="mark-post-3">
                                  <img src="assets/images/mark-image/mark-testimonial-2.png" alt="images">
                              </div>

                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="country_content wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
                          style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                          <div class="features-content-left features_top_heading">
                              <h2>Who Are We ?</h2>
                          </div>
                          <p>One of our key areas of expertise lies in preparing students for internationally recognized language proficiency exams such as IELTS and PTE. Our experienced instructors employ effective teaching methodologies, exam-specific strategies, and ample practice materials to ensure our students are well-prepared to achieve their desired scores. We understand the significance of these exams for individuals pursuing immigration opportunities, and we strive to equip our students with the necessary skills and confidence to excel in their language proficiency tests. In addition to our language courses and exam preparation, OG Career also offers comprehensive consultation services. We provide guidance and support to individuals seeking higher education opportunities, whether it be in Sri Lanka or other countries. 
                          </p>
                         
                          <h4 class="whha "> - Ms. Harishma  Chief Operating Officer(COO)</h4>
                          <!--<h4 class="whha1">Chief Operating Officer(COO)</h4>-->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  
  
  
  
  
  <section class="tf-space flat-features about_section_padding_udpate">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="features-content" data-wow-delay="0ms" data-wow-duration="1500ms">
                      <div class="section-titl">
                          <h3 class="section-heading">Who Are We ?</h3>
                          <div class="features-content-left  wow fadeInLeft">
                             <p class="wp">  Our team of knowledgeable consultants assists students in selecting the most suitable universities, colleges, or courses based on their academic aspirations, financial considerations, and career objectives. We understand that choosing the right educational path is crucial for personal and professional development, and we are committed to helping individuals make well-informed decisions</p>
                             <!--<img src="assets/images/mark-page/OG Career Logo.png" alt="images">-->
                          </div>
                      </div>
                      <div class="features-content-right wow fadeInRight ">
                          <p class="wp1">
                             OG Career recognizes the value of practical experience in shaping one's career. Through our consultation services, we also facilitate internships in various countries. We assist individuals in securing internship placements that align with their interests and career goals, providing them with invaluable exposure to different work environments and enhancing their prospects for future employment.

                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 about_us_container_section">
                  <div class="swiper-container car "  >
                      <!--<div class="swiper-wrapper" >-->
                          <div class="col-lg-6 col-sm-12" style="justify-content:center;display:flex;">
                          <div class="swipevm">
                              <div class="features-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1000ms">
                                  <div class="item-shape item-shape1"></div>
                                  <div class="item-shape item-shape2"></div>
                                  <div class="features-box-inner">
                                      <div class="icon-features">
                                          <img src="assets/images/image-box/features-icon-1.jpg" alt="images">
                                      </div>
                                      <h3 class="headline">Vision</h3>
                                  </div>
                                  <div class="flip-card">
                                      <div class="service-box flip-card-inner">
                                          <div class="flip-card-front">
                                              <img src="assets/images/mark-page/vision career1.jpg" alt="images">
                                          </div>
                                          <div class="flip-card-back about_flip_card_back">
                                              <p class="visionp">
                                                  "Our vision is to become the foremost provider of English language courses, specializing in exam preparation for IELTS, PTE, and interview skills, with a strong emphasis on language proficiency for immigration purposes."</p>
                                          </div>
                                      </div>
                                  </div>


                              </div>
                          </div>
                          </div>
                          <div class="col-lg-6 col-sm-12" style="justify-content:center;display:flex;">
                          <div class="swipevm">
                              <div class="features-box active wow fadeInUp" data-wow-delay="300ms"
                                  data-wow-duration="1000ms">
                                  <div class="item-shape item-shape1"></div>
                                  <div class="item-shape item-shape2"></div>
                                  <div class="features-box-inner">
                                      <div class="icon-features">
                                          <img src="assets/images/image-box/features-icon-2.jpg" alt="images">
                                      </div>
                                      <h3 class="headline">Mission</h3>
                                  </div>

                                  <div class="flip-card">
                                      <div class="service-box flip-card-inner">
                                          <div class="flip-card-front">
                                              <img src="assets/images/mark-page/mission career1.jpg" alt="images">
                                          </div>
                                          <div class="flip-card-back about_flip_card_back">
                                              <p class="visionp1">"Our mission is to deliver outstanding English language courses that cater to individuals of all age groups, offering comprehensive exam preparation and expert guidance in order to excel in IELTS, PTE, and interview assessments, specifically targeting language proficiency needed for immigration opportunities."</p>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                          </div>
                          
                      <!--</div>-->

                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--<section>-->
  <!--    <div class="container" style="padding:0px 0px 50px 0px">-->
  <!--    <div class="row">-->
  <!--        <div class="col-md-12" style="display:flex;justify-content:center">-->
  <!--        <div class="contact-icon-box updated_contact_icon_box wow fadeInDown col-lg-5">-->
              
  <!--        </div>-->
  <!--        <div class="contact-icon-box updated_contact_icon_box wow fadeInUp  col-lg-5">-->
  <!--          <div class="content"  >-->
  <!--              <h4 style="font-size: 20px; color: #ff3333;"> - Ms. Harishma Chief Operating Officer</h4>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--    </div>-->
  <!--    </div>-->
  <!--    </div>-->
  <!--</section>-->
 

@endsection