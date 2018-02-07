<?php
/**
 * Created by PhpStorm.
 * Author: Baykier<1035666345@qq.com>
 * Date: 2018/2/7
 * Time: 14:30
 */
namespace PhpAlgorithms\Sort;

class SelectionSort implements SortInterface
{
    /**
     * @交换元素内容
     * @param $x
     * @param $y
     */
    protected static function swap(&$x, &$y) {
        $t = $x;
        $x = $y;
        $y = $t;
    }

    /**
     * @选择排序
     * @param $element
     */
    public static function sort(&$element) {
        for ($i = 0; $i < count($element) - 1; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < count($element); $j++)
                if ($element[$min] > $element[$j])
                    $min = $j;
            self::swap($element[$min], $element[$i]);
        }
    }
}