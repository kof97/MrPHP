<?php 
class Welcome extends MrController
{
	
	public function kof()
	{	
		$segment = uriSegment(1);
		//var_dump($segment);
		echo "kof";
		$this->redirect("index");
	}

	public function kk()
	{
		//echo "kk";

		$this->model("kk")->kkk();
	}




}










