<?php
    class App {
        protected $controller = 'dashboard';
        protected $method = 'index';
        protected $params = [];

        public function __construct(){
            $url = $this->parseUrl();

            if ($url && file_exists(APP_ROOT.'controllers/'.$url[0].'.php'))
                $this->controller = $url[0];
                
            require_once APP_ROOT.'controllers/'.$this->controller.'.php';
            $this->controller = new $this->controller;

            if (isset($url[1]) && method_exists($this->controller,$url[1]))
                $this->method = $url[1];

            unset($url[0]);
            unset($url[1]);

            if ($url)
                $this->params = array_values($url);

            call_user_func([$this->controller,$this->method],$this->params);
        }

        private function parseUrl(){
            if (isset($_GET['url'])){
                return $url = explode('/',
                                    filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL)
                                );
            }
        }
    }
?>