<?php 
class Index extends MrController
{
	public function welcome()
	{
		echo "Welcome to use Mr. PHP !";
	}

	public function getSegment()
	{
		$seg = uriSegment(3);

		echo $seg;
	}

	public function getUrl()
	{
		$url = siteUrl("index/welcome");

		echo $url;
	}

	public function re()
	{
		$this->redirect("index/welcome");
	}

}










