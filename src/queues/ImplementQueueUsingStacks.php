<?php

namespace App\Queues;

class ImplementQueueUsingStacks {
    private $input;
    private $output;

    public function __construct() {
        $this->input = [];
        $this->output = [];
    }

    public function push($data) {
        if (!is_array($this->input)) {
            $this->input = [];
        }
        array_push($this->input, $data);
    }

    public function pop() {
        if ($this->isEmpty()) {
            return null;
        }

        if (!is_array($this->output)) {
            $this->output = [];
        }

        if (empty($this->output)) {
            while (!empty($this->input)) {
                array_push($this->output, array_pop($this->input));
            }
        }

        return array_pop($this->output);
    }

    public function top() {
        if ($this->isEmpty()) {
            return null;
        }

        if (!is_array($this->output)) {
            $this->output = [];
        }

        if (empty($this->output)) {
            while (!empty($this->input)) {
                array_push($this->output, array_pop($this->input));
            }
        }

        return end($this->output);
    }

    public function size() {
        return count($this->input) + count($this->output);
    }

    public function isEmpty() {
        return empty($this->input) && empty($this->output);
    }
}
