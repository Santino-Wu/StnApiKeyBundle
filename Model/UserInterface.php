<?php

namespace Stn\ApiKeyBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface as SecurityUserInterface;

/**
 * User model
 *
 * @author Santino Wu <santinowu.wsq@gmail.com>
 */
interface UserInterface extends SecurityUserInterface
{
    const ROLE_API = 'ROLE_API';

    /**
     * Set token
     *
     * @param string $token
     * @return UserAwareTokenInterface
     */
    public function setToken($token);

    /**
     * Get token
     *
     * @return string|null
     */
    public function getToken();
}
