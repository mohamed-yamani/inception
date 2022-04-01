FROM debian:buster 
# FROM alpine:latest
# RUN apk update
RUN apt-get -y update && apt-get install -y vsftpd
# RUN apk add vsftpd
# RUN apk add openrc

COPY ./conf/vsftpd.conf /etc/vsftpd/
COPY ./tools/script.sh /
EXPOSE 21
ENTRYPOINT ["/bin/sh", "/script.sh"]

