<?php
namespace xqus\PhpWaf;

use PHPUnit\Framework\TestCase;

class BaseFilterTest extends TestCase
{


    public function testFilterMethods()
    {
        $firewall = new Firewall();

        foreach (array_keys($firewall->getFilters()) as $filter)
        {
            $className = "xqus\\PhpWaf\\Filter\\$filter";
            $object = new $className;
            $this->assertTrue(method_exists($object, "safe"));
        }
    }
}