<?php

namespace Affect\SystemBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\HasLifecycleCallbacks()
 */
class User
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $role;

	/**
	 * @ORM\OneToOne(targetEntity="Territory")
	 * @ORM\JoinColumn(name="territory_id", referencedColumnName="id")
	 */
	protected $territory;

	/**
	 * @ORM\ManyToMany(targetEntity="SalesPoints")
	 * @ORM\JoinTable(name="sales_points_users",
	 * joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
	 * inverseJoinColumns={@ORM\JoinColumn(name="sales_point_id", referencedColumnName="id")}
	 * )
	 */
	protected $sales_point;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $username;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $password;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $first_name;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $last_name;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $middle_name;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $email;

	/**
	 * @ORM\Column(type="decimal", length=10)
	 */
	protected $phone;

	
	public function __construct() {
        $this->sales_point = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set first_name
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set middle_name
     *
     * @param string $middleName
     * @return User
     */
    public function setMiddleName($middleName)
    {
        $this->middle_name = $middleName;

        return $this;
    }

    /**
     * Get middle_name
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->middle_name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set territory
     *
     * @param \Affect\SystemBundle\Entity\Territory $territory
     * @return User
     */
    public function setTerritory(\Affect\SystemBundle\Entity\Territory $territory = null)
    {
        $this->territory = $territory;

        return $this;
    }

    /**
     * Get territory
     *
     * @return \Affect\SystemBundle\Entity\Territory 
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Add sales_point
     *
     * @param \Affect\SystemBundle\Entity\SalesPoints $salesPoint
     * @return User
     */
    public function addSalesPoint(\Affect\SystemBundle\Entity\SalesPoints $salesPoint)
    {
        $this->sales_point[] = $salesPoint;

        return $this;
    }

    /**
     * Remove sales_point
     *
     * @param \Affect\SystemBundle\Entity\SalesPoints $salesPoint
     */
    public function removeSalesPoint(\Affect\SystemBundle\Entity\SalesPoints $salesPoint)
    {
        $this->sales_point->removeElement($salesPoint);
    }

    /**
     * Get sales_point
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSalesPoint()
    {
        return $this->sales_point;
    }
}
