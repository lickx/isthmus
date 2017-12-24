# isthmus
Easy and modular OpenSimulator management and deployment for Linux. I made this system for my own 25 regions in OsGrid. Designed for OpenSim 0.9 and higher.

It's probably not good for commercial-grade grids but makes life a lot easier for hobbyists running multiple sims in an open grid.

## Features
  * Easily upgrade all sims at once
  * Shared config
  * Logical folder hierarchy
  * Issue mass commands (simauto) or per-sim (simctl)
  * Flexible OAR backups
  * Crash detection (and restart if needed)
  
  
## Preconfigured
Works out of the box for:

  * OsGrid (https://www.osgrid.org)
  * Metropolis (https://www.hypergrid.org)
  * Grids using phpgridserver (https://github.com/ft-/phpGridServer)

Other grids can add themselves, set your grid specific files up in  
share/grids/YourGrid (see other grids), then do a pull request.

Users can refer to the user documentation in the doc folder
