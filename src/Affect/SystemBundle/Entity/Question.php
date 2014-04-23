<?php

namespace Affect\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="question")
 * @ORM\HasLifecycleCallbacks()
 */
class Question
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
	protected $code;

	/**
	 * @ORM\Column(type="boolean")
	 */
	protected $base_flag;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $type;

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
	 * @ORM\Column(type="smallint")
	 */
	protected $answers_min;

	/**
	 * @ORM\Column(type="smallint")
	 */
	protected $answers_max;

	/**
	 * @ORM\Column(type="smallint")
	 */
	protected $answer_chars;

	/**
	 * @ORM\Column(type="smallint")
	 */
	protected $grade_start;

	/**
	 * @ORM\Column(type="smallint")
	 */
	protected $grade_end;

	/**
	 * @ORM\Column(type="boolean")
	 */
	protected $answer_free_flag;

	/**
	 * @ORM\Column(type="boolean")
	 */
	protected $answer_empty;

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
     * Set code
     *
     * @param string $code
     * @return Question
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set base_flag
     *
     * @param integer $baseFlag
     * @return Question
     */
    public function setBaseFlag($baseFlag)
    {
        $this->base_flag = $baseFlag;

        return $this;
    }

    /**
     * Get base_flag
     *
     * @return integer 
     */
    public function getBaseFlag()
    {
        return $this->base_flag;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Question
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Question
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
     * @return Question
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
     * @return Question
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
     * @return Question
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
     * @return Question
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
     * Set answers_min
     *
     * @param integer $answersMin
     * @return Question
     */
    public function setAnswersMin($answersMin)
    {
        $this->answers_min = $answersMin;

        return $this;
    }

    /**
     * Get answers_min
     *
     * @return integer 
     */
    public function getAnswersMin()
    {
        return $this->answers_min;
    }

    /**
     * Set answers_max
     *
     * @param integer $answersMax
     * @return Question
     */
    public function setAnswersMax($answersMax)
    {
        $this->answers_max = $answersMax;

        return $this;
    }

    /**
     * Get answers_max
     *
     * @return integer 
     */
    public function getAnswersMax()
    {
        return $this->answers_max;
    }

    /**
     * Set answer_chars
     *
     * @param integer $answerChars
     * @return Question
     */
    public function setAnswerChars($answerChars)
    {
        $this->answer_chars = $answerChars;

        return $this;
    }

    /**
     * Get answer_chars
     *
     * @return integer 
     */
    public function getAnswerChars()
    {
        return $this->answer_chars;
    }

    /**
     * Set grade_start
     *
     * @param integer $gradeStart
     * @return Question
     */
    public function setGradeStart($gradeStart)
    {
        $this->grade_start = $gradeStart;

        return $this;
    }

    /**
     * Get grade_start
     *
     * @return integer 
     */
    public function getGradeStart()
    {
        return $this->grade_start;
    }

    /**
     * Set grade_end
     *
     * @param integer $gradeEnd
     * @return Question
     */
    public function setGradeEnd($gradeEnd)
    {
        $this->grade_end = $gradeEnd;

        return $this;
    }

    /**
     * Get grade_end
     *
     * @return integer 
     */
    public function getGradeEnd()
    {
        return $this->grade_end;
    }

    /**
     * Set answer_free_flag
     *
     * @param boolean $answerFreeFlag
     * @return Question
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
     * Set answer_empty
     *
     * @param boolean $answerEmpty
     * @return Question
     */
    public function setAnswerEmpty($answerEmpty)
    {
        $this->answer_empty = $answerEmpty;

        return $this;
    }

    /**
     * Get answer_empty
     *
     * @return boolean 
     */
    public function getAnswerEmpty()
    {
        return $this->answer_empty;
    }
}
