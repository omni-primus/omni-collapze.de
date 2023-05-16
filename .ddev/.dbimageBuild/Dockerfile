
#ddev-generated - Do not modify this file; your modifications will be overwritten.

### DDEV-injected base Dockerfile contents
ARG BASE_IMAGE
FROM $BASE_IMAGE

ARG username
ARG uid
ARG gid
ARG DDEV_PHP_VERSION
RUN (groupadd --gid $gid "$username" || groupadd "$username" || true) && (useradd  -l -m -s "/bin/bash" --gid "$username" --comment '' --uid $uid "$username" || useradd  -l -m -s "/bin/bash" --gid "$username" --comment '' "$username" || useradd  -l -m -s "/bin/bash" --gid "$gid" --comment '' "$username" || useradd -l -m -s "/bin/bash" --comment '' $username )


### From user Dockerfile C:\Users\Primus\Documents\OMNISite\omni-collapze.de\.ddev\db-build\Dockerfile.example:

# You can copy this Dockerfile.example to Dockerfile to add configuration
# or packages or anything else to your dbimage
RUN echo "Built from drud/ddev-dbserver-mariadb-10.3:v1.19.0" >/var/tmp/built-from.txt
