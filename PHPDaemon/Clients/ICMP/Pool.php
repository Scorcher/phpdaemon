<?php
namespace PHPDaemon\Clients\ICMP;

use PHPDaemon\NetworkClient;

class Pool extends NetworkClient {

	/**
	 * Establishes connection
	 * @param string Address
	 * @return integer Connection ID
	 */

	public function sendPing($host, $cb) {
		$this->connect('raw://' . $host, function ($conn) use ($cb) {
			$conn->sendEcho($cb);
		});
	}
}
