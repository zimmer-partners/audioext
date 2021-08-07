<?php 

// ==========================
// = Load Library Compoents =
// ==========================

require_once(__DIR__ . '/lib/audioext.php');

// =======================
// = Component Registery =
// =======================

$kirby->set('snippet', 'audioext', __DIR__ . '/snippets/audioext.php');

/*
$kirby->set('route', array(
  'pattern' => 'calendar/timezones',
  'action' => function () {
    return new Response(snippet('timezones', array(), true));
  }
));
*/

// ===================
// = Tag Registery =
// ===================

require_once(__DIR__ . '/tags/audioext.php');

// ===================
// = Model Registery =
// ===================

/*
require_once(__DIR__ . '/models/CalendarPage.php');
$kirby->set('page::model', 'calendar', 'CalendarPage');
require_once(__DIR__ . '/models/EventPage.php');
$kirby->set('page::model', 'event', 'EventPage');
*/