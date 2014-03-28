<?php namespace PatrickRose\Repos;

interface GigRepositoryInterface {

  public function nextGig();

  public function allGigs();

  public function pastGigs();

  public function findGig($id);

}

?>
