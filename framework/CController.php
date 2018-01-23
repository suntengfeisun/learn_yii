<?php

class CController
{
    public function render($viewName, $data)
    {
//        美[ɪkˈstrækt]，将数组key变成变量名，value变成值
        extract($data, EXTR_PREFIX_SAME, 'data');
        require($viewName);
    }
}
