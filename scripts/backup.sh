#!/bin/bash

# Ensure the script stops on first error
set -e

# Database credentials
USER="wp_admin"
PASSWORD="Wp3#Secure$Pass123"
DATABASE="wordpress-db-instance"
HOST="wordpress-db-instance.cfshqvbbbgj3.eu-central-1.rds.amazonaws.com"
PORT=3306

# Backup directory
BACKUP_DIR="/var/backups"

# Check if the backup directory exists, if not create it
if [ ! -d "$BACKUP_DIR" ]; then
  mkdir -p "$BACKUP_DIR"
fi

# Date format for backup file
DATE=$(date +%d-%m-%Y_%H-%M-%S)

# Create backup
if mysqldump -h $HOST -P $PORT -u $USER -p$PASSWORD $DATABASE > $BACKUP_DIR/db_backup_$DATE.sql; then
    echo "Backup completed!"
else
    echo "Backup failed!" >&2
    exit 1
fi

# Compress the backup for storage efficiency
gzip $BACKUP_DIR/db_backup_$DATE.sql
