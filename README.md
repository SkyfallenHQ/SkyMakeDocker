# SkyMakeDocker
 Official Docker Version of SkyMake 4.

### How do I run this container?

```shell
# Go to SkyMake's Docker Version's Directory
cd SkyMakeDocker
# Make sure you can see the docker-compose file
# Compose the docker install
docker-compose up
```

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

