<?php
$tasks = [
    [
        'id' => 1 ,
        'name' => 'Do Homework',
        'completed' => true
    ],
    [
        'id' => 2 ,
        'name' => 'Read Chapter 12',
        'completed' => true
    ],
    [
        'id' => 3 ,
        'name' => 'Go grocery shopping',
        'completed' => false
    ],
];

function getCompletedTasks($tasks) {
    $completedTasks = [];

    foreach($tasks as $task) {
        if($task['completed']) {
            $completedTasks[] = $task;
        }
    }

    return $completedTasks;
}


$tasks = [
    [
        'id' => 1 ,
        'name' => 'Do Homework',
        'completed' => true
    ],
    [
        'id' => 2 ,
        'name' => 'Read Chapter 12',
        'completed' => true
    ],
    [
        'id' => 3 ,
        'name' => 'Go grocery shopping',
        'completed' => false
    ],
];

function getImcompletedTasks($tasks) {
    $imcompletedTasks = [];

    foreach($tasks as $task) {
        if(!$task['completed']) {
            $imcompletedTasks[] = $task;
        }
    }

    return $imcompletedTasks;
}

?>

<h3>Completed Tasks</h3>
<ul>
        <?php foreach(getCompletedTasks($tasks) as $task) : ?>
            <li><?php echo $task['name'];?></li>
        <?php endforeach; ?>
</ul>

<h3>Imcompleted Tasks</h3>
<ul>
        <?php foreach(getImcompletedTasks($tasks) as $task) : ?>
            <li><?php echo $task['name'];?></li>
        <?php endforeach; ?>
</ul>