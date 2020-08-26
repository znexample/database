<?php

use PhpLab\Eloquent\Fixture\Helpers\FixtureFactoryHelper;

$fixture = new FixtureFactoryHelper;
$fixture->setCount(200);
$fixture->setCallback(function ($index, FixtureFactoryHelper $fixtureFactory) {
    return [
        'id' => $index,
        'title' => 'post ' . $index,
        'category_id' => $fixtureFactory->ordIndex($index, 3),
        'created_at' => '2019-11-05 20:23:00',
    ];
});
return $fixture->generateCollection();
