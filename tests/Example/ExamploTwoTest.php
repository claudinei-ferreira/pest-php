<?php
use Src\Example\Example;

test('shold return string', function() {
    $example = new Example;
    $response = $example->say();

    expect($response)->toBeString();
    $this->assertNotEmpty($response);

});
