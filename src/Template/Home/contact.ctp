<?php
$this->assign('title', 'Contact us');
?>
<section class="section section-intro context-dark">
    <div class="intro-bg" style="background: url(/img/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <h1 class="font-weight-bold wow fadeInLeft">Contact Us</h1>
                <p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page. We are always happy to help you!</p>
            </div>
        </div>
    </div>
</section>
<!--Mailform-->
<section class="section section-md">
    <div class="container">
        <!--RD Mailform-->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-8 col-12">
                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="form-wrap">
                        <label class="form-label" for="contact-name">Name<span class="req-symbol">*</span></label>
                        <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                    </div>
                    <div class="form-wrap">
                        <label class="form-label" for="contact-phone">Phone<span class="req-symbol">*</span></label>
                        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                    </div>
                    <div class="form-wrap">
                        <label class="form-label" for="contact-email">E-Mail<span class="req-symbol">*</span></label>
                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                    </div>
                    <div class="form-wrap">
                        <label class="form-label label-textarea" for="contact-message">Message<span class="req-symbol">*</span></label>
                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                    <!--Google captcha-->
                    <div class="form-wrap text-left form-validation-left">
                        <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
                    </div>
                    <div class="form-button group-sm text-center text-lg-left">
                        <button class="button button-primary" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--Google Map-->
<section class="section">
    <iframe class="bg-white" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.7692012638945!2d77.02200021440589!3d28.57669249335833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1a9115161c4f%3A0xac0f40078445b696!2sYuserver!5e0!3m2!1sen!2sin!4v1611503555529!5m2!1sen!2sin" height="570" width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>