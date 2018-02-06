<?php
namespace PhpAlgorithms\Sort;
class InsertionSort implements SortInterface
{
    /**
     * @插入排序算法 数组由小到大排序
     * @refer https://zh.wikipedia.org/wiki/%E6%8F%92%E5%85%A5%E6%8E%92%E5%BA%8F
     * @refer http://www.cs.usfca.edu/~galles/visualization/ComparisonSort.html
     * @param $element
     */
    public static function sort(& $element)
    {
        for ($i = 1; $i < count($element); $i++)
        {
            $temp = $element[$i];
            for ($j = $i - 1; $j >= 0 && $element[$j] > $temp; $j--)
                $element[$j + 1] = $element[$j];
            $element[$j + 1] = $temp;
        }
    }
}