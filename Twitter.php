<?php
//require 'vendor/autoload.php';
require('codebird.php');

use Codebird\Codebird;

class Twitter
{
    protected $consumer_key = '<consumer_key>';
    protected $consumer_secret = '<consumer_secret>';
    protected $access_token = '<access_token>';
    protected $access_secret = '<access_secret>';
    protected $twitter;

    public function __construct()
    {
        // Fetch new Twitter Instance
        Codebird::setConsumerKey($this->consumer_key, $this->consumer_secret);
	$this->twitter = Codebird::getInstance();

        // Set access token
        $this->twitter->setToken($this->access_token, $this->access_secret);
    }

    public function tweet($message)
    {
        return $this->twitter->statuses_update(['status' => $message]);
    }

}

?>
