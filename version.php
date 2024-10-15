<?php
<?php
/**
 * This file is part of Moodle - http://moodle.org/
 *
 * Moodle is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Moodle is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Moodle.  If not, see <https://www.gnu.org/licenses/>.
 *
 * @package    theme_child_fos_brazil
 * @copyright  2024 digitalMood
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Prevent direct access to the file.
defined('MOODLE_INTERNAL') || die();

// Plugin version information.
$plugin->version   = '2024101400'; // YYYYMMDDXX
$plugin->requires  = '2016070700'; // Minimum Moodle version (update accordingly)20240212
$plugin->component = 'theme_child_fos_brazil';

// List of dependencies with their minimum required versions.
$plugin->dependencies = [
    'theme_boost' => 2023101800 // Update to the current version of theme_boost
];

// Optional: Define plugin maturity and release version.
$plugin->maturity = MATURITY_STABLE;
$plugin->release   = '1.0.0';