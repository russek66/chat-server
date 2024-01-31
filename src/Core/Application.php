<?php

namespace App\Core;

class Application
{

    public function __construct(
        protected array $request,
        private readonly Router $router
    )
    {
        $this->registerRoutes()
            ->run();
    }

    public function run(): void
    {
        $this->router->resolve(uri: $this->request['uri'], method: strtolower($this->request['method']));
    }

    private function registerRoutes(): self
    {
        $this->router->post('/nickname', [APIController::class, "nickname"]);

        return $this;
    }
}