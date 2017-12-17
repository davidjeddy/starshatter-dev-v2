# StarShatter Dev Web Application

## Background
The second iteration of a file repository site for the game `StarShatter`. This site is circa 2004 and was the final 
web project before I entered College (University). Featured an improved UI, more secure members only area, a wider 
option of source material categorization, and finally ported all the media from v1 to v2.

## Features
 - Themed phpBB forum sub-system, backed by a MySQL data store solution
 - Original Tutorials content
 - Members only area to administrate account and submit user content
 - Link library to other community portals
 - Official SDK mirror
 - Public release beta installers for StarShatter and the Magic 3D modelling application
 - User generated content lists with downloads

## Goal
N/A, this repository is for posterity and historical reference only.

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
