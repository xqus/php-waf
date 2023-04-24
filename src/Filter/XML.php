<?php
namespace xqus\PhpWaf\Filter;

use xqus\PhpWaf\BaseFilter;

class XML extends BaseFilter
{
    /**
     * @var string
     */
    protected $payloads_file = "xml.txt";

    /**
     * Check given string
     *
     * @param string $value
     * @return bool
     */
    public function safe(string $value): bool
    {
        // TODO: Implement safe() method.
    }
}