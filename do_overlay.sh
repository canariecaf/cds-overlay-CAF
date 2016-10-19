#!/usr/bin/env bash
set -u 
set -e 
set -x

# Source the build variables of the container so we can be abstracted
. /var/www/env

WORKDIR="/var/www/_work"

# it is implied that the do_overlay.sh is invoked inside at the root of overlay
MYPATH="${PWD}"
SRC_DSROOT="${MYPATH}/assets/dsroot"

##
## do the 'act of overlaying'
##

# update the images directory

cp ${SRC_DSROOT}/images/logo.png ${CDS_HTMLWAYFDIR}/images/

# overlay PHP files
cp ${SRC_DSROOT}/*.php ${CDS_HTMLWAYFDIR}/ 



