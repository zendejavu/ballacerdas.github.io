<div class="section-inner custom-page-content">
    <div class="section-title-block second-style">
        <h2 class="section-title">Contact</h2>
        <h5 class="section-description">Get in Touch</h5>
    </div>

    <div class="section-content">
        {{-- <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div id="map" class="map"></div>
            </div>
        </div> --}}

        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <div class="col-inner bs-30">
                    <div class="lm-info-block gray-default">
                        <i class="lnr lnr-phone-handset"></i>
                        <h4>0811-1100-001</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3">
                <div class="col-inner bs-30">
                    <div class="lm-info-block gray-default">
                        <i class="lnr lnr-map-marker"></i>
                        <h4>Makassar</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3">
                <div class="col-inner bs-30">
                    <div class="lm-info-block gray-default">
                        <i class="lnr lnr-envelope"></i>
                        <h4>info@ballacerdas.com</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3">
                <div class="col-inner bs-30">
                    <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle"></i>
                        <h4>Freelance Available</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class=" col-xs-12 col-sm-8 offset-sm-1 offset-sm-2">
            <div class="col-inner ts-20">
                <div class="block-title">
                    <h3>How Can I Help You?</h3>
                </div>

                {{-- <form id="contact_form" class="contact-form" action="/contact"> --}}
                <form id="contact_form" class="contact-form" action="contact_form/contact_form.php" method="post">

                    <div class="messages"></div>

                    <div class="controls two-columns">
                        <div class="fields clearfix">
                            <div class="left-column">
                                <div class="form-group form-group-with-icon">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group form-group-with-icon">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group form-group-with-icon">
                                    <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required.">
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="right-column">
                                <div class="form-group form-group-with-icon">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-theme="dark"></div>

                        <input type="submit" class="button btn-send" value="Send message">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>