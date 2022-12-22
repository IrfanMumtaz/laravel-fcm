<?php

namespace Irfanmumtaz\FirebaseCloudMessage;

class DataBuilder
{
    private $data = [];

    public function addData($key, $value)
    {
        $this->data[$key] = $value;
        return $this;
    }

    public function removeData()
    {
        $this->data = [];
        return $this;
    }

    public function unsetData($key)
    {
        unset($this->data[$key]);
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }
}
