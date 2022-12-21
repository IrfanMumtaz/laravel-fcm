<?php

namespace Irfanmumtaz\FirebaseCloudMessage;

class NotificationData
{
    protected $payloads;
    protected $options;
    public $to;

    public function __construct(NotificationBuilder $payloads, OptionBuilder $options)
    {
        $this->payloads = $payloads->build();
        $this->options = $options->build();
    }

    public function data()
    {

        return array_merge($this->payloads->toArray(), $this->options->toArray());
    }
}
