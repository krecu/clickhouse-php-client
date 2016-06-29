<?php

namespace ClickHouse\Format;

use ClickHouse\Exception\NotImplementedException;

class TabSeparated extends AbstractFormat
{

    const NAME = 'TabSeparated';



    protected function parseRawResult()
    {
        $this->result = $this->getRawResult();
    }
}