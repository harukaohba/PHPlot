<?php
# $Id: missingh9.php 1652 2013-11-13 22:10:17Z lbayuk $
# PHPlot test: Horizontal Lines with missing data - 9 : data label lines
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => " (lines, No BrokenLines, DataLabelLines)",   # Title part 2
  'DBLines' => False,        # DrawBrokenLines: True or False or NULL to omit
  'PType' => 'lines',    # Plot Type: lines, linepoints, squared
  'DataLines' => True,  # Labels at top and data lines on
  'horizontal' => True, # Horizontal plot
  );
require 'missing.php';
