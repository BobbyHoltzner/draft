<?php


// We need several routes for our api.

// Get Players from a central database which will we store in our application. This way we do not need to rely on a 3rd party each time
// someone creates a new draft.

//

// Grab players from the MFL, pre-draft
// TODO: We should probably set up a cron-job or some sort of event that triggers this pre-draft.
// @params League Id, grabs league id from settings for dynasty leagues.
$app->get('api/players/', 'APIController@updatePlayers' );
