<?php

use Mockery as m;

use Slab\WordPress\Example;

/**
 * Test WordPress
 *
 * @package default
 * @author Luke Lanchester
 **/
class WordPressTest extends PHPUnit_Framework_TestCase {


	/**
	 * Test can instantiate
	 *
	 * @return void
	 **/
	public function testCanInstantiate() {

		$obj = new Example;

		$this->assertInstanceOf('Slab\WordPress\Example', $obj);

	}



	/**
	 * Tear down tests
	 *
	 * @return void
	 **/
	public function tearDown() {

		m::close();

	}



}
