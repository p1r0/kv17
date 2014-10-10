<?php

namespace p1r0\AdminUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class p1r0AdminUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
