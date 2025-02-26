<?php
class Response {
    public $data = "a";
    public $help;
    
    function body($data) {
        $this->data = $data;
        return $this;
    }

    function code($code) {
        http_response_code($code);
        return $this;
    }

    function help($help) {
        $this->$help = $help;
        return $this;
    }

    function json() {
        return json_encode($this, JSON_UNESCAPED_UNICODE);
    }
}