<?php include 'header.php'; ?>
<?php include 'server.php' ?>
    <div class="main">
            <div class="page-header larger parallax custom mb0" style="background-image:url(assets/images/page-header-bg.jpg)">
                    <div class="container">
                        <h1>Update post</h1>
                        
                    </div><!-- End .container -->
                </div><!-- End .page-header -->

            <div class="container">
                    <div class="row">

                        <div class="col-md-8">
                            <h2>Post</h2>
                            <form action="post.php" method="post" id="contact-form" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="contactname" name="name" placeholder="Name" required>
                                    </div><!-- End .col-md-6 -->
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" id="contactemail" name="email" placeholder="Email" required>
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <input  class="form-control" type="date"  value="<?php echo date('Y-m-d'); ?>" id="contactwebsite" name="date" placeholder="Date" required>
                                    </div><!-- End .col-md-6 -->
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="contactsubject" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-md-4">
                                        <select  class="form-control col-md-12" name="category" id="cate">
                                                  <option value="medical">medical</option>
                                                  <option value="timetable">timetable</option>
                                                  <option value="sports">sports</option>
                                                </select>
                                        <!-- <input type="text" class="form-control" id="contactsubject" name="category" placeholder="category"> -->
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="6" id="contactmessage" name="post" placeholder="comments" required></textarea>
                                    </div><!-- End .col-md-12 -->
                                    
                                </div><!-- End .row -->

                                <button type="submit" class="btn btn-custom min-width-md" data-loading-text="Sending Message..." value="Send Message" name="new_post" >submit</button>
                            </form>
                        </div><!-- End .col-md-8 -->

                        <div class="clearfix mb65 visible-sm visible-xs"></div><!-- margin -->

                        <div class="col-md-4">
                            <div class="contact-box">
                                <h3>Office</h3>
                                <ul>
                                    <li><strong>Address:</strong> Dublin 1 </li>
                                    <li><strong>Phone</strong> 899613522</li>
                                    <li><strong>Email:</strong> <a href="#">vipiny070@gmail.com</a></li>
                                    <li>
                                        <strong>Social Media:</strong>
                                        <div class="social-icons">
                                            <a href="#" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="social-icon" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="social-icon" data-toggle="tooltip" title="Github"><i class="fa fa-github"></i></a>
                                            <a href="#" class="social-icon" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                            <a href="#" class="social-icon" data-toggle="tooltip" title="Tumblr"><i class="fa fa-tumblr"></i></a>
                                            <a href="#" class="social-icon" data-toggle="tooltip" title="Flickr"><i class="fa fa-flickr"></i></a>
                                        </div><!-- End .social-icons -->
                                    </li>
                                </ul>
                            </div><!-- End .contact-box -->

                            <!-- <div class="contact-box">
                                <h3>London Office</h3>
                                <ul>
                                    <li><strong>Address:</strong> Hollywood Blvd, Los Angeles, CA, USA </li>
                                    <li><strong>Phone</strong> +01 010 554 11 22</li>
                                    <li><strong>Email:</strong> <a href="#">madeup@gmail.com</a></li>
                                    <li>
                                        <strong>Social Media:</strong>
                                        <div class="social-icons">
                                            <a href="#" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="social-icon" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="social-icon" data-toggle="tooltip" title="Github"><i class="fa fa-github"></i></a>
                                            <a href="#" class="social-icon" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                        </div> --><!-- End .social-icons -->
                                    </li>
                                </ul>
                            </div><!-- End .contact-box -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

            <?php include 'footer.php';  ?>