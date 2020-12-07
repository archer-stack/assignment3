<?php
class IndexController extends Controller{
public function run():void{
$this->setMapper(new CourseMapper());
$this->setView(new View());
$this->getView()->setTemplate("../../417000507-private/tpl/index.tpl.php");
$this->getView()->addVar("popular", $this->getModel()->findPopular());
$this->getView()->addVar("recommended", $this->getModel()->findRecommended());
$this->getResponseHandler()->getHeader()->setData("Header", "Default");
$this->getResponseHandler()->getState()->setData("State", "Default");
$this->getResponseHandler()->getLogResponse()->setData("Logger", "Index Page was visited");
$this->getSessionManager()->create();
$this->getSessionManager()->add("Response Handler", $this->getResponseHandler());
$this->getView()->display();
}
}
?>

