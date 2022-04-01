FROM debian:buster
RUN apt-get -y update && apt-get install -y curl wget unzip ftp php php-cli php-fpm php-common php-json php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath php-redis

COPY ./tools/index.html /
COPY ./tools/index.css /
COPY ./tools/script.sh /
COPY ./tools/assets /
EXPOSE 1337
ENTRYPOINT ["/bin/sh", "/script.sh"]
