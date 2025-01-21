<?php

namespace Mozakar\Gateway\Exceptions;

class CardValidationNotSupported extends BankException
{
    protected $code = -201;
    protected $message = 'عدم پشتیبانی از پرداخت با کارت تایید شده.';
}