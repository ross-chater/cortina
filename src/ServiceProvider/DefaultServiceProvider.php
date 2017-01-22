<?php
/**
 * Cortina : PHP Framework
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Ross Chater. (http://rosschater.com)
 * @link          http://rosschater.com Project Cortina
 * @since         0.0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Cortina\ServiceProvider;

use League\Container\ServiceProvider\AbstractServiceProvider;

class DefaultServiceProvider extends AbstractServiceProvider
{

    protected $provides = [
        'Request',
        'Response'
    ];

    public function register()
    {
        $this->getContainer()->add('Request', 'Zend\Diactoros\Request');
        $this->getContainer()->add('Response', 'Zend\Diactoros\Response');
    }
}
