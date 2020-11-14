<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class HomedirTest extends TestCase {

	public function testCallGetHomeDirectoryFunction(): void {
		$this->assertNotEmpty(get_home_directory());
	}
	
}