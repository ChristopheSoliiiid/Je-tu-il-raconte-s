<?php

namespace JTIR\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JTIRUserBundle extends Bundle {

    /**
     * Fait hériter le bundle JTIRUser du bundle FOSUser.
     *
     * @return string
     */
    public function getParent() {
        return 'FOSUserBundle';
    }
}
