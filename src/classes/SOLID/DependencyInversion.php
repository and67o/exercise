<?php
// Инверсии зависимостей

class xmlHttpRequestService
{

}

class XmlHttpService extends xmlHttpRequestService
{
	public function request($url, $type)
	{
	
	}
}

class Http
{
	
	private XmlHttpService $XmlHttpService;
	
	public function __construct(XmlHttpService $XmlHttpService)
	{
		$this->XmlHttpService = new XmlHttpService();
	}
	
	public function get($url, $options)
	{
		return $this->XmlHttpService->request($url, 'get');
	}
	
	public function post($url, $options)
	{
		return $this->XmlHttpService->request($url, 'post');
	}
}

class xmlHttpRequestService_v2
{
	public function open()
	{
	
	}
	
	public function send()
	{
	
	}
}


interface Connection
{
	public function request($url, $type);
}

class XmlHttpService_v2 implements Connection
{
	public function request($url, $type)
	{
		$xhr = new xmlHttpRequestService_v2();
		
		$xhr->open();
		$xhr->send();
	}
}

class Http_v2
{
	/**
	 * @var XmlHttpService
	 */
	private XmlHttpService $httpConnection;
	
	public function __construct(Connection $XmlHttpService)
	{
		$this->httpConnection = new XmlHttpService();
	}
	
	public function get($url, $options)
	{
		return $this->httpConnection->request($url, 'get');
	}
	
	public function post($url, $options)
	{
		return $this->httpConnection->request($url, 'post');
	}
}
