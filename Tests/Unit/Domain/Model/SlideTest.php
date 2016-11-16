<?php

namespace Lv\Lvimage\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \Lv\Lvimage\Domain\Model\Slide.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class SlideTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Lv\Lvimage\Domain\Model\Slide
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Lv\Lvimage\Domain\Model\Slide();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitelReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTitel()
		);
	}

	/**
	 * @test
	 */
	public function setTitelForStringSetsTitel()
	{
		$this->subject->setTitel('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'titel',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBildReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getBild()
		);
	}

	/**
	 * @test
	 */
	public function setBildForFileReferenceSetsBild()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setBild($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'bild',
			$this->subject
		);
	}
}
