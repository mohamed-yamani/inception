FROM debian:buster

RUN apt-get -y update && apt-get -y install redis-server
### redis plugin used to store the data ###
COPY tools/script.sh /
RUN chmod +x script.sh
CMD ./script.sh