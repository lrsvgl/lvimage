<?php
namespace Lv\Lvimage\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
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
 * Test case for class Lv\Lvimage\Controller\SlideController.
 *
 */
class SlideControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \Lv\Lvimage\Controller\SlideController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('Lv\\Lvimage\\Controller\\SlideController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllSlidesFromRepositoryAndAssignsThemToView()
	{

		$allSlides = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$slideRepository = $this->getMock('Lv\\Lvimage\\Domain\\Repository\\SlideRepository', array('findAll'), array(), '', FALSE);
		$slideRepository->expects($this->once())->method('findAll')->will($this->returnValue($allSlides));
		$this->inject($this->subject, 'slideRepository', $slideRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('slides', $allSlides);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}
}
