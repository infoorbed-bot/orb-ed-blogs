<div class="currentpage1 ">

    <head>
        <title>O Level and A Level | Online Education at Orb-Ed.pk</title>
        <meta name="description"
            content="Enroll in O Level & A Level courses with expert tutors at Orb-Ed.pk. Quality online education for students in Pakistan & worldwide. Start learning today!">
    </head>

    <script src="assets/js/dropdown-handler.js"></script>
    <script>
    function loadVideo(videoUrl) {
        // Hide the thumbnail
        document.getElementById("video-thumbnail").style.display = "none";

        // Show the video player
        const videoContainer = document.getElementById("thevideo");
        videoContainer.style.display = "block";

        // Update the video iframe src
        const iframe = document.getElementById("main-video-frame");
        iframe.src = videoUrl;
    }


    // Auto slide every 5 seconds
const slides = document.querySelectorAll('.video-slide');
let currentIndex = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.toggle('active', i === index);
  });
}

setInterval(() => {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
}, 5000);

// Hover to play video
slides.forEach(slide => {
  const video = slide.querySelector('video');
  
  slide.addEventListener('mouseenter', () => {
    video.play();
  });
  
  slide.addEventListener('mouseleave', () => {
    video.pause();
    video.currentTime = 0; // Optional: reset to start
  });
});

</script>

    <?php include('header.php'); ?>

    <section class="sec-1" style="height: 93vh">
        <div class="smoke-section-parent">
            <div class="ag-smoke-block">
                <div>
                    <img class="ag-smoke-1" src="assets/images/sky.png" alt="Smoke">
                </div>
            </div>
        </div>
        <!-- <span class="baneer-line"><img src="assets/images/ban-line-1.png" alt=""></span> -->
        <div class="container-1500">
            <div class="row">
                <div class="col-lg-6 col-md-6 represhing m-auto">
                    <h1 class="title-mean animate__animated animate__backInLeft">Built for Students. <br>
                        Backed by Teachers. <br> Here for You.
                    </h1>
                    <p class="animate__animated animate__backInLeft">
                        Orb-Ed has your back with lessons, reminders, and real help.
                    </p>

                    <!-- 🔽 Dropdown Fields Start -->
                    <div class="dropdown-card">
                    <p class="dropdown-title">What subject do you need help with today?</p>
                    <div class="dropdown-fields">
                        <select id="level" class="dropdown-select">
                        <option value="">Select Level</option>
                        <option value="olevel">O Level</option>
                        <option value="as">AS Level</option>
                        <option value="a2">A2 Level</option>
                        </select>
                        
                        <select id="subject" class="dropdown-select">
                        <option value="">Select Subject</option>
                        </select>

                        <div class="arrow-icon" id="goArrow" role="button" tabindex="0">➤</div>
                    </div>
                    </div>
                    <!-- 🔽 Dropdown Fields End -->

                </div>

                <div class="col-lg-6 col-md-6 animate__animated animate__zoomInLeft mobileResponse" style= "display: flex; justify-content: end">
                    <!-- <div class="sec-1img">
                        <img src="assets/images/bannerMain.png" alt="">
                    </div> -->

                    <div class= "mob-img" style= "position: absolute; top: 50%; left: 25%; z-index: 0">
                        <img src= "assets/images/banner-circle-1.png"/>
                    </div>
                    <div class="scrolling-columns-container">
                      <div class="column">
                        <div class="scroll-items">
                          <div class="scroll-item"><img src="assets/images/banner1.png" alt="Image 1"></div>
                          <div class="scroll-item"><img src="assets/images/banner4.png" alt="Image 2"></div>
                          <div class="scroll-item"><img src="assets/images/banner1.png" alt="Image 1"></div>
                          <div class="scroll-item"><img src="assets/images/banner4.png" alt="Image 2"></div>
                        </div>
                      </div>
                      <div class="column">
                        <div class="scroll-items scroll-items-down">
                        <div class="scroll-item"><img src="assets/images/banner2.png" alt="Image 1"></div>
                          <div class="scroll-item"><img src="assets/images/razajafri.png" alt="Image 5"></div>
                          <div class="scroll-item"><img src="assets/images/banner2.png" alt="Image 1"></div>
                          <div class="scroll-item"><img src="assets/images/razajafri.png" alt="Image 4"></div>
                        </div>
                      </div>
                      <div class="column">
                        <div class="scroll-items">
                        <div class="scroll-item"><img src="assets/images/banner3.png" alt="Image 1"></div>
                          <div class="scroll-item"><img src="assets/images/banner5.png" alt="Image 2"></div>
                          <div class="scroll-item"><img src="assets/images/banner3.png" alt="Image 1"></div>
                          <div class="scroll-item"><img src="assets/images/banner5.png" alt="Image 2"></div>
                        </div>
                      </div>
                    </div>
                    <div class= "mob-img" style= "position: absolute; top: 20%; right: -50px; z-index: 2">
                        <img src= "assets/images/banner-circle-2.png"/>
                    </div>

                    <!-- <div class="scrolling-columns-container">
                        <div class="column">
                            <div class="scroll-items">
                                <div class="scroll-item"><img src="https://placehold.co/250x400" alt="1"></div>
                                <div class="scroll-item"><img src="https://placehold.co/250x400" alt="2"></div>
                                <div class="scroll-item"><img src="https://placehold.co/250x400" alt="3"></div>
                                <div class="scroll-item"><img src="https://placehold.co/250x400" alt="1"></div>
                                <div class="scroll-item"><img src="https://placehold.co/250x400" alt="2"></div>
                                <div class="scroll-item"><img src="https://placehold.co/250x500" alt="3">d</div>
                            </div>
                        </div>
                    </div> -->


                    
                </div>
            </div>
        </div>
    </section>
    <section class="sec-4 sec-4-border" style="position: relative;">
    <div class="slider-left-fade"></div>
    <div class= "student-testimonial-left-section">
        <h1 class="title-mean" data-aos="zoom-in"  onclick="console.log('click')">STUDENT <br/>TESTIMONIALS</h1>
        <div class="btn-our " data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
         <a href="https://lms.orb-ed.pk/account/register" class="btn-gradient-rad" title="Registration"> <span>Registration</span></a>
        </div>
    </div>
        <span class="sec4-line"> <img src="assets/images/ban-img-bg.png" alt=""></span>
        <span class="sec4-line"> <img src="assets/images/ban-line-1.png" alt=""></span>
        <div 

        >
            <div class="row">
                <!-- <div class="col-lg-6 col-md-6  m-auto">
                    <h1 class="title-mean" data-aos="zoom-in"  onclick="console.log('click')">STUDENT TESTIMONIALSsss</h1>
                    <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"></p>
                    <div class="btn-our " data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <a href="https://lms.orb-ed.pk/account/register" class="btn-gradient-rad" title="Registration"> <span>Registration</span></a>
                    </div>
                </div> -->
                <div class="col-lg-12  col-md-12">
                <div class="carousel-wrapper" style="position: relative;">
                <div class="slider-left-fade2"></div>

                    <div class="testimonials-section owl-carousel owl-theme">
                        <div class="testimonial down">
                                <div class="media-container">
                                    <img src="assets/images/ali.png" class="thumb" />
                                    <video src="https://orbed-lms-files.techsol360.com/assets/website/2025/Ali%20Akhtar.mp4" class="video" playsinline></video>
                                </div>
                            </div>
                            <div class="testimonial">
                                <div class="media-container">
                                    <img src="assets/images/sameer.png" class="thumb" />
                                    <video src="https://orbed-lms-files.techsol360.com/assets/website/2025/sameer.mp4" class="video" playsinline></video>
                                </div>
                            </div>

                            <div class="testimonial down">
                                <div class="media-container">
                                    <img src="assets/images/zamra.png" class="thumb" />
                                    <video src="https://orbed-lms-files.techsol360.com/assets/website/2025/Zamra%20Irfan.mp4" class="video" playsinline></video>
                                </div>
                            </div>
                            <div class="testimonial">
                                <div class="media-container">
                                    <img src="assets/images/ArsalanAhmed.png" class="thumb" />
                                    <video src="https://orbed-lms-files.techsol360.com/assets/website/2025/Arsalan%20Ahmed%201.mp4" class="video" playsinline></video>
                                </div>
                            </div>
                            <div class="testimonial down">
                                <div class="media-container">
                                    <img src="assets/images/Mahnoor.png" class="thumb" />
                                    <video src="https://orbed-lms-files.techsol360.com/assets/website/2025/Mahnoor.mp4" class="video" playsinline></video>
                                </div>
                            </div>
                            <div class="testimonial down">
                                <div class="media-container">
                                    <img src="assets/images/NabihahSalman.png" class="thumb" />
                                    <video src="https://orbed-lms-files.techsol360.com/assets/website/2025/Nabihah%20Salman.mp4" class="video" playsinline></video>
                                </div>
                            </div>
                        </div>
                    </div>

                <script>
                    document.querySelectorAll('.media-container').forEach(container => {
                        
                        const video = container.querySelector('.video');
                        container.addEventListener('mouseenter', () => {
                            video.play();
                        });
                        container.addEventListener('mouseleave', () => {
                            video.pause();
                            video.currentTime = 0;
                        });
                    });
                </script>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-2">
        <div class="container-1500">
            <h1 class="title-mean " data-aos="zoom-in">Learn <span>|</span> Solve <span>|</span> Engage <br>
                Revise <span>|</span> Prep </h1>

            <div class="row">
            <div class="col-lg-9 col-md-9 video-div" data-aos="fade-up" data-aos-duration="3000">
                <div class="videoCoverImage">
                    <div id="video-thumbnail" onclick="loadVideo('https://orbed-lms-files.techsol360.com/assets/website/2025/sir%20zarak%2001-.mp4')">
                        <img width="100%" class="thumb" style="cursor: pointer;" src="assets/images/May-June.jpg">
                    </div>
                    <div id="thevideo" style="display: none;">
                        <iframe id="main-video-frame" width="100%" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

                <div class="col-lg-3 col-md-3 video-div" data-aos="fade-up" data-aos-duration="3000" style="max-height: 635; overflow-y: auto;">
                    <div class="videoCoverImage" style="margin-bottom: 10px;">
                        <div onclick="loadVideo('https://orbed-lms-files.techsol360.com/assets/website/2025/sir%20zarak%2003.mp4')">
                            <img width="100%" class="thumb" src="assets/images/Oct-Nov.png" alt="Video-Thumbnail">
                        </div>
                        <div style="display: none;">
                            <iframe width="100%"
                                src="https://orbed-lms-files.techsol360.com/assets/website/2025/sir%20zarak%2003.mp4"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="videoCoverImage" style="margin-bottom: 10px;">
                        <div onclick="loadVideo('https://orbed-lms-files.techsol360.com/assets/website/2025/sir%20zarak%2004.mp4')">
                            <img width="100%" class="thumb" src="assets/images/O-Level-VT.jpg" alt="Video-Thumbnail">
                        </div>
                        <div style="display: none;">
                            <iframe width="100%"
                                src="https://orbed-lms-files.techsol360.com/assets/website/2025/sir%20zarak%2004.mp4"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="videoCoverImage" style="margin-bottom: 10px;">
                        <div onclick="loadVideo('https://orbed-lms-files.techsol360.com/assets/website/2025/sir%20zarak%2005.mp4')">
                            <img width="100%" class="thumb" src="assets/images/A-Level-VT.jpg" alt="Video-Thumbnail">
                        </div>
                        <div style="display: none;">
                            <iframe width="100%"
                                src="https://orbed-lms-files.techsol360.com/assets/website/2025/sir%20zarak%2005.mp4"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="videoCoverImage" style="margin-bottom: 10px;">
                        <div onclick="loadVideo('https://orbed-lms-files.techsol360.com/assets/website/2025/sir%20zarak%2006.mp4')">
                            <img width="100%" class="thumb" src="assets/images/AS-Level-VT.jpg" alt="Video-Thumbnail">
                        </div>
                        <div style="display: none;">
                            <iframe width="100%"
                                src="https://orbed-lms-files.techsol360.com/assets/website/2025/sir%20zarak%2006.mp4"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- <div class="videoCoverImage" style="margin-bottom: 10px;">
                        <div onclick="showVideo(this)">
                            <img width="100%" class="thumb" src="assets/images/video.png" alt="Video-Thumbnail">
                        </div>
                        <div style="display: none;">
                            <iframe width="100%"
                                src="https://orbed-lms-files.techsol360.com/assets/website/Sir%20Zarak%20Orbed%20Video%2003.mp4"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div> -->
                    <!-- <div class="videoCoverImage" style="margin-bottom: 10px;">
                        <div onclick="showVideo(this)">
                            <img width="100%" class="thumb" src="assets/images/video.png" alt="Video-Thumbnail">
                        </div>
                        <div style="display: none;">
                            <iframe width="100%"
                                src="https://orbed-lms-files.techsol360.com/assets/website/Sir%20Zarak%20Orbed%20Video%2003.mp4"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div> -->
                </div>

                <!-- <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="blogs.php">
                            <div class="box">
                                <div class="imgDiv">
                                    <img alt="crypto" height="100%" src="assets/images/blogs/Blog1.jpg">
                                </div>
                                <div class="box-textP">
                                    <p>Stepping Into A Level? Here's How Orb-Ed Can Help</p>
                                </div>
                            </div>
                        </a>
                        <p class="box-below-text">Whether you’re a student who’s invested in academics or one that does
                            not
                            like to study a lot...</p>
                    </div>
                    <div class="item">
                        <a href="blogs.php">
                            <div class="box">
                                <div class="imgDiv">
                                    <img alt="crypto" height="100%" src="assets/images/blogs/Blog2.jpg">
                                </div>
                                <div class="box-textP">
                                    <p>5 Reasons Why Orb-Ed Is The Best Learning Partner</p>
                                </div>
                            </div>
                        </a>
                        <p class="box-below-text">It’s not every day that one stumbles upon the best learning partner on
                            the
                            internet but since... </p>
                    </div>
                    <div class="item">
                        <a href="blogs.php">
                            <div class="box">
                                <div class="imgDiv">
                                    <img alt="crypto" height="100%" src="assets/images/blogs/Blog3.jpg">
                                </div>
                                <div class="box-textP">
                                    <p>Unveiling the Advantages of E-Learning</p>
                                </div>
                            </div>
                        </a>
                        <p class="box-below-text">One of the most significant advantages of e-learning is its
                            flexibility.
                            Students can access... </p>
                    </div>
                    <div class="item">
                        <a href="blogs.php">
                            <div class="box">
                                <div class="imgDiv">
                                    <img alt="crypto" height="100%" src="assets/images/blogs/Blog4.jpg">
                                </div>
                                <div class="box-textP">
                                    <p>The Power of 24/7 Tutor Support & non-stop learning</p>
                                </div>
                            </div>
                        </a>
                        <p class="box-below-text">With 24/7 tutor support, the learning never stops. Whether it's a
                            late-night study session... </p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <section class="sec-5">
        <div class="container-1500">
            <div class="row">
                <div class="col-lg-6 col-md-6 m-auto ">
                    <div class="video-sec-3">
                        <h2 id="pkrH2" data-aos="zoom-in">O Level Maths</br> Rs. 1,999/month</h2>
                        <p class="mb-1" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">50+ Videos,
                            Quizzes, Live Chat</p>
                        <!-- <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Prices starting from exam
                            <span id="pkrSpan">RS. 15,000/per</span> exam series
                        </p> -->
                        <a href="https://lms.orb-ed.pk/account/register">INCLUDES</a>
                    </div>
                </div>
                <div class="mt-5 col-lg-6 col-md-6 m-auto">
                    <div class="video-div ab" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <div class="videoCoverImage">
                            <img src="assets/images/OLevelMaths.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-4">
        <div class="container-1500">
            <div class="row">
                <div class="col-lg-6 col-md-6  m-auto">
                    <p style="font-size: 25px;" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"><strong>90%
                            of Orb-<span style="color:red;">Ed</span> users have reported significant improvement and
                            better
                            grades in their understanding of O&A Level subjects through our resources.</strong>
                    </p>
                </div>
                <div class="col-lg-6  col-md-6 mob-img">
                    <img src="assets/images/bannerdevices.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="sec-5">
        <div class="container-1500">
            <div class="row">
                <div class="col-lg-6 col-md-6 m-auto ">
                    <div class="demo-sec-1">
                        <h1 class="" data-aos="zoom-in">Request A Free Demo!</h1>
                        <div class="refreshing-input animate__animated animate__fadeInLeftBig">
                            <input type="text" placeholder="YOUR EMAIL">
                            <i class="fa-solid fa-envelope fa-bounce"></i>
                            <a href="https://lms.orb-ed.pk/account/register" class="btn-gradient-rad"
                                title="GET ACCESS">GET ACCESS</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6 m-auto">
                    <div class="video-div ab" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <div class="videoCoverImage">
                            <img src="assets/images/bannerDemo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-2">
        <div class="container-1500">
            <h1 class="title-mean " data-aos="zoom-in">WHAT WE OFFER</h1>
        </div>
    </section>

    <section class="sec-3">
        <div class="container-1500 d-block d-lg-none">
            <div class="row" style="justify-content: center;">
                <div class="col-lg-2 col-md-6 pb-5 " data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="offer">
                        <img src="assets/images/offer1.png" alt="">

                        <h6>Structured </br>Subject Videos</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="offer">
                        <img src="assets/images/offer2.png" alt="">

                        <h6>Quality Course </br>Material</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="offer">
                        <img src="assets/images/offer3.png" alt="">

                        <h6>Lecture Notes</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="offer">
                        <img src="assets/images/offer4.png" alt="">

                        <h6>24/7 Tutor Support</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="offer">
                        <img src="assets/images/offer9.png" alt="">

                        <h6>Topical and Yearly <br> Past Papers <br> (Solved & Unsolved)</h6>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 pb-5 " data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="offer">
                        <img src="assets/images/offer5.png" alt="">

                        <h6>Assignments & Mock Examination</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="offer">
                        <img src="assets/images/offer6.png" alt="">

                        <h6>Revision Guides</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="offer">
                        <img src="assets/images/offer7.png" alt="">

                        <h6>Revision Workshops</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="offer">
                        <img src="assets/images/offer8.png" alt="">

                        <h6>WhatsApp Chat Support</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="offer">
                        <img src="assets/images/offer10.png" alt="">

                        <h6>Past Paper </br>Tips & Tricks</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-1500 d-none d-lg-block">
            <div class="row" style="justify-content: center;">
                <div class="col-lg-2 col-md-6 pb-5 " data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="offer">
                        <img src="assets/images/offer1.png" alt="">

                        <h6>Structured </br>Subject Videos</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="offer">
                        <img src="assets/images/offer2.png" alt="">

                        <h6>Quality Course </br>Material</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="offer">
                        <img src="assets/images/offer3.png" alt="">

                        <h6>Lecture Notes</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="offer">
                        <img src="assets/images/offer4.png" alt="">

                        <h6>24/7 Tutor Support</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="offer">
                        <img src="assets/images/offer9.png" alt="">

                        <h6>Topical and Yearly <br> Past Papers <br> (Solved & Unsolved)</h6>
                    </div>
                </div>
            </div>
            <div class="row" style="justify-content: center;">

                <div class="col-lg-2 col-md-6 pb-5 " data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="offer">
                        <img src="assets/images/offer5.png" alt="">

                        <h6>Assignments & Mock Examination</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="offer">
                        <img src="assets/images/offer6.png" alt="">

                        <h6>Revision Guides</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="offer">
                        <img src="assets/images/offer7.png" alt="">

                        <h6>Revision Workshops</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="offer">
                        <img src="assets/images/offer8.png" alt="">

                        <h6>WhatsApp Chat Support</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="offer">
                        <img src="assets/images/offer10.png" alt="">

                        <h6>Past Paper </br>Tips & Tricks</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-5">
        <div class="container-1500">
            <div class="row">
                <div class="col-lg-6 col-md-6 m-auto ">
                    <div class="video-sec-3">
                        <h2 id="pkrH2" data-aos="zoom-in">Save up to 80% on</br> past papers, coursebooks,</br> notes,
                            and
                            commute</h2>
                        <p class="mb-1" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Subscribe to Orb-Ed
                            and get
                            access to unlimited learning resources</p>
                        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Prices starting from exam
                            <span id="pkrSpan">RS. 15,000/per</span> exam series
                        </p>
                        <a href="https://lms.orb-ed.pk/account/register">Register Now!</a>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6 m-auto">
                    <div class="video-div ab" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <div class="videoCoverImage">
                            <img src="assets/images/bannerGirl.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-2">
        <div class="container-1500">
            <h1 class="title-mean " data-aos="zoom-in">WHY IS ORB-ED RIGHT FOR ME</h1>
        </div>
    </section>

    <section class="sec-4">

        <span class="sec4-line"> <img src="assets/images/ban-img-bg.png" alt=""></span>
        <span class="sec4-line"> <img src="assets/images/ban-line-1.png" alt=""></span>
        <div class="container-1500">
            <div class="row">
                <div class="col-lg-6 col-md-6  m-auto">
                    <h1 class="title-mean" data-aos="zoom-in">LEARN. </h1>
                    <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Quality videos. Great notes. Made by
                        instructional designers
                        with decades of experience.</p>

                    <div class="learn ">
                        <h2 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"><img
                                src="assets/images/4503915.png" alt=""> VIDEO LESSONS</h2>
                        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Hundreds of hours of high
                            quality video content, capped at
                            15 minutes, designed by highly experienced instructional designers.</p>
                    </div>


                    <div class="learn">
                        <h2 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"><img
                                src="assets/images/img_18374.png" alt=""> SUBJECTS NOTES</h2>
                        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Need words to read rather than
                            listen? Our subject notes capture
                            key concepts at length, covering the course material - chapter
                            by chapter.</p>
                    </div>

                    <div class="btn-our " data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <a href="courses.php" class="btn-gradient-rad" title="Learn More"> <span>Learn More</span> <i
                                class="fa-solid fa-arrow-right fa-fade"></i></a>
                    </div>
                </div>


                <div class="col-lg-6  col-md-6 mob-img">
                    <img src="assets/images/grdnt-bg-mob.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="sec-4">

        <div class="container-1500">
            <div class="row">


                <div class="col-lg-6 col-md-6 mob-img">
                    <img src="assets/images/tab-mob.png" alt="">
                </div>
                <div class="col-lg-6 col-md-6 m-auto">
                    <h1 class="title-mean" data-aos="zoom-in">SOLVE. </h1>
                    <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Don’t just know a concept, master it
                        with skill checks and
                        worksheets.</p>

                    <div class="learn">
                        <h2 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"><img
                                src="assets/images/solve1.png" alt=""> SKILL CHECK QUESTIONS</h2>
                        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Why just watch a video lesson
                            when you can really assess your
                            progress in real time? Each video ends with a skill check to help
                            you master key concepts across the syllabus.</p>
                    </div>


                    <div class="learn">
                        <h2 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"><img
                                src="assets/images/img_18374.png" alt=""> CHAPTER WORKSHEETS</h2>
                        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">With questions spanning multiple
                            resources, use the worksheets
                            to take your mastery to the next level.</p>
                    </div>

                    <div class="btn-our" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <a href="courses.php" class="btn-gradient-rad" title="Learn More"> <span>Learn More</span> <i
                                class="fa-solid fa-arrow-right fa-fade"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-4">

        <span class="sec4-line"> <img src="assets/images/ban-img-bg.png" alt=""></span>
        <span class="sec4-line"> <img src="assets/images/ban-line-1.png" alt=""></span>
        <div class="container-1500">
            <div class="row">
                <div class="col-lg-6 col-md-6  m-auto">
                    <h1 class="title-mean" data-aos="zoom-in">REVISE. </h1>
                    <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"></p>

                    <div class="learn ">
                        <h2 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"><img
                                src="assets/images/revision1.png" alt=""> REVISION GUIDES</h2>
                        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Each subject comes with a series
                            of revision guides to make your
                            last minute study sessions effortless. Excel in your studies and
                            learn effectively in the final hours to stay calm before your exams.</p>
                    </div>


                    <div class="learn">
                        <h2 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"><img
                                src="assets/images/revision2.png" alt=""> REVISION WORKSHOPS</h2>
                        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Our exceptional faculty members
                            provide live sessions prior to exams,
                            boost academic understanding, and provide guidance on appearing in
                            the exams. Revision workshops help retain learning material, provide
                            question and answer sessions with faculty, and bring clarity in concepts
                            so that our students excel and do well in exams.</p>
                    </div>

                    <div class="btn-our " data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <a href="courses.php" class="btn-gradient-rad" title="Learn More"> <span>Learn More</span> <i
                                class="fa-solid fa-arrow-right fa-fade"></i></a>
                    </div>
                </div>

                <div class="col-lg-6  col-md-6 mob-img">
                    <img src="assets/images/revisionbanner.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="sec-3 mt-0">
        <div class="container-1500">
            <div class="row">
                <div class="col-lg-3 col-md-6 pb-5 " data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="know">
                        <img src="assets/images/KNOW1.png" alt="">
                        <span>
                            <h2 class="mb-0">100+</h2>
                            <h6>REGISTERED USERS</h6>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="know">
                        <img src="assets/images/KNOW2.png" alt="">
                        <span>
                            <h2 class="mb-0">1000+</h2>
                            <h6>WATCH HOURS</h6>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="know">
                        <img src="assets/images/KNOW3.png" alt="">
                        <span>
                            <h2 class="mb-0">200+<span id="hrs">HRS</span></h2>
                            <h6>OF LECTURE MATERIAL</h6>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="know">
                        <img src="assets/images/KNOW4.png" alt="">
                        <span>
                            <h2 class="mb-0">40+ </h2>
                            <h6>LIVE TUTORS </h6>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="sec-6">

        <h1 class="title-mean" data-aos="zoom-in">STUDENT TESTIMONIALS</h1>
        <div class="container-1500">

            <div class="testimonial autoplay">
                <div class="testimonial-content">
                    <img src="assets/images/test.png" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                    </div>
                    <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Orb-Ed is a lifesaver! Their
                        platform's material was more than enough, and the recorded lectures made extra assistance
                        unnecessary. I loved how they explained complex topics so clearly. Plus, their app's convenience
                        allowed me to study literally anywhere, freeing me from the burden of heavy books. Orb-Ed truly
                        simplified my learning journey. </p>
                    <div class="name-plate">
                        <h5 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Roohima Hussain</h5>
                        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Orb-Ed Student, Karachi</p>

                    </div>
                </div>
                <div class="testimonial-content">
                    <img src="assets/images/test.png" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                    </div>
                    <p>With only 3 months to cover the economics syllabus, I relied on Orb-Ed's economics course. It let
                        me focus on my weak spots. If I could go back, I wouldn't choose a private tutor over Orb-Ed.
                        It's the best help a student can get. </p>
                    <div class="name-plate">
                        <h5>Muhammad Haseeb</h5>
                        <p>Orb-Ed Student, Karachi</p>

                    </div>
                </div>
                <div class="testimonial-content">
                    <img src="assets/images/test.png" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                    </div>
                    <p>What stands out for me about Orb-Ed is their excellent management. They've consistently helped
                        answer my questions even late night. They even provided teacher demos, helping me decide which
                        course content was more understandable to my capacity. Their app is incredibly user-friendly. My
                        time with Orb-Ed has been exceptional. I wholeheartedly recommend it to fellow students. </p>
                    <div class="name-plate">
                        <h5>Najaf Abbas</h5>
                        <p>Orb-Ed Student, Karachi</p>

                    </div>
                </div>
                <div class="testimonial-content">
                    <img src="assets/images/test.png" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                    </div>
                    <p>Thanks to Orb-Ed, I successfully completed my AS year with ease. The experience was fantastic,
                        and without a doubt, I'm continuing with Orb-Ed for my A2. It's an ideal resource, especially
                        for private students. </p>
                    <div class="name-plate">
                        <h5>Hamiz Bhatti</h5>
                        <p>Orb-Ed Student, Karachi</p>

                    </div>
                </div>
                <div class="testimonial-content">
                    <img src="assets/images/test.png" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                    </div>
                    <p>Orb-Ed's resources are incredibly valuable. They've saved me time, money, and the hassle of
                        commuting. I can attend classes right from home. As a student with a job on the side, this is
                        perfect. </p>
                    <div class="name-plate">
                        <h5>Fahad Mustafa</h5>
                        <p>Orb-Ed Student, Karachi</p>

                    </div>
                </div>
                <div class="testimonial-content">
                    <img src="assets/images/test.png" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                        <i class="fa-solid fa-star fa-beat"></i>
                    </div>
                    <p>The Orb-Ed platform has proven extremely helpful for me. It's like having my notebook on my
                        mobile device. While I wished for the content to be published sooner, it was delivered as
                        promised and greatly aided my learning. </p>
                    <div class="name-plate">
                        <h5>Saqib Doullah</h5>
                        <p>Orb-Ed Student, Karachi</p>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="sec-2">
        <div class="container-1500">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="blogs.php">
                            <div class="box">
                                <div class="imgDiv">
                                    <img alt="crypto" height="100%" src="assets/images/blogs/Blog1.jpg">
                                </div>
                                <div class="box-textP">
                                    <p>Stepping Into A Level? Here's How Orb-Ed Can Help</p>
                                </div>
                            </div>
                        </a>
                        <p class="box-below-text">Whether you’re a student who’s invested in academics or one that does
                            not
                            like to study a lot...</p>
                    </div>
                    <div class="item">
                        <a href="blogs.php">
                            <div class="box">
                                <div class="imgDiv">
                                    <img alt="crypto" height="100%" src="assets/images/blogs/Blog2.jpg">
                                </div>
                                <div class="box-textP">
                                    <p>5 Reasons Why Orb-Ed Is The Best Learning Partner</p>
                                </div>
                            </div>
                        </a>
                        <p class="box-below-text">It’s not every day that one stumbles upon the best learning partner on
                            the
                            internet but since... </p>
                    </div>
                    <div class="item">
                        <a href="blogs.php">
                            <div class="box">
                                <div class="imgDiv">
                                    <img alt="crypto" height="100%" src="assets/images/blogs/Blog3.jpg">
                                </div>
                                <div class="box-textP">
                                    <p>Unveiling the Advantages of E-Learning</p>
                                </div>
                            </div>
                        </a>
                        <p class="box-below-text">One of the most significant advantages of e-learning is its
                            flexibility.
                            Students can access... </p>
                    </div>
                    <div class="item">
                        <a href="blogs.php">
                            <div class="box">
                                <div class="imgDiv">
                                    <img alt="crypto" height="100%" src="assets/images/blogs/Blog4.jpg">
                                </div>
                                <div class="box-textP">
                                    <p>The Power of 24/7 Tutor Support & non-stop learning</p>
                                </div>
                            </div>
                        </a>
                        <p class="box-below-text">With 24/7 tutor support, the learning never stops. Whether it's a
                            late-night study session... </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
    <!--<elevenlabs-convai end-call-text="End call" listening-text="Listening..." agent-id="agent_4801k2hdmw8vf339j82w3spnbese"></elevenlabs-convai><script src="https://unpkg.com/@elevenlabs/convai-widget-embed" async type="text/javascript"></script>-->
<?php include('footer.php'); ?>
</div>