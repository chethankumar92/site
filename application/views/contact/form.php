<section id="section-contact" class="section appear clearfix">
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form class="form-horizontal" action="<?= $action ?>" method="<?= $method ?>" autocomplete="off" data-parsley-validate>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" pattern=".{3,31}" required=""/>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"/>
                            </div>
                        </div>
                        <div class="col-sm-2 text-center">
                            OR
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input class="form-control" name="mobile" placeholder="Your Mobile Number" data-parsley-type="digits"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" pattern=".{4,63}" required=""/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" pattern=".{10,255}" required=""></textarea>
                    </div> 
                    <div class="text-center"><button type="submit" class="line-btn green">Send Message</button></div>
                </form>
            </div>
        </div>
    </div>
</section>