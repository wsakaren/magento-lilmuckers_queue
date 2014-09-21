<?php
/**
 *
 * Lilmuckers_Queue_Interfaces_Worker.php
 *
 * @author sven
 * @created 09/21/2014 14:59 
 */

interface Lilmuckers_Queue_Interfaces_Worker {

    public function run(Lilmuckers_Queue_Model_Queue_Task $task);
} 