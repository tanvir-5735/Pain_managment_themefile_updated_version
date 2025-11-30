<?php
/**
 * Home Banner Template Part
 *
 * @package Mohammed
 */

?>

<section id="homeBanner" class="home_banner">
    <div class="banner_content_wrapper">
        <div class="banner_video">
            <video autoplay muted loop playsinline>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/home_banner_video.mp4"
                    type="video/mp4">
            </video>
        </div>
        <div class="banner_content">
            <h1>Live Life Pain-Free</h1>
            <p>Advanced Pain Institute of Texas is a full-spectrum, multi-disciplinary pain management practice focused
                on providing the best patient-focused care for a wide range of chronic pain conditions.</p>
            <div class="btnWrapper">
                <a href=""></a>
                <div class="myBtn">
                    <span>908-228-1198</span>
                </div>
                <a href="<?php echo home_url('/abbout_our_physicians'); ?>">
                    <div class="myBtn">
                        <span>Book Appointment</span>
                    </div>
                </a>
            </div>
        </div>
        <!-- ---textus messaging--- -->
        <!-- <div class="text_us">
            <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_764_1005" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="20"
                        height="20">
                        <path
                            d="M20 2C21.1 2 22 2.9 22 4V16C22 17.1 21.1 18 20 18H6L2 22L2.00977 4C2.00977 2.9 2.9 2 4 2H20ZM7 12C6.45 12 6 12.45 6 13C6 13.55 6.45 14 7 14H13C13.55 14 14 13.55 14 13C14 12.45 13.55 12 13 12H7ZM7 9C6.45 9 6 9.45 6 10C6 10.55 6.45 11 7 11H17C17.55 11 18 10.55 18 10C18 9.45 17.55 9 17 9H7ZM7 6C6.45 6 6 6.45 6 7C6 7.55 6.45 8 7 8H17C17.55 8 18 7.55 18 7C18 6.45 17.55 6 17 6H7Z"
                            fill="black" />
                    </mask>
                    <g mask="url(#mask0_764_1005)">
                        <rect width="24" height="24" fill="#FDFDFD" />
                    </g>
                </svg>
            </span>
            <span>Text Us</span>
        </div> -->
        <!-- --message us-- -->
        <!-- <div class="message_us">
            <img src="/messageAvatar.jpg" alt="messageAvatar">
            <p>interested in booking
                an appointment?
                Message us here!</p>
        </div> -->
    </div>
</section>