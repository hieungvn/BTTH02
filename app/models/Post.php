<?php
class Post{
    private $postId;
    private $content;
    private $postImage;
    private $userId;
    private $createdAt;
    private $updatedAt;

    /**
     * @param $postId
     * @param $content
     * @param $postImage
     * @param $userId
     * @param $createdAt
     * @param $updatedAt
     */
    public function __construct($postId, $content, $postImage, $userId, $createdAt, $updatedAt)
    {
        $this->postId = $postId;
        $this->content = $content;
        $this->postImage = $postImage;
        $this->userId = $userId;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * @param mixed $postId
     */
    public function setPostId($postId): void
    {
        $this->postId = $postId;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getPostImage()
    {
        return $this->postImage;
    }

    /**
     * @param mixed $postImage
     */
    public function setPostImage($postImage): void
    {
        $this->postImage = $postImage;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }




}