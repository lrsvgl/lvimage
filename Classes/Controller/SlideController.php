<?php
namespace Lv\Lvimage\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * SlideController
 */
class SlideController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * slideRepository
     *
     * @var \Lv\Lvimage\Domain\Repository\SlideRepository
     * @inject
     */
    protected $slideRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $slides = $this->slideRepository->findAll();
	    $this->settings = $this->configurationManager;
	    //debug($this->settings);
        $this->view->assign('slides', $slides);
    }

}