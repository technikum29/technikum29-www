#!/bin/bash
#
# Run the technikum29-www website in a (boring minimal LAMP) docker container.
# Builds the container if not existing. Any passed options will go as commands
# to be called in the container, for instance
# $  ./start-docker.sh /bin/sh
# or so.
#
# Quickly written by SvenK at 2019-12-04 for making it easier to setup local
# development setups.
#

cd "$(dirname "$0")"
#if (( $EUID != 0 )); then
#   echo >&2 "Asking for Root permissions to run docker"
#   echo >&2 sudo $0 $@; exec sudo $0 $@
#fi

tag="svek/t29v8"

#(docker images | grep -q $tag) || { echo "Building image $tag..."; docker build -t $tag .; }

# NB: Mounting docker volumes doesnt work (at all) for me if the $PWD is softlinked.

# Should be root of technikum29-www
t29root="$PWD"

#mkdir -p $t29root/shared/cache && chmod 777 $t29root/shared/cache

exec docker run -it -v "$t29root":/app -p 8080:8080 $tag $@
