ARG ILIAS_VERSION

FROM srsolutions/ilias:${ILIAS_VERSION}

ARG TARGET_DIR
ARG ILIAS_DEVMODE
ARG ILIAS_INSTALL_ARGUMENTS

ENV ILIAS_DEVMODE=${ILIAS_DEVMODE}
ENV ILIAS_INSTALL_ARGUMENTS=${ILIAS_INSTALL_ARGUMENTS}

COPY . ${TARGET_DIR}
RUN chown www-data:www-data ${TARGET_DIR}

RUN composer dump-autoload

CMD ["apache2-foreground", "-c", "StartServers 2", "-c", "MinSpareServers 2", "-c", "MaxSpareServers 2"]
