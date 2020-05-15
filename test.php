<?php

$studentDegree = '108';



switch ($studentDegree) {

  case ($studentDegree > 100):
    echo '<h1 style="text-align:center ;font-size:50px ; margin-top:200px ; color:blue">Invalid Degree should be less than or equal 100</h1>';
    break;
  case ($studentDegree >= 85):
    echo '<h1 style="text-align:center ;font-size:80px ; margin-top:200px ; color:blue">A</h1>';
    break;
  case ($studentDegree >= 75):
    echo '<h1 style="text-align:center ;font-size:80px ; margin-top:200px ; color:blue">B</h1>';
    break;
  case ($studentDegree >= 65):
    echo '<h1 style="text-align:center ;font-size:80px ; margin-top:200px ; color:blue">C</h1>';
    break;
  case ($studentDegree >= 50):
    echo '<h1 style="text-align:center ;font-size:80px ; margin-top:200px ; color:blue">D</h1>';
    break;
  case ($studentDegree < 50):
    echo '<h1 style="text-align:center ;font-size:80px ; margin-top:200px ; color:blue">F</h1>';
    break;
}
