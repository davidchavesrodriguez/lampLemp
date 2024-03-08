##### backup.sh
#!/bin/bash
docker compose exec bd bash -c "mysqldump -u root -p database" > bd/backup.sql