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

        $k = $this->model("kk")->kkk();
        var_dump($k);
    }

    public function vv()
    {

        $data['kk'] = 5;

        $this->view("kof.html", $data);
    }

    public function ll()
    {
        echo 111111;
    }




}










