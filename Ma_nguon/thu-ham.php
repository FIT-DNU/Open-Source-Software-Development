<?php
function canRegister(int $capacity, int $registered): bool
{
    if ($capacity <= 0 || $registered < 0) {
        return false;
    }
    return $registered < $capacity;
}

var_dump(canRegister(10, 9));  // Kỳ vọng: bool(true)
var_dump(canRegister(10, 10)); // Kỳ vọng: bool(false)
