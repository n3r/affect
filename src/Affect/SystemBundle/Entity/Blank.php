<?php

namespace Affect\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="blank")
 * @ORM\HasLifecycleCallbacks()
 */
class Blank
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
     * @ORM\JoinColumn(name="module_id", referencedColumnName="id")
	 */
	protected $module;

	/**
	 * @ORM\Column(type="smallint")
	 */
	protected $type;

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
	 * @ORM\Column(type="string")
	 */
	protected $date_updated;

	/**
	 * @ORM\Column(type="smallint")
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
     * Set title
     *
     * @param string $title
     * @return Blank
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
     * @return Blank
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
     * @return Blank
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
     * @param string $dateUpdated
     * @return Blank
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->date_updated = $dateUpdated;

        return $this;
    }

    /**
     * Get date_updated
     *
     * @return string 
     */
    public function getDateUpdated()
    {
        return $this->date_updated;
    }

    /**
     * Set access
     *
     * @param integer $access
     * @return Blank
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return integer 
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Blank
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set checklist
     *
     * @param \Affect\SystemBundle\Entity\Checklist $checklist
     * @return Blank
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
     * Set module
     *
     * @param \Affect\SystemBundle\Entity\Module $module
     * @return Blank
     */
    public function setModule(\Affect\SystemBundle\Entity\Module $module = null)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return \Affect\SystemBundle\Entity\Module 
     */
    public function getModule()
    {
        return $this->module;
    }
}
