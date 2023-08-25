<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
 get_header(); ?>
  <main>
       <section class="home-slider">
            <div class="hero-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image">
                                <video loop playsinline webkit-playsinline muted autoplay>
                                    <source src="<?php echo CFS()->get( 'banner' );?>" alt="">
                                  </video>
                                <div class="meta">
                                    <div data-swiper-parallax="400" class="slide-title">
                                        <h1 class="main-title"><?php echo CFS()->get( 'passion' );?><span> <?php echo CFS()->get( 'consist' );?></span> <?php echo CFS()->get( 'areour' );?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>

        </div>
        <div class="swiper-pagination"></div>

        </div>
        </div>
        <div class="down-arrow">
            <a href="#about">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.svg" alt=""></figure>
                scroll
            </a> 
        </div>
        </section>

        <section class="about" id="about" data-scroll-index="0">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 about-left">
                    <div class="title"><h2 class="main-title" data-aos="fade-up" data-aos-duration="1000"><span data-aos="fade-up" data-aos-duration="2000">
                        <?php echo CFS()->get( 'about' ); ?></span> <?php echo CFS()->get( 'leading' ); ?></h2></div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 about-right" data-aos="fade-up" data-aos-duration="3000">
                    <p><?php echo CFS()->get( 'head' ); ?></p>
                   
                        <a href="#"><?php echo CFS()->get( 'explore' ); ?></a>
                </div>
            </div>
        </section>
        <section class="services" data-aos="fade-up" data-aos-duration="1000" id="core-service" data-scroll-index="1">
            <div class="top">
                <span><img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt=""></span>
                <h2>Core Services</h2>
            </div>
             <div class="btm-slider"> 
                <div class="row">
                   
                           
                <?php 
         $args = array(  
        'post_type' => 'Service',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );

    $loop = new WP_Query( $args ); 
    
    while ( $loop->have_posts() ) : $loop->the_post();
    $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); ?>

    
                 <div class="col-12 col-sm-12 col-md-4 col-lg-4 core-service-outer">
                        <div class="box-in">
                            <div class="image-box">
                         <img src="<?php   echo $url; ?>" alt="">
                            </div>
                            
                            <div class="content-box">
                                
                                <h5><?php the_title();?></h5>
                                <p><?php the_content();?></p>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                        endwhile;

wp_reset_postdata(); ?> 
                 
                 
                  
                
               
          
                      
                <!-- </div> -->
                 </div> 
                
        </section>
        
        <section class="clients" data-scroll-index="2">
            <div class="row">
         
               
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 clients-left">
            <h2 class="main-title" data-aos="fade-up" data-aos-duration="1000"><span data-aos="fade-up" data-aos-duration="2000"><?php echo CFS()->get( 'client' );?></span><?php echo CFS()->get( 'trust' );?></h2>
            <p data-aos="fade-up" data-aos-duration="1000"><?php echo CFS()->get( 'by' );?></p>
                </div>  
                   
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 clients-right" data-aos="fade-up" data-aos-duration="4000">
                    <div class="clients-slider">
                        <div class="cl-slider owl-carousel owl-theme">            
                        <!-- <div class="item">    -->
                <?php 
         $args = array(  
        'post_type' => 'Client',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
    $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); 
     $meta = get_post_meta(get_the_ID(), 'client_url', true);
    ?>
    
   
                           
            <div class="client-logo"><a href="<?php echo $meta;?>" target="_blank"><img src="<?php   echo $url; ?>" alt=""></a></div>
            <!-- <div class="client-logo"><a href="https://www.leonardodrs.com/" target="_blank">knjinj<img src="images/client2.jpg" alt=""> alt=""></a></div>
            <div class="client-logo"><a href="https://bhe.ae/" target="_blank"><img src="images/client3.jpg" alt=""></a></div></a></div>   -->
               
            <?php
                        endwhile;

wp_reset_postdata(); ?> 
           

 
<!--                                
                            <div class="item">
            <div class="client-logo"><a href="https://www.pearson-eng.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/client5.jpg" alt=""> 
             </a></div> -->
          
            <!-- <div class="client-logo"><a href="https://www.navistar.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/client5.jpg" alt=""></a></div>
            <div class="client-logo"><a href="https://menatek.com.tr/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/client6.jpg" alt=""></a></div> -->
<!--                      
                            <div class="item">
            <div class="client-logo"><a href="https://www.merlinequipment.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/client7.jpg" alt=""></a></div>
            <div class="client-logo"><a href="https://timoneygroup.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/client8.jpg" alt=""></a></div>
            <div class="client-logo"><a href="https://www.ams.global/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/client9.jpg" alt=""></a></div> -->
                            <!-- </div>  -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="work" id="success" data-scroll-index="3">
           <div class="title" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="main-title">Explore What We Have Done</h2>
            <p>Expansive range of international experience, but at the heart we are Emirati, offering bespoke technologies and sustainability.</p>
           </div>
           <div class="works-list" data-aos="fade-up" data-aos-duration="1000">
            <div class="works box1">
                <div class="box">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/work1.jpg" alt=""></figure>
                    <div class="cont">
                        <a class="popup-modal" href="#work1">Read More <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt=""></a>
                    </div>
                </div>
                <div id="work1" class="white-popup-block mfp-hide">
                    <p>Partnered with OEM’s worldwide, BHE Land systems provides supply chain support ensuring sustainment of military fleets.</p>
                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                </div>
            </div>
            <div class="works box2">
                <div class="box">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/work2.jpg" alt=""></figure>
                    <div class="cont">
                        <a class="popup-modal" href="#work2">Read More <img src=<?php echo CFS()->get( 'testimonial' );?> alt="">></a>
                    </div>
                </div>
                <div id="work2" class="white-popup-block mfp-hide">
                    <p>Partnered with UK OEM Roke – BHE Land Systems have a dealership agreement and provide support throughout the GCC.</p>
                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                </div>
            </div>
            <div class="works box3">
                <div class="box">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/work3.jpg" alt=""></figure>
                    <div class="cont">
                        <a class="popup-modal" href="#work3">Read More <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt=""></a>
                    </div>
                </div>
                <div id="work3" class="white-popup-block mfp-hide">
                    <p>Capabilities include large-scale overhauls and upgrades to multiple platform types, including the LeClerc MBT.</p>
                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                </div>
            </div>
            <div class="works box-4">
                <div class="box">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/work4.jpg" alt=""></figure>
                    <div class="cont">
                        <a class="popup-modal" href="#work4">Read More <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt=""></a>
                    </div>
                </div>
                <div id="work4" class="white-popup-block mfp-hide">
                    <p>Providing Field Support Representatives who are SME’s, to inspect, repair, maintain & train on and with military personnel across the whole of the UAE.</p>
                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                </div>
            </div>
            <div class="works box5">
                <div class="box">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/work5.jpg" alt=""></figure>
                    <div class="cont">
                        <a class="popup-modal" href="#work5">Read More <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt=""></a>
                    </div>
                </div>
                <div id="work5" class="white-popup-block mfp-hide">
                    <p>BHE Land Systems is the authorized GCC dealer of Navistar Defense. With master-tech trained FSR’s and a sound supply chain proves the UAE ND fleet remains the strongest and most reliable in the region.</p>
                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                </div>
            </div>
            <div class="works box-6">
                <div class="box">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/work6.jpg" alt=""></figure>
                    <div class="cont">
                        <a class="popup-modal" href="#work6">Read More <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt=""></a>
                    </div>
                </div>
                <div id="work6" class="white-popup-block mfp-hide">
                    <p>Leonardo DRS partnered with BHE Land Systems to build the OBVP prototype for the UAE Armed Forces. The first of it’s kind in the middle east – the OBVP system can provide power to field hospitals, FOB’s or be used in disaster relief areas.</p>
                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                </div>
            </div>

            <div class="works box-7">
                <div class="box">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/work7.jpg" alt=""></figure>
                    <div class="cont">
                        <a class="popup-modal" href="#work7">Read More <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt=""></a>
                    </div>
                </div>
                <div id="work7" class="white-popup-block mfp-hide">
                    <p>Electronic Warfare is an ever-growing threat, requiring innovative technologies to stay in control.</p>
                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                </div>
            </div>
            
           </div>
           <button data-aos="fade-up" data-aos-duration="1000"><a href="#">See Our Work <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt=""></a></button>
        </section>
        <section class="why-bhe" data-scroll-index="4">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7" >
                    <div class="why-bhe-left">
                    <div class="title"><h2 class="main-title"><?php echo CFS()->get( 'whybhe' ); ?></h2></div>
                        <p><?php echo CFS()->get( 'land' );?></p>
                    <div class="testimonial">
                        <div class="testimonial-slider owl-carousel owl-theme">
                            <div class="item">
                                <div class="testimonial-content">
                                    <p><img src="<?php echo get_template_directory_uri(); ?>/images/Quote.svg"><?php echo CFS()->get( 'theland' );?></p>
                                    <div class="cont">
                                        <figure><img src=<?php echo CFS()->get( 'testimonial' );?> alt=""></figure>
                                        <div class="detail">
                                            <h5><?php echo CFS()->get( 'john' ); ?></h5>
                                            <h6><?php echo CFS()->get( 'senior' ); ?><span><?php echo CFS()->get( 'lorem' ); ?></span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <p><img src="<?php echo get_template_directory_uri(); ?>/images/Quote.svg"><?php echo CFS()->get( 'theland' ); ?></p>
                                    <div class="cont">
                                        <figure><img src=<?php echo CFS()->get( 'testimonial' );?> alt=""></figure>
                                        <div class="detail">
                                            <h5><?php echo CFS()->get( 'john' ); ?></h5>
                                            <h6><?php echo CFS()->get( 'senior' ); ?><span><?php echo CFS()->get( 'lorem' ); ?></span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </div>


                <div class="col-12 col-sm-12 col-md-12 col-lg-5 why-bhe-right">
                    <figure class="right-img img1"><img src=<?php echo CFS()->get( 'bhe2' );?> alt=""></figure>
                    <figure class="right-img img2"><img src=<?php echo CFS()->get( 'bhe1' );?> alt=""></figure>
                </div>
            </div>
            
        </section>
        <section class="team" id="meet-team" data-scroll-index="5">
            <div class="row">
                <h3 class="main-title" >Leadership Team</h3>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 box-outer">
                    <div class="team-outer">
         <!-- <div class="item">    -->
         <?php 
         $args = array(  
        'post_type' => 'Chairman',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
    $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); 
   
    ?>

                        <div class="team-box">
                            <a class="popup-modal" href="#team1">
                            <figure><img src="<?php   echo $url; ?>" alt=""></figure>
                            <div class="cont">
                                <h4><?php the_title();?></h4>
                                <span><?php the_content();?></span>
                            </div>
                        </a>
                        </div>
                                
            <?php
                        endwhile;

wp_reset_postdata(); ?>
                        <!-- <div class="team-box">
                            <a class="popup-modal" href="#team2">
                            <figure><img src="images/team2.jpg" alt=""></figure>
                            <div class="cont">
                                <h4>Andrew Robertson</h4>
                                <span>Vice Chairman</span>
                            </div>
                            </a>
                        </div>
                        <div class="team-box">
                            <a class="popup-modal" href="#team3">
                            <figure><img src="images/team3.jpg" alt=""></figure>
                            <div class="cont">
                                <h4>Mark Dillon</h4>
                                <span>Director of Operations</span>
                            </div>
                        </a>
                        </div>
                        
                    </div>
                </div>
            </div>
          
        

            <div id="team1" class="white-popup-block mfp-hide team-popup">
                <div class="popup-cnt">
                 <div class="left">
                     <img src="images/team1.jpg" alt="">
                 </div>
                 <div class="cnt">
                     <h4>Humaid Saeed Al Dhaheri</h4>
                     <span>Chairman</span>
                     <p>Mr. Humaid Saeed Al Dhaheri is a retired UAE full colonel and former military pilot with extensive flying and command experience.</p>
                     <p>Humaid’s extensive knowledge of military dynamics and over 2 decades of successfully building BHE to become a leading supplier to the UAE Armed Forces, provide invaluable insight.</p>
                 </div>
                </div>
                 <button title="Close (Esc)" type="button" class="mfp-close">×</button>
             </div>
             <div id="team2" class="white-popup-block mfp-hide team-popup">
                <div class="popup-cnt">
                 <div class="left">
                     <img src="images/team2.jpg" alt="">
                 </div>
                 <div class="cnt">
                    <h4>Andrew Robertson</h4>
                    <span>Vice Chairman</span>
                     <p>Andrew has over 25 years of experience managing & developing large-scale MRO programs within the MENA region.</p>
                     <p>As an industry leader Andrew has led large-scale Land Systems integration & training programs in excess of 100 Thousand assets and a value of over $1 Billion.</p>
                 </div>
                </div>
                 <button title="Close (Esc)" type="button" class="mfp-close">×</button>
             </div>
             <div id="team3" class="white-popup-block mfp-hide team-popup">
                <div class="popup-cnt">
                 <div class="left">
                     <img src="images/team3.jpg" alt="">
                 </div>
                 <div class="cnt">
                    <h4>Mark Dillon</h4>
                    <span>Director of Operations</span>
                     <p>Over the past 13 years Mark has been managing various large-scale projects globally, including across Africa and the GCC. Prior to relocating to the Middle East, Mark managed large scale specialized vehicle production lines for the largest vehicle conversion company in the UK.</p>
                     <p>Focus areas are strategic & production planning ensuring key objectives are met, maintained, and successfully achieved. As a focused leader, Mark is recognized in the Defense Industry for delivering results.</p>
                 </div>
                </div>
                 <button title="Close (Esc)" type="button" class="mfp-close">×</button>
             </div>
             <div id="team4" class="white-popup-block mfp-hide team-popup">
                <div class="popup-cnt">
                 <div class="left">
                     <img src="images/team4.jpg" alt="">
                 </div>
                 <div class="cnt">
                    <h4>Sarkis Zakhia</h4>
                    <span>Director of Business Development</span>
                     <p>An effective sales and business developer with 15 years of extensive experience establishing, developing and implementing international sales strategies across military and government sectors.</p>
                     <p>An influential director with a definite flair for people, the ability to gain their trust & respect, with a proven ability to communicate with personnel at all levels. Innovative, readily adaptable to new situations, with a logical mind and practical approach to problem solving.</p>
                 </div>
                </div>
                 <button title="Close (Esc)" type="button" class="mfp-close">×</button>
             </div>
             <div id="team5" class="white-popup-block mfp-hide team-popup">
                <div class="popup-cnt">
                 <div class="left">
                     <img src="images/team5.jpg" alt="">
                 </div>
                 <div class="cnt">
                    <h4>Ross Davies</h4>
                    <span>Field Support Representative</span>
                     <p>Ross has over 20 years’ experience in the management, inspection, preventative maintenance, and repair of complex electro-mechanical equipment. He has spent 10 years operating in post-conflict zones and is focused on applying operational knowledge of wheeled platform maintenance and problem-solving while adhering to all industry regulations.</p>
                     <p>He is Ex-military, having served in the British Army with the Royal Electrical & Mechanical Engineer (REME) and is experienced in delivering training, mentorship and equipment support to Armed Forces throughout the Middle East and Asia.</p>
                     <p>Ross is currently based in Abu Dhabi and supports all BHE LS Field Support Representatives and clients nationally and internationally with diagnostics, life support and mentorship.</p>
                 </div>
                </div>
                 <button title="Close (Esc)" type="button" class="mfp-close">×</button>
             </div>
             <div id="team6" class="white-popup-block mfp-hide team-popup">
                <div class="popup-cnt">
                 <div class="left">
                     <img src="images/team6.jpg" alt="">
                 </div>
                 <div class="cnt">
                    <h4>William White MSc BSc</h4>
                    <span>Field Support Representative</span>
                     <p>William is a highly focused Engineering leadership professional with in excess of 23 years operational support and planning experience gained within the British Armed Forces.</p>
                     <p>He completed his service as a Warrant Officer Class 1 within the Corps of the Royal Electrical Mechanical Engineers, having served and deployed globally throughout. An Incorporated Engineer, he holds a Master’s degree in Leadership and Management from University of Portsmouth and a First-Class Honours Degree in Engineering Management.</p>
                     <p>William is specialized in armored vehicles, MBT and APC’s and directs a highly skilled team of Field Support Representatives for BHE LS in the Southern Emirates, for multiple national & international clients.</p>
                 </div>
                </div>
                 <button title="Close (Esc)" type="button" class="mfp-close">×</button>
             </div>
             <div id="team7" class="white-popup-block mfp-hide team-popup">
                <div class="popup-cnt">
                 <div class="left">
                     <img src="images/team7.jpg" alt="">
                 </div>
                 <div class="cnt">
                    <h4>Craig Sanderson GCGI</h4>
                    <span>Field Support Representative</span>
                     <p>Craig joined BHE Land Systems after a successful 24-year military career with the Royal Electrical and Mechanical Engineers of the British Army, completing service as a WO1.
                        He provided equipment maintenance, repair, and support to the British Army fleet of armored tracked vehicles operating in Afghanistan, Canada, Germany, Iraq, and Kosovo.</p>
                        <p>He was appointed Senior Engineering Instructor delivering fundamentals, techniques, and Quality Management System implementation to aspiring military managers. Craig also had a 2-year secondment in Oman, as the Mechanical Advisor to the Royal Army of Oman fleet of Challenger 2 MBT.</p>
                        <p>Craig currently supports national & international projects by designing, developing and delivering equipment operator & maintenance training with absolute professionalism.</p>
                 </div>
                </div>
                 <button title="Close (Esc)" type="button" class="mfp-close">×</button>
             </div>
             <div id="team8" class="white-popup-block mfp-hide team-popup">
                <div class="popup-cnt">
                 <div class="left">
                     <img src="images/team8.jpg" alt="">
                 </div> -->
                 <!-- <div class="cnt">
                    <h4>Athina Sitaras</h4>
                    <span>Field Support Representative</span>
                     <p>Athina is an exemplary technical professional with over 13 years of defence operation and management experience across multiple countries. She is an ex-British Army Engineer with a vast knowledge of defence engineering process’, Operational and Technical planning. Specialised in MRAP, Light Vehicles & CVRT she brings a warmth of experience to the team.</p>
                     <p>Highly motivated and competent leader with prior experiences involving in coaching and mentoring technical teams within complex establishments and austere environments.</p>
                     <p>Athina currently directs her highly skilled team of Field Support Representatives to cover the Northern Emirates on MRAP wheeled vehicle maintenance, repair & training to our clients.</p>
                 </div> -->
                </div>
                 <button title="Close (Esc)" type="button" class="mfp-close">×</button>
             </div>
             <div id="team9" class="white-popup-block mfp-hide team-popup">
                <div class="popup-cnt">
                 <div class="left">
                     <img src="images/team9.jpg" alt="">
                 </div>
                 <div class="cnt">
                    <h4>Iain Hamilton CAE AMIMI</h4>
                    <span>Operations Support</span>
                     <p>Iain has over 18 years’ experience in MRO of wheeled platforms, with 7 years’ experience operating in post conflict zones supporting Government Defense contracts. Iain took over the management of one of the largest Component Overhaul Programs in the region, saving the government over $12 Million a year by concept of repair against cost new.</p>
                     <p>For the last 3 years Iain directly supported the UAE Armed Forces across all Emirates with Training & Mentorship to the end user, with the ultimate objective being the transfer of knowledge.</p>
                     <p>Iain supports the full BHE Land Systems operation, which is complemented by his extensive OEM training.</p>
                 </div>
                </div>
                 <button title="Close (Esc)" type="button" class="mfp-close">×</button>
             </div>

      
            </div>
        </section>
        <section class="contact" id="contact-us" data-scroll-index="6">
       
            <div class="contact-slider owl-carousel owl-theme">
           
                <div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/cnt-sl1.jpg);"></div>
                
                <div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/cnt-sl2.jpg);"></div>
                <div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/cnt-sl3.jpg);"></div>
                
            </div>
              
      
            <div class="cnt-right">
           
                <h2 class="main-title">Get In Touch</h2>
                <p>Please feel free to get in touch with one of our team members with the form below.</p> 
                <!-- <?php echo apply_shortcodes( '[contact-form-7 id="7" title="CONTACT FORM"]' ); ?>  -->
               
                <form>
                
               
                    <div class="input-field"><input type="text" name="fname" value=""  placeholder="First-Name"></div> 
                    <div class="input-field"><input type="text" name="lname" value=""  placeholder="Last-Name"></div> 
                    <div class="input-field"><input type="email" name="email" value=""  placeholder="E-mail"></div> 
                    <div class="input-field"><input type="tel" name="phone" value=""  placeholder="Phone"></div>
                    <div class="input-field form-textarea"><textarea name="message" placeholder="Message"></textarea></div>
                    <div class="form-submit"><button class="primary-button">Submit</button></div>   
                  
                </form>    
            </div>    
                 
        </section>
        </main>
        <?php
 get_footer(); ?>