#!/bin/bash
DOCKER_HOME="D:/Program Files/Docker Toolbox/"
DOCKER=${DOCKER_HOME}docker
cd "E:/eclipse/php/RiskManagement"
"$DOCKER" kill riskmanagement
"$DOCKER" rm riskmanagement
"$DOCKER" run --name riskmanagement -d -p 80:80 nginx
"$DOCKER" cp pages riskmanagement:/usr/share/nginx/html
"$DOCKER" cp nginx.conf riskmanagement:/etc/nginx
"$DOCKER" exec riskmanagement nginx -s reload

#exec "$BASH" --login -i