<section class="tf-space flat-contact e_services_section_flat_contact">
    <div class="container">
        <div class="row e_services_mobile_view">
            <div class="col-md-4 e_services_container_left_content mobile_view">
                <div class="section-title link-style-2">
                    <h3 class="section-heading e_services_section_heading">OG Consultancy</h3>
                    <div class="features-content-left">
                        <h2 class="e-services_title">E-Services</h2>
                    </div>

                    {{-- form desktop view start --}}
                    <div class="contact-icon-box wow fadeInUp desktop_view" data-wow-delay="0ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="widget widget-search">
                            <h3 class="widget-title e_services_widget_title section-24px-barlow">
                                Online Status Check
                            </h3>
                            <form action="" method="post" class="search-form e_services_search_form mt-5"
                                enctype="multipart/form-data" id="online_status_form">
                                @csrf
                                <div>
                                    <fieldset class="name-wrap e_services_fieldset">
                                        <input type="text" class="tb-my-input" name="name" tabindex="1"
                                            placeholder="Enter your ID..." value="" size="32"
                                            aria-required="true" required="" id="online_status_input">
                                    </fieldset>
                                </div>
                                <div class="mt-4">
                                    <button class="e_service_btn" type="submit">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="contact-icon-box wow fadeInUp desktop_view" data-wow-delay="300ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="widget widget-search">
                            <h3 class="widget-title e_services_widget_title section-24px-barlow">
                                Description
                            </h3>
                            <form action="" class="search-form e_services_search_form mt-5"
                                enctype="multipart/form-data" id="job_description_form">
                                @csrf
                                <div>
                                    <fieldset class="name-wrap e_services_fieldset">
                                        <input type="text" class="tb-my-input" name="name" tabindex="1"
                                            placeholder="Enter your ID..." value="" size="32"
                                            aria-required="true" required="" id="job_description_input">
                                    </fieldset>
                                </div>
                                <div class="mt-4">
                                    <button class="e_service_btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="contact-icon-box wow fadeInUp desktop_view" data-wow-delay="300ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="widget widget-search">
                            <h3 class="widget-title e_services_widget_title section-24px-barlow">
                                Registration Application
                            </h3>

                            <div class="mt-3">
                                <button type="button" class="e_services_app_btn mt-2" data-toggle="modal"
                                    data-target="#eServicesFormModal">
                                    Add Resigtration Application
                                </button>
                            </div>

                        </div>
                    </div>


                    {{-- form desktop view end --}}



                    {{-- form mobile view start --}}
                    <div class="contact-icon-box wow fadeInUp mobile_view" data-wow-delay="0ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="widget widget-search">
                            <div class="online_status_input_container" id="online_status_input_container">
                                <h3 class="widget-title e_services_widget_title section-24px-barlow">
                                    Online Status Check
                                </h3>
                                <div class="">
                                    <i class="fa fa-angle-down e_services_down_arrow" aria-hidden="true"></i>
                                </div>
                            </div>


                            <form action="" method="post"
                                class="search-form e_services_search_form mt-5 online_status_form_mobile"
                                enctype="multipart/form-data" id="online_status_form_mobile" style="display: none">
                                @csrf
                                <div>
                                    <fieldset class="name-wrap e_services_fieldset">
                                        <input type="text" class="tb-my-input" name="name" tabindex="1"
                                            placeholder="Enter your ID..." value="" size="32"
                                            aria-required="true" required="" id="online_status_input_mobile">
                                    </fieldset>
                                </div>
                                <div class="mt-4">
                                    <button class="e_service_btn" type="submit">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="contact-icon-box wow fadeInUp mobile_view" data-wow-delay="300ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="widget widget-search">
                            <div class="job_description_input_container" id="job_description_input_container">
                                <h3 class="widget-title e_services_widget_title section-24px-barlow">
                                    Description
                                </h3>
                                <div class="">
                                    <i class="fa fa-angle-down e_services_down_arrow" aria-hidden="true"></i>
                                </div>
                            </div>


                            <form action=""
                                class="search-form e_services_search_form mt-5 job_description_form_mobile"
                                enctype="multipart/form-data" id="job_description_form_mobile" style="display: none">
                                @csrf
                                <div>
                                    <fieldset class="name-wrap e_services_fieldset">
                                        <input type="text" class="tb-my-input" name="name" tabindex="1"
                                            placeholder="Enter your ID..." value="" size="32"
                                            aria-required="true" required="" id="job_description_input_mobile">
                                    </fieldset>
                                </div>
                                <div class="mt-4">
                                    <button class="e_service_btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="contact-icon-box wow fadeInUp mobile_view" data-wow-delay="300ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="widget widget-search">
                            <h3 class="widget-title e_services_widget_title section-24px-barlow">
                                Registration Application
                            </h3>

                            <div class="mt-3">
                                <button type="button" class="e_services_app_btn mt-2" data-toggle="modal"
                                    data-target="#eServicesFormModal">
                                    Add Resigtration Application
                                </button>
                            </div>

                        </div>
                    </div>





                    {{-- form mobile view end --}}

                </div>
            </div>
            <div class="col-md-8 e-services_section mobile_view" id="status_view">

                <div class="contact-form e_services_contact_form wow fadeInRight e_services_desc_content"
                    data-wow-delay="0ms" data-wow-duration="1500ms"
                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                    <div class="e_services_status">
                        <div class="e_service_description_container" id="e_services_iframe">
                            <div class="hand_image_container">
                                <img src="{{ asset('assets/images/finger-pointing.gif') }}"
                                    alt="select_online_status_image" width="150px" id="hand_pointing_image">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="eServicesFormModal" tabindex="-1" role="dialog"
        aria-labelledby="eServicesFormModalTitle" aria-hidden="true">
        <div class="modal-dialog e_serv_app_reg_dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title e_serv_modal_title" id="eServicesFormModalTitle">Registration Application
                    </h5>
                    <button type="button" class="close e_serBtnCLose" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form e_serv_addi_form" id="comments">
                        <form method="post" id="" class="comment-form form-submit"
                            action="registration_application" enctype="multipart/form-data">
                            @csrf
                            <div class="text-wrap clearfix">
                                <fieldset class="field-container name-wrap">
                                    <select name="branch_name" id="branch_name" class="reg_app_select" required>
                                        <option class="reg_app_option" value="" selected disabled>Select
                                            Branch</option>
                                        <option class="reg_app_option" value="branch_1">Chennai</option>
                                        <option value="branch_2" class="reg_app_option">Sri Lanka</option>
                                        <option value="branch_3" class="reg_app_option">Dubai</option>
                                    </select>
                                </fieldset>
                                <fieldset class="field-container name-wrap">
                                    <label class="add_e_form_label" for="name">Name*</label>
                                    <input type="text" id="name" class="tb-my-input" name="user_name"
                                        tabindex="1" {{-- placeholder="Name*" --}} value="" size="32"
                                        required="">
                                </fieldset>
                            </div>

                            <div class="text-wrap clearfix">
                                <fieldset class="field-container email-wrap">
                                    <label class="add_e_form_label" for="passport_number">Passport Number*</label>
                                    <input type="text" id="passport_number" class="tb-my-input"
                                        name="passport_number" tabindex="2" placeholder="" value=""
                                        size="32" required="">
                                </fieldset>
                                <fieldset class="field-container email-wrap">
                                    <label class="add_e_form_label" for="contact_number">Contact Number*</label>
                                    <input type="number" id="contact_number" class="tb-my-input"
                                        name="contact_number" tabindex="2" placeholder="" value=""
                                        size="32" required="">
                                </fieldset>
                            </div>
                            <div class="text-wrap clearfix">
                                <fieldset class="field-container name-wrap">
                                    <label class="add_e_form_label" for="whatsapp_number">WhatsApp Number*</label>
                                    <input type="text" id="whatsapp_number" class="tb-my-input"
                                        name="whatsapp_number" tabindex="1" placeholder="" value=""
                                        size="32" required="">
                                </fieldset>
                                <fieldset class="field-container email-wrap">
                                    <label class="add_e_form_label" for="marketing_officer_name">Marketing Officer
                                        Name*</label>
                                    <input type="text" id="marketing_officer_name" class="tb-my-input"
                                        name="marketing_officer_name" tabindex="2" placeholder="" value=""
                                        size="32" required="">
                                </fieldset>
                            </div>
                            <div class="text-wrap clearfix">
                                <fieldset class="field-container name-wrap">
                                    <label class="add_e_form_label" for="service_description_id">Service
                                        Description ID*</label>
                                    <input type="text" id="service_description_id" class="tb-my-input"
                                        name="service_description_id" tabindex="1" placeholder="" value=""
                                        size="32" required="">
                                </fieldset>

                                <fieldset class="field-container name-wrap">
                                    <label class="add_e_form_label" for="mou_number">Mou Number*</label>
                                    <input type="text" id="mou_number" class="tb-my-input" name="mou_number"
                                        tabindex="1" placeholder="" value="" size="32" required="">
                                </fieldset>
                            </div>
                            <div class="text-wrap clearfix">
                                <fieldset class="field-container email-wrap">
                                    <label class="add_e_form_label" for="mail_id">Mail id*</label>
                                    <input type="email" id="mail_id" class="tb-my-input" name="mail_id"
                                        tabindex="2" placeholder="" value="" size="32" required="">
                                </fieldset>
                                <fieldset class="field-container name-wrap">

                                    <label class="add_e_form_label" for="invoice_number">Invoice Number*</label>
                                    <input type="text" id="invoice_number" class="tb-my-input"
                                        name="invoice_number" tabindex="1" placeholder="" value=""
                                        size="32" required="">
                                </fieldset>
                            </div>
                            <div class="text-wrap clearfix">
                                <fieldset class="field-container name-wrap upload_field">
                                    <label class="add_e_form_label_file pl-3" for="recipt_upload">Recipt
                                        Upload*</label>
                                    <input type="file" id="recipt_upload" class="tb-my-input"
                                        name="recipt_upload" tabindex="1" placeholder="" value=""
                                        size="32" required="">
                                </fieldset>

                                <fieldset class="field-container name-wrap row align-items-center upload_field">
                                    <div class="col-5">
                                        <label class="add_e_form_label_file" for="passport_upload">Passport
                                            Upload*</label>
                                    </div>
                                    <div class="col-7">
                                        <input type="file" id="passport_upload" class="tb-my-input"
                                            name="passport_upload" tabindex="1" placeholder="" value=""
                                            size="32" required="">
                                    </div>
                                </fieldset>
                            </div>
                            <fieldset class="field-container message-wrap">
                                <textarea class="contact_text_area" id="residential_address" name="residential_address" rows="6"
                                    tabindex="4" placeholder="Residential Address"></textarea>
                            </fieldset>
                            <button name="submit" type="submit" id="comment-reply"
                                class="button btn-style4 btn-submit-comment">Send</button>
                            <div id="success_message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script defer src="{{ asset('assets/js/eServices.js') }}"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
