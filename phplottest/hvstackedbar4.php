<?php
# $Id: hvstackedbar4.php 1001 2011-08-08 02:22:55Z lbayuk $
# Vertical Stacked Bars with Data Value Labels - deep shaded, small 45d text
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'horiz' => False,     # True for horizontal bars, False for vertical
  'shading' => 10,      # Bar shading in pixels, 0 for flat, NULL for default
  'textangle' => 45,    # Label text angle, or NULL for default
  'textheight' => 7,    # Label text height in points, or NULL for default
  );
require 'hvstackedbar.php';
