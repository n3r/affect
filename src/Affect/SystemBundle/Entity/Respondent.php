<?php

namespace Affect\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="respondent")
 * @ORM\HasLifecycleCallbacks()
 */
class Respondent
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\OneToOne(targetEntity="SalesPoints")
	 * @ORM\JoinColumn(name="sales_point_id", referencedColumnName="id")
	 */
	protected $sales_point;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $role;

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
	 * @ORM\Column(type="smallint")
	 */
	protected $gender;

	/**
	 * @ORM\Column(type="smallint")
	 */
	protected $age;

	/**
	 * @ORM\Column(type="decimal", length=10)
	 */
	protected $phone;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $email;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $business_code;

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
     * @return Respondent
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
     * Set first_name
     *
     * @param string $firstName
     * @return Respondent
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
     * @return Respondent
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
     * @return Respondent
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
     * Set gender
     *
     * @param integer $gender
     * @return Respondent
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Respondent
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Respondent
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
     * Set email
     *
     * @param string $email
     * @return Respondent
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
     * Set business_code
     *
     * @param string $businessCode
     * @return Respondent
     */
    public function setBusinessCode($businessCode)
    {
        $this->business_code = $businessCode;

        return $this;
    }

    /**
     * Get business_code
     *
     * @return string 
     */
    public function getBusinessCode()
    {
        return $this->business_code;
    }

    /**
     * Set sales_point
     *
     * @param \Affect\SystemBundle\Entity\SalesPoints $salesPoint
     * @return Respondent
     */
    public function setSalesPoint(\Affect\SystemBundle\Entity\SalesPoints $salesPoint = null)
    {
        $this->sales_point = $salesPoint;

        return $this;
    }

    /**
     * Get sales_point
     *
     * @return \Affect\SystemBundle\Entity\SalesPoints 
     */
    public function getSalesPoint()
    {
        return $this->sales_point;
    }
}
