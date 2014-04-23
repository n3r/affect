<?php

namespace Affect\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="checklist")
 * @ORM\HasLifecycleCallbacks()
 */
class Checklist
{

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\OneToOne(targetEntity="User")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	 */
	protected $user;

	/**
	 * @ORM\ManyToMany(targetEntity="Territory")
	 * @ORM\JoinTable(name="checklist_territory",
	 * joinColumns={@ORM\JoinColumn(name="territory_id", referencedColumnName="id")},
	 * inverseJoinColumns={@ORM\JoinColumn(name="checklist_id", referencedColumnName="id")}
	 * )
	 */
	protected $territory;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $title;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $date_created;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $date_updated;

	/**
	 * @ORM\Column(type="smallint")
	 */
	protected $status;

	
	public function __construct() {
        $this->territory = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Checklist
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date_created
     *
     * @param \DateTime $dateCreated
     * @return Checklist
     */
    public function setDateCreated($dateCreated)
    {
        $this->date_created = $dateCreated;

        return $this;
    }

    /**
     * Get date_created
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Set date_updated
     *
     * @param \DateTime $dateUpdated
     * @return Checklist
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->date_updated = $dateUpdated;

        return $this;
    }

    /**
     * Get date_updated
     *
     * @return \DateTime 
     */
    public function getDateUpdated()
    {
        return $this->date_updated;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Checklist
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set user
     *
     * @param \Affect\SystemBundle\Entity\User $user
     * @return Checklist
     */
    public function setUser(\Affect\SystemBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Affect\SystemBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add territory
     *
     * @param \Affect\SystemBundle\Entity\Territory $territory
     * @return Checklist
     */
    public function addTerritory(\Affect\SystemBundle\Entity\Territory $territory)
    {
        $this->territory[] = $territory;

        return $this;
    }

    /**
     * Remove territory
     *
     * @param \Affect\SystemBundle\Entity\Territory $territory
     */
    public function removeTerritory(\Affect\SystemBundle\Entity\Territory $territory)
    {
        $this->territory->removeElement($territory);
    }

    /**
     * Get territory
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTerritory()
    {
        return $this->territory;
    }
}
