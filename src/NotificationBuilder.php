<?php

namespace Irfanmumtaz\FirebaseCloudMessage;

class NotificationBuilder
{
    protected $title;
    protected $body;
    protected $sound;
    protected $badge;
    protected $clickAction;
    protected $subTitle;
    protected $bodyLocKey;
    protected $bodyLocArgs;
    protected $titleLocKey;
    protected $titleLocArgs;
    protected $androidChannelId;
    protected $icon;
    protected $tag;
    protected $color;
    public $custom;
    public $options;

    public function __construct($title)
    {
        $this->title = $title;
        $this->custom = new DataBuilder();
        $this->options = new OptionBuilder();
        return $this;
    }

    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    public function setSound($sound)
    {
        $this->sound = $sound;

        return $this;
    }

    public function setBadge($badge)
    {
        $this->badge = $badge;

        return $this;
    }

    public function setClickAction($clickAction)
    {
        $this->clickAction = $clickAction;

        return $this;
    }

    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;

        return $this;
    }

    public function setBodyLocKey($bodyLocKey)
    {
        $this->bodyLocKey = $bodyLocKey;

        return $this;
    }

    public function setBodyLocArgs($bodyLocArgs)
    {
        $this->bodyLocArgs = $bodyLocArgs;

        return $this;
    }

    public function setTitleLocKey($titleLocKey)
    {
        $this->titleLocKey = $titleLocKey;

        return $this;
    }

    public function setTitleLocArgs($titleLocArgs)
    {
        $this->titleLocArgs = $titleLocArgs;

        return $this;
    }

    public function setAndroidChannelId($androidChannelId)
    {
        $this->androidChannelId = $androidChannelId;

        return $this;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getSound()
    {
        return $this->sound;
    }

    public function getBadge()
    {
        return $this->badge;
    }

    public function getClickAction()
    {
        return $this->clickAction;
    }

    public function getSubTitle()
    {
        return $this->subTitle;
    }

    public function getBodyLocKey()
    {
        return $this->bodyLocKey;
    }

    public function getBodyLocArgs()
    {
        return $this->bodyLocArgs;
    }

    public function getTitleLocKey()
    {
        return $this->titleLocKey;
    }

    public function getTitleLocArgs()
    {
        return $this->titleLocArgs;
    }

    public function getAndroidChannelId()
    {
        return $this->androidChannelId;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function build()
    {
        return new Notification($this);
    }
}
