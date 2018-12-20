<?php
namespace App\Http\Responder;

use Illuminate\Http\Response;
use Illuminate\Contracts\View\Factory as ViewFactory;
use App\Domain\Sample\Service;

class SampleResponder
{
    protected $response;
    protected $view;

    public function __construct(Response $response, ViewFactory $view)
    {
        $this->response = $response;
        $this->view = $view;
    }

    public function response(String $data): Response
    {
        $this->response->setContent(
            $this->view->make('sample.index', ['data' => $data])
        );
        return $this->response;
    }
}
