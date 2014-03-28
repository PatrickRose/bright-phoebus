<?php namespace PatrickRose\Repos;

use Carbon\Carbon;
use \Gig;

class DBGigRepository implements GigRepositoryInterface {

    public function nextGig()
    {
        $now = Carbon::create();
        return Gig::where("gigDate", ">", $now)->first();
    }

    public function allGigs()
    {
        return Gig::all();
    }

    public function pastGigs()
    {
        $now = Carbon::create();
        return Gig::where("gigDate", "<", $now);
    }

    public function findGig($id)
    {
        return Gig::find($id);
    }
}

?>
