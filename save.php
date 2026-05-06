<?php

echo "<pre>";

foreach ($_POST as $section => $tasks) {

    echo strtoupper($section) . "\n";

    foreach ($tasks as $taskIndex => $task) {

        echo "  Task $taskIndex (Main: " . $task['main'] . ")\n";

        if (!empty($task['work'])) {
            foreach ($task['work'] as $workIndex => $work) {

                echo "    Work: " . $work['name'] . "\n";

                if (!empty($work['sub'])) {
                    foreach ($work['sub'] as $sub) {
                        echo "      - Sub: $sub\n";
                    }
                }
            }
        }
    }

    echo "\n----------------------\n";
}

echo "</pre>";