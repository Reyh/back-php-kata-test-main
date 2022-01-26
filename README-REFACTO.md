#REFACTO - Réflexion

Le but est de refactoriser le code du templateManager en proposant la possibilité d'étendre le template de base.

- Création d'une interface de Template
- Ajout des templates de base
  - Learner
  - Instructor
  - Lesson
  - MeetingPoint
- Modification du templateManager pour prendre en compte les templates et les futures
- refacto la fonctionnalité template pour n'avoir qu'une responsabilité par classe
- ajouter le typage des retours
- ajouter getters/setters dans les entités
- vérifier que le template contient des élements transposables dans le texte
- récupération des templates par vérification de l'implémentation de l'interface
- lancer le test et le corriger si besoin
# Il manque T_T :
- LessonTemplate non terminé
- modification dans TemplateManager pour prendre en compte les modifications
- Vérification que le test fonctionne toujours