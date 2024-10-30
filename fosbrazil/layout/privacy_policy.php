<?php
defined('MOODLE_INTERNAL') || die(); // Verificación de contexto de Moodle
require_once(__DIR__ . '/../../config.php'); // Cargar configuración de Moodle

global $PAGE, $OUTPUT, $SITE;

if (empty($SITE)) {
    $SITE = get_site();
}

$PAGE->set_pagelayout('standard');
$PAGE->set_url(new moodle_url('/theme/fosbrazil/layout/privacy_policy.php'));
$PAGE->set_title(get_string('privacypolicy', 'theme_fosbrazil'));
$PAGE->set_heading($SITE->fullname);
$PAGE->navbar->add(get_string('privacypolicy', 'theme_fosbrazil'));

echo "Página cargada correctamente"; // Mensaje de prueba para depuración
echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_fosbrazil/privacy_policy', []);
echo $OUTPUT->footer();
