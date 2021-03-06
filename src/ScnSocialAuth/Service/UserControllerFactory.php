<?php
/**
 * ScnSocialAuth Module
 *
 * @category   ScnSocialAuth
 * @package    ScnSocialAuth_Service
 */

namespace ScnSocialAuth\Service;

use ScnSocialAuth\Controller\UserController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * @category   ScnSocialAuth
 * @package    ScnSocialAuth_Service
 */
class UserControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        $hybridAuth = $controllerManager->getServiceLocator()->get('HybridAuth');
        $moduleOptions = $controllerManager->getServiceLocator()->get('ScnSocialAuth-ModuleOptions');

        $controller = new UserController();
        $controller->setHybridAuth($hybridAuth);
        $controller->setOptions($moduleOptions);

        return $controller;
    }
}
