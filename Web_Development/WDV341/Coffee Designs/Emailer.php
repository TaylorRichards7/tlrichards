<?php

class Emailer {
	
	//define properties for the class
	
	private $messageLine = "";
	
	private $senderAddress = "";
	
	private $sendToAddress = "";
	
	private $subjectLine = "";
	
	
	//define methods of the class
	
	//constructor method
	
	public function __construct() {
		
	}
	
	
	//set methods
	
	public function setMessageLine($inMessageLine) {
		$this->messageLine = $inMessageLine;
	}
	
	public function setSenderAddress($inSenderAddress) {
		$this->senderAddress = $inSenderAddress;
	}
	
	public function setSendToAddress($inSendToAddress) {
		$this->sendToAddress = $inSendToAddress;
	}
	
	public function setSubjectLine($inSubjectLine) {
		$this->subjectLine = $inSubjectLine;
	}
	
	
	//get methods
	
	public function getMessageLine() {
		return $this->messageLine;
	}
	
	public function getSenderAddress() {
		return $this->senderAddress;
	}
	
	public function getSendToAddress() {
		return $this->sendToAddress;
	}
	
	public function getSubjectLine() {
		return $this->subjectLine;
	}
	
	
	//processing methods
	
	public function sendPHPEmail() {
		
		// $additionalHeaders = "From: $this->senderAddress";
		
		// echo "<h1>Additional headers $additionalHeaders</h1>";
		
		$this->messageLine = wordwrap($this->messageLine,70,"\r\n");
		
		echo "<h3>Message $this->messageLine</h3>";
		
		return mail($this->sendToAddress, $this->subjectLine, $this->messageLine); //submit email to host email server $additionalHeaders
		
	}
	
	
	
}

?>