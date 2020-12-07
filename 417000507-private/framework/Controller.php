<?php

    

    abstract class Controller{
        protected $mapper;
        protected $model;
        protected $view;
        protected $commandContext;
        protected $validator;
        protected $responseHandler;
        protected $sessionManager;
        
        function __construct(){
            $this->model = null;
            $this->view = null;
            $this->commandContext = null;
            $this->validator = Registry::getInstance()->getValidator();
            $this->responseHandler = Registry::getInstance()->getResponseHandler();
            $this->sessionManager = Registry::getInstance()->getSessionManager();
            $this->mapper=null;

        }

        public function setMapper(Mapper $m):void{
            $this->mapper = $m;
        }

        public function getMapper():Mapper{

            return $this->mapper;
        }

        public function setModel(Model $m):void{
            $this->model = $m;
        }

        public function setView(View $v):void{
            $this->view = $v;
        }
    

        public function getModel():Model{

            return $this->model;
        }

        public function getView():View{

            return $this->view;
        }

        public function setCommandContext(CommandContext $context) {
        
            $this->commandContext = $context;
           
        }
            
            public function getResponseHandler() {
        
                return $this->responseHandler;
        
            }
            
            public function getSessionManager() {
        
                return $this->sessionManager;
        
            }
        
            public abstract function run():void;
    }
?>