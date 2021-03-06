<?php

namespace Symfony\Component\Security\Core;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

/**
 * The SecurityContextInterface.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface SecurityContextInterface
{
    const ACCESS_DENIED_ERROR  = '_security.403_error';
    const AUTHENTICATION_ERROR = '_security.last_error';
    const LAST_USERNAME        = '_security.last_username';

    /**
     * Returns the current security token.
     *
     * @return TokenInterface|null A TokenInterface instance or null if no authentication information is available
     */
    function getToken();

    /**
     * Sets the authentication token.
     *
     * @param TokenInterface $token
     * @return void
     */
    function setToken(TokenInterface $token);

    /**
     * Checks if the attributes are granted against the current authentication token and optionally supplied object.
     *
     * @param array $attributes
     * @param mixed $object
     * @return boolean
     */
    function isGranted($attributes, $object = null);
}