<?php

interface TransferInterface
{
    public function validateTo(AccountObject $accountTo);
}