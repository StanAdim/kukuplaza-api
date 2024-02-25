setup:
	@make build
	@make up 
	@make composer-update
build:
	docker compose build 
stop:
	docker compose stop
up:
	docker compose up -d

composer-update:
	docker exec api-kukuplaza bash -c "composer update"
	docker exec api-kukuplaza bash -c "cp .env.example .env"
	docker exec api-kukuplaza bash -c "php artisan key:generate"
	
optimize:
	docker exec api-kukuplaza bash -c "php artisan optimize:fresh"
data:
	docker exec api-kukuplaza bash -c "php artisan migrate:fresh --seed"

bash:
	docker exec -it api-kukuplaza bash

fresh:
	docker compose restart
rmi:
	docker image rm -f api-kukuplaza-api-kukuplaza
logs: 
	docker logs -f api-kukuplaza

# backup_db: 
	# docker exec mysql_db bash -c "./home/backups/backup_script.sh"
