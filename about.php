<?php
require_once(__DIR__ . '/../../config.php'); // Incluye la configuración de Moodle.

$PAGE->set_url(new moodle_url('/theme/fosbrazil/about.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('about_title', 'theme_fosbrazil'));
$PAGE->set_heading(get_string('about_title', 'theme_fosbrazil'));
$PAGE->set_pagelayout('standard'); // Define el layout de la página.

echo $OUTPUT->header();
$logourl1 = $OUTPUT->image_url('partners/partner1', 'theme_fosbrazil');
$logourl2 = $OUTPUT->image_url('partners/partner2', 'theme_fosbrazil');
$logourl3 = $OUTPUT->image_url('partners/partner3', 'theme_fosbrazil');
$logourl4 = $OUTPUT->image_url('partners/partner4', 'theme_fosbrazil');
?>

<div class="my-static-content">
    <div class="content_st-page">
        <p><?php echo get_string('about_p2', 'theme_fosbrazil'); ?></p>
        <p><?php echo get_string('about_p3', 'theme_fosbrazil'); ?></p>
        <p><?php echo get_string('about_p3', 'theme_fosbrazil'); ?>
        <a href="https://circuitos.org.br/" target="_blank">https://circuitos.org.br/</a>
        </p>
    </div>
    <div class="content_st-page_partners">
    <div>
        <span class="aboutPT"><?php echo get_string('aboutPT1', 'theme_fosbrazil'); ?></span>
        <span class="logoPT"><img src="<?php echo $logourl1; ?>" alt="Logo 1"></span>
        <span class="logoPT"><img src="<?php echo $logourl2; ?>" alt="Logo 2"></span>
    </div>
    <div>
        <span class="aboutPT"><?php echo get_string('aboutPT2', 'theme_fosbrazil'); ?></span>
        <span class="logoPT"> <img src="<?php echo $logourl3; ?>" alt="Logo 3"></span>
        <span class="logoPT"><img src="<?php echo $logourl4; ?>" alt="Logo 4"></span>
    </div>
    <div>
        <span class="aboutPT"><?php echo get_string('aboutPT3', 'theme_fosbrazil'); ?></span>
        <span class="logoPT"><img src="<?php echo $logourl1; ?>" alt="Logo 1"></span>
    </div>
    </div>
</div>
<?php
echo $OUTPUT->footer();
