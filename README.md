# About
Easy and modular OpenSimulator management and deployment for Linux. I made this system for my own 25 regions in OsGrid. Designed for OpenSim 0.9 and higher.

It's probably not good enough for commercial-grade grids but makes life a lot easier for hobbyists running multiple sims in an open-to-connect grid.

Isthmus only works with opensim compiled from https://github.com/lickx/opensim/tree/lickx-mono5 and needs Mono 5.11 or better

## Features
  * Easily upgrade all sims at once
  * Shared config, database and caches
  * Logical folder hierarchy
  * Issue mass commands (simauto) or per-sim (simctl)
  * Flexible OAR backups
  * Crash detection (and restart if needed)
  * Dynamic TCP port assignment (user definable range)
  * Easily set up a microgrid using the robust tool
  
## Preconfigured
Works out of the box for:

  * OsGrid (https://www.osgrid.org)
  * Metropolis (https://www.hypergrid.org)
  * Grids using phpgridserver (https://github.com/ft-/phpGridServer)
  * Built-in robust gridserver (either hypergrid or closedgrid)

For more info see the contents of the doc folder
