#!/bin/bash

if [ "$1" = "up" ]
then
  rm -rf _working/content-backups/remote;
  rsync -azh -P great@good-idea.studio:/var/www/josephthomascontemporary.com/content _working/content-backups/remote/;
  rsync -azhr --delete -P --chmod=D775,F664 --chown=great:www-data content great@good-idea.studio:/var/www/josephthomascontemporary.com/;
elif [ "$1" = "down" ]
then
  rm -rf _working/content-backups/local;
  rsync -r content/ _working/content-backups/local/;
  rsync -azh --delete -P great@good-idea.studio:/var/www/josephthomascontemporary.com/content/* content;
else
  echo "Specify 'down' or 'up'";
fi
