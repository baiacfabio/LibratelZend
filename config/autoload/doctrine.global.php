<?php
/**
 * Created by PhpStorm.
 * User: FabioBaia
 * Date: 27/10/14
 * Time: 21:55
 */

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host' => 'localhost',
                    'port' => '3306',
                    'dbname' => 'libratel_zend',
                ),
            ),
        )
    ));