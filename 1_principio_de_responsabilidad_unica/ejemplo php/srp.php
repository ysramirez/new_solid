<?php

class TaskManager {
    private $tasks = [];

    public function addTask($task) {
        $this->tasks[] = $task;
        echo "Task added: $task<br>";
    }

    public function removeTask($task) {
        $index = array_search($task, $this->tasks);
        if ($index !== false) {
            unset($this->tasks[$index]);
            echo "Task removed: $task<br>";
        } else {
            echo "Task not found: $task<br>";
        }
    }

    public function printTasks() {
        echo "Current Tasks:<br>";
        foreach ($this->tasks as $task) {
            echo "- $task<br>";
        }
    }

    public function saveTasksToFile($filename) {
        $file = fopen($filename, 'w');
        foreach ($this->tasks as $task) {
            fwrite($file, "$task\n");
        }
        fclose($file);
        echo "Tasks saved to file: $filename<br>";
    }
}

// Uso del código
$taskManager = new TaskManager();
$taskManager->addTask("Finish homework");
$taskManager->addTask("Clean the house");
$taskManager->printTasks();

$taskManager->saveTasksToFile("tasks.txt");
$taskManager->removeTask("Finish homework");
$taskManager->printTasks();

?>
