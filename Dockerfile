FROM ubuntu:14.04

RUN apt-get update && apt-get install -y apache2 libapache2-mod-php5 zip

COPY www/ /var/www/html/

COPY round2 /tmp/round2/
RUN zip -r /var/www/html/hardstuff.zip /tmp/round2

EXPOSE 80

ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
