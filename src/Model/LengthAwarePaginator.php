<?php

namespace Rainte\Hyperf\Model;

use Hyperf\Paginator\LengthAwarePaginator as HyperfLengthAwarePaginator;

class LengthAwarePaginator extends HyperfLengthAwarePaginator
{
    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [
            config('rainte.PAGE_NO_AT', 'page_no') => $this->currentPage(),
            config('rainte.PAGE_SIZE_AT', 'page_size') => $this->perPage(),
            'total' => $this->total(),
            'list' => $this->items->toArray(),
        ];
    }
}
