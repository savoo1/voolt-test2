#!/bin/bash

# -------------------------------------------------------------------------
# Script Name:    before-install.sh
# Description:    This script is responsible for prepare the folder for new
#                 version of application.
# -------------------------------------------------------------------------

set -e


#### Generate a unique identifier for the new release
RELEASE_ID=$(date +%Y%m%d%H%M%S)

#### Define paths
APP_PATH="/var/app/"
RELEASE_PATH="${APP_PATH}releases/${RELEASE_ID}"

# Ensure the release directory exists
mkdir -p $RELEASE_PATH

# Export the RELEASE_ID to make it available in other scripts
echo $RELEASE_ID > /var/release_id