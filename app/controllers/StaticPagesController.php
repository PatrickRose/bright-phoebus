<?php
use PatrickRose\Repos\GigRepositoryInterface as GigRepository;

/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 28/03/14
 * Time: 16:00
 */

class StaticPagesController extends BaseController {

    /**
     * @var GigRepository The gig repository
     */
    private $repo;

    /**
     * @param GigRepository $repository The repository we want to use
     */
    public function __construct(GigRepository $repository) {
        $this->repo = $repository;
    }

    public function test(){}
}