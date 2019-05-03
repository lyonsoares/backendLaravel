<?php

namespace App\Repositories;


class Listar extends GuzzleHttpRequest{

        public function all()
        {
            return $this->get('list');
        }


}