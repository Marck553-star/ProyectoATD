FROM php:8.2-apache
COPY pagina-web/ /var/www/html/
EXPOSE 8080
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/var/www/html"]
