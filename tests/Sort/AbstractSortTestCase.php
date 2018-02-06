<?php
/**
 * Created by PhpStorm.
 * Author: Baykier<1035666345@qq.com>
 * Date: 2018/2/6
 * Time: 10:43
 */
namespace Tests\Sort;

use PHPUnit\Framework\TestCase;

class AbstractSortTestCase extends TestCase
{
    /**
     * @测试的数组
     * @var array
     */
    protected $element = array(
        9,34,54,33,56,49
    );

    /**
     * @期待正常的数据
     * @var array
     */
    protected $expect = array(
        9,33,34,49,54,56
    );

    protected $abstract = 'PhpAlgorithms\Sort\SortInterface';

    protected $impl = null;


    /**
     * @执行测试
     */
    public function testSort()
    {
        $this->impl::sort($this->element);
        $this->assertEquals($this->element,$this->expect);
    }

    /**
     * @测试清理
     */
    public function tearDown()
    {
        $this->impl = null;
    }
}