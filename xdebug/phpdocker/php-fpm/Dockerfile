FROM phpdockerio/php73-fpm:latest
WORKDIR "/application"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php-xdebug \
    && echo "zend_extension=/usr/lib/php/20180731/xdebug.so" > /etc/php/7.3/mods-available/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /etc/php/7.3/mods-available/xdebug.ini \
    && echo "xdebug.remote_handler=dbgp" >> /etc/php/7.3/mods-available/xdebug.ini \
    && echo "xdebug.remote_port=9000" >> /etc/php/7.3/mods-available/xdebug.ini \
    && echo "xdebug.remote_autostart=on" >> /etc/php/7.3/mods-available/xdebug.ini \
    && echo "xdebug.remote_connect_back=1" >> /etc/php/7.3/mods-available/xdebug.ini \
    && echo "xdebug.idekey=docker" >> /etc/php/7.3/mods-available/xdebug.ini \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*