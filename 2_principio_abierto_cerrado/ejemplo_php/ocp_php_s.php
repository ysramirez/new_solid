<?php

abstract class Notification
{
    private $message;

    public function __construct($message) 
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}

class EmailNotification extends Notification
{
    private $from;
    private $to;
    private $subject;

    public function __construct($message, $from, $to, $subject)
    {
        parent::__construct($message);
        $this->from = $from;
        $this->to = $to;
        $this->subject = $subject;        
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function getTo()
    {
        return $this->to;
    }

    public function getSubject()
    {
        return $this->subject;
    }

}

class SmsNotification extends Notification 
{
    private $toMobileNumber;

    public function __construct($message, $toMobileNumber)
    {
        parent::__construct($message);
        $this->toMobileNumber = $toMobileNumber;
    }

    public function getToMobileNumber()
    {
        return $this->toMobileNumber;
    }
}

interface Notifier 
{
    public function send($notification);
}

class MailServerNotificator implements Notifier 
{
    public function send($notification)
    {
        echo "Sending email from " . $notification->getFrom() . " to " . $notification->getTo() . ": " . $notification->getMessage() . "\n";
    }
}

class SmsServerNotificator implements Notifier 
{
    public function send($notification)
    {
        echo "Sending SMS to " . $notification->getToMobileNumber() . ": " . $notification->getMessage() . "\n";
    }
}

$emailNotification = new EmailNotification('Remember the clock', 'juan@gmail.com', 'miguel@gmail.com', 'Reminder');
$smsNotification = new SmsNotification('Remember the clock', '654879357');

$mailServerNotificator = new MailServerNotificator();
$smsServerNotificator = new SmsServerNotificator();

$mailServerNotificator->send($emailNotification);
$smsServerNotificator->send($smsNotification);

