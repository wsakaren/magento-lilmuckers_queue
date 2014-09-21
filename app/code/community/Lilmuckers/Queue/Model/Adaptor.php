<?php
/* ExtName
 *
 * User        karen
 * Date        9/21/14
 * Time        4:35 PM
 * @category   Webshopapps
 * @package    Webshopapps_ExtnName
 * @copyright   Copyright (c) 2014 Zowta Ltd (http://www.WebShopApps.com)
 *              Copyright, 2014, Zowta, LLC - US license
 * @license    http://www.webshopapps.com/license/license.txt - Commercial license
 */


interface Lilmuckers_Queue_Model_Adapter {

    function getTask($queue);
    function run($queues);
    function getRunInline();
    function touch(Lilmuckers_Queue_Model_Queue_Task $task);


}