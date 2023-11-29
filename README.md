# About
Easy and modular OpenSimulator management and deployment for Linux. I made this system for running and managing my own regions, first in OsGrid and now on a private microgrid. Designed for OpenSim 0.9 and higher.

It's probably not good enough for commercial-grade grids but makes life a lot easier for hobbyists running multiple sims in an open-to-connect grid (or your own microgrid).

Isthmus works with OpenSim .NET 6.0, the master branch of OpenSim.
It is recommended to use my own OpenSim fork (https://github.com/lickx/opensim-lickx), see its Wiki for binary downloads.

## Features
  * Easily upgrade all sims at once
  * Shared config, database and caches
  * Self-contained, logical folder hierarchy
  * No hardcoded paths, the entire tree can be moved
  * Flexible OAR backups + autobackups
  * Crash detection and restart
  * Dynamic port assignment (user definable range)
  * Easily set up a microgrid using robust
  * Allow/disallow certain viewers
  * Single robust microgrid
  * Split robust maxigrid
  * Groups and offline IM enabled
  * Purge group notices older than 14 days
  * Purge parcels in a region from search
  * 1 region per sim principle

## Preconfigured
Works out of the box:

  * To attach regions to OsGrid (https://www.osgrid.org)
  * To attach regions to a built-in maxigrid (with hypergrid)
  * To attach regions to a built-in microgrid (either with or without hypergrid)

For more info see the contents of the doc folder
