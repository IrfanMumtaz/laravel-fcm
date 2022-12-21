<?php

namespace Irfanmumtaz\FirebaseCloudMessage;

class Notification
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

    public function __construct(NotificationBuilder $notification)
    {
        $this->title = $notification->getTitle();
        $this->body = $notification->getBody();
        $this->sound = $notification->getSound();
        $this->badge = $notification->getBadge();
        $this->clickAction = $notification->getClickAction();
        $this->subTitle = $notification->getSubTitle();
        $this->bodyLocKey = $notification->getBodyLocKey();
        $this->bodyLocArgs = $notification->getBodyLocArgs();
        $this->titleLocKey = $notification->getTitleLocKey();
        $this->titleLocArgs = $notification->getTitleLocArgs();
        $this->androidChannelId = $notification->getAndroidChannelId();
        $this->icon = $notification->getIcon();
        $this->tag = $notification->getTag();
        $this->color = $notification->getColor();
    }

    public function toArray()
    {
        $payload = [
            'title' => $this->title,
            'body' => $this->body,
            'sound' => $this->sound,
            'badge' => $this->badge,
            'click_action' => $this->clickAction,
            'subTitle' => $this->subTitle,
            'body_loc_key' => $this->bodyLocKey,
            'body_loc_args' => $this->bodyLocArgs,
            'title_loc_key' => $this->titleLocKey,
            'title_loc_args' => $this->titleLocArgs,
            'android_channel_id' => $this->androidChannelId,
            'icon' => $this->icon,
            'tag' => $this->tag,
            'color' => $this->color,
        ];

        return array_filter($payload, function ($item) {
            return $item !== null;
        });
    }
}
