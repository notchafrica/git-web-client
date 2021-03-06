<?php
/*
 * This file is part of the GithubIssueBundle package.
 *
 * (c) Paul Schweppe <paulschweppe@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace VersionControl\GithubIssueBundle\Entity\Issues;

use VersionControl\GitControlBundle\Entity\Issues\IssueInterface;

class Issue implements IssueInterface
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * State of issue.
     *
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $closedAt;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var int
     */
    private $githubNumber;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \VersionControl\GithubIssueBundle\Entity\Issues\IssueMilestone
     */
    private $issueMilestone;

    /**
     * @var \VersionControl\GithubIssueBundle\Entity\User
     */
    private $user;

    /**
     * @var array
     */
    private $issueLabel;

    /**
     * Issue comments.
     *
     * @var array
     */
    private $issueComments;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->issueLabel = array();
        $this->issueComments = array();
        $this->setCreatedAt(new \DateTime());
        $this->setStatus('open');
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Issue
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Issue
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return Issue
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set closedAt.
     *
     * @param \DateTime $closedAt
     *
     * @return Issue
     */
    public function setClosedAt($closedAt)
    {
        $this->closedAt = $closedAt;

        return $this;
    }

    /**
     * Get closedAt.
     *
     * @return \DateTime
     */
    public function getClosedAt()
    {
        return $this->closedAt;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Issue
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return Issue
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set githubNumber.
     *
     * @param int $githubNumber
     *
     * @return Issue
     */
    public function setGithubNumber($githubNumber)
    {
        $this->githubNumber = $githubNumber;

        return $this;
    }

    /**
     * Get githubNumber.
     *
     * @return int
     */
    public function getGithubNumber()
    {
        return $this->githubNumber;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set issueMilestone.
     *
     * @param \VersionControl\GithubIssueBundle\Entity\Issues\IssueMilestone $issueMilestone
     *
     * @return Issue
     */
    public function setIssueMilestone(\VersionControl\GithubIssueBundle\Entity\Issues\IssueMilestone $issueMilestone = null)
    {
        $this->issueMilestone = $issueMilestone;

        return $this;
    }

    /**
     * Get issueMilestone.
     *
     * @return \VersionControl\GithubIssueBundle\Entity\Issues\IssueMilestone
     */
    public function getIssueMilestone()
    {
        return $this->issueMilestone;
    }

    /**
     * Set User.
     *
     * @param \VersionControl\GithubIssueBundle\Entity\User $user
     *
     * @return Issue
     */
    public function setUser(\VersionControl\GithubIssueBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get User.
     *
     * @return \VersionControl\GithubIssueBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add issueLabel.
     *
     * @param \VersionControl\GithubIssueBundle\Entity\Issues\IssueLabel $issueLabel
     *
     * @return Issue
     */
    public function addIssueLabel(\VersionControl\GithubIssueBundle\Entity\Issues\IssueLabel $issueLabel)
    {
        $this->issueLabel[] = $issueLabel;

        return $this;
    }

    /**
     * Remove issueLabel.
     *
     * @param \VersionControl\GithubIssueBundle\Entity\Issues\IssueLabel $issueLabel
     */
    public function removeIssueLabel(\VersionControl\GithubIssueBundle\Entity\Issues\IssueLabel $issueLabel)
    {
        $key = array_search($issueLabel, $this->issueLabel, true);
        if ($key !== false) {
            unset($this->issueLabel[$key]);
        }
    }

    /**
     * Get issueLabel.
     *
     * @return array
     */
    public function getIssueLabel()
    {
        return $this->issueLabel;
    }

    /**
     * Add Issue Comment.
     *
     * @param \VersionControl\GithubIssueBundle\Entity\Issues\IssueComment $issueComment
     *
     * @return Issue
     */
    public function addIssueComment(\VersionControl\GithubIssueBundle\Entity\Issues\IssueComment $issueComment)
    {
        $this->issueComments[] = $issueComment;

        return $this;
    }

    /**
     * Get Issue Comments.
     *
     * @return array of \VersionControl\GitControlBundle\Entity\Issue\IssueComment
     */
    public function getIssueComments()
    {
        return $this->issueComments;
    }

    /**
     * Set Issue Comments.
     *
     * @param array $issueComments
     *
     * @return \VersionControl\GitControlBundle\Entity\Issue
     */
    public function setIssueComments(array $issueComments)
    {
        $this->issueComments = $issueComments;

        return $this;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return Issue
     */
    public function setClosed()
    {
        $this->status = 'closed';

        return $this;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return Issue
     */
    public function setOpen()
    {
        $this->status = 'open';

        return $this;
    }

    public function isClosed()
    {
        return ($this->status === 'closed') ? true : false;
    }
}
