<?php
function simulateDFA($input) {
    $state = 'q0';
    $final_state = 'q1';

    $transitions = [
        'q0' => ['0' => 'q0', '1' => 'q1'],
        'q1' => ['0' => 'q1', '1' => 'q3'],
        'q2' => ['0' => 'q1', '1' => 'q3'],
        'q3' => ['0' => 'q2', '1' => 'q3']
    ];

    foreach (str_split($input) as $symbol) {
        if (!isset($transitions[$state][$symbol])) {
            return false;
        }
        $state = $transitions[$state][$symbol];
    }

    return $state === $final_state;
}
