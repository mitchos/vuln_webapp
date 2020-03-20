FROM centos:latest

RUN yum install -y epel-release nginx sendmail

CMD ["nginx", "-g", "daemon off;"]
