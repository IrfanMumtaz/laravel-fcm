<?php

namespace Irfanmumtaz\FirebaseCloudMessage;

class Option
{
    protected $collapseKey;
    protected $priority;
    protected $contentAvailable;
    protected $mutableContent;
    protected $timeToLive;
    protected $restrictedPackageName;
    protected $dryRun;

    public function __construct(OptionBuilder $optionBuilder)
    {
        $this->collapseKey = $optionBuilder->getCollapseKey();
        $this->priority = $optionBuilder->getPriority();
        $this->contentAvailable = $optionBuilder->getContentAvailable();
        $this->mutableContent = $optionBuilder->getMutableContent();
        $this->timeToLive = $optionBuilder->getTimeToLive();
        $this->restrictedPackageName = $optionBuilder->getRestrictedPackageName();
        $this->dryRun = $optionBuilder->getDryRun();
    }

    public function toArray()
    {
        $options = [
            'collapse_key' => $this->collapseKey,
            'priority' => $this->priority,
            'content_available' => $this->contentAvailable,
            'mutable_content' => $this->mutableContent,
            'time_to_live' => $this->timeToLive,
            'restricted_package_name' => $this->restrictedPackageName,
            'dry_run' => $this->dryRun,
        ];

        return array_filter($options, function ($item) {
            return $item !== null;
        });
    }
}
