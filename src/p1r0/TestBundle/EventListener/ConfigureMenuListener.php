<?php
/**
 * User: Tabaré Caorsi <tabare@heapstersoft.com>
 * Date: 10/7/14
 * Time: 7:17 PM
 */

namespace p1r0\TestBundle\EventListener;


use p1r0\Tpls\AdminLTEBundle\Event\ConfigureMenuEvent;

class ConfigureMenuListener
{
    /**
     * @param ConfigureMenuEvent $event
     */
    public function onMenuConfigure(ConfigureMenuEvent $event)
    {
        $menu = $event->getMenu();

        $menu->addChild('Clients', array('route' => 'client',
                                        'label'=>'<i class="fa fa-dashboard"></i> <span>Dashboard</span>',
                                        'extras' => array('safe_label' => true)));
    }
}