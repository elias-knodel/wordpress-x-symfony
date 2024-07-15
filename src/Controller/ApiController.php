<?php

namespace App\Plugin;

use MySymfonyPlugin\Service\MyService;
use WP_REST_Request;
use WP_REST_Response;
use WP_Error;

class ApiController
{
    private $myService;

    public function __construct(MyService $myService)
    {
        $this->myService = $myService;
    }

    public function handleRequest(WP_REST_Request $request)
    {
        $data = $request->get_json_params();
        if (empty($data)) {
            return new WP_Error('no_data', 'No data provided', array('status' => 400));
        }

        $result = $this->myService->processData($data);

        return new WP_REST_Response($result, 200);
    }
}
