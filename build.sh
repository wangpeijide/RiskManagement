#!/bin/bash
cd "E:\eclipse\php\RiskManagement"
docker kill riskmanagement
docker rmi --force risk-management-nginx
docker build -t risk-management-nginx .
docker run --name riskmanagement -d -p 80:80 risk-management-nginx

exec "$BASH" --login -i