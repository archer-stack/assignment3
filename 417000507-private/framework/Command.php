<?php
abstract class Command {
    protected $receiver;
    abstract public function execute(CommandContext $context): void;
}
?>