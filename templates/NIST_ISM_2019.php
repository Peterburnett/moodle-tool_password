<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * A tool to validate passwords against particular password policies.
 *
 * Combination of the strongest standards from NIST and the Australian ISM
 * File used to force configurations for the plugin
 *
 * @package   tool_password
 * @copyright 2019 Peter Burnett <peterburnett@catalyst-au.net>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();
set_config('irap_complexity', 1, 'tool_password');
set_config('simple_length_input', 13, 'tool_password');
set_config('complex_length_input', 10, 'tool_password');
set_config('irap_numbers', 1, 'tool_password');
set_config('sequential_digits_input', 2, 'tool_password');
set_config('repeated_chars_input', 2, 'tool_password');
set_config('personal_info', 1, 'tool_password');
set_config('phrase_blacklist', 1, 'tool_password');

// Phrases should be added 'phrase1<br>phrase2<br>phrase3;
set_config('phrase_blacklist_input', 'moodle', 'tool_password');

set_config('time_lockout_input', 86400, 'tool_password');
set_config('password_blacklist', 1, 'tool_password');