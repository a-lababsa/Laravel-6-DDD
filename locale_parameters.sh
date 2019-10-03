sudo rm -rf storage
sudo rm -f public/storage
mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache storage/app/public storage/logs
chmod -R 777 storage/*
