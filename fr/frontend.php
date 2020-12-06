<?php

return [
    //On screen captions
    'ready' => 'PRÊT ?',
    'go' => 'PARTEZ !',
    'notFocused' => 'Inactif', //max 13 characters
    'clickToFocus' => 'Cliquez ici pour activer', //max 30 characters
    'specMode' => 'Mode spectateur',
    'specModeInfo' => 'Vous êtes maintenant en mode spectateur.',
    'endSpec' => 'Tapez /play pour rejoindre la partie.', //keep '/play'
    'typeHelp' => 'Tapez /help pour la liste des commandes.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Ne joue pas', //max 12
    'waitNext' => 'Attendez la fin de la manche.',
    'waitNext2' => 'Attendez le début de la manche suivante.',
    'pressStart' => 'Cliquez sur \'Nouvelle\' pour recommencer.', //'New game' should be same as in game.newGame
    'slowDown' => 'RALENTIS',
    'speedLimitIs' => 'la vitesse limite est',
    'connecting' => 'Etablissement de la connection...',
    'signingIn' => 'Connexion',
    'loginFail' => 'Problème d\'authentification',
    'loginFail2' => 'Non enregisté ! Vous jouez en tant qu\'invité {name}.',
    'mapLoading' => 'Chargement de la carte',

    //Chat
    'warning' => 'Attention',
    'inactive1' => 'Le mode spectateur va être activé. Écrivez dans le tchat pour annuler.',
    'inactive2' => 'Inactivité détectée, la prochaine partie inactive activera le mode spectateur.',
    'nickFill' => 'Tapez votre pseudonyme pour pouvoir discuter !',
    'setButton' => 'Choisir', //max 4
    'sendButton' => 'Envoyer', //max 4
    'rNameReq' => 'La partie doit avoir un nom!',
    'newsUser' => 'Actualités', //special username in chat
    'serverUser' => 'Serveur', //special username in chat
    'noNamed' => 'SansNom', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Spectateurs', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined' => 'a rejoint le salon', //in 'User1 joined the room.'
    'joined' => 'a rejoint', //in title: 'User1 joined!'
    'userCame' => 'est venu regarder',  //in 'User1 came to watch.'
    'isSpectating' => 'est désormais spectateur', //in 'User1 is now spectating.'
    'spectator' => 'Spectateur',
    'hasLeft' => 'est parti', //in 'Spectator User1 has left.'
    'signedAs' => 'Vous êtes connecté en tant que',
    'welcome' => 'Bienvenue,', //in 'Welcome User1!'
    'welcomeIn' => 'Bienvenue dans', //in 'Welcome in RoomName.'
    'noSpectators' => 'Il n\'y a actuellement aucun spectateur.',
    'replayAvailable' => 'Enregistrement disponible à l\'adresse',
    'oldVer' => 'Vous jouez avec une ancienne version, utilisez CTRL+F5 pour charger la nouvelle version !',
    'oldVer2' => 'Vous avez encore l\'ancienne version! utilisez {key} pour recharger le client',
    'privateRoom' => 'Voici votre salon privé, dans laquelle vous ne serez pas dérangé pendant que vous jouez. Cliquez sur \'Parties\' pour voir les salons publics.',
    'restartInfo' => 'Recommencez avec F4 ou définissez une touche personnalisée.',
    'joinLinkInfo' => 'Ce salon est privé. Le joueurs ne peuvent le rejoindre qu\'avec le lien suivant :',

    //Dynamic elements
    'received' => 'Reçu', //max 15
    'finesse' => 'Finesse',   //max 15

    //List of rooms
    'roomName' => 'Nom du salon',
    'games' => 'Parties', //number of games played in a room
    'players' => 'Joueurs', //number of players

    //Results
    'name' => 'Nom',
    'wins' => 'Victoires',
    'time' => 'Temps', //as game duration
    'sent' => 'Envoyé',
    'blocks' => 'Blocs', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'temps', //in Sprint time: xx.xx
    'see' => 'Voir', //in 'See 40L leaderboard'
    'leaderboard' => 'classement',

    //Less common strings, can stay untranslated
    'warning2' => 'ATTENTION',
    'connected' => 'Connecté',
    'client' => 'client',
    'notConnected' => 'DÉCONNECTÉ',
    'connLost' => 'Connexion perdue !',
    'lastGame' => 'Dernière partie :',
    'roomSettings' => 'Paramètres du salon',
    'attack' => 'Attaque',
    'combo' => 'Combo',
    'solid' => 'Solide',
    'clear' => 'Clear',
    'mode' => 'Mode',
    'garbage' => 'Handicap',
    'garbageDelay' => 'Délai handicap',
    'messiness' => 'Désordre',
    'replay' => 'Enregistrement',
    'rep' => 'Enr.', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Entrez une valeur numérique pour le DAR NullpoMino :',
    'suggestedIs' => 'DAR suggéré : ',
    'applyConfirm' => 'Appliquer ?',
    'invalidDAS' => 'La valeur de DAR est invalide et n\'a pas été modifiée.',
    'settingsChanged' => 'Les paramètres ont été modifiés au cours de la partie. L\'enregistrement n\'est pas valide.',
    'segment' => 'Segment',
    'duration' => 'Durée',
    'roomFull' => 'Il semblerait que le salon soit rempli.',
    'lobbyInfo' => 'Ce tchat est partagé avec {discord}.',
    'newHost' => 'Vous êtes maintenant l\'hôte de ce salon.',
    'badRoom' => 'Ce salon n\'existe plus, Connexion au salon par defaut',
    'stngsChanged' => 'Paramètre changé par l\'hôte',
    'stngsCustom' => 'Paramètres personnalisés',
    'aSpec' => 'Vous êtes déjà en mode spectateur',
    'aPlay' => 'Vous êtes déjà en train de jouer',
    'repFail' => 'Echec d\'enregistrement de la partie',
    'repInChat' => 'l\'Enregistrement est dans le tchat, pour le préserver, copiez le texte et collez le dans votre editeur de texte favoris.',
    'repTxtInfo' => 'Le fichier d\'enregistrement peut être visionné dans le lecteur ou possiblement retéléchargé sur le site.',

    'newPB' => 'NOUVEAU MEILLEUR SCORE',
    'firstPB' => 'Ceci était votre première partie, obtenez un nouveau meilleur score pour suivre votre progression',
    'infoPB' => 'Votre ancien record était {prevPB}, atteint {prevAgo}. L\'amélioration depuis est : {PBdiff}.',
    'daysAgo' => 'jours auparavant',

    'raceFin' => 'LA COURSE EST FINIE',
    'raceFinInfo' => 'Vous pouvez finir la partie, mais le prochain tour peut commencer à n\'importe quel moment.',

    'notTSD' => 'PAS TSD',
    'notTSDInfo' => 'Seul le T-Spin Double est autorisé',

    'notPC' => 'Pas un Perfect Clear',
    'notPCInfo' => 'Faites un Perfect Clear tous les 10 blocs. Votre plateau ne peut pas être vidé.',

    'fwDetect' => 'QUATRE DE LARGE',
    'fwDetectInfo' => 'Vous vous attaquez vous même!',

    'oops' => 'Oops!',
    'chatNA' => 'Le tchat public n\'est pas disponible pour les invités ou les utilisateurs ayant moins de {chReq} heures de temps de jeu',
    'leMore' => 'En savoir plus',
    'connLimit' => 'Le nombre maximum de connexions pour cette addresse IP a été atteint. Si vous avez besoin d\'augmenter cette limite, contactez-nous via Discord (en anglais)',
    'idleDC' => 'Déconnecté pour inactivité! Il n\'y avait plus de place pour le mode spectateur',
    'RLreach' => 'Limite de vitesse atteinte.',
    'ban1' => 'Votre accès aux modes multijoueur a été désactiver, vous pouvez encore jouer aux modes solo.',
    'ban2' => 'Ce compte utilisateur a été BANNI. Reconnectez-vous sur le site pour plus d\'informations.',
    'ncGS' => 'Hors-ligne, essayez de {refr}.',
    'refr' => 'rafraîchir la page',

    'nsUnpub' => 'Enregistrement non sauvegardé, la map n\'est pas publiée.',
    'nsTspins' => 'Enregistrement non sauvegardé, pas assez de T-Spins.',
    'nsLowPC' => 'Enregistrement non sauvegardé, au moins 2 Perfect Clear sont attendus',

    //Room info detail
    'noPlayers' => 'Pas de joueurs',
    'cntMore' => '{cnt} de plus',
    'cntGuests' => '{cnt} invités',
    'cntSpec' => '{cnt} spectateur',
    'joinPossible' => 'Entrée possible',
    'notEligible' => 'Pas admissible',
    'gTimeShort' => 'G.time',
    'on' => 'On',
    'off' => 'Off',

    'noBlocks' => 'Plus de blocs',
    'noBlocks2' => 'Tous les blocs ont été utilisés',

    //friends
    'fr' => 'Amis',
    'frLoad' => 'Chargement de la liste d\'amis',
    'frLogin' => 'Connectez-vous pour utiliser la liste d\'amis',
    'frEmpty' => 'La liste d\'amis est vide',
    'frHowAdd' => 'Visitez le profil de l\'utilisateur pour envoyer une demande d\'ami.',
    'frPriv' => 'Privé',
    'frIn' => 'Déjà dans le salon!',
    'frChat' => 'Ouvrir le tchat',
    'frRel' => 'Recharger',
    'frMsgTo' => 'Message à {name}',
    'frInv' => 'Inviter dans le salon',
    'frInvTo' => 'Inviter à rejoindre {room}',
    'frInvIn' => 'Vous êtes déjà dans le salon!',
    'frInvBy' => 'de {user}',
    'frOn' => 'EN LIGNE',
    'frOff' => 'HORS LIGNE',
    'frNewChatH' => 'Début de l\'historique de discussion avec {name}.',
    'frWelc' => 'Bienvenue dans l\'onglet "Amis"',
    'frIntro' => 'Dans cet espace, vous pouvez accéder à votre liste d\'amis, vos tchats privés et invitations',
    'frIntro2' => 'Pour envoyer une demande d\'ami, rendez-vous sur le profil d\'un utilisateur',
    'frIntro3' => 'Pour gérer votre liste d\'amis, visitez la {frPage}',
    'frPage' => 'Page "Amis"',
    'frIntroCl' => 'Fermer l\'introduction',
];
