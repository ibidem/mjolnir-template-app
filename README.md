See [INSTALL.md](INSTALL.md) for installation instructions.

-

This branch is a working demo application. 

You should use `mj/2.x/blank` as a startup structure; since it's easy to update.

	git clone -b mj/2.x/blank git://github.com/srcspider/whitedragon.git YOURPROJECT
	cd YOURPROJECT/
	git checkout -b master
	git remote rename origin mjolnir
	git remote add origin YOURREPO
	git push origin master
