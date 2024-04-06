#!/bin/bash

cat /etc/fstab 
#server_ip:/mnt/ShareFolder /mnt/ClientFolder nfs defaults 0 0
mount -t nfs node2:/mnt/pvdata/wordpress/ /mnt/pvdata/wordpress/