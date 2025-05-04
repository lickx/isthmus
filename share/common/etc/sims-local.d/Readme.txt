In this folder you can make individual override settings for sims.

Name the file 'Simname.ini' and put only in what you want to override.

For example if you would like BulletSim physics for that one specific sim:

[Startup]
meshing = Meshmerizer
physics = BulletSim

[BulletSim]
UseSeparatePhysicsThread = true

