# SkyMakeDocker
 Official Docker Version of SkyMake 4.

### Mmm, What do I use this for?

```
You can use this in case if you want an isolated installation but you don't have extra computing resources for a a vm.
You may also prefer this if you are having dependency problems and for development.
```

### How do I use it?

```
You can use it by running this container.
We recommend using a reverse proxy in this case (eg. nginx)

Ports:
SkyMake Web App - 4000
MYSQL Server - 4500 (inside requests are still on port 3306)
Database Admin - 4600
```



### How do I run this container?

```shell
# Go to SkyMake's Docker Version's Directory
cd SkyMakeDocker
# Make sure you can see the docker-compose file
# Compose the docker install
docker-compose up
# Don't forget to CHANGE the MYSQL Password inside docker-compose and ./webapp/src/SkyMakeDatabaseConnector/SkyMakeDBconfig.php
```

### Known Bugs/Unstable Parts/Things that will be fixed in the future

- SkyMake Web Updater is not very stable.
- This is not an optimal size for the container. 
- Live Class Server will be added.
- Package is not published to Docker Hub, it is composed manually.
- src folder is not contained inside the image. (This is good for development purposes but makes it hard to move the container to another directory)

### How do I update?

```shell
# Backup Your Database
# Go to SkyMake's Docker Version's Directory
cd SkyMakeDocker
# Make sure you can see the docker-compose file
# Decompose the docker install
docker-compose down
# Pull the new updates for the docker system (SkyMake itself will update itself automatically)
git pull
# Compose the install again
docker-compose up
```

