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
 * @package auth_envbar
 * @author Brendan Heywood (<brendan@catalyst-au.net)
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    // It must be included from a Moodle page.
}
require_once($CFG->libdir . '/authlib.php');

class auth_plugin_envbar extends auth_plugin_base {

    /**
     * All the checking happens before the login page in this hook
     */
    public function __construct() {
    }

    /**
     * All the checking happens before the login page in this hook
     */
    public function loginpage_hook() {
        global $CFG;
        require_once("$CFG->dirroot/local/envbar/locallib.php");
        local_envbar_inject();
    }
}

