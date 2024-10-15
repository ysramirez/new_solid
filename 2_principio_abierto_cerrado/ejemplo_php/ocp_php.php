<?php

class Notification
{
    public $message;
    public $from;
    public $to;
    public $subject;
    public $toMobileNumber;

    public function __construct($message, $from = null, $to = null, $subject = null, $toMobileNumber = null)
    {
        $this->message = $message;
        $this->from = $from;
        $this->to = $to;
        $this->subject = $subject;
        $this->toMobileNumber = $toMobileNumber;
    }
}

class Notificator
{
    public function sendNotification($type, Notification $notification) 
    {
        if ($type == 'email') {
            if ($notification->from && $notification->to && $notification->subject) {
                echo "Sending email from " . $notification->from . " to " . $notification->to . ": " . $notification->message . "\n";
            } else {
                echo "Error: Missing email parameters.\n";
            }
        }
        if ($type == 'sms') {
            if ($notification->toMobileNumber) {
                echo "Sending SMS to " . $notification->toMobileNumber . ": " . $notification->message . "\n";
            } else {
                echo "Error: Missing SMS parameters.\n";
            }
        } 

        if ($type == 'file') {
            ///
        } 
    }
}

$emailNotification = new Notification('Remember the clock', 'juan@gmail.com', 'miguel@gmail.com', 'Reminder');
$smsNotification = new Notification('Remember the clock', null, null, null, '654879357');

$notificator = new Notificator();
$notificator->sendNotification('email', $emailNotification);
$notificator->sendNotification('sms', $smsNotification);
$notificator->sendNotification('file', $smsNotification);
