# About
Easy and modular OpenSimulator management and deployment for Linux. I made this system for running and managing my own regions, first in OsGrid and now on a private microgrid. Designed for OpenSim 0.9 and higher.

It's probably not good enough for commercial-grade grids but makes life a lot easier for hobbyists running multiple sims in an open-to-connect grid (or your own microgrid).

Isthmus only works with the isthmus specific opensim runtime and needs Mono 5.11 or better:  
https://github.com/lickx/opensim/tree/isthmus
Alternatively, you can use your own opensim runtime, after applying the patches in doc/opensim-patches

## Features
  * Easily upgrade all sims at once
  * Shared config, database and caches
  * Logical folder hierarchy
  * Issue mass commands (simauto) or per-sim (simctl)
  * Flexible OAR backups
  * Crash detection (and restart if needed)
  * Dynamic port assignment (user definable range)
  * Easily set up a microgrid using robust
  
## Preconfigured
Works out of the box for:

  * OsGrid (https://www.osgrid.org)
  * Grids using phpgridserver (https://github.com/ft-/phpGridServer)
  * Built-in robust gridserver (either with or without hypergrid)

For more info see the contents of the doc folder
