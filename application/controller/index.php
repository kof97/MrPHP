<?php 
class Index extends MrController
{
    public function welcome()
    {
        echo "Welcome to use Mr. PHP !";
    }

    public function testkk()
    {
        $this->model("kk");
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
        $res = $this->conn->query("select * from documents", "count");

        var_dump($res);

        
        
    }

    public function testPost()
    {
        $p = request("1");

        var_dump($p);
    }

}










