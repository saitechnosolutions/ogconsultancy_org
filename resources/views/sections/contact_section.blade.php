<section class="tf-space  flat-contact">
    <div class="container">
        <div class="row flex-column">
            <div class="col-md-12">
                <div class="section-title link-style-2">
                    <h3 class="section-heading e_services_section_heading">Let's Talk</h3>
                    <div class="features-content-left">
                        <h2 class="e-services_title">Speak With Us
                        </h2>
                    </div>

                    <div class="row contact_section_address_container">
                        <div class="contact-icon-box updated_contact_icon_box wow fadeInUp col-lg-4" data-wow-delay="0ms"
                            data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                            <div class="icon meta-address contact_map_icon_first"></div>
                            <div class="content">
                                <h4>No.21, 1st Floor, <br> Narayanapuram Pallikaranai, <br> Velachery Main Road, <br>
                                    Chennai-600100, Tamil Nadu</h4>
                                {{-- No.21, 1st Floor,Narayanapuram Pallikaranai,Velachery Main Road Chennai-600100, Tamil Nadu --}}
                            </div>
                        </div>
                        <div class="contact-icon-box updated_contact_icon_box wow fadeInUp col-lg-4"
                            data-wow-delay="300ms" data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                            <div class="icon meta-mail"></div>
                            <div class="content">
                                <a href="mailto:info@ogconsultancy.in">
                                    <h4>info@ogconsultancy.org</h4>
                                </a>

                            </div>
                        </div>
                        <div class="contact-icon-box updated_contact_icon_box wow fadeInUp col-lg-4"
                            data-wow-delay="600ms" data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                            <div class="icon meta-phone"></div>
                            <div class="content">
                                <a href="tel:+91 6383 900 753">
                                    <h4>+91 6383 900 753</h4>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="title">
                    <h3>Don’t Hesitate
                        To Send Your Message To Us</h3>
                </div>
                <div class="row align-items-center">
                    <div class="contact-form wow fadeInRight col-lg-6" data-wow-delay="0ms" data-wow-duration="1500ms"
                        id="comments"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                        <form method="post" id="contactform_udpate" class="comment-form form-submit" action="/mail">
                            @csrf
                            <div class="text-wrap clearfix">
                                <fieldset class="name-wrap">
                                    <input type="text" id="name" class="tb-my-input" name="name"
                                        tabindex="1" placeholder="Name*" value="" size="32" required="">
                                </fieldset>
                                <fieldset class="email-wrap">
                                    <input type="email" id="email" class="tb-my-input" name="email"
                                        tabindex="2" placeholder="Email*" value="" size="32"
                                        required="">
                                </fieldset>
                            </div>
                            <div class="text-wrap clearfix">
                                <fieldset class="name-wrap">
                                    <input type="number" id="name" class="tb-my-input" name="phone_number"
                                        tabindex="1" placeholder="Phone Number*" value="" size="32"
                                        min="0" required="">
                                </fieldset>
                                <fieldset hidden class="name-wrap">
                                    <input hidden type="text" class="tb-my-input">
                                </fieldset>

                            </div>
                            <fieldset class="message-wrap">
                                <textarea class="contact_text_area" id="comment-message" name="message" rows="13" tabindex="4"
                                    placeholder="Add a comment..."></textarea>
                            </fieldset>
                            <button name="submit" type="submit" id="comment-reply"
                                class="button btn-style4 btn-submit-comment">Send Message</button>
                            <div id="success_message">
                            </div>
                        </form>

                    </div>

                    <div class="col-lg-6 contact_image_container_updated p-3">
                        <div class="cc_iamge_contain">
                            <img src="{{ asset('assets/images/image-box/1OG.jpg') }}" alt="contact_image"
                                class="image-fluid call_us_image">
                        </div>

                        <div class="contact_section_bg_pattern">
                            <img src="assets/images/mark-image/mark-testimonial-2.png" alt="images">
                        </div>

                        <div class="contact_section_bg_pattern2">
                            <img src="assets/images/mark-image/mark-testimonial-2.png" alt="images">
                        </div>
                    </div>

                </div>


            </div>




        </div>
    </div>
</section>