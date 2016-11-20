# daemon_tutorial

Basic example of how to handle unix signals in long running php script

Usage:
1. start script
2. determinate it's pid eg. ps | grep php
3. kill {pid} to send signal to script

How to actually terminate script ?
kill -9 {pid}
