<?php
# $Id: automargin5a.php 1001 2011-08-08 02:22:55Z lbayuk $
# Testing phplot - Automatic margin calculation - 5a manual override
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => ', Manual margins, big T/B',   # Title part 2
  'x_title_pos' => 'both',  # X Title Position: plotdown plotup both none
  'y_title_pos' => 'both',  # Y Title Position: plotleft plotright both none
  'xticklabel' => 'both', # X tick & label position: none|both|plotup|plotdown|xaxis
  'yticklabel' => 'both', # Y Tick & label position: none|both|plotleft|plotright
  'xdatalabel' => NULL, # X data label position: NULL|plotdown|plotup|both
  'margins' => array(100, 50, 130, 50),      # If set, array of 4 margins (t r b l), else automatic
  );
require 'automargin.php';
