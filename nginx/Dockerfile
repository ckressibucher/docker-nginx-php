FROM centos:7

MAINTAINER "Claudio Kressibucher" "ckressibucher@graphciworks.ch"

RUN yum -y update
RUN yum -y install epel-release && yum -y install nginx && yum clean all

COPY default.conf /etc/nginx/conf.d/default.conf

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
