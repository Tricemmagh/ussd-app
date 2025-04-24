# Use the official PHP image from Docker Hub
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container
COPY . .

# Expose the default Apache port
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
