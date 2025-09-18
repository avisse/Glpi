#!/bin/bash

GLPI_API="http://10.0.2.15:8083/api"
APP_TOKEN="FOOo2hUXRbyezUFbwwP13ZxkBYE5w0gG2foN7Ima"
USER="glpi"
PASS="glpi"

# 1. Ouvre une session pour récupérer un user_token
SESSION=$(curl -s -X POST \
  -H 'Content-Type: application/json' \
  -H "App-Token: $APP_TOKEN" \
  -d "{\"login\":\"$USER\",\"password\":\"$PASS\"}" \
  $GLPI_API/initSession)

USER_TOKEN=$(echo $SESSION | jq -r '.session_token')

# 2. Récupère le nombre de tickets ouverts (status=1)
TICKETS=$(curl -s -X GET \
  -H 'Content-Type: application/json' \
  -H "App-Token: $APP_TOKEN" \
  -H "Session-Token: $USER_TOKEN" \
  "$GLPI_API/Ticket/?criteria[0][field]=status&criteria[0][searchtype]=equals&criteria[0][value]=1")

# Affiche les tickets ouverts (status=1)
echo "$TICKETS" | jq '.[] | length'

