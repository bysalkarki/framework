<?php

namespace app\core;

class Router
{
    public Request $request;
    public Response $response;
    protected array $routes=[];

    /**
     * @param Request $request
     */
    public function __construct (Request $request, Response $response)
    {
        $this -> request=$request;
        $this -> response=$response;
    }


    public function get ($path, $callback)
    {
        $this -> routes['get'] [$path]=$callback;
    }

    public function post ($path, $callback)
    {
        $this -> routes['post'] [$path]=$callback;
    }


    public function resolve ()
    {
        $path=$this -> request -> getPath();
        $method=$this -> request -> method();
        $callback=$this -> routes[$method][$path] ?? false;
        if (!$callback) {
            Application ::$app -> response -> setStatusCode(404);
            echo $this->renderView('exceptions/_404');
        }
        if (is_string($callback)) {
            return $this -> renderView($callback);
        }
        return call_user_func($callback,$this->request);

    }

    public function renderView (string $view,$params = [])
    {
        $layoutContent=$this -> layoutContent();
        $viewContent=$this -> renderOnlyView($view,$params);
        return str_replace("{{CONTENT}}", $viewContent, $layoutContent);
    }

    private function layoutContent ()
    {
        ob_start();
        include_once Application ::$ROOT_DIR . "/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView (string $view,array $params)
    {
        foreach($params as $key =>$value){
            $$key = $value;
        }
        ob_start();
        include_once Application ::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean();
    }

    private function renderContent (string $view)
    {
        $layoutContent=$this -> layoutContent();
        return str_replace("{{CONTENT}}", $view, $layoutContent);
    }


}
