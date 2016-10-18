#!/usr/bin/env bash
set -u 
set -e 
set -x

# Source the build variables of the container so we can be abstracted
. /var/www/env

WORKDIR="/var/www/_work"
MYPATH="${PWD}"
SRC_DSROOT="${MYPATH}/assets/dsroot"

##
## do the 'act of overlaying'
##

# update the images directory
cp ./images/logo.png ${CDS_HTMLWAYFDIR}/images/

# overlay PHP files
cd ${SRC_DSROOT}
cp *.php ${CDS_HTMLWAYFDIR}/ 



