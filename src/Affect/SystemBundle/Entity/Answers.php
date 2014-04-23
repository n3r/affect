<?php

namespace Affect\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="answers")
 * @ORM\HasLifecycleCallbacks()
 */
class Answers
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
	 * @ORM\OneToOne(targetEntity="Respondent")
	 * @ORM\JoinColumn(name="respondent_id", referencedColumnName="id")
	 */
	protected $respondent;

	/**
	 * @ORM\ManyToMany(targetEntity="AnswersDefined")
	 * @ORM\JoinTable(name="answers_defined_for_answer",
	 * joinColumns={@ORM\JoinColumn(name="answer_defined_id", referencedColumnName="id")},
	 * inverseJoinColumns={@ORM\JoinColumn(name="answer_id", referencedColumnName="id")}
	 * )
	 */
	protected $answers_defined;

	/**
	 * @ORM\Column(type="boolean")
	 */
	protected $answer_free_flag;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $answer_free_1;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $answer_free_2;

	/**
	 * @ORM\Column(type="boolean")
	 */
	protected $answer_no_flag;


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
     * Set answer_free_flag
     *
     * @param boolean $answerFreeFlag
     * @return Answers
     */
    public function setAnswerFreeFlag($answerFreeFlag)
    {
        $this->answer_free_flag = $answerFreeFlag;

        return $this;
    }

    /**
     * Get answer_free_flag
     *
     * @return boolean 
     */
    public function getAnswerFreeFlag()
    {
        return $this->answer_free_flag;
    }

    /**
     * Set answer_free_1
     *
     * @param string $answerFree1
     * @return Answers
     */
    public function setAnswerFree1($answerFree1)
    {
        $this->answer_free_1 = $answerFree1;

        return $this;
    }

    /**
     * Get answer_free_1
     *
     * @return string 
     */
    public function getAnswerFree1()
    {
        return $this->answer_free_1;
    }

    /**
     * Set answer_free_2
     *
     * @param string $answerFree2
     * @return Answers
     */
    public function setAnswerFree2($answerFree2)
    {
        $this->answer_free_2 = $answerFree2;

        return $this;
    }

    /**
     * Get answer_free_2
     *
     * @return string 
     */
    public function getAnswerFree2()
    {
        return $this->answer_free_2;
    }

    /**
     * Set answer_no_flag
     *
     * @param boolean $answerNoFlag
     * @return Answers
     */
    public function setAnswerNoFlag($answerNoFlag)
    {
        $this->answer_no_flag = $answerNoFlag;

        return $this;
    }

    /**
     * Get answer_no_flag
     *
     * @return boolean 
     */
    public function getAnswerNoFlag()
    {
        return $this->answer_no_flag;
    }

    /**
     * Set question
     *
     * @param \Affect\SystemBundle\Entity\Question $question
     * @return Answers
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
     * Set respondent
     *
     * @param \Affect\SystemBundle\Entity\Respondent $respondent
     * @return Answers
     */
    public function setRespondent(\Affect\SystemBundle\Entity\Respondent $respondent = null)
    {
        $this->respondent = $respondent;

        return $this;
    }

    /**
     * Get respondent
     *
     * @return \Affect\SystemBundle\Entity\Respondent 
     */
    public function getRespondent()
    {
        return $this->respondent;
    }

    /**
     * Add answers_defined
     *
     * @param \Affect\SystemBundle\Entity\AnswersDefined $answersDefined
     * @return Answers
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
