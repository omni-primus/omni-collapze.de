
#ddev-generated - Do not modify this file; your modifications will be overwritten.

### DDEV-injected base Dockerfile contents
ARG BASE_IMAGE
FROM $BASE_IMAGE

ARG username
ARG uid
ARG gid
ARG DDEV_PHP_VERSION
RUN (groupadd --gid $gid "$username" || groupadd "$username" || true) && (useradd  -l -m -s "/bin/bash" --gid "$username" --comment '' --uid $uid "$username" || useradd  -l -m -s "/bin/bash" --gid "$username" --comment '' "$username" || useradd  -l -m -s "/bin/bash" --gid "$gid" --comment '' "$username" || useradd -l -m -s "/bin/bash" --comment '' $username )

### DDEV-injected composer update
RUN export XDEBUG_MODE=off; composer self-update --stable || composer self-update --stable || true; composer self-update --2 || composer self-update --2 || true

### DDEV-injected extra content

RUN mkdir -p /home/$username && chown $username /home/$username && chmod 600 /home/$username/.pgpass
ENV NVM_DIR=/home/$username/.nvm


### From user Dockerfile C:\Users\Primus\Documents\OMNISite\omni-collapze.de\.ddev\web-build\Dockerfile.example:

# You can copy this Dockerfile.example to Dockerfile to add configuration
# or packages or anything else to your webimage

RUN npm install --global forever
