<?php

namespace Rusmanab\Blibli\Module;

use Rusmanab\Blibli\ModuleAbstract;
class Discount extends ModuleAbstract{

    public function createDiscount($parameters = []){

        $url = "/proxy/seller/v1/promos/discounts";

        return $this->post($url, $parameters, "POST");
    }

    public function editDiscount($parameters = []){

        $url = "/proxy/seller/v1/promos/discounts";

        return $this->post($url, $parameters, "POST");
    }

    public function removeDiscount($parameters = []){

        $url = "/proxy/seller/v1/promos/discounts";

        return $this->post($url, $parameters, "POST");
    }


}
