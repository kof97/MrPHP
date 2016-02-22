<?php 
class Welcome extends MrController
{
	
	public function kof()
	{	
		$segment = uriSegment(1);
		//var_dump($segment);
echo "kof";
		$this->redirect("c1c/welcome/kk");
	}

	public function kk()
	{
		echo "kk";
	}




}










