<?php
# $Id: range-auto7dec4e.php 1573 2013-04-02 22:08:50Z lbayuk $
# PHPlot test: Plot auto-range test
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => 'Decimal tick step (5x): check edge, expecting step=5000',
  'min' => 0,              # Lowest data value
  'max' => 25000,          # Highest data value
  'adjust_mode' => 'T',    # Range adjust mode: 'T', 'R', or 'I'
  'adjust_amount' => 0,    #  % of range for adjustment
  'mintick' => 5,          # Minimum tick count
  'tick_mode' => 'decimal', # Tick selection mode
  );
require 'range-auto.php';
