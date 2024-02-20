<?php

namespace App\Service;

class JsonFormatter
{

    private int $status;
    private array $body;
    public function __construct()
    {
        $this->body = ['status' => ''];
        $this->status = 200;
    }

    public function add(string $field, $obj)
    {
        $this->body[] = $obj;
        return $this;
    }

    public function error(string $msg, int $code = 400)
    {
        $this->status = $code;
        $this->body['error'] = $msg;
        return $this;
    }

    public function bulkData(array $data)
    {
        $this->body['data'] = $data;
        return $this;
    }

    public function get()
    {
        $this->body['status'] = $this->status;
        return $this->body;
    }
}