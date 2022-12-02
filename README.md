# About
Easy and modular OpenSimulator management and deployment for Linux. I made this system for running and managing my own regions, first in OsGrid and now on a private microgrid. Designed for OpenSim 0.9 and higher.

It's probably not good enough for commercial-grade grids but makes life a lot easier for hobbyists running multiple sims in an open-to-connect grid (or your own microgrid).

Isthmus currently only works with the OpenSim dotnet6 branch, which will at some point be merged into master
Alternatively, use my own OpenSim branch, binaries at https://lotix.nl/builds

## Features
  * Easily upgrade all sims at once
  * Shared config, database and caches
  * Logical folder hierarchy
  * Flexible OAR backups
  * Crash detection and restart
  * Dynamic port assignment (user definable range)
  * Easily set up a microgrid using robust
  * Only allow modern, non-shady viewers (optional)
  * Split robust for more stability and speed
  * Groups and offline IM enabled
  * Purge group notices older than 14 days
  
## Preconfigured
Works out of the box:

  * To attach regions to OsGrid (https://www.osgrid.org)
  * To attach regions to a built-in microgrid (either with or without hypergrid)

For more info see the contents of the doc folder
