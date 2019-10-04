install: build up composer-update node-install init

help:
	@echo 'Youhou'

up:
	@docker-compose up -d

stop:
	@docker-compose stop

restart:
	$(info Make: Restarting containers.)
	@make -s stop
	@make -s up

shell:
	@docker-compose exec php sh

.PHONY: composer-update
composer-update:
	@docker-compose exec php composer update --prefer-dist

.PHONY: composer-install
composer-install:
	@docker-compose exec php composer install --prefer-dist

.PHONY: node-install
node-install:
	@docker-compose run --rm node yarn install

asset:
	@docker-compose run node yarn run assets

node-up:
	@docker-compose up node

node:
	@docker-compose run --rm node sh

exec-node:
	@docker-compose exec node sh

build:
	$(info Make: Building images.)
	@docker-compose build

down:
	docker-compose down

init:
	@sh ./locale_parameters.sh

