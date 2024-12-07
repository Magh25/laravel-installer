<?php

    namespace Magh25\LaravelInstaller\Request;

use Magh25\LaravelInstaller\Helpers\Reply;
use Illuminate\Foundation\Http\FormRequest;


class CoreRequest extends FormRequest
{

    protected function formatErrors(\Illuminate\Contracts\Validation\Validator $validator)
    {
        return Reply::formErrors($validator);
    }

}