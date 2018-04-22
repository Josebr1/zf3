<?php
/**
 * Created by PhpStorm.
 * User: silva
 * Date: 22/04/18
 * Time: 01:46
 */

namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BlogController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}