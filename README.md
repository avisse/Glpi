Déploiement de GLPI avec Docker sur Debian 12
Objectifs du projet

Ce projet consiste à déployer l’outil de gestion de parc informatique et de helpdesk GLPI dans une machine virtuelle Debian 12, en utilisant Docker et Docker Compose.
L’objectif est de fournir une solution portable, facilement réplicable, et enrichie du plugin FusionInventory pour l’inventaire automatique.

Pré-requis

VirtualBox avec une VM Debian 12

Docker et Docker Compose installés :

sudo apt update && sudo apt install docker.io docker-compose -y

Arborescence du projet
projet-ecf/
└── glpi/
    ├── docker-compose.yml
    ├── .env
    └── storage/
        ├── glpi/
        └── mysql/

Fichier .env

Contient les variables d’environnement de la base de données :

GLPI_DB_HOST=db
GLPI_DB_PORT=3306
GLPI_DB_NAME=glpi
GLPI_DB_USER=glpi
GLPI_DB_PASSWORD=glpi

Fichier docker-compose.yml

Définit les services GLPI et MySQL :

version: "3.8"

services:
  glpi:
    image: glpi/glpi:latest
    restart: unless-stopped
    volumes:
      - ./storage/glpi:/var/glpi:rw
    env_file: .env
    depends_on:
      - db
    ports:
      - "8083:80"

  db:
    image: mysql:5.7
    restart: unless-stopped
    volumes:
      - ./storage/mysql:/var/lib/mysql
    environment:
      MYSQL_DATABASE: ${GLPI_DB_NAME}
      MYSQL_USER: ${GLPI_DB_USER}
      MYSQL_PASSWORD: ${GLPI_DB_PASSWORD}
      MYSQL_ROOT_PASSWORD: root
    expose:
      - "3306"
    healthcheck:
      test: ["CMD", "mysqladmin", "ping", "-h", "127.0.0.1", "-u", "${GLPI_DB_USER}", "--password=${GLPI_DB_PASSWORD}"]
      interval: 5s
      timeout: 5s
      retries: 10

Lancement du projet

Démarrer les conteneurs :

docker-compose up -d


Vérifier l’état :

docker ps


Accéder à GLPI depuis un navigateur :
http://localhost:8083

Configuration initiale

Connexion avec l’utilisateur par défaut : glpi / glpi

Création des entités, groupes, utilisateurs et profils

Tests de création de tickets et gestion de matériels

Plugin FusionInventory

FusionInventory est un plugin qui permet d’automatiser :

L’inventaire matériel et logiciel des postes

La découverte réseau

La remontée automatique d’informations dans GLPI

Installation

Télécharger le plugin depuis fusioninventory.org

Décompresser dans le dossier plugins/ de GLPI

Activer via l’interface GLPI (Configuration > Plugins)

Installer des agents FusionInventory sur les postes clients

Tests réalisés

Création et suivi de tickets

Gestion d’utilisateurs et d’entités

Vérification de la persistance après redémarrage des conteneurs

Remontée d’informations via FusionInventory

Supervision et sécurité

Suivi des conteneurs avec docker logs et docker ps

Vérification des ports réseau ouverts

Préparation à une intégration future avec un pare-feu (projet complémentaire)

Conclusion

Le déploiement de GLPI via Docker sur Debian 12 permet d’obtenir une solution robuste et modulaire de gestion de parc informatique et de support utilisateur.
L’ajout du plugin FusionInventory automatise l’inventaire et facilite l’administration d’une infrastructure complète.
