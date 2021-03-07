<?php

namespace App\Helpers;

use App\Pay_fines;
use Illuminate\Support\Facades\DB;

class Denda
{
    public static function Bayar($id)
    {
        return Pay_fines::wherePayBorrowId($id)

            ->get();

    }
}
