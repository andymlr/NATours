<?php

class Components extends Trongate {

    function index() {
        $data['view_file'] = 'homepage';
        $this->template('boilerplate', $data);
    }
}