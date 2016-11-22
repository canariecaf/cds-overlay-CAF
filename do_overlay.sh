#!/usr/bin/env bash
set -u 
set -e 
set -x

# Source the build variables of the container so we can be abstracted
. /root/env

WORKDIR="${CDS_BASE}/_work"

# it is implied that the do_overlay.sh is invoked inside at the root of overlay
MYPATH="${PWD}"
SRC_DSROOT="${MYPATH}/assets/dsroot"

##
## do the 'act of overlaying'
##
#move actual DS php executable to our legacy location
# mv ${CDS_HTMLROOTDIR}/${CDS_HTMLWAYFDIR}/${CDS_WAYFORIGINFILENAME} ${CDS_HTMLROOTDIR}/${CDS_HTMLWAYFDIR}/${CDS_WAYFDESTFILENAME}

# update the images directory

cp ${SRC_DSROOT}/images/logo.png ${CDS_HTMLROOTDIR}/${CDS_HTMLWAYFDIR}/images/

cp ${SRC_DSROOT}/css/default-styles.css ${CDS_HTMLROOTDIR}/${CDS_HTMLWAYFDIR}/css/

# overlay PHP files
cp ${SRC_DSROOT}/*.php ${CDS_HTMLROOTDIR}/${CDS_HTMLWAYFDIR}/ 



