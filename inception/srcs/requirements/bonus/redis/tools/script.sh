#!/bin/bash

FILE=/etc/redis/redis.conf
if [ -f "$FILE" ]; then
    sed -i "s/bind 127.0.0.1 ::1/# 127.0.0.1 ::1/g" $FILE &&/
    sed -i "s/daemonize yes/daemonize no/g" $FILE &&/
    sed -i "s/protected-mode yes/protected-mode no/g" $FILE &&/
    sed -i "s/# maxmemory <bytes>/maxmemory 128M/g" $FILE &&/
    sed -i "s/# maxmemory-policy noeviction/maxmemory-policy allkeys-lfu/g" $FILE
fi

/usr/bin/redis-server /etc/redis/redis.conf

### daemonize - Set to yes if you want Redis to run as a daemon. ###
### allkeys-lfu - Set to cache-only to use the LRU eviction algorithm that evicts the least recently used keys first. ###
### maxmemory <bytes> - Set the maximum memory size of the redis instance, ###
### maxmemory-policy noeviction - Set the maxmemory policy for the redis ###
# Default WordPress home page without Redis: => 804ms page load time
# Default WordPress home page with Redis: => 449ms page load time