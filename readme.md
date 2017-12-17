# StarShatter Dev Web Application

## Background

## Features

## Goal

## Requirements
 - Docker
 - Command prompt of some sort
 
## Road map
None; this project repository is for historic reference only.

## Usage
Clone the repository locally:
```
cd /project/root/parent
git clone https://github.com/davidjeddy/starshatter-dev-v2.git
cd ./starshatter-dev-v2
```

Then build and start the image via:

```
docker build -t ssd_v2 . --rm
docker run -d -h localhost -p 80:80 --name ssd_v2_app -v "$PWD":/var/www/html ssd_v2:latest --rm
docker logs -f ssd_v2_app
```

Finally, if all went well, you should be able to visit `localhost` in your client browser of choice and see the 
application running.


## Warning
This was a hobby project on long ago end of life of a language version.
Though recently wrapped in a docker container for portability and hosted in a GiT repo; neither of which existed when
the site was made, this site IS NOT:
 - Secure
 - Pragmatic
 - Best practice adhering
 - An example of any sort of decent practices; if anything this is what you should NOT be doing
