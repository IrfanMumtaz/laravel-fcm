[![Latest Stable Version](http://poser.pugx.org/irfanmumtaz/firebase-cloud-message/v)](https://packagist.org/packages/irfanmumtaz/firebase-cloud-message)
[![Total Downloads](http://poser.pugx.org/irfanmumtaz/firebase-cloud-message/downloads)](https://packagist.org/packages/irfanmumtaz/firebase-cloud-message)
[![License](http://poser.pugx.org/irfanmumtaz/firebase-cloud-message/license)](https://packagist.org/packages/irfanmumtaz/firebase-cloud-message)

# LARAVEL FCM

Laravel-FCM is an easy to use package working with both Laravel for sending push notification with Firebase Cloud Messaging (FCM)

## Installation

Use composer to install laravel fcm.

```bash
composer require irfanmumtaz/firebase-cloud-message
```
Or you can add it directly in your composer.json file:
```php
{
    "require": {
        "irfanmumtaz/firebase-cloud-message": "^0.1.1"
    }
}
```

### Laravel

Register the provider directly in your app configuration file config/app.php `config/app.php`:

```php
'providers' => [
	// ...

	Irfanmumtaz\FirebaseCloudMessage\FCMServiceProvider::class,
]
```

Publish the package config file using the following command:


	$ php artisan vendor:publish --provider="Irfanmumtaz\FirebaseCloudMessage\FCMServiceProvider"

## Usage

```php
use Irfanmumtaz\FirebaseCloudMessage\FirebaseCM;
use Irfanmumtaz\FirebaseCloudMessage\NotificationBuilder;

//create notification builder
$notification = new NotificationBuilder("Test notification");
$notification->setBody("test")
        ->tag('larvael');

/**
 * you can set other notification params 
 * documentation here https://firebase.google.com/docs/cloud-messaging/http-server-ref
 * setBody(), setSound(), setBadge(), setClickAction(), setSubTitle(), setBodyLocKey(),
 * setBodyLocArgs(), setTitleLocKey(), setTitleLocArgs(), setAndroidChannelId(), setIcon(), setTag(),
 * setColor()
 */

//you can set option parameters
$notification->options->setCollapseKey("example")->setPriority("high");

/**
 * you can set other option params
 * documentation here https://firebase.google.com/docs/cloud-messaging/http-server-ref
 * setCollapseKey(), setPriority(), setContentAvailable(), setMutableContent(),
 * setTimeToLive(), setRestrictedPackageName(), setDryRun()
 * 
 */

//custom data can be added in this way
$notification->custom->addData("key1", "value1")->addData("key2", "value2");

/**
 * Other usable functions in custom data
 * addData("key", "value") you can add custom data as many you want
 * removeData() remove all keys from custom data
 * unsetData("key1") remove a single key from custom data
 * getData() get complete custom data as array
 */


//create an object for FCM and pass notification while creating object
$fcm = new FirebaseCM($notification);
$fcm->setTo('firebase key')->send();
/**
 * Other FCM functions 
 * setTo("key") uses for sending notification to a single user, pass token as string
 * setRegistrations(["key1", "key2"]) uses for sending notification to multiple users pass array of string
 * send() uses to send notificaiton
 */


```

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.


## License

[MIT](https://choosealicense.com/licenses/mit/)
