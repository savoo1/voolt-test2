#!/bin/bash

# -------------------------------------------------------------------------
# Script Name:    switch.sh
# Description:    This script is responsible for switch the version for brochure
# -------------------------------------------------------------------------

set -e

#### Get the release ID generated in before-install.sh
RELEASE_ID=$(cat /var/release_id)

#### Define paths
APP_PATH="/var/app/"
RELEASE_PATH="${APP_PATH}releases/${RELEASE_ID}/*"
CURRENT_PATH="${APP_PATH}current"

#### Sync the new versions
ln -snf $RELEASE_PATH $CURRENT_PATH

#### Add permissions to www-data user
echo "Add permission to www-data user"
setfacl -R -m u:www-data:rwx $CURRENT_PATH
setfacl -R -m u:www-data:rwx /var/app/releases/

#### CleanUp /var/release folder
rm -rf /var/release/*

#### CleanUp old versions
/opt/cleanup_releases.sh

### Reload NGINX
sudo systemctl reload nginx

#### Feedback after Switch and Cleanup release directory
echo "Switch and cleanup completed."