<?php

namespace Tui\DirectorsBundle\Entity;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * @orm:Entity
 * @orm:Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @orm:Id
     * @orm:Column(type="integer")
     * @orm:generatedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
}