<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class TransactionDetails extends DataTransferObject
{
    public string|null $order_id;
    public int|null $gross_amount;

    public function setOrderId (string $order_id) {
        $this->order_id = $order_id;
    }
    public function setGrossAmount (int $gross_amount) {
        $this->gross_amount = $gross_amount;
    }
}
