#!/bin/bash

# -------------------------------------------------------------------------
# Script Name:    after-install.sh
# Description:    This script is responsible for move the new version to 
#                 the new path.
# -------------------------------------------------------------------------

set -e

#### Get the release ID generated in before-install.sh
RELEASE_ID=$(cat /var/release_id)

#### Define paths
APP_PATH="/var/app/"
RELEASE_PATH="${APP_PATH}releases/${RELEASE_ID}"

#### Sync the new try version to the release directory
mv /var/release/*  $RELEASE_PATH/

#### Feedback on Completion
echo "Synchronization completed successfully."