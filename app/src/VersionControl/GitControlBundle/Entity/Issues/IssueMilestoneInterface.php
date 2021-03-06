<?php
/*
 * This file is part of the GitControlBundle package.
 *
 * (c) Paul Schweppe <paulschweppe@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace VersionControl\GitControlBundle\Entity\Issues;

/**
 * IssueMilestone.
 */
interface IssueMilestoneInterface
{
    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle();

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Get state.
     *
     * @return string
     */
    public function getState();

    /**
     * Get dueOn.
     *
     * @return \DateTime
     */
    public function getDueOn();

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt();

    /**
     * Get closedAt.
     *
     * @return \DateTime
     */
    public function getClosedAt();

    /**
     * Get id.
     *
     * @return int
     */
    public function getId();

    /**
     * Get verUser.
     *
     * @return \VersionControl\GitControlBundle\Entity\Issues\IssueUserInterface
     */
    public function getUser();

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return Issue
     */
    public function setClosed();

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return Issue
     */
    public function setOpen();

    public function isClosed();
}
