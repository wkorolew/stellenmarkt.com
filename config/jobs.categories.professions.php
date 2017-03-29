<?php
/**
 * YAWIK
 *
 * @filesource
 * @license MIT
 * @copyright  2013 - 2017 Cross Solution <http://cross-solution.de>
 */

/*
 * Format:
 * [
 *      'name' => <name>, [required]
 *      'value' => <value>, [optional]
 *      'children' => [ // optional
 *          <name> // strings will be treated as ['name' => <name>]
 *          [
 *              'name' => <name>, [required]
 *              'value' => <value>, [optional]
 *              'children' => [ ... ]
 *       ]
 * ]
 */

return [
    'name' => 'Professions',
    'children' => [
        'Barkeeper/-in',
        'Kellner/-in',
        'Koch/Köchin',
        'Küchenchef/-in',
        'Hotelfachmann/-frau',
        'Hoteldirektor/-in',
        'Rezeptionist/-in',
        'Restaurantfachmann/-frau',
        'Hauswirtschafterin',
        'Housekeeping / Etage',
        'Servicefachmann / -frau',
        'Systemgastronomiefachfrau/-mann',
        ]
];
