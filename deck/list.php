<?php

$values=[2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A'];

$types=['heart', 'spade', 'club', 'diamond'];

$cards=[];

foreach($values as $value)
{
    foreach($types as $type)
    {
        $cards[]=[
            'value'=>$value, 
            'type'=>$type
        ];
    }
}
