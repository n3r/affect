<?php

namespace Affect\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="answers_defined")
 * @ORM\HasLifecycleCallbacks()
 */
class AnswersDefined
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\OneToOne(targetEntity="Question")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
	 */
	protected $question;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $text;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $image;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return AnswersDefined
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return AnswersDefined
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     * @return AnswersDefined
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
     * @return AnswersDefined
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
     * @return AnswersDefined
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
     * Set question
     *
     * @param \Affect\SystemBundle\Entity\Question $question
     * @return AnswersDefined
     */
    public function setQuestion(\Affect\SystemBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \Affect\SystemBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
