## Introduction
 - Setup multile domain without port using nginx proxy 
## Environment
 - Docker, docker-compose
 - WordPress

## Install
### WordPress
 - Copy file `.env.example` to `.env`. Next, change value.
```shell
cp .env.example .env
```
 - Run docker-compose build image
```shell
docker-compose build
docker-compose up -d
```
 - Add config to `/etc/hosts`
```shell
nano /etc/hosts
```
> 127.0.0.1 wordpress.test
 - Open brower with host [wordpress.test]()

### Proxy
 - Build image proxy, add config in folder `conf.d`
```shell
docker-compose build
docker-compose up -d
```
- Add network `wordpress_default`
```shell
nano proxy/docker-compose.yml
```