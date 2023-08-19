#!/bin/bash

# Database credentials
USER="wp_admin"
PASSWORD="Wp3#Secure$Pass123"
DATABASE="wordpress-db-instance"
HOST="wordpress-db-instance.cfshqvbbbgj3.eu-central-1.rds.amazonaws.com"
PORT=3306

# Backup directory
BACKUP_DIR="/path/to/backup/directory"

# Date format for backup file
DATE=$(date +%d-%m-%Y_%H-%M-%S)

# Create backup
mysqldump -h $HOST -P $PORT -u $USER -p$PASSWORD $DATABASE > $BACKUP_DIR/db_backup_$DATE.sql

echo "Backup completed!"

