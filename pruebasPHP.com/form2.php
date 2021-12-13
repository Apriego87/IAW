<?php

    // How I like to repeat a string using standard PHP functions
    $input = 'bar';
    $multiplier = 5;
    $separator = ',';
    print implode($separator, array_fill(0, $multiplier, $input));
    print "\n";

    // Say, this comes in handy with count() on an array that we want to use in an
    // SQL query such as 'WHERE foo IN (...)'
    $args = array('1', '2', '3');
    print implode(',', array_fill(0, count($args), '?'));
    print "\n";
?>