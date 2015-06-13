<?php

kirbytext::$tags['map'] = array(
  'html' => function($tag) {
    return '<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=' .$tag->attr('map'). '&key=AIzaSyAHBhiQ5qOdHnT8yG1E-lcD_JVVwvnwQTM"></iframe>';
  }
);