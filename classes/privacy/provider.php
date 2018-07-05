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
 * Local OAuth Privacy API implementation.
 *
 * @package    local_oauth
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_oauth\privacy;

defined('MOODLE_INTERNAL') || die();

/**
 * Privacy subsystem implementation for local_oauth.
 */
class provider implements
    \core_privacy\local\metadata\provider,
    \core_privacy\local\request\plugin\provider {

    // For Moodle 3.3/PHP 5.6 support
    use \core_privacy\local\legacy_polyfill;

    /**
     * Return the fields which contain personal data.
     *
     * @param collection $items a reference to the collection to use to store the metadata.
     * @return collection the updated collection of metadata items.
     */
    public static function _get_metadata(\core_privacy\local\metadata\collection $collection) {
        $collection->add_external_location_link(
                    'oauth',
                    [
                                'userid' => 'privacy:metadata:userid',
                                'username' => 'privacy:metadata:username',
                                'idnumber' => 'privacy:metadata:idnumber',
                                'firstname' => 'privacy:metadata:firstname',
                                'lastname' => 'privacy:metadata:lastname',
                                'middlename' => 'privacy:metadata:middlename',
                                'email' => 'privacy:metadata:email',
                                'phone1' => 'privacy:metadata:phone1',
                                'institution' => 'privacy:metadata:institution',
                                'department' => 'privacy:metadata:department',
                                'address' => 'privacy:metadata:address',
                                'city' => 'privacy:metadata:city',
                                'description' => 'privacy:metadata:description',
                    ],
                    'privacy:metadata:externalpurpose');

        return $collection;
    }

    /*
     * Empty methods below as this plugin doesn't store data in Moodle, it's
     * sent to OAuth 2.0 clients that have been explicitly added by the site
     * administrator.
     * See:
     * https://docs.moodle.org/dev/Subject_Access_Request_FAQ#My_plugin_only_sends_data_to_an_external_location.2C_but_doesn.E2.80.99t_store_it_locally_in_Moodle_-_what_should_I_do.3F
     *     "[The plugin] should implement a request/plugin/provider with empty
     *     methods. They must do this for compliance reasons; they must
     *     implement a request provider, but cannot not return any data, so
     *     should just return nothing.
     */

    /**
	 * Get the list of contexts that contain user information for the specified
     * user.
     *
     * @param   int           $userid       The user to search.
	 * @return  contextlist   $contextlist  The list of contexts used in this
     * plugin.
     */
    public static function _get_contexts_for_userid(int $userid) {
        $contextlist = new \core_privacy\local\request\contextlist();
        return $contextlist;
    }

    public static function _export_user_data(approved_contextlist $contextlist) {
    }

    public static function _delete_data_for_all_users_in_context(\context $context) {
    }

    public static function _delete_data_for_user(approved_contextlist $contextlist) {
    }
}
