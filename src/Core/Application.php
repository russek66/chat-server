<?php

namespace App\Core;

class Application
{

    public function __construct(
        protected array $request,
        private readonly Router $router,
        private readonly MessageDTO $messageDTO
    )
    {
        $this->registerRoutes()
            ->run();
    }

    public function run(): void
    {
        $this->router->resolve(
            uri: $this->request['uri'],
            method: strtolower($this->request['method']),
            mDTO: $this->messageDTO
        );
    }

    private function registerRoutes(): self
    {
        $this->router->post('/', [APIController::class, "setMsg"]);
        $this->router->get('/', [APIController::class, "getMsg"]);

        return $this;
    }
}