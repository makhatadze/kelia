<?php
/**
 *  app/helpers.php
 *
 * Date-Time: 23.01.22
 * Time: 08:46
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */


/**
 * @param $items
 *
 * @return array
 */
function getKeyValue($items): array
{
    $data = [];

    foreach ($items as $key => $value) {
        $data []= [
            "key" => $value,
            "label" => $key
        ];
    }

    return $data;
}