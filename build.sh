#!/bin/bash
DOCKER_HOME="D:/Program Files/Docker Toolbox/"
cd "E:/eclipse/php/RiskManagement"
${DOCKER_HOME}docker kill riskmanagement
${DOCKER_HOME}docker rmi --force risk-management-nginx
${DOCKER_HOME}docker build -t risk-management-nginx .
${DOCKER_HOME}docker run --name riskmanagement -d -p 80:80 risk-management-nginx

#exec "$BASH" --login -i