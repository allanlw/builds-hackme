#!/usr/bin/env python

import sys

from numbers_helper import *

if len(sys.argv) != 3:
    print "Incorrect number of command line arguments."
    print "Usage:"
    print "    python ./numbers.py <arg1> <arg2>"
    exit(1)

arg1 = int(sys.argv[1])
arg2 = int(sys.argv[2])

bignumber = 202557564740749725343243267960623572731942487045L

if (arg1 >= arg2 or
    arg1 == 1 or
    arg1 * arg2 != 18243150071292141317265306851):
    print "You've got the wrong arguments..."
    exit(1)

print "Congrats you had the right input."
print int2str(bignumber * arg1)
