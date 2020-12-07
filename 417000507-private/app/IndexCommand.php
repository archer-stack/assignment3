<?php

class IndexCommand extends Command
{
function __construct() {
$this->receiver = new IndexController();
}

public function execute(CommandContext $context):void {
$this->receiver->setCommandContext($context);
$this->receiver->run();
}
}

?>