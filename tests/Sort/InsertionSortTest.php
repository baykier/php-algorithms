<?php
/**
 * Created by PhpStorm.
 * Author: Baykier<1035666345@qq.com>
 * Date: 2018/2/6
 * Time: 11:20
 */

namespace Tests\Sort;


class InsertionSortTestCase extends AbstractSortTestCase
{
    public function setUp()
    {
        $this->impl = 'PhpAlgorithms\Sort\InsertionSort';
    }
}