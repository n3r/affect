<?php

namespace Affect\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="module")
 * @ORM\HasLifecycleCallbacks()
 */
class Module
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\OneToOne(targetEntity="Checklist")
     * @ORM\JoinColumn(name="checklist_id", referencedColumnName="id")
	 */
	protected $checklist;

	/**
	 * @ORM\OneToOne(targetEntity="Module")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
	 */
	protected $parent;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $title;

	/**
	 * @ORM\Column(type="smallint")
	 */
	protected $priority;

	/**
	 * @ORM\Column(type="smallint")
	 */
	protected $status;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $date_updated;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $access;

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
     * Set parent_id
     *
     * @param integer $parentId
     * @return Module
     */
    public function setParentId($parentId)
    {
        $this->parent_id = $parentId;

        return $this;
    }

    /**
     * Get parent_id
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Module
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
     * Set priority
     *
     * @param integer $priority
     * @return Module
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Module
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
     * Set date_updated
     *
     * @param \DateTime $dateUpdated
     * @return Module
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
     * Set access
     *
     * @param string $access
     * @return Module
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return string 
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set checklist
     *
     * @param \Affect\SystemBundle\Entity\Checklist $checklist
     * @return Module
     */
    public function setChecklist(\Affect\SystemBundle\Entity\Checklist $checklist = null)
    {
        $this->checklist = $checklist;

        return $this;
    }

    /**
     * Get checklist
     *
     * @return \Affect\SystemBundle\Entity\Checklist 
     */
    public function getChecklist()
    {
        return $this->checklist;
    }

    /**
     * Set parent
     *
     * @param \Affect\SystemBundle\Entity\Module $parent
     * @return Module
     */
    public function setParent(\Affect\SystemBundle\Entity\Module $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Affect\SystemBundle\Entity\Module 
     */
    public function getParent()
    {
        return $this->parent;
    }
}
