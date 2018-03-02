<?php


namespace Poei\blog;


class App
{
    private $request;
    private $router;
    private $controller;
    private $action;
    private $parameters;

    /**
     * App constructor.
     */
    public function __construct()
    {
        $this->request = new OurRequest();
        $this->router = new OurRouter();
    }

    public function setController()
    {
        $this->controller = $this->router->getRoute()['controller'];
    }

    public function setAction()
    {
        $this->action = $this->router->getRoute()['action'];

    }

    public function setParameters()
    {
        $this->parameters = $this->router->getRoute()['parameters'];

    }

    public function run()
    {
        if ($this->router->match($this->request)) {
            call_user_func_array(
                [$this->controller, $this->action],
                $this->parameters);
        } else {
            throw new \Exception('Page not found.');
        }
    }
}