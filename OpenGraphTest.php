<?php
  require 'OpenGraph.php';
  $o = OpenGraph::fetch(
    'http://hashtiv.link/7n55ZnyVim'
  );
  
  $array =  (array) $o;
  $array = str_replace('\\u0000', "", json_encode($array));
  $array = json_decode($array, true);
  print_r($array);
  echo('<br><br>');
  echo('title:'.$array['OpenGraph_values']['title'].'<br>');
  echo('description:'.$array['OpenGraph_values']['description'].'<br>');
  echo('image:'.$array['OpenGraph_values']['image'].'<br>');
  if (array_key_exists("twitter_card",$array['OpenGraph_values'])){
    echo ('twitter_card:'.$array['OpenGraph_values']['twitter_card'].'<br>');
  }
  echo('<br><br>');
  echo('hashtiv_title:'.$array['OpenGraph_values']['hashtiv_title'].'<br>');
  echo('hashtiv_description:'.$array['OpenGraph_values']['hashtiv_description'].'<br>');
  echo('hashtiv_image:'.$array['OpenGraph_values']['hashtiv_image'].'<br>');
  if (array_key_exists("hashtiv_display",$array['OpenGraph_values'])){
    echo ('hashtiv_display:'.$array['OpenGraph_values']['hashtiv_display'].'<br>');
  }
?>
