##### restore.sh
#!/bin/bash
docker compose exec bd bash -c "mysql -u root -p database < bd/backup.sql"