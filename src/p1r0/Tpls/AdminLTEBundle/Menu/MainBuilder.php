<?php
/**
 * User: Tabaré Caorsi <tabare@heapstersoft.com>
 * Date: 10/7/14
 * Time: 7:15 PM
 */

namespace p1r0\Tpls\AdminLTEBundle\Menu;

use Knp\Menu\FactoryInterface;
use p1r0\Tpls\AdminLTEBundle\Event\ConfigureMenuEvent;
use Symfony\Component\DependencyInjection\ContainerAware;

class MainBuilder extends ContainerAware
{
    public function build(FactoryInterface $factory)
    {
        $menu = $factory->createItem('root');

        //$menu->setCurrentUri($this->container->get('request')->getRequestUri());


        $this->container->get('event_dispatcher')->dispatch(ConfigureMenuEvent::CONFIGURE, new ConfigureMenuEvent($factory, $menu));

        $label = $this->container->get('translator')->trans("Logout", [], "admin");

        $menu->addChild('Logout', array('route' => 'fos_user_security_logout', 'label'=>'<i class="fa fa-sign-out"></i> <span>'.$label.'</span>', 'extras'=>array('safe_label'=>true)));

        return $menu;
    }
} 