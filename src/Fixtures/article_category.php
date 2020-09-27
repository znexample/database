<?php

use ZnCore\Db\Fixture\Libs\FixtureGenerator;

$fixture = new FixtureGenerator;
$fixture->setCount(30);
$fixture->setCallback(function ($index, FixtureGenerator $fixtureFactory) {
    return [
        'id' => $index,
        'title' => 'category ' . $index,
    ];
});
return $fixture->generateCollection();
