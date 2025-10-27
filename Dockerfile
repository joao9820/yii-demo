FROM yiisoftware/yii2-php:7.4-apache

# Alterando o usuário e grupo para www-data para o apache conseguir escrever nas pastas necessárias
RUN mkdir -p /var/www/html/web/assets /var/www/html/runtime \
    && chown -R www-data:www-data /var/www/html/web/assets /var/www/html/runtime \
    && chmod -R 755 /var/www/html/web/assets /var/www/html/runtime