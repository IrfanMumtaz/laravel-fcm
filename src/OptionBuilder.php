<?php

namespace Irfanmumtaz\FirebaseCloudMessage;

use Irfanmumtaz\FirebaseCloudMessage\Exceptions\OptionsException;

class OptionBuilder
{
    protected $collapseKey;
    protected $priority;
    protected $contentAvailable;
    protected $mutableContent;
    protected $timeToLive;
    protected $restrictedPackageName;
    protected $dryRun;

    public function setCollapseKey($collapseKey)
    {
        $this->collapseKey = $collapseKey;

        return $this;
    }

    public function setPriority($priority)
    {
        $priorities = ['high', 'normal'];
        if (!in_array($priority, $priorities)) throw OptionsException::invalidPriority();
        $this->priority = $priority;

        return $this;
    }

    public function setContentAvailable($contentAvailable)
    {
        $this->contentAvailable = $contentAvailable;

        return $this;
    }

    public function setMutableContent($mutableContent)
    {
        $this->mutableContent = $mutableContent;

        return $this;
    }

    public function setTimeToLive($timeToLive)
    {
        $this->timeToLive = $timeToLive;

        return $this;
    }

    public function setRestrictedPackageName($restrictedPackageName)
    {
        $this->restrictedPackageName = $restrictedPackageName;

        return $this;
    }

    public function setDryRun($dryRun)
    {
        $this->dryRun = $dryRun;

        return $this;
    }

    public function getCollapseKey()
    {
        return $this->collapseKey;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function getContentAvailable()
    {
        return $this->contentAvailable;
    }

    public function getMutableContent()
    {
        return $this->mutableContent;
    }

    public function getTimeToLive()
    {
        return $this->timeToLive;
    }

    public function getRestrictedPackageName()
    {
        return $this->restrictedPackageName;
    }

    public function getDryRun()
    {
        return $this->dryRun;
    }

    public function build()
    {
        return new Option($this);
    }
}
