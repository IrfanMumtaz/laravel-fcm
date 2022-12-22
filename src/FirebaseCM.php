<?php

namespace Irfanmumtaz\FirebaseCloudMessage;

use GuzzleHttp\Client;

class FirebaseCM
{
    private const REGISTRION_IDS_LIMIT = 1000;

    protected $notification;
    protected $options;
    protected $data;
    protected $to;
    protected $registrations;

    public function __construct(NotificationBuilder $notification)
    {
        $this->options = $notification->options->build()->toArray();
        $this->data = $notification->custom->getData();
        $this->notification = $notification->build()->toArray();
    }

    public function setTo(String $to = null)
    {
        $this->registrations = null;
        $this->to = $to;

        return $this;
    }

    public function setRegistrations(array $registrations = null)
    {
        $this->to = null;
        $this->registrations = $registrations;

        return $this;
    }

    public function send()
    {
        $response = null;
        if (is_array($this->registrations)) {

            $tokens = array_chunk($this->registrations, self::REGISTRION_IDS_LIMIT, false);
            foreach ($tokens as  $token) {
                $request = new Client();
                $response = $request->post(config('fcm.url'), [
                    'headers' => $this->getHeaders(),
                    'json' => $this->getBody($token)
                ]);
            }
        } else {
            $request = new Client();
            $response = $request->post(config('fcm.url'), [
                'headers' => $this->getHeaders(),
                'json' => $this->getBody()
            ]);
        }

        return $response;
    }

    private function getBody($registrations = null)
    {
        $body = [
            'to' => $this->to,
            'registration_ids' => $registrations,
            'notification' => $this->notification,
            'data' => $this->data,
        ];

        return array_merge($body, $this->options);
    }

    private function getHeaders()
    {
        $headers = [
            'Authorization' => 'Bearer ' . config('fcm.auth_key')
        ];

        return $headers;
    }
}
