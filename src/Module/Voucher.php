<?php

namespace Rusmanab\Blibli\Module;

use Rusmanab\Blibli\ModuleAbstract;
class Voucher extends ModuleAbstract{

    public function createVoucher($parameters = []){

        $url = "/proxy/seller/v1/promos/vouchers";
        return $this->post($url, $parameters, "POST");
    }

    public function editDiscount($parameters = []){

        $url = "/proxy/seller/v1/promos/vouchers/{$parameters['voucher_code']}";

        return $this->post($url, $parameters, "POST");
    }

    public function removeDiscount($parameters = []){

        $url = "/proxy/seller/v1/promos/vouchers/{$parameters['voucher_code']}/statuses/live";

        return $this->post($url, $parameters, "POST");
    }


}
