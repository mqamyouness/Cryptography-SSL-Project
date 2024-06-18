# Cryptography-SSL-Project
### Résumé de l'Exemple SSL PHP
## Prérequis
    PHP installé (version 7.x recommandée)
    Extension OpenSSL activée (openssl)
    Compréhension des concepts de base de PHP et SSL/TLS
## Étapes
# Génération des Certificats SSL:
    Utilisez OpenSSL pour générer des certificats auto-signés (cert.pem et key.pem).
    - openssl req -new -x509 -days 365 -nodes -out cert.pem -keyout key.pem

# Exécution du Serveur (ssl_server.php):

    Ouvrez un terminal, allez dans le répertoire et lancez le serveur avec php ssl_server.php.
    Le serveur écoute sur le port 8443 pour les connexions SSL.
# Exécution du Client (ssl_client.php):

    Dans un autre terminal, lancez le client avec php ssl_client.php.
    Le client se connecte au serveur, envoie un message et affiche la réponse reçue.
    Remarques
# Certificats SSL :

    Utilisez les fichiers cert.pem et key.pem pour la configuration SSL.
    Ces certificats sont auto-signés et destinés à des tests. Pour la production, utilisez des certificats valides d'une Autorité de Certification (CA).
# Sécurité :

    Pour une sécurité optimale, configurez correctement la vérification SSL et gérez les certificats de manière appropriée.
# Compatibilité :

    Assurez-vous que l'extension openssl de PHP est activée et configurée correctement.