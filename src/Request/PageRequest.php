<?php

namespace Rainte\Hyperf\Request;

use Rainte\Hyperf\Request\Rule;
use Rainte\Hyperf\Request\FormRequest;

class PageRequest extends FormRequest
{
    /**
     * @inheritdoc
     */
    public function defaultRules(): array
    {
        return Rule::page();
    }
}
