cd "D:\Program Files\Docker Toolbox"
"D:\Program Files\Docker Toolbox\start.sh"
cd "E:\eclipse\php\RiskManagement"
docker kill -f riskmanagement
docker rmi --force risk-management-nginx
docker build -t --force-rm risk-management-nginx
docker run --name riskmanagement -d -p 80:80 risk-management-nginx