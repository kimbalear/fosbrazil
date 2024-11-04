<?php
require_once(__DIR__ . '/../../config.php'); // Incluye la configuración de Moodle.

$PAGE->set_url(new moodle_url('/theme/fosbrazil/contact.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('contact_title', 'theme_fosbrazil'));
$PAGE->set_heading(get_string('contact_title', 'theme_fosbrazil'));
$PAGE->set_pagelayout('standard'); // Define el layout de la página.

echo $OUTPUT->header();
?>

<div class="my-static-content">
    <div class="content_st-page">
        <p><?php echo get_string('contact_p1', 'theme_fosbrazil'); ?></p>
    </div>
</div>

<?php
echo $OUTPUT->footer();
