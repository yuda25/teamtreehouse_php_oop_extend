<?php
include 'inc/config.php';

$filter = ['status'=>'active'];
if (isset($_GET['status'])) {
    $filter['status'] = filter_input(
        INPUT_GET, 
        'status', 
        FILTER_SANITIZE_STRING
    );
}
$directory->selectListings($filter);

$title = "PHP Conferences";
require 'inc/header.php';

$test = new ListingPremium(['description'=>'my description with <b>good tags</b> and <a href ="http://example.com">bad tags</a>!']);
var_dump($test);
var_dump(get_class($test));
var_dump(is_a($test,'listingBasic'));
var_dump($test->getStatus());



foreach ($directory->listings as $listing) {
    include 'views/list_item.php';
}

require 'inc/footer.php';