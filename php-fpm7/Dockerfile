FROM centos:7

MAINTAINER "Claudio Kressibucher" "ckressibucher@graphicworks.ch"

RUN yum -y update

RUN yum -y install wget automake libtool libc-dev gcc \
  libxml2-devel libicu-devel gcc-c++ \
  community-mysql-devel libcurl-devel openssl-devel \
  gd-devel libedit-devel bzip2-devel re2c make \
  bison epel-release \
  && yum -y install libmcrypt-devel libxslt-devel \
  && yum clean all

# download sources and check hash
RUN cd /opt \
    && wget -q http://be2.php.net/distributions/php-7.0.3.tar.gz \
    && md5sum php-7.0.3.tar.gz | grep 235b1217a9ec7bee6e0bd517e3636d45 \
    && tar xzf php-7.0.3.tar.gz

COPY configure /tmp/configure
RUN cd /opt/php-7.0.3/ && /tmp/configure && make && make install
RUN rm -r /opt/php-7.0.3 && rm /opt/php-7.0.3.tar.gz && rm /tmp/configure

# install xdebug
RUN pecl install xdebug-2.4.0RC4

COPY php.ini /usr/local/lib/php.ini
COPY php-fpm.conf /usr/local/etc/php-fpm.conf

# create a user to run php
RUN useradd --no-create-home --uid 1000 phprunner

EXPOSE 9090
CMD ["/usr/local/sbin/php-fpm", "-F"]
