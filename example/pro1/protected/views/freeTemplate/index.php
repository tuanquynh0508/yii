<?php
$baseUrl = Yii::app()->request->baseUrl;
?>
<section class="cta cta_top">
        <p>Have a project in mind?  We would love to hear from you!</p>
        <a href="#">Get in touch with us</a>
    </section><!-- End cta_top -->

    <section class="services wrapper">
            <h2>We are fertile, we make awesome stuff.</h2>
            <div class="separator">
                <img src="<?php echo $baseUrl;?>/img/separator.png" alt=""/>
            </div>
            <ul>
                <li>
                    <img class="s_icons" src="<?php echo $baseUrl;?>/img/s1.png" alt=""/>
                    <h3>Slamco laboris velitesse</h3>
                    <p>sed do eiusmod tempor incididunt uto labore dolore magna aliqua enim
                    minim veniam.</p>
                </li>

                <li>
                    <img class="s_icons" src="<?php echo $baseUrl;?>/img/s2.png" alt=""/>
                    <h3>Slamco laboris velitesse</h3>
                    <p>sed do eiusmod tempor incididunt uto labore dolore magna aliqua enim
                    minim veniam.</p>
                </li>

                <li>
                    <img class="s_icons" src="<?php echo $baseUrl;?>/img/s3.png" alt=""/>
                    <h3>Slamco laboris velitesse</h3>
                    <p>sed do eiusmod tempor incididunt uto labore dolore magna aliqua enim
                    minim veniam.</p>
                </li>
            </ul>
    </section><!-- End services -->


    <section class="recent_work">
        <div class="work">
            <a href=""><img src="<?php echo $baseUrl;?>/img/w1.jpg" alt=""></a>
        </div>
        <div class="work">
            <a href=""><img src="<?php echo $baseUrl;?>/img/w2.jpg" alt=""></a>
        </div>
        <div class="work">
            <a href=""><img src="<?php echo $baseUrl;?>/img/w3.jpg" alt=""></a>
        </div>
        <div class="work">
            <a href=""><img src="<?php echo $baseUrl;?>/img/w4.jpg" alt=""></a>
        </div>
        <div class="work">
            <a href=""><img src="<?php echo $baseUrl;?>/img/w5.jpg" alt=""></a>
        </div>
    </section><!-- End recent_work -->


    <section class="testimonials wrapper">
        <h3>Testimonials</h3>
        <ul class="testi_boxs">
            <li>
                <img class="avatar" src="<?php echo $baseUrl;?>/img/client1.jpg" alt=""/>
                <h2>David Doe <span class="client_job">/ Manager</span></h2>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat cupidatat.</p>
            </li>
            <li>
                <img class="avatar" src="<?php echo $baseUrl;?>/img/client2.jpg" alt=""/>
                <h2>David Doe <span class="client_job">/ UI Designer</span></h2>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat cupidatat.</p>
            </li>
            <li>
                <img class="avatar" src="<?php echo $baseUrl;?>/img/client3.jpg" alt=""/>
                <h2>David Doe <span class="client_job">/ SEO Expert</span></h2>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat cupidatat.</p>
            </li>
        </ul>
    </section><!-- End testimonials -->