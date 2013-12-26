<?php

namespace hu\szjani\sample\finder\user;

use predaddy\presentation\Page;
use predaddy\presentation\Pageable;

interface UserFinder
{
    /**
     * @param Pageable $pageable
     * @param string|null $filterName
     * @return Page
     */
    public function findAll(Pageable $pageable, $filterName = null);
}
