<?php
require_once(__DIR__ . '/../../config.php'); // Incluye la configuración de Moodle.

$PAGE->set_url(new moodle_url('/theme/fosbrazil/privacy_policy.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('terms_and_privacy', 'theme_fosbrazil'));
$PAGE->set_heading(get_string('terms_and_privacy', 'theme_fosbrazil'));
$PAGE->set_pagelayout('standard'); // Define el layout de la página.

echo $OUTPUT->header();
?>

<div class="my-static-content">
    <div class="nav_st-page">
        <p><?php echo get_string('terms_and_privacy_intro_p1', 'theme_fosbrazil'); ?></p>
        <p><?php echo get_string('terms_and_privacy_intro_p2', 'theme_fosbrazil'); ?></p>
        <p><?php echo get_string('terms_and_privacy_intro_p3', 'theme_fosbrazil'); ?></p>
        <p><?php echo get_string('terms_and_privacy_intro_p4', 'theme_fosbrazil'); ?></p>

        <ul>
            <li>
                <a href="#one"><b>1. </b><?php echo get_string('terms_and_privacy_nav1', 'theme_fosbrazil'); ?></a>
            </li>
            <li>
                <a href="#two"><b>2. </b><?php echo get_string('terms_and_privacy_nav2', 'theme_fosbrazil'); ?></a>
            </li>
            <li>
                <a href="#trhee"><b>3. </b><?php echo get_string('terms_and_privacy_nav3', 'theme_fosbrazil'); ?></a>
            </li>
            <li>
                <a href="#four"><b>4. </b><?php echo get_string('terms_and_privacy_nav4', 'theme_fosbrazil'); ?></a>
            </li>
            <li>
                <a href="#five"><b>5. </b><?php echo get_string('terms_and_privacy_nav5', 'theme_fosbrazil'); ?></a>
            </li>
            <li>
                <a href="#six"><b>6. </b><?php echo get_string('terms_and_privacy_nav6', 'theme_fosbrazil'); ?></a>
            </li>
            <li>
                <a href="#seven"><b>7. </b><?php echo get_string('terms_and_privacy_nav7', 'theme_fosbrazil'); ?></a>
            </li>
            <li>
                <a href="#eight"><b>8. </b><?php echo get_string('terms_and_privacy_nav8', 'theme_fosbrazil'); ?></a>
            </li>
            <li>
                <a href="#nine"><b>9. </b><?php echo get_string('terms_and_privacy_nav9', 'theme_fosbrazil'); ?></a>
            </li>
            <li>
                <a href="#ten"><b>10. </b><?php echo get_string('terms_and_privacy_nav10', 'theme_fosbrazil'); ?></a>
            </li>
            <li>
                <a href="#eleven"><b>11. </b><?php echo get_string('terms_and_privacy_nav11', 'theme_fosbrazil'); ?></a>
            </li>
            <li>
                <a href="#twelve"><b>12. </b><?php echo get_string('terms_and_privacy_nav12', 'theme_fosbrazil'); ?></a>
            </li>
            <li>
                <a href="#thirteen"><b>13.
                    </b><?php echo get_string('terms_and_privacy_nav13', 'theme_fosbrazil'); ?></a>
            </li>
        </ul>
    </div>
    <div class="content_st-page">
        <section id="one">
            <h2 class="section-title"><b>1.
                </b><?php echo get_string('terms_and_privacy_one_title', 'theme_fosbrazil'); ?></h2>
            <p><?php echo get_string('terms_and_privacy_one_p1', 'theme_fosbrazil'); ?></p>
        </section>

        <section id="two">
            <h2 class="section-title"><b>2.
                </b><?php echo get_string('terms_and_privacy_two_title', 'theme_fosbrazil'); ?></h2>
            <p><?php echo get_string('terms_and_privacy_two_p1', 'theme_fosbrazil'); ?></p>
        </section>
        <section id="trhee">
            <h2 class="section-title"><b>3.
                </b><?php echo get_string('terms_and_privacy_trhee_title', 'theme_fosbrazil'); ?></h2>
            <p><?php echo get_string('terms_and_privacy_trhee_p1', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_trhee_p2', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_trhee_p3', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_trhee_p4', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_trhee_p5', 'theme_fosbrazil'); ?></p>
        </section>
        <section id="four">
            <h2 class="section-title"><b>4.
                </b><?php echo get_string('terms_and_privacy_four_title', 'theme_fosbrazil'); ?></h2>
            <p><?php echo get_string('terms_and_privacy_four_p1', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_four_p2', 'theme_fosbrazil'); ?></p>

        </section>
        <section id="five">
            <h2 class="section-title"><b>5.
                </b><?php echo get_string('terms_and_privacy_five_title', 'theme_fosbrazil'); ?></h2>
            <ul>
                <li>
                    <h3 class="section-title"><b>5.1
                        </b><?php echo get_string('terms_and_privacy_five_subtitle1', 'theme_fosbrazil'); ?></h3>
                    <p><?php echo get_string('terms_and_privacy_five_sub1_p1', 'theme_fosbrazil'); ?></p>
                    <ol>
                        <li>
                            <p><?php echo get_string('terms_and_privacy_five_sub1_p1_l1', 'theme_fosbrazil'); ?></p>
                        </li>
                        <li>
                            <p><?php echo get_string('terms_and_privacy_five_sub1_p1_l2', 'theme_fosbrazil'); ?></p>
                        </li>
                        <li>
                            <p><?php echo get_string('terms_and_privacy_five_sub1_p1_l3', 'theme_fosbrazil'); ?></p>
                        </li>
                        <li>
                            <p><?php echo get_string('terms_and_privacy_five_sub1_p1_l4', 'theme_fosbrazil'); ?></p>
                        </li>
                    </ol>
                </li>
                <li>
                    <h3 class="section-title"><b>5.2
                        </b><?php echo get_string('terms_and_privacy_five_subtitle2', 'theme_fosbrazil'); ?></h3>
                    <p><?php echo get_string('terms_and_privacy_five_sub2_p1', 'theme_fosbrazil'); ?></p>
                    <ol>
                        <li>
                            <p><?php echo get_string('terms_and_privacy_five_sub2_p1_l1', 'theme_fosbrazil'); ?></p>
                        </li>
                        <li>
                            <p><?php echo get_string('terms_and_privacy_five_sub2_p1_l2', 'theme_fosbrazil'); ?></p>
                            <p><?php echo get_string('terms_and_privacy_five_sub2_p2_l2', 'theme_fosbrazil'); ?></p>
                            <p><?php echo get_string('terms_and_privacy_five_sub2_p3_l2', 'theme_fosbrazil'); ?></p>
                        </li>
                    </ol>
                </li>
            </ul>
        </section>
        <section id="six">
            <h2 class="section-title"><b>6.
                </b><?php echo get_string('terms_and_privacy_six_title', 'theme_fosbrazil'); ?></h2>
            <p><?php echo get_string('terms_and_privacy_six_p1', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_six_p2', 'theme_fosbrazil'); ?></p>
            <ol>
                <li>
                    <p><?php echo get_string('terms_and_privacy_six_sub_p1', 'theme_fosbrazil'); ?></p>
                </li>
                <li>
                    <p><?php echo get_string('terms_and_privacy_six_sub_p2', 'theme_fosbrazil'); ?></p>
                </li>
            </ol>
        </section>
        <section id="seven">
            <h2 class="section-title"><b>7.
                </b><?php echo get_string('terms_and_privacy_seven_title', 'theme_fosbrazil'); ?></h2>
            <p><?php echo get_string('terms_and_privacy_seven_p1', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_seven_p2', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_seven_p3', 'theme_fosbrazil'); ?></p>
        </section>
        <section id="eight">
            <h2 class="section-title"><b>8.
                </b><?php echo get_string('terms_and_privacy_eight_title', 'theme_fosbrazil'); ?></h2>
            <p><?php echo get_string('terms_and_privacy_eight_p1', 'theme_fosbrazil'); ?></p>
            <ol>
                <li>
                    <p><?php echo get_string('terms_and_privacy_eight_l1', 'theme_fosbrazil'); ?></p>
                </li>
                <li>
                    <p><?php echo get_string('terms_and_privacy_eight_l2', 'theme_fosbrazil'); ?></p>
                </li>
                <li>
                    <p><?php echo get_string('terms_and_privacy_eight_l3', 'theme_fosbrazil'); ?></p>
                </li>
            </ol>
        </section>
        <section id="nine">
            <h2 class="section-title"><b>9.
                </b><?php echo get_string('terms_and_privacy_nine_title', 'theme_fosbrazil'); ?></h2>
            <p><?php echo get_string('terms_and_privacy_nine_p1', 'theme_fosbrazil'); ?></p>
            <ul>
                <li>
                    <p><?php echo get_string('terms_and_privacy_nine_p1_l1', 'theme_fosbrazil'); ?></p>
                </li>
                <li>
                    <p><?php echo get_string('terms_and_privacy_nine_p1_l2', 'theme_fosbrazil'); ?></p>
                </li>
                <li>
                    <p><?php echo get_string('terms_and_privacy_nine_p1_l3', 'theme_fosbrazil'); ?></p>
                </li>
                <li>
                    <p><?php echo get_string('terms_and_privacy_nine_p1_l4', 'theme_fosbrazil'); ?></p>
                </li>
                <li>
                    <p><?php echo get_string('terms_and_privacy_nine_p1_l5', 'theme_fosbrazil'); ?></p>
                </li>
                <li>
                    <p><?php echo get_string('terms_and_privacy_nine_p1_l6', 'theme_fosbrazil'); ?></p>
                </li>
                <li>
                    <p><?php echo get_string('terms_and_privacy_nine_p1_l7', 'theme_fosbrazil'); ?></p>
                </li>
            </ul>
            <p><?php echo get_string('terms_and_privacy_nine_p2', 'theme_fosbrazil'); ?></p>
            <ul>
                <li>
                    <p><?php echo get_string('terms_and_privacy_nine_p2_l1', 'theme_fosbrazil'); ?></p>
                </li>
                <li>
                    <p><?php echo get_string('terms_and_privacy_nine_p2_l2', 'theme_fosbrazil'); ?></p>
                </li>
                <li>
                    <p><?php echo get_string('terms_and_privacy_nine_p2_l3', 'theme_fosbrazil'); ?></p>
                </li>
                <li>
                    <p><?php echo get_string('terms_and_privacy_nine_p2_l3', 'theme_fosbrazil'); ?></p>
                </li>
            </ul>
            <p><?php echo get_string('terms_and_privacy_nine_p3', 'theme_fosbrazil'); ?></p>
        </section>
        <section id="ten">
            <h2 class="section-title"><b>10.
                </b><?php echo get_string('terms_and_privacy_ten_title', 'theme_fosbrazil'); ?></h2>
            <p><?php echo get_string('terms_and_privacy_ten_p1', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_ten_p2', 'theme_fosbrazil'); ?></p>
        </section>
        <section id="eleven">
            <h2 class="section-title"><b>11.
                </b><?php echo get_string('terms_and_privacy_eleven_title', 'theme_fosbrazil'); ?></h2>
            <p><?php echo get_string('terms_and_privacy_eleven_p1', 'theme_fosbrazil'); ?></p>
        </section>
        <section id="twelve">
            <h2 class="section-title"><b>12.
                </b><?php echo get_string('terms_and_privacy_twelve_title', 'theme_fosbrazil'); ?></h2>
            <h3 class="section-title"><?php echo get_string('terms_and_privacy_twelve_title', 'theme_fosbrazil'); ?></h3>
            <p><?php echo get_string('terms_and_privacy_twelve_sub1_p1', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_twelve_sub1_p2', 'theme_fosbrazil'); ?></p>
            <h3 class="section-title"><?php echo get_string('terms_and_privacy_twelve_subtitle2', 'theme_fosbrazil'); ?></h3>
            <p><?php echo get_string('terms_and_privacy_twelve_sub2_p1', 'theme_fosbrazil'); ?></p>
            <h3 class="section-title"><?php echo get_string('terms_and_privacy_twelve_subtitle3', 'theme_fosbrazil'); ?></h3>
            <p><?php echo get_string('terms_and_privacy_twelve_sub3_p1', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_twelve_sub3_p2', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_twelve_sub3_p3', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_twelve_sub3_p4', 'theme_fosbrazil'); ?></p>
            <h3 class="section-title"><?php echo get_string('terms_and_privacy_twelve_subtitle4', 'theme_fosbrazil'); ?></h3>
            <p><?php echo get_string('terms_and_privacy_twelve_sub4_p1', 'theme_fosbrazil'); ?></p>
            <p><?php echo get_string('terms_and_privacy_twelve_sub4_p2', 'theme_fosbrazil'); ?></p>

        </section>
        <section id="thirteen">
        <h2 class="section-title"><b>13.
        </b><?php echo get_string('terms_and_privacy_thirteen_title', 'theme_fosbrazil'); ?></h2>

            <ol>
                <li>
                    <p><?php echo get_string('terms_and_privacy_thirteen_l1', 'theme_fosbrazil'); ?></p>
                </li>
                <li>
                    <p><?php echo get_string('terms_and_privacy_thirteen_l2', 'theme_fosbrazil'); ?></p>
                </li>
            </ol>
        </section>

    </div>

    <button onclick="scrollToTop()" id="backToTopBtn" title="<?php echo get_string('btn_page_nav', 'theme_fosbrazil'); ?>"><svg xmlns="http://www.w3.org/2000/svg"
            height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z" />
        </svg></button>
</div>

<?php
echo $OUTPUT->footer();
