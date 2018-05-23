<?php
/**
 * Created by PhpStorm.
 * User: nourannayel
 * Date: 5/22/18
 * Time: 7:23 PM
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="fosuser")
 */
class FOSUser extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}