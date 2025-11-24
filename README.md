# StockTonMatos
Projet symfony d'une API de gestion des stocks

## Problématique: 

Une mauvaise gestion des stocks de matériels de pêche. Achat en doublon d'un même matériel, perte de temps lors de la préparation des sessions.

## Fonctionnalités: 

  - Ajout d'un matériel en stock (Nom*, description, photo, quantité) 
  - Ajout d'une zone de stockage (à défaut stockage globale)
  - Visualisation des stocks en vue catégories, emplacements, techniques
  - Lecture d'un QR code pour visualiser les objets stockés dans une zone de stockage
  - Authentification de l'utilisateur
  - Barre de recherche

## Entités:
  - Materiel (entité abstraite)
    - Cannes
    - Moulins
    - Leurres
    - Fil
    - Hameçons
    - Attaches
      - Agraphes
      - Emerillons
