FROM yiisoftware/yii2-php:7.4-apache

# Alterando o usuário e grupo para www-data para o apache conseguir escrever nas pastas necessárias
RUN mkdir -p /app/assets /app/runtime \
    && chown -R www-data:www-data /app/assets /app/runtime \
    && chmod -R 755 /app/web/assets /app/runtime