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

		$page = new page();

		var_dump($page->k());
	}

	public function re()
	{
		$this->redirect("index/welcome");
	}

	public function testdb()
	{
		var_dump($this->db());
	}

	public function testPost()
	{
		$p = getPost();
	}

}










