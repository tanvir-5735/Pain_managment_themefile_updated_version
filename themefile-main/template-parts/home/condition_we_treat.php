<?php
/**
 * Home consition_we_treat Template Part
 *
 * @package Mohammed
 */

?>
<section id="consitionWeTreat">
    <div class="myContainer">
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
                    <!-- ---back pain-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back_pain.png"
                                alt="back_pain.png" class="glaryImage">
                            <div class="glaryContent">
                                <p>Typically presents as a dull ache or sharp pain in the lower back. Pain often worsens
                                    with activity and may include stiffness or radiate into the leg (sciatica)</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Back Pain</span>
                        </div>
                    </div>
                    <!-- --Neck Pain-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/neck_pain.jpg"
                                alt="neck_pain.jpg" class="glaryImage">
                            <div class="glaryContent">
                                <p>Typically felt as a stiff neck or aching pain that worsens when moving the head. May
                                    include headaches or pain that radiates into the shoulder or down the arm</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Neck Pain</span>
                        </div>
                    </div>
                    <!-- --Headaches & Migraines--  -->
                    <div class="glaryItem">
                        <div class="glaryCard">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/headaches_migraines.jpg"
                                alt="headaches_migraines" class="glaryImage">
                            <div class="glaryContent">
                                <p>Headaches are typically a dull, constant ache on both sides of the head (Tension
                                    Headache).

                                    Migraine symptoms are more severe and often include:
                                    Throbbing, pulsing pain, usually on one side of the head.
                                    Nausea/Vomiting.
                                    Extreme sensitivity to light and sound.
                                    May be preceded by an aura (visual changes, tingling).</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Headaches & Migraines</span>
                        </div>
                    </div>
                    <!-- --Nerve Pain--  -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nerve_pain.webp"
                                alt="headaches_migraines" class="glaryImage">
                            <div class="glaryContent">
                                <p>Nerve pain is often described as burning, stabbing, or electric-shock-like
                                    sensations. It frequently includes:
                                    Tingling or "pins and needles" feeling.
                                    Numbness or a loss of feeling.
                                    Hypersensitivity to light touch (e.g., clothing or bedsheets causing pain)</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Nerve Pain</span>
                        </div>
                    </div>
                    <!-- --Post-Surgical Pain-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post_surgical.jpg"
                                alt="headaches_migraines" class="glaryImage">

                            <div class="glaryContent">
                                <p>Post-surgical pain is either short-term pain from the incision and tissue damage, or
                                    long-term (chronic post-surgical pain) resulting from nerve damage or entrapment by
                                    scar tissue.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Post-Surgical Pain</span>
                        </div>
                    </div>
                    <!-- --Muscle & Soft Tissue Pain-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/muscle_soft_tissue_pain.jpg"
                                alt="muscle_soft_tissue_pain.jpg" class="glaryImage">
                            <div class="glaryContent">
                                <p>Muscle and soft tissue pain (Myalgia) refers to discomfort in the muscles, ligaments,
                                    tendons, and fascia (connective tissue).

                                    Specific Soft Tissue Syndromes-
                                    Myofascial Pain Syndrome: Persistent, localized muscle pain caused by trigger points
                                    (tender knots or nodules within a tight band of muscle). Pressure on these points
                                    causes pain, sometimes radiating to other areas.
                                    Tendonitis/Bursitis: Inflammation of a tendon or bursa (fluid-filled sac near a
                                    joint), leading to acute pain, tenderness, and difficulty moving the joint.</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Muscle & Soft Tissue Pain</span>
                        </div>
                    </div>
                    <!-- --Cancer Pain-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cancer_pain.jpg"
                                alt="Cancer Pain" class="glaryImage">
                            <div class="glaryContent">
                                <p>Cancer pain is a complex symptom that can be caused by the disease itself, by the treatment, or by other related conditions. Pain management is a crucial part of cancer care</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Cancer Pain</span>
                        </div>
                    </div>
                    <!-- --Joint Pain-- -->
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg" alt="joint_pain.jpg"
                                class="glaryImage">
                            <div class="glaryContent">
                                <p>Peripheral joint pain is a common issue causing generalized stiffness and aching in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes presenting as nerve issues like carpal tunnel syndrome</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Joint Pain</span>
                        </div>
                    </div>

                </div>
                <div class="view_more_btn">
                    <a href="<?php echo home_url('/condition_we_treat') ?>">
                        <div class="myBtn">View More</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>