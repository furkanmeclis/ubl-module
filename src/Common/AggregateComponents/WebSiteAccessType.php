<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing WebSiteAccessType
 *
 *
 * XSD Type: WebSiteAccessType
 */
class WebSiteAccessType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\URI $uRI
     */
    private $uRI = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Password $password
     */
    private $password = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Login $login
     */
    private $login = null;

    /**
     * Gets as uRI
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\URI
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\URI $uRI
     * @return self
     */
    public function setURI(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\URI $uRI = null)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as password
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Password $password
     * @return self
     */
    public function setPassword(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Password $password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as login
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Sets a new login
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Login $login
     * @return self
     */
    public function setLogin(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Login $login)
    {
        $this->login = $login;
        return $this;
    }
}

