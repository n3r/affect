<?php

namespace Affect\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="subchecklist")
 * @ORM\HasLifecycleCallbacks()
 */
class SubChecklist
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
	 * @ORM\ManyToMany(targetEntity="AnswersDefined")
	 * @ORM\JoinTable(name="answers_defined_subchecklist",
	 * joinColumns={@ORM\JoinColumn(name="answer_id", referencedColumnName="id")},
	 * inverseJoinColumns={@ORM\JoinColumn(name="subchecklist_id", referencedColumnName="id")}
	 * )
	 */
	protected $answers_defined;

	/**
	 * @ORM\Column(type="smallint")
	 */
	protected $status;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $date_updated;

	public function __construct() {
        $this->answers_defined = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set status
     *
     * @param integer $status
     * @return SubChecklist
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
     * @return SubChecklist
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
     * @return SubChecklist
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

    /**
     * Add answers_defined
     *
     * @param \Affect\SystemBundle\Entity\AnswersDefined $answersDefined
     * @return SubChecklist
     */
    public function addAnswersDefined(\Affect\SystemBundle\Entity\AnswersDefined $answersDefined)
    {
        $this->answers_defined[] = $answersDefined;

        return $this;
    }

    /**
     * Remove answers_defined
     *
     * @param \Affect\SystemBundle\Entity\AnswersDefined $answersDefined
     */
    public function removeAnswersDefined(\Affect\SystemBundle\Entity\AnswersDefined $answersDefined)
    {
        $this->answers_defined->removeElement($answersDefined);
    }

    /**
     * Get answers_defined
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnswersDefined()
    {
        return $this->answers_defined;
    }
}
