<?php
/**
 * Template Name: conditions_we_treat
 * Description: A clean About/Practice page template with hero, content, contact sidebar and optional map.
 *
 * Place this file in your theme and assign the "About Practice" template to the page in WP admin.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>
<section id="Condition_page">
    <div class="myContiner">
        <div>
            <div class="conditionWeTreatWrapper">
            <!-- ====heading==== -->
            <?php
                    get_template_part(
                        'template-parts/treatHeading',
                        null,
                        [
                            'treat_heading'    => ' Conditions We Treat ',
                            'treat_subHeading' => 'At our practice, we are dedicated to providing compassionate, personalized care to every patient. Our team combines advanced medical expertise with a commitment to understanding each individual’s unique needs. Whether you’re visiting for diagnosis, treatment, or ongoing care, we strive to create a comfortable environment where your health and well-being come first.',
                        ]
                    );
            ?>
            <!-- ====heading==== -->
            <!-- ====treatment galary=== -->
            <div class="treatmentGalary">
                <div class="treatmentGlaryWrapper">
                    <!-- ---Car Accident-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Car_accident.jpg"
                                alt="Car_accident.jpg" class="glaryImage">
                            <div class="glaryContent">
                                <p>Whiplash, back pain, neck pain, soft-tissue injuries, and joint pain resulting from vehicle collisions.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Car Accident</span>
                        </div>
                    </div>
                    <!-- --Worker compensation-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Worker_compensation.jpg"
                                alt="Worker_compensation.jpg" class="glaryImage">
                            <div class="glaryContent">
                                <p>Injuries related to workplace accidents, including back pain, joint pain, repetitive strain, and musculoskeletal injuries.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Worker compensation</span>
                        </div>
                    </div>
                    <!-- --Arthritis--  -->
                    <div class="glaryItem">
                        <div class="glaryCard">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Arthritis3.jpg"
                                alt="Arthritis" class="glaryImage">
                            <div class="glaryContent">
                                <p>Pain, stiffness, and inflammation caused by osteoarthritis, rheumatoid arthritis, or joint degeneration.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Arthritis</span>
                        </div>
                    </div>
                    <!-- --Chronic Pain--  -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Chronic_Pain.jpg"
                                alt="Chronic Pain" class="glaryImage">
                            <div class="glaryContent">
                                <p>Long-lasting pain caused by nerve damage, past injuries, arthritis, or ongoing medical conditions.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Chronic Pain</span>
                        </div>
                    </div>
                    <!-- --Hip Pain-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hip_Pain2.jpg"
                                alt="Hip_Pain" class="glaryImage">

                            <div class="glaryContent">
                                <p>Pain or stiffness caused by arthritis, bursitis, muscle strain, or joint degeneration affecting daily movement.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Hip Pain</span>
                        </div>
                    </div>
                    <!-- --Migraine-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Migraine1.jpg"
                                alt="Migraine.jpg" class="glaryImage">
                            <div class="glaryContent">
                                <p>Severe or recurring headaches often accompanied by nausea, sensitivity to light, and neck tension.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Migraine</span>
                        </div>
                    </div>
                    <!-- --Lumbar Spinal Stenosis-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Lumbar Spinal Stenosis2.jpg"
                                alt="Lumbar Spinal Stenosis" class="glaryImage">
                            <div class="glaryContent">
                                <p>Narrowing of the spinal canal causing lower back pain, leg numbness, and difficulty walking.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Lumbar Spinal Stenosis</span>
                        </div>
                    </div>
                    <!-- --Low Back Pain-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Low_Back_Pain.jpg" alt="Low_Back_Pain.jpg"
                                class="glaryImage">
                            <div class="glaryContent">
                                <p>Pain, stiffness, or muscle strain in the lower back affecting daily activities and mobility.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Low Back Pain</span>
                        </div>
                    </div>
                    <!-- --Pain After Back Surgery-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Pain_After_Back_Surgery2.jpg" alt="Pain_After_Back_Surgery.jpg"
                                class="glaryImage">
                            <div class="glaryContent">
                                <p>Lingering or recurring pain following spine surgery, including nerve irritation and muscle discomfort.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Pain After Back Surgery</span>
                        </div>
                    </div>

                    <!-- --Non-Surgical Orthopedic Care-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Non_Surgical_Orthopedic_Care.jpg" alt="Non_Surgical_Orthopedic_Care.jpg"
                                class="glaryImage">
                            <div class="glaryContent">
                                <p>Comprehensive treatments for joint, muscle, and bone pain without surgery, including therapy and injections.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Non-Surgical Orthopedic Care</span>
                        </div>
                    </div>

                    <!-- --Neuropathy/ Nerve pain-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Neuropathy_Nerv_pain.jpg" alt="Neuropathy_Nerv_pain.jpg"
                                class="glaryImage">
                            <div class="glaryContent">
                                <p>Burning, tingling, or numbness caused by nerve damage, diabetes, or injury.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Neuropathy/ Nerve pain</span>
                        </div>
                    </div>

                    <!-- --Neck Pain-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Neck Pain.jpg" alt="Neck Pain.jpg"
                                class="glaryImage">
                            <div class="glaryContent">
                                <p>Pain, stiffness, or muscle tension in the neck caused by injury, poor posture, or degenerative conditions.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Neck Pain</span>
                        </div>
                    </div>

                    <!-- --Carpal Tunnel Syndrome-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Carpal_Tunnel_Syndrome.jpg" alt="Carpal_Tunnel_Syndrome.jpg"
                                class="glaryImage">
                            <div class="glaryContent">
                                <p>Hand and wrist pain, numbness, or tingling caused by compression of the median nerve.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Carpal Tunnel Syndrome</span>
                        </div>
                    </div>

                    <!-- --Varicose Veins-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Varicose_Veins.jpg" alt="Varicose_Veins.jpg"
                                class="glaryImage">
                            <div class="glaryContent">
                                <p>Enlarged, twisted veins causing discomfort, swelling, and aching in the legs.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Varicose Veins</span>
                        </div>
                    </div>

                    <!-- --Pain After Neck Surgery-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Pain_After_Neck_Surgery.jpg" alt="Pain_After_Neck_Surgery.jpg"
                                class="glaryImage">
                            <div class="glaryContent">
                                <p>Lingering or recurring neck pain following surgery, including stiffness, nerve irritation, or muscle discomfort.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Pain After Neck Surgery</span>
                        </div>
                    </div>

                    <!-- --Sacroiliac Joint Pain-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Sacroiliac_Joint_Pain.jpg" alt="Sacroiliac_Joint_Pain.jpg"
                                class="glaryImage">
                            <div class="glaryContent">
                                <p>Pain and inflammation in the lower back and hips caused by dysfunction or injury to the sacroiliac joint.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Sacroiliac Joint Pain</span>
                        </div>
                    </div>

                </div>
                <!-- <div class="view_more_btn">
                    <a href="<?php echo home_url('/home') ?>">
                        <div class="myBtn">View More</div>
                    </a>
                </div> -->
            </div>
        </div>
        </div>
        <div>
             <?php get_template_part('template-parts/booking_consultation', 'bookingConsultation'); ?>
        </div>
    </div>
</section>


<?php 
// get_template_part('template-parts/home/condition_we_treat', 'conditionWeTreat'); 
?>
<?php
get_footer();


