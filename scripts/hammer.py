#!/usr/bin/env python

import urllib2
import time
import random

while True:
  a = urllib2.urlopen("http://hackme.builds.cc/about.php").read()
  if "KEY" in a:
    print a
  time.sleep(random.random()/2)
