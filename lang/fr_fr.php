<?php
/**
Copyright 2011-2012 Nick Korbel, Boris Vatin

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once('Language.php');
require_once('en_us.php');

class fr_fr extends en_us
{
    public function __construct()
    {
        parent::__construct();
    }

	protected function _LoadDates()
	{
		$dates = parent::_LoadDates();

		$dates['general_date'] = 'd/m/Y';
		$dates['general_datetime'] = 'd/m/Y H:i:s';
		$dates['schedule_daily'] = 'l, d/m/Y';
		$dates['reservation_email'] = 'd/m/Y @ g:i A (e)';
		$dates['res_popup'] = 'd/m/Y g:i A';
		$dates['dashboard'] = 'l, d/m/Y g:i A';
		$dates['period_time'] = "g:i A";
		$dates['general_date_js'] = "dd/mm/yy";

		$this->Dates = $dates;
	}

    protected function _LoadStrings()
    {
        $strings = parent::_LoadStrings();

		$strings['FirstName'] = "Prénom";
		$strings['LastName'] = "Nom De Famille";
		$strings['Timezone'] = "Fuseau horaire";
		$strings['Edit'] = "Éditer";
		$strings['Change'] = "Changement";
		$strings['Rename'] = "Rebaptiser";
		$strings['Remove'] = "Supprimer";
		$strings['Delete'] = "Effacer";
		$strings['Update'] = "Mettre à jour";
		$strings['Cancel'] = "Annuler";
		$strings['Add'] = "Ajouter";
		$strings['Name'] = "Nom";
		$strings['Yes'] = "Oui";
		$strings['No'] = "Aucun";
		$strings['FirstNameRequired'] = "Le prénom est requis.";
		$strings['LastNameRequired'] = "Le nom est requis.";
		$strings['PhoneRequired'] = "Numéro de téléphone est nécessaire.";
		$strings['PwMustMatch'] = "Confirmation mot de passe doit correspondre à un mot de passe.";
		$strings['PwComplexity'] = "Mot de passe doit être d'au moins six caractères avec une combinaison de lettres, chiffres et symboles.";
		$strings['ValidEmailRequired'] = "Une adresse de courriel valide est requise.";
		$strings['UniqueEmailRequired'] = "Cette adresse email est déjà enregistré.";
		$strings['UniqueUsernameRequired'] = "Ce nom d'utilisateur est déjà enregistré.";
		$strings['UserTypeNotAllowed'] = "L'utilisateur avec cet e-mail est déjà enregistré et est un type d'utilisateur différent, ce ne est pas autorisé.";
		$strings['UserNameRequired'] = "Nom d'utilisateur est nécessaire.";
		$strings['CaptchaMustMatch'] = "Se il vous plaît entrer les lettres de l'image de sécurité exactement comme indiqué.";
		$strings['StreetRequired'] = "Rue de la pratique médicale est nécessaire.";
		$strings['CityRequired'] = "Ville de l'adresse de la pratique médicale est nécessaire.";
		$strings['ZipRequired'] = "Code postal de la pratique médicale est nécessaire.";
		$strings['UsePermissionRequired'] = "Le personnel et les agents nécessitent des autorisations.";
		$strings['Today'] = "Aujourd'hui";
		$strings['Week'] = "Semaine";
		$strings['Month'] = "Mois";
		$strings['BackToCalendar'] = "Retour au calendrier";
		$strings['BeginDate'] = "Commencer";
		$strings['EndDate'] = "Fin";
		$strings['Username'] = "Nom d'utilisateur";
		$strings['Password'] = "Mot de passe";
		$strings['Organization'] = "Organisation";
		$strings['PasswordConfirmation'] = "Confirmez Le Mot De Passe";
		$strings['DefaultPage'] = "Page d'accueil par défaut";
		$strings['MyCalendar'] = "Mon calendrier";
		$strings['ScheduleCalendar'] = "Calendrier Calendrier";
		$strings['Registration'] = "Inscription";
		$strings['NoAnnouncements'] = "Il n'y a aucune annonce";
		$strings['Announcements'] = "Annonces";
		$strings['NoUpcomingReservations'] = "Vous ne avez pas à venir réservations";
		$strings['UpcomingReservations'] = "Mes rendez-vous";
		$strings['UpcomingBlackouts'] = "Vacances & Blackouts venir";
		$strings['NoUpcomingBlackouts'] = "Pas de pannes à venir";
		$strings['ShowHide'] = "Afficher / Masquer";
		$strings['Error'] = "Erreur";
		$strings['ReturnToPreviousPage'] = "Retour à la dernière page que vous étiez sur";
		$strings['UnknownError'] = "Erreur inconnue";
		$strings['InsufficientPermissionsError'] = "Vous ne avez pas la permission d'accéder à cette ressource";
		$strings['MissingReservationResourceError'] = "Une ressource n'a pas été sélectionné";
		$strings['MissingReservationScheduleError'] = "Un calendrier n'a pas été sélectionné";
		$strings['DoesNotRepeat'] = "Ne répète pas";
		$strings['Daily'] = "Tous les jours";
		$strings['Weekly'] = "Hebdomadaire";
		$strings['Monthly'] = "Mensuel";
		$strings['Yearly'] = "Annuel";
		$strings['RepeatPrompt'] = "Répétition";
		$strings['hours'] = "heures";
		$strings['days'] = "journées";
		$strings['weeks'] = "semaines";
		$strings['months'] = "mois";
		$strings['years'] = "ans";
		$strings['day'] = "jour";
		$strings['week'] = "semaine";
		$strings['month'] = "mois";
		$strings['year'] = "année";
		$strings['repeatDayOfMonth'] = "jour du mois";
		$strings['repeatDayOfWeek'] = "jour de la semaine";
		$strings['RepeatUntilPrompt'] = "Jusqu'à";
		$strings['RepeatEveryPrompt'] = "Chaque";
		$strings['RepeatDaysPrompt'] = "Sur";
		$strings['CreateReservationHeading'] = "Créer un nouveau rendez-vous";
		$strings['EditReservationHeading'] = "Montage Nomination #% s";
		$strings['ViewReservationHeading'] = "Regarde un rendez% s";
		$strings['ReservationErrors'] = "Changer Nomination";
		$strings['Create'] = "Créer";
		$strings['ThisInstance'] = "Seulement Cette instance";
		$strings['AllInstances'] = "Toutes les instances";
		$strings['FutureInstances'] = "Futures instances";
		$strings['Print'] = "Imprimer";
		$strings['ShowHideNavigation'] = "Afficher / Masquer la navigation";
		$strings['ReferenceNumber'] = "Numéro de référence";
		$strings['Tomorrow'] = "Demain";
		$strings['LaterThisWeek'] = "Plus tard cette semaine";
		$strings['NextWeek'] = "Prochaine Semaine";
		$strings['SignOut'] = "Se Déconnecter";
		$strings['LayoutDescription'] = "Démarre le% s, montrant% s jours à la fois";
		$strings['AllResources'] = "Tous les fournisseurs";
		$strings['TakeOffline'] = "Déconnecter";
		$strings['BringOnline'] = "Mettre en ligne";
		$strings['AddImage'] = "Ajouter une image";
		$strings['NoImage'] = "Pas d'image Assigné";
		$strings['Move'] = "Mouvement";
		$strings['AppearsOn'] = "Apparaît Sur% s";
		$strings['Location'] = "Emplacement";
		$strings['NoLocationLabel'] = "(Emplacement par défaut)";
		$strings['Contact'] = "Contact";
		$strings['NoContactLabel'] = "(Info de contact par défaut)";
		$strings['Description'] = "Description";
		$strings['NoDescriptionLabel'] = "(Pas de description)";
		$strings['Notes'] = "Remarques";
		$strings['NoNotesLabel'] = "(pas de notes)";
		$strings['NoTitleLabel'] = "(Sans titre)";
		$strings['UsageConfiguration'] = "Règles de réservation pour les patients";
		$strings['ProviderDetails'] = "Fournisseur Détails";
		$strings['ChangeConfiguration'] = "Modification de la configuration";
		$strings['ResourceMinLength'] = "Rendez-vous doivent durer au moins% s";
		$strings['CancelationMin'] = "Nomination doit être annulée au moins% s à l'avance";
		$strings['ResourceMinLengthNone'] = "Il n'y a aucune durée minimale de réservation";
		$strings['ResourceMaxLength'] = "Rendez-vous peuvent pas durer plus de% s";
		$strings['ResourceMaxLengthNone'] = "Il ya pas de durée de réservation maximale";
		$strings['ResourceRequiresApproval'] = "Nominations doivent être approuvées";
		$strings['ResourceRequiresApprovalNone'] = "Nominations ne nécessitent pas l'approbation";
		$strings['ResourcePermissionAutoGranted'] = "L'autorisation est accordée automatiquement";
		$strings['ResourcePermissionNotAutoGranted'] = "Autorisation ne est pas accordée automatiquement";
		$strings['ResourceMinNotice'] = "Les nominations doivent être faites au moins% s avant l'heure de début";
		$strings['ResourceMinNoticeNone'] = "Rendez-vous peuvent être faites jusqu'à l'heure actuelle";
		$strings['ResourceMaxNotice'] = "Nominations ne peuvent être faites plus de% s à l'avance";
		$strings['ResourceMaxNoticeNone'] = "Rendez-vous peuvent être faites à tout moment dans l'avenir";
		$strings['ResourceAllowMultiDay'] = "Rendez-vous peuvent être faites à travers jours";
		$strings['ResourceNotAllowMultiDay'] = "Nominations ne peuvent pas être faites à travers jours";
		$strings['ResourceCapacity'] = "Cette ressource a une capacité de% de la population";
		$strings['ResourceCapacityNone'] = "Cette ressource a une capacité illimitée";
		$strings['AddNewResource'] = "Ajouter un nouveau fournisseur";
		$strings['AddNewUser'] = "Ajouter un nouvel utilisateur";
		$strings['AddUser'] = "Ajouter un nouvel utilisateur";
		$strings['Schedule'] = "Calendrier";
		$strings['AddResource'] = "Ajouter Fournisseur";
		$strings['Capacity'] = "Capacité";
		$strings['Access'] = "Accès";
		$strings['Duration'] = "Durée";
		$strings['Active'] = "Actif";
		$strings['Inactive'] = "Inactif";
		$strings['ResetPassword'] = "Réinitialiser mot de passe";
		$strings['LastLogin'] = "Dernière connexion";
		$strings['Search'] = "Recherche";
		$strings['ResourcePermissions'] = "Permission de fournisseurs";
		$strings['Reservations'] = "Réservations";
		$strings['Groups'] = "Groupes";
		$strings['ResetPassword'] = "Réinitialiser mot de passe";
		$strings['AllUsers'] = "Tous les utilisateurs";
		$strings['AllGroups'] = "Tous les groupes";
		$strings['AllSchedules'] = "Toutes les annexes";
		$strings['UsernameOrEmail'] = "Nom d'utilisateur ou Email";
		$strings['Members'] = "Membres";
		$strings['QuickSlotCreation'] = "Créer fentes les minutes de chaque% entre% s et% s";
		$strings['ApplyUpdatesTo'] = "ApplyUpdatesTo";
		$strings['CancelParticipation'] = "Annuler Participation";
		$strings['Attending'] = "Participer";
		$strings['QuotaConfiguration'] = "Sur% s pour les utilisateurs% de en% s sont limitées à% s% s par% s";
		$strings['reservations'] = "réservations";
		$strings['ChangeCalendar'] = "Changer Calendrier";
		$strings['AddQuota'] = "Ajouter Quota";
		$strings['FindUser'] = "Rechercher un utilisateur";
		$strings['Created'] = "Établi";
		$strings['LastModified'] = "Dernière mise à jour";
		$strings['GroupName'] = "Nom du groupe";
		$strings['GroupMembers'] = "Membres du groupe";
		$strings['GroupRoles'] = "Rôles de groupe";
		$strings['GroupAdmin'] = "administrateur du groupe";
		$strings['Actions'] = "Actes";
		$strings['CurrentPassword'] = "Mot De Passe Actuel";
		$strings['NewPassword'] = "Nouveau Mot De Passe";
		$strings['InvalidPassword'] = "Mot de passe actuel est incorrecte";
		$strings['PasswordChangedSuccessfully'] = "Votre mot de passe a été modifié avec succès";
		$strings['SignedInAs'] = "Connecté en tant que";
		$strings['NotSignedIn'] = "Vous n'êtes pas connecté";
		$strings['ReservationTitle'] = "Titre de la réservation";
		$strings['AppointmentNotes'] = "Remarques";
		$strings['AppointmentFor'] = "Fournisseur";
		$strings['Accessories'] = "Accessoires";
		$strings['Add'] = "Ajouter";
		$strings['ParticipantList'] = "Les participants";
		$strings['InvitationList'] = "Invités";
		$strings['AccessoryName'] = "Nom de l'accessoire";
		$strings['QuantityAvailable'] = "Quantité";
		$strings['Resources'] = "Fournisseurs";
		$strings['Participants'] = "Les participants";
		$strings['User'] = "Utilisateur";
		$strings['Resource'] = "Ressource";
		$strings['Status'] = "Statut";
		$strings['Approve'] = "Approuver";
		$strings['Page'] = "Page";
		$strings['Rows'] = "Rangées";
		$strings['Unlimited'] = "Illimité";
		$strings['Email'] = "Email";
		$strings['EmailAddress'] = "Adresse e-mail";
		$strings['Phone'] = "Téléphone";
		$strings['Position'] = "Position";
		$strings['Language'] = "Langue";
		$strings['Permissions'] = "Autorisations";
		$strings['Reset'] = "Remettre";
		$strings['FindGroup'] = "Rechercher un groupe";
		$strings['Manage'] = "Gérer";
		$strings['None'] = "Aucun";
		$strings['AddToOutlook'] = "Ajouter au calendrier";
		$strings['Done'] = "Fini";
		$strings['RememberMe'] = "Souviens-Toi De Moi";
		$strings['FirstTimeUser?'] = "Première utilisateur?";
		$strings['CreateAnAccount'] = "Créer un compte";
		$strings['ViewSchedule'] = "Voir annexe";
		$strings['ForgotMyPassword'] = "Je ai oublié mon mot de passe";
		$strings['YouWillBeEmailedANewPassword'] = "Vous recevrez par courriel un nouveau mot de passe généré aléatoirement";
		$strings['Close'] = "Près";
		$strings['ExportToCSV'] = "Exporter au format CSV";
		$strings['OK'] = "D'ACCORD";
		$strings['Working'] = "De travail";
		$strings['Login'] = "S'identifier";
		$strings['AdditionalInformation'] = "Informations Complémentaires";
		$strings['AllFieldsAreRequired'] = "tous les champs sont obligatoires";
		$strings['OnlyNameIsRequired'] = "seul nom est nécessaire";
		$strings['Optional'] = "en option";
		$strings['YourProfileWasUpdated'] = "Votre profil a été mis à jour";
		$strings['YourSettingsWereUpdated'] = "Vos paramètres ont été mis à jour";
		$strings['Register'] = "Se enregistrer";
		$strings['SecurityCode'] = "Code De Sécurité";
		$strings['ReservationCreatedPreference'] = "Quand je crée une réservation ou une réserve est créée en mon nom";
		$strings['ReservationUpdatedPreference'] = "Lorsque je mets à jour une réservation ou une réservation est mis à jour sur mon nom";
		$strings['ReservationDeletedPreference'] = "Lorsque je supprime une réservation ou une réservation est supprimé en mon nom";
		$strings['ReservationApprovalPreference'] = "Lorsque ma réservation en attente est approuvé";
		$strings['PreferenceSendEmail'] = "Envoyez-moi un email";
		$strings['PreferenceNoEmail'] = "Ne me notifier";
		$strings['ReservationCreated'] = "Votre réservation a été créé avec succès!";
		$strings['ReservationUpdated'] = "Votre réservation a été mis à jour avec succès!";
		$strings['ReservationRemoved'] = "Votre réservation a été retiré";
		$strings['YourReferenceNumber'] = "Votre numéro de référence est% s";
		$strings['UpdatingReservation'] = "Mise à jour de la réservation";
		$strings['ChangeUser'] = "Changer d'utilisateur";
		$strings['MoreResources'] = "Ajouter Fournisseur";
		$strings['ReservationLength'] = "Longueur";
		$strings['ParticipantList'] = "Liste des participants";
		$strings['AddParticipants'] = "Ajouter participants";
		$strings['InviteOthers'] = "Inviter d'autres personnes";
		$strings['AddResources'] = "Ajouter Fournisseurs";
		$strings['AddAccessories'] = "Ajouter des accessoires";
		$strings['Accessory'] = "Accessoire";
		$strings['QuantityRequested'] = "Quantité Demandée";
		$strings['CreatingReservation'] = "Création Réservation";
		$strings['UpdatingReservation'] = "Mise à jour Réservation";
		$strings['DeleteWarning'] = "Cette action est permanente et irréversible!";
		$strings['DeleteAccessoryWarning'] = "Suppression cet accessoire sera le retirer de toutes les réservations.";
		$strings['AddAccessory'] = "Ajouter accessoire";
		$strings['AddBlackout'] = "Ajouter Blackout";
		$strings['AllResourcesOn'] = "Toutes les ressources";
		$strings['Reason'] = "Raison";
		$strings['BlackoutShowMe'] = "Montrez-moi réservations contradictoires";
		$strings['BlackoutDeleteConflicts'] = "Supprimer réservations contradictoires";
		$strings['Filter'] = "Filtre";
		$strings['Between'] = "Entre";
		$strings['CreatedBy'] = "Créé par";
		$strings['BlackoutCreated'] = "Créé Blackout!";
		$strings['BlackoutNotCreated'] = "Blackout pas pu être créé!";
		$strings['BlackoutConflicts'] = "Il ya des moments d'interdiction contradictoires";
		$strings['ReservationConflicts'] = "Il ya réservations contradictoires fois";
		$strings['UsersInGroup'] = "Les utilisateurs de ce groupe";
		$strings['Browse'] = "Feuilleter";
		$strings['DeleteGroupWarning'] = "La suppression de ce groupe va supprimer toutes les autorisations de ressources associés. Les utilisateurs de ce groupe peuvent perdre l'accès aux ressources.";
		$strings['WhatRolesApplyToThisGroup'] = "Quels rôles se appliquent à ce groupe?";
		$strings['WhoCanManageThisGroup'] = "Qui peut gérer ce groupe?";
		$strings['WhoCanManageThisSchedule'] = "Qui peut gérer ce calendrier?";
		$strings['AddGroup'] = "Ajouter un groupe";
		$strings['AllQuotas'] = "Tous les quotas";
		$strings['QuotaReminder'] = "Rappelez-vous: Les quotas sont appliqués en fonction sur le fuseau horaire de l'horaire.";
		$strings['AllReservations'] = "Tous Réservations";
		$strings['PendingReservations'] = "Réservations en attente";
		$strings['Approving'] = "Approbation";
		$strings['MoveToSchedule'] = "Déplacez pour planifier";
		$strings['DeleteResourceWarning'] = "La suppression de ce fournisseur va supprimer toutes les données associées, y compris";
		$strings['DeleteResourceWarningReservations'] = "toutes les réservations passées, actuelles et futures qui lui sont associés";
		$strings['DeleteResourceWarningPermissions'] = "toutes les attributions d'autorisations";
		$strings['DeleteResourceWarningReassign'] = "Se il vous plaît réaffecter quelque chose que vous ne voulez pas être supprimé avant de continuer";
		$strings['ScheduleLayout'] = "Disposition hebdomadaire";
		$strings['ReservableTimeSlots'] = "À réserver Temps Slots";
		$strings['BlockedTimeSlots'] = "Temps bloqués Slots";
		$strings['ThisIsTheDefaultSchedule'] = "Ce est le programme par défaut (ne peut pas être supprimé)";
		$strings['DefaultScheduleCannotBeDeleted'] = "Horaire par défaut ne peut être supprimé";
		$strings['MakeDefault'] = "Faire défaut";
		$strings['BringDown'] = "Faire tomber";
		$strings['ChangeLayout'] = "Modifier la présentation";
		$strings['AddSchedule'] = "Ajouter annexe";
		$strings['StartsOn'] = "Commence";
		$strings['NumberOfDaysVisible'] = "Nombre de jours visibles";
		$strings['UseSameLayoutAs'] = "Utilisez même disposition que";
		$strings['Format'] = "Format";
		$strings['OptionalLabel'] = "Optionnel Étiquette";
		$strings['LayoutInstructions'] = "Entrez une fente par ligne. Slots doivent être prévus pour les 24 heures de la journée commençant et se terminant à 00h00.";
		$strings['UserPermissionInfo'] = "L'accès effectif aux ressources peut être différent selon le rôle de l'utilisateur, les autorisations de groupe, ou de paramètres d'autorisation externes";
		$strings['DeleteUserWarning'] = "Suppression cet utilisateur va supprimer la totalité de leur actuels, futurs et réservations historiques.";
		$strings['AddAnnouncement'] = "Ajouter une annonce";
		$strings['Announcement'] = "Annonce";
		$strings['Priority'] = "Priorité";
		$strings['Reservable'] = "À réserver";
		$strings['Unreservable'] = "Indisponible";
		$strings['Reserved'] = "Réservé";
		$strings['MyReservation'] = "Mon rendez-vous";
		$strings['Pending'] = "En attendant";
		$strings['Past'] = "Passé";
		$strings['Restricted'] = "Limité";
		$strings['ViewAll'] = "Voir tous";
		$strings['MoveResourcesAndReservations'] = "Déplacer des ressources et des réserves à";
		$strings['TurnOffSubscription'] = "Désactiver Calendrier Abonnements";
		$strings['TurnOnSubscription'] = "Laisser se abonner à ce Calendrier";
		$strings['SubscribeToCalendar'] = "Se abonner à cette Calendrier";
		$strings['SubscriptionsAreDisabled'] = "L'administrateur a désactivé calendrier abonnements";
		$strings['NoResourceAdministratorLabel'] = "(Non administrateur du fournisseur)";
		$strings['WhoCanManageThisResource'] = "Qui peut gérer cette ressource?";
		$strings['ResourceAdministrator'] = "administrateur du fournisseur";
		$strings['Private'] = "Privé";
		$strings['Accept'] = "Accepter";
		$strings['Decline'] = "Déclin";
		$strings['ShowFullWeek'] = "Semaine de la pleine";
		$strings['CustomAttributes'] = "Attributs personnalisés";
		$strings['AddAttribute'] = "Ajouter un attribut";
		$strings['EditAttribute'] = "Mettre à jour un attribut";
		$strings['DisplayLabel'] = "Libellé d'affichage";
		$strings['Type'] = "Type";
		$strings['Required'] = "Requis";
		$strings['ValidationExpression'] = "Validation Expression";
		$strings['PossibleValues'] = "Valeurs possibles";
		$strings['SingleLineTextbox'] = "Ligne Encadré";
		$strings['MultiLineTextbox'] = "Multiple Encadré Ligne";
		$strings['Checkbox'] = "Case";
		$strings['SelectList'] = "Sélectionnez Liste";
		$strings['CommaSeparated'] = "séparées par des virgules";
		$strings['Category'] = "Catégorie";
		$strings['CategoryReservation'] = "Réservation";
		$strings['CategoryGroup'] = "Groupe";
		$strings['SortOrder'] = "L'ordre de tri";
		$strings['Title'] = "Titre";
		$strings['AdditionalAttributes'] = "Attributs supplémentaires";
		$strings['AdditionalAppointmentAttributes'] = "Détails supplémentaires de rendez-vous";
		$strings['AdditionalPatientAttributes'] = "Détails supplémentaires patients";
		$strings['True'] = "Vrai";
		$strings['False'] = "Faux";
		$strings['ForgotPasswordEmailSent'] = "Un e-mail a été envoyé à l'adresse fournie avec des instructions pour réinitialiser votre mot de passe";
		$strings['ActivationEmailSent'] = "Vous recevrez un email d'activation bientôt.";
		$strings['AccountActivationError'] = "Désolé, nous ne pouvions pas activer votre compte.";
		$strings['Attachments'] = "Pièces jointes";
		$strings['AttachFile'] = "Joindre un fichier";
		$strings['Maximum'] = "max";
		$strings['NoScheduleAdministratorLabel'] = "Aucune annexe administrateur";
		$strings['ScheduleAdministrator'] = "Annexe administrateur";
		$strings['Total'] = "Total";
		$strings['QuantityReserved'] = "Quantité Réservé";
		$strings['AllAccessories'] = "Tous les accessoires";
		$strings['GetReport'] = "Obtenir le rapport";
		$strings['NoResultsFound'] = "Il n'y aucun résultat trouvé";
		$strings['SaveThisReport'] = "Enregistrer ce rapport";
		$strings['ReportSaved'] = "Rapport Saved!";
		$strings['EmailReport'] = "Email Rapport";
		$strings['ReportSent'] = "Rapport envoyé!";
		$strings['RunReport'] = "Exécuter le rapport";
		$strings['NoSavedReports'] = "Vous ne avez pas les rapports enregistrés.";
		$strings['CurrentWeek'] = "Semaine en cours";
		$strings['CurrentMonth'] = "Mois en cours";
		$strings['AllTime'] = "Tous les temps";
		$strings['FilterBy'] = "Filtrer par";
		$strings['Select'] = "Sélectionner";
		$strings['List'] = "Liste";
		$strings['TotalTime'] = "Temps total";
		$strings['Count'] = "Compter";
		$strings['Usage'] = "Usage";
		$strings['AggregateBy'] = "Agrégées par";
		$strings['Range'] = "Gamme";
		$strings['Choose'] = "Choisir";
		$strings['All'] = "Tous";
		$strings['ViewAsChart'] = "Voir Comme le graphique";
		$strings['ReservedResources'] = "Ressources réservées";
		$strings['ReservedAccessories'] = "Accessoires réservés";
		$strings['ResourceUsageTimeBooked'] = "Utilisation des ressources - Temps Réservé";
		$strings['ResourceUsageReservationCount'] = "Utilisation des ressources - comte de réservation";
		$strings['Top20UsersTimeBooked'] = "Top 20 utilisateurs - Temps Réservé";
		$strings['Top20UsersReservationCount'] = "Top 20 utilisateurs - comte de réservation";
		$strings['ContactPerson'] = "Personne De Contact";
		$strings['ContactPhone'] = "Téléphone";
		$strings['OrganizationNameRequired'] = "Nom de l'organisation est nécessaire";
		$strings['OrganizationRegistered'] = "Organisation est déjà enregistré";
		$strings['InternalOrg'] = "Organisation interne";
		$strings['OrganizationName'] = "Nom de l'organisation";
		$strings['SelectAccount'] = "Commencez à taper puis sélectionnez le nom de la liste";
		$strings['card'] = "Carte de crédit";
		$strings['CardNumber'] = "Numéro de la carte";
		$strings['CardCvc'] = "Code De Sécurité";
		$strings['CardExpiry'] = "Date D'Expiration";
		$strings['Pay'] = "Payer maintenant";
		$strings['PayAmount'] = "Payer le montant";
		$strings['ProcessPayment'] = "Processus paiement";
		$strings['ConfirmPayment'] = "Se il vous plaît confirmer le paiement";
		$strings['Confirm'] = "Confirmer";
		$strings['ConfirmMsg'] = "Si vous souhaitez procéder à votre paiement appuyez sur le bouton CONFIRM; sinon appuyez sur ANNULER.";
		$strings['YourBillingWasUpdated'] = "Vos données de facturation a été mis à jour";
		$strings['PaymentProcessed'] = "Votre paiement a été traité et un reçu a été envoyé par courriel";
		$strings['IncorrectCardData'] = "Données incorrectes de carte de crédit";
		$strings['ID'] = "Carte d'identité";
		$strings['MedicalPractice'] = "La pratique médicale";
		$strings['Patient'] = "Patient";
		$strings['PracticeName'] = "Nom de pratique";
		$strings['Specialty'] = "Spécialité médicale";
		$strings['StreetName'] = "Adresse De La Rue";
		$strings['Street'] = "Adresse De La Rue";
		$strings['Unit'] = "Numéro d'unité";
		$strings['Zip'] = "Code postal";
		$strings['City'] = "Ville";
		$strings['State'] = "Province / État";
		$strings['Country'] = "Pays";
		$strings['UserType'] = "Type d'utilisateur";
		$strings['PracticeInfo'] = "Infos pratiques";
		$strings['PersonalInfo'] = "Infos utilisateurs";
		$strings['PhoneNumber'] = "Téléphone";
		$strings['single'] = "Unique";
		$strings['double'] = "Double";
		$strings['triple'] = "Triple";
		$strings['quad'] = "Quadrilatère";
		$strings['office'] = "Bureau";
		$strings['MaxDoctors'] = "limite de fournisseur";
		$strings['NoWeekends'] = "Aucune annexe de Week-end";
		$strings['EditTimeSlotLayout'] = "Modifier la planification mise en page";
		$strings['required'] = "(Obligatoire)";
		$strings['Monday'] = "Lundi";
		$strings['Tuesday'] = "Mardi";
		$strings['Wednesday'] = "Mercredi";
		$strings['Thursday'] = "Jeudi";
		$strings['Friday'] = "Vendredi";
		$strings['Saturday'] = "Samedi";
		$strings['Sunday'] = "Dimanche";
		$strings['Clear'] = "Effacer tous les champs";
		$strings['CreateAppointment'] = "Créer un nouveau rendez-vous";
		$strings['PatientInfo'] = "Information pour les patients";
		$strings['AppointmentInfo'] = "Nomination Détails";
		$strings['AppointmentMaker'] = "Mis à jour par";
		$strings['FileAttachement'] = "File Attachment";
		$strings['PracticeInfo'] = "Informations pratiques";
		$strings['CustomAttributes'] = "Attributs personnalisés";
		$strings['FindDoctor'] = "Trouver Docteur";
		$strings['DoctorSchedules'] = "Doctor annexes";
		$strings['ProviderSchedules'] = "Horaires de fournisseurs";
		$strings['UserType'] = "Type d'utilisateur";
		$strings['PasswordOptional'] = "si le système vide laissé créera une";
		$strings['SendLoginEmail'] = "Email Connexion Pour utilisateur";
		$strings['InvalidPhone'] = "Numéro de téléphone incorrect";
		$strings['NewPatients'] = "De nouveaux patients";
		$strings['NewPatientsAccepted'] = "Les nouveaux patients sont les bienvenus";
		$strings['NewPatientsNotAccepted'] = "Nouveaux patients ne sont pas acceptés";
		$strings['Accepted'] = "Accepté";
		$strings['NotAccepted'] = "Non Accepté";
		$strings['Cancelations'] = "Annulations";
		$strings['CancelationsOnlineYes'] = "Les annulations peuvent être faites en ligne";
		$strings['CancelationsOnlineNo'] = "Les annulations peuvent pas être faites en ligne";
		$strings['CancelationMinDays'] = "Annulation doit être faite au moins";
		$strings['hours'] = "heures";
		$strings['minutes'] = "minutes";
		$strings['Additional'] = "Supplémentaire";
		$strings['Attributes'] = "Attributs";
		$strings['NoNewPatients'] = "Ce médecin ne accepte pas de nouveaux patients";
		$strings['ReservationNote'] = "Nomination Remarque";
		$strings['CreatedBy'] = "Créé par";
		$strings['Doctor'] = "Médecin";
		$strings['Address'] = "Adresse";
		$strings['FullAddressRequired'] = "Praticiens médicaux doivent remplir leur adresse complète";
		$strings['NoSchedule'] = "Aucun calendrier ne existe, vous devez trouver un médecin";
		$strings['Communication'] = "Communication";
		$strings['EmailBeforeAppointment'] = "Envoyer rappel envoyer un jour avant la nomination";
		$strings['NoEmailBeforeAppointment'] = "Ne envoyez courriel de rappel avant la nomination";
		$strings['ManageAppointments'] = "Nominations";
		$strings['EmailLogin'] = "si entré dans une connexion sera envoyé au patient";
		$strings['MedicalAddress'] = "pour la pratique - nécessaire";
		$strings['Contact'] = "Contactez-Nous";
		$strings['Send'] = "Envoyer";
		$strings['SendingEmail'] = "Envoyer un email";
		$strings['TipsTricks'] = "Trucs et astuces";
		$strings['NewPatients'] = "De nouveaux patients";
		$strings['Accepted'] = "Accepté";
		$strings['NotAccepted'] = "Non Accepté";
		$strings['Confirmed'] = "Confirmé";
		$strings['Pending'] = "En attendant";
		$strings['MinCancelError'] = "Une annulation exige un préavis de%; ce rendez-vous ne peut être annulée maintenant.";
		$strings['DeleteFailed'] = "Nomination Echec de la suppression.";
		$strings['DoctorIsVisible'] = "Docteur est visible pour le public";
		$strings['DoctorIsInvisible'] = "Docteur est invisible pour le public";
		$strings['MyUsersOnly'] = "Docteur calendrier est accessible à";
		$strings['NoUsers'] = "Aucun utilisateur public est autorisé à prendre rendez-vous";
		$strings['PublicBooking'] = "Tout utilisateur enregistré est autorisé à prendre rendez-vous.";
		$strings['UsersWithPermission'] = "L'utilisateur doit permission d'accès civile";
		$strings['UserPermission'] = "Calendrier est disponible au public";
		$strings['Permission'] = "Permission Request";
		$strings['WithPermission'] = "Seuls ceux avec la permission";
		$strings['Grant'] = "Grant Permission";
		$strings['Deny'] = "Refuser l'autorisation";
		$strings['RequestPermissions'] = "Permission Request";
		$strings['UserInfo'] = "Détails de l'utilisateur";
		$strings['ThisWeek'] = "Cette Semaine";
		$strings['AfterThisWeek'] = "Après cette semaine";
		$strings['AccountSetup'] = "Configuration du compte";
		$strings['SlotCount'] = "Nombre d'intervalles de temps par rendez-";
		$strings['Appointment'] = "Rendez-vous";
		$strings['Tutorials'] = "Tutoriels";
		$strings['SetupTutorial'] = "Comment configurer un compte médicale";
		$strings['HowToTutorial'] = "Comment utiliser MyDocSchedule.com";
		$strings['AccountCreated'] = "Nouveau compte médical Enregistré";
		$strings['Service'] = "Service";
		$strings['Constrain'] = "Temps-contrainte";
		$strings['AllDoctorsOn'] = "Tous les médecins sur";
		$strings['AnyUser'] = "Ne importe quel utilisateur";
		$strings['NoUser'] = "NO utilisateur";
		$strings['UserWithPermissions'] = "utilisateur avec la permission";
		$strings['SlotLength'] = "Longueur de la rainure en quelques minutes";
		$strings['Appointments'] = "Nominations";
		$strings['Promotion'] = "Code promotionnel";
		$strings['Code'] = "Code";
		$strings['Discount'] = "Rabais";
		$strings['DisplayDays'] = "Jours à afficher";
		$strings['ScheduleName'] = "Nom du planning";
		$strings['Admin'] = "Administrateur";
		$strings['BusinessBenefits'] = "Avantages commerciaux";
		$strings['BusinessFunctionality'] = "Fonctionnalité d'affaires";

		$strings['DoctorIsInvisibleExplanation'] = "Cette option contrôle si le médecin et son / son horaire est visible sur mydocschedule.com. Si réglé sur 'NO' le médecin ne sera pas trouvée par les patients utilisant le site. Ce est dans les situations où un médecin souhaite utiliser le service uniquement en interne pour son bureau sans ses patients en étant conscient qu'il / elle fait de manière";
		$strings['OfficeCreatedPatientsExplanation'] = "Cette option décide si oui ou non un utilisateur public peut accéder au calendrier de médecin et prendre rendez-vous Les options disponibles sont qu'un public utilisateur / patients: 1) peut prendre rendez-vous; 2) ne peut pas prendre rendez-vous; 3) peut prendre rendez-vous lorsque l'autorisation est. . délivré par l'office de médecin La valeur par défaut est que publics peuvent prendre rendez-vous.";
		$strings['AutomaticApproval'] = "Cette option contrôle si les nominations faites par les patients sont automatiquement approuvés ou non par défaut toutes les nominations doivent être approuvées par le bureau.";
		$strings['MinLeadTime'] = "Cette option contrôle quel est le délai exigé pour un nouveau rendez-vous sur rendez-vous par défaut peuvent être effectués jusqu'à l'heure actuelle.";
		$strings['MaxInAdvanceTime'] = "Cette option contrôle combien de temps à l'avance les nominations peuvent être faites Par défaut, ils peuvent être faites jusqu'à 60 jours à l'avance.";
		$strings['MinCancelTime'] = "Cette option contrôle le délai minimum requis pour les annulations";
		$strings['NewPatientsHelp'] = "Cette option contrôle si la pratique médicale accepte de nouveaux patients.";
		$strings['ReminderEmail'] = "Cette option contrôle si un email est envoyé au patient un jour avant leur nomination.";
			
		$strings['OnlineOfflineTip'] = "Cette option détermine si le calendrier est disponible pour vos patients Si le calendrier est déconnecté, il est toujours disponible à votre bureau mais pas à vos patients.";
		$strings['ScheduleTip'] = "Ce qui met en place le calendrier mise en page est utilisé par le médecin";
		$strings['SortOrderTip'] = "Cette option contrôle l'ordre des horaires d'affichage";
		$strings['LocationTip'] = "Si l'emplacement est spécifié ici il remplace l'adresse du bureau situé dans le profil Seulement rue, numéro d'unité (si nécessaire) et la ville (dans cet ordre) sont nécessaires et ils doivent être séparés par une colonne.";
		$strings['ContactTip'] = "Si infos de contact, téléphone et / ou e-mail, sont spécifiées ils remplacer les valeurs dans le profil.";
		$strings['MedSpecialtyTip'] = "Ce est la spécialité médicale réelle du médecin, elle remplace la spécialité fixé au profil de bureau";
		$strings['NotesTip'] = "Tout le bureau / médecin juge important peut être noté ici";
		$strings['ResourceAdminTip'] = "Cela permet la sélection de l'administrateur des ressources qui peuvent gérer ces options.";
			
		// Errors	
		$strings['LoginError'] = "Nous ne pouvions pas correspondre à votre nom d'utilisateur ou mot de passe";
		$strings['ReservationFailed'] = "Votre réservation ne pouvait pas être fait";
		$strings['MinNoticeError'] = "Cette réserve exige un préavis La première date et l'heure qui peut être réservé est %s.";
		$strings['MaxNoticeError'] = "Cette réserve ne peut être faite aussi loin dans l'avenir La dernière date et l'heure qui peut être réservé est %s.";
		$strings['MinDurationError'] = "Cette réservation doit durer au moins %s.";
		$strings['MaxDurationError'] = "Cette réserve ne peut pas durer plus longtemps que %s.";
		$strings['ConflictingAccessoryDates'] = "Il n'y a pas assez des accessoires suivants:";
		$strings['NoResourcePermission'] = "Vous ne avez pas la permission d'accéder à l'un ou plusieurs des ressources demandées";
		$strings['ConflictingReservationDates'] = "Il ya des réserves contradictoires sur les dates suivantes:";
		$strings['StartDateBeforeEndDateRule'] = "La date et l'heure de début doit être avant la date et l'heure de fin";
		$strings['StartIsInPast'] = "La date et l'heure de début ne peut pas être dans le passé";
		$strings['EmailDisabled'] = "L'administrateur a désactivé les notifications par courriel";
		$strings['ValidLayoutRequired'] = "Slots doivent être prévus pour les 24 heures de la journée commençant et se terminant à 00h00.";
		$strings['CustomAttributeErrors'] = "Il ya des problèmes avec les attributs supplémentaires que vous avez fournies:";
		$strings['CustomAttributeRequired'] = "%s est un champ obligatoire";
		$strings['CustomAttributeInvalid'] = "La valeur fournie pour %s est invalide";
		$strings['AttachmentLoadingError'] = "Désolé, il y avait un problème de chargement du fichier demandé.";
		$strings['InvalidAttachmentExtension'] = "Vous ne pouvez télécharger des fichiers de type: %s";
		$strings['Approval'] = "Réserver approbation";
		$strings['Required'] = "Nécessaire";
		$strings['Automatic'] = "Automatique";
		$strings['MinCancel'] = "Min avis d'annulation";
		$strings['MinBookingLead'] = "Min Réservation avis";
		$strings['MaxBookingLead'] = "Max Réservation avis";
		$strings['NoLimit'] = "No Limit";
		$strings['Days'] = "%s";
		$strings['Location'] = "Location";
		$strings['ContactPhone'] = "Contact Phone";
		$strings['ContactInfo'] = "Contact";
		$strings['AppointmentPatient'] = "Patient";
		$strings['AppointmentDoctor'] = "Docteur";
		$strings['AppointmentStart'] = "Démarrer";
		$strings['AppointmentEnd'] = "Fin";
		$strings['SelectUser'] = "Sélectionner un patient";	

		$strings['CreateReservation'] = "Créer Réservation";
		$strings['EditReservation'] = "Édition Réservation";
		$strings['LogIn'] = "S'identifier";
		$strings['ManageReservations'] = "Nominations";
		$strings['AwaitingActivation'] = "Activation attente";
		$strings['PendingApproval'] = "En attente d'approbation";
		$strings['ManageSchedules'] = "Horaires & services";
		$strings['ManageResources'] = "Fournisseurs";
		$strings['ManageAccessories'] = "Accessoires";
		$strings['ManageUsers'] = "Utilisateurs et patients";
		$strings['ManageGroups'] = "Groupes";
		$strings['ManageQuotas'] = "Quotas";
		$strings['ManageBlackouts'] = "Vacances & Blackouts";
		$strings['MyDashboard'] = "Mon tableau de bord";
		$strings['ServerSettings'] = "Paramètres du serveur";
		$strings['Dashboard'] = "Tableau de bord";
		$strings['Help'] = "Aidez-Moi";
		$strings['Administration'] = "Administration";
		$strings['About'] = "Sur";
		$strings['Bookings'] = "Réservations";
		$strings['Schedule'] = "Calendrier";
		$strings['Reservations'] = "Réservations";
		$strings['Account'] = "Compte";
		$strings['EditProfile'] = "Modifier mon profil";
		$strings['FindAnOpening'] = "Trouver une ouverture";
		$strings['OpenInvitations'] = "Invitations ouvertes";
		$strings['MyCalendar'] = "Mon calendrier";
		$strings['ResourceCalendar'] = "Fournisseur Calendriers";
		$strings['Reservation'] = "Nouvelle réservation";
		$strings['Install'] = "Installation";
		$strings['ChangePassword'] = "Changer Le Mot De Passe";
		$strings['MyAccount'] = "Mon Compte";
		$strings['Profile'] = "Profil";
		$strings['Billing'] = "Facturation";
		$strings['ApplicationManagement'] = "Administration";
		$strings['ForgotPassword'] = "Mot De Passe Oublié";
		$strings['NotificationPreferences'] = "Préférences de notification";
		$strings['ManageAnnouncements'] = "Annonces";
		$strings['Responsibilities'] = "Responsabilités";
		$strings['GroupReservations'] = "Réservations de groupes";
		$strings['ResourceReservations'] = "Réservation de ressources";
		$strings['Customization'] = "Personnalisation";
		$strings['Attributes'] = "Attributs";
		$strings['AccountActivation'] = "Activation du compte";
		$strings['ScheduleReservations'] = "Planning Réservations";
		$strings['Reports'] = "Rapports";
		$strings['GenerateReport'] = "Créer un nouveau rapport";
		$strings['MySavedReports'] = "Mes rapports enregistrés";
		$strings['CommonReports'] = "Rapports communes";
		$strings['ViewDay'] = "Voir Jour";
		$strings['Group'] = "Groupe";
		$strings['BillingInfo'] = "Informations de facturation";
		$strings['Account'] = "Compte";
		$strings['Pricing'] = "Prix";
		$strings['FeaturesBenefits'] = "Caractéristiques et avantages";
		$strings['DefineServices'] = "Définir des services médicaux";
		$strings['DefineSlots'] = "Définir Temps Slots";
		$strings['ServiceName'] = "Nom du service";
		$strings['ServiceDesc'] = "Description du service";
		$strings['NumSlots'] = "Temps Slots";
		$strings['ScheduleServices'] = "Horaire des services";
		$strings['ScheduleDetails'] = "Planning Détails";
		$strings['UpdateServicesSlots'] = "Update Services et mise en page";
		$strings['Minutes'] = "Minutes";
		
		// Email Subjects	// Envoyer Sujets	 
		$strings['ReservationApprovedSubject'] = "Votre nomination a été approuvée";
		$strings['ReservationCreatedSubject'] = "Votre nomination a été Créé";
		$strings['ReservationUpdatedSubject'] = "Votre nomination a été mise à jour";
		$strings['ReservationDeletedSubject'] = "Votre rendez-vous a été retiré";
		$strings['ReservationCreatedAdminSubject'] = "Notification: Une nomination a été Créé";
		$strings['ReservationUpdatedAdminSubject'] = "Notification: Un rendez-vous a été actualisé";
		$strings['ReservationDeleteAdminSubject'] = "Notification: Un rendez-vous a été retiré";
		$strings['ParticipantAddedSubject'] = "Nomination Participation notification";
		$strings['ParticipantDeletedSubject'] = "Nomination supprimé";
		$strings['InviteeAddedSubject'] = "Invitation de nomination";
		$strings['ResetPassword'] = "Password Reset Demande";
		$strings['ActivateYourAccount'] = "Se il vous plaît activer votre compte";
		$strings['ReportSubject'] = "Votre rapport demandé (% s)";
		$strings['EditBilling'] = "Modifier mes informations de facturation";
		$strings['AccountType'] = "Current Type de compte";
		$strings['PaymentType'] = "Mode de paiement actuel";
		$strings['BillingCycle'] = "Cycle de facturation";
		$strings['BulkUserCreation'] = "Créer des utilisateurs En Vrac";
		$strings['Taxes'] = "Impôts";
		$strings['free'] = "Gratuit";
		$strings['low usage'] = "Faible utilisation";
		$strings['medium usage'] = "Utilisation moyenne";
		$strings['high usage'] = "Haut Utilisation";
		$strings['extra high usage'] = "Très élevé Utilisation";
		$strings['enterprise usage'] = "Enterprise Utilisation";
		$strings['ResourceLimit'] = "Limite des ressources";
		$strings['NoUserLimit'] = "Nombre illimité d'utilisateurs";
		$strings['AccountStatus'] = "Statut du compte";
		$strings['check'] = "Chèque";
		$strings['CreditCard'] = "Carte de crédit";
		$strings['Prepaid'] = "Suivant Date de facturation";
		$strings['Owed'] = "Montant de la créance";
		$strings['AdditionalServices'] = "Services supplémentaires";
		$strings['monthly'] = "Mensuel";
		$strings['semi-annually'] = "Semestriellement";
		$strings['yearly'] = "Annuellement";
		$strings['quarterly'] = "Trimestriel";
		$strings['UserCreation'] = "Je veux utilisateurs créés à partir de mon dossier utilisateur";
		$strings['UserCreationMsg'] = "Se il vous plaît envoyer le fichier à support@mydocschedule.com";
		$strings['InCanada'] = "Je suis situé au Canada et assujettis à la TVH";
		$strings['CurrentFee'] = "Droit actuel";
		$strings['Home'] = "Maison";
		$strings['FAQ'] = "FAQ";
		$strings['Terms'] = "Conditions générales";
		$strings['Privacy'] = "Politique de confidentialité";
		$strings['Faq'] = "Questions fréquentes";
		$strings['LastTransaction'] = "Dernière transaction";
		$strings['PaymentMsgSubject'] = "Paiement Facture De www.MyDocSchedule.com";
		$strings['LoginEmail'] = "Votre connexion à www.MyDocSchedule.com";
		$strings['FindDoctor'] = "Trouver Docteur";
		$strings['DoctorName'] = "Nom Docteur";
		$strings['MedicalSpecialty'] = "Spécialité médicale";
		$strings['PracticeName'] = "Nom de pratique";
		$strings['Note'] = "Remarque";
		$strings['DoctorInfo'] = "Docteur Infos";
		$strings['AddToMyAccount'] = "Ajouter à mon compte";
		$strings['RequestPermission'] = "Demander la permission";
		$strings['InAccount'] = "Votre docteur";
		$strings['MyDoctors'] = "Mes médecins";
		$strings['NoDoctorsSelected'] = "Aucun Médecins sélectionnés Pourtant,";
		$strings['Features'] = "Caractéristiques et avantages";
		$strings['FeaturesMenu'] = "Caractéristiques";
		$strings['Public'] = "Public";
		$strings['EmailNotFound'] = "L'email ci-dessous n'a pas été trouvé dans le système, le mot de passe ne peut pas être remis à zéro";
		$strings['AppointmentDetails'] = "Nomination Détails";
		$strings['Bookable'] = "À réserver";
		$strings['NotBookableMessage'] = "Ce service ne peut être réservé en ligne. Vous devez appeler le bureau pour procéder à la nomination";
		$strings['PracticeAddress'] = "Adresse du cabinet";
		$strings['UserAddress'] = "Adresse de l'utilisateur";
		$strings['DeleteUser'] = "Supprimer l'utilisateur";
		$strings['AdditionalUser'] = "Utilisateur connexes";
		$strings['NewAddress'] = "A différentes adresses";

        // Day representations
        $strings['DaySundaySingle'] = 'D';
        $strings['DayMondaySingle'] = 'L';
        $strings['DayTuesdaySingle'] = 'M';
        $strings['DayWednesdaySingle'] = 'M';
        $strings['DayThursdaySingle'] = 'J';
        $strings['DayFridaySingle'] = 'V';
        $strings['DaySaturdaySingle'] = 'S';

        $strings['DaySundayAbbr'] = 'Dim';
        $strings['DayMondayAbbr'] = 'Lun';
        $strings['DayTuesdayAbbr'] = 'Mar';
        $strings['DayWednesdayAbbr'] = 'Mer';
        $strings['DayThursdayAbbr'] = 'Jeu';
        $strings['DayFridayAbbr'] = 'Ven';


        $strings['DaySaturdayAbbr'] = 'Sam';

        // Email Subjects
        $strings['ReservationApprovedSubject'] = 'Votre réservation a été approuvée';
        $strings['ReservationCreatedSubject'] = 'Votre réservation a été créée';
        $strings['ReservationUpdatedSubject'] = 'Votre réservation a été mise à jour';
        $strings['ReservationDeletedSubject'] = 'Votre réservation a été effacée';
        $strings['ReservationCreatedAdminSubject'] = 'Notification: Une réservation a été créée';
        $strings['ReservationUpdatedAdminSubject'] = 'Notification: Une réservation a été mise à jour';
        $strings['ReservationDeleteAdminSubject'] = 'Notification: Une réservation a été effacée';
        $strings['ParticipantAddedSubject'] = 'Notication de Participation à une Réservation';
        $strings['ParticipantDeletedSubject'] = 'Reservation Effacée';
        $strings['InviteeAddedSubject'] = 'Invitation à une Réservation';
        $strings['ResetPassword'] = 'Demande de réinitialisation de Mot de Passe';
        $strings['ForgotPasswordEmailSent'] = 'Un email contenant les instructions pour réinitialiser votre mot de passe vous a été envoyé.';
        $strings['ActivateYourAccount'] = 'Activez votre compte SVP';
        $strings['ReportSubject'] = 'Le rapport demandé (%s)';

		$strings['Takesawhile'] = 'Télécharger prend plusieurs minutes en raison de la taille du fichier.';
		$strings['SelectService'] = 'Sélectionnez Service';
		$strings['MailCheck'] = 'Se il vous plaît envoyer le chèque à:';
		$strings['Permonth'] = 'par mois';
		$strings['DiscountFromFull'] = 'Remise du prix complète';
		$strings['Home'] = "Page d'accueil";
		
		$strings['Tutorials'] = 'Didacticiels';
		$strings['UseTutorial'] = 'Comment utiliser MyDocSchedule.com';
		
		$strings['Trial'] = "Essai gratuit de 30 jours pour les cabinets médicaux";
		$strings['HowForDocs'] = "Comment cela fonctionne pour Médecins";
		$strings['Register'] = "Se enregistrer";
		$strings['RegisterLong'] = "Créer votre pratique avec notre site Web et créer vos utilisateurs de bureau";
		
		$strings['Step1'] = "Étape 1";
		$strings['SetupSchedule'] = "Créez votre annexe";
		$strings['SetupScheduleLong'] = "Ccréer votre horaire hebdomadaire et vos options de réservation pour les patients";
		$strings['Step2'] = "Étape 2";
		$strings['Bookings'] = "Avez Vos réservations";
		$strings['BookingsLong'] = "Lancer la réservation de vos patients de ne importe où vous le souhaitez";
		$strings['Step3'] = "Étape 3";
		$strings['LetPatients'] = "Permettre aux patients de réserver";
		$strings['LetPatientsLong'] = "Permettez à vos patients à faire leurs propres réservations sur mydocschedule.com";
		$strings['Step4'] = "Étape 4";
		$strings['WatchDemo'] = "Voir la démo";

		$strings['FreePatients'] = "Toujours gratuits pour les patients";
		$strings['HowForPatients'] = "Comment cela fonctionne pour les patients";
		$strings['RegisterPatient'] = "Inscrivez-vous à notre site Web comme un patient";
		$strings['FindDoc'] = "Trouvez votre médecin";
		$strings['FindDocLong'] = "Trouver votre médecin et ajouter lui/elle à votre compte";
		$strings['BookApp'] = "Réservez votre rendez-vous";
		$strings['BookAppLong'] = "Réservez un rendez-vous avec votre médecin";

		$strings['DocBenefits'] = "Avantages pour les cabinets médicaux";
		$strings['Points'] = "Beaucoup, quelques points sont énumérés ci-dessous:";
		$strings['Increased'] = "Augmentation du nombre de rendez-vous et l'augmentation des revenus";
		$strings['MorePatients'] = "Accès à plus de patients pour votre pratique";
		$strings['Inexpensive'] = "Pratique et peu coûteux présence en ligne";
		$strings['LessWork'] = "Moins de travail et de stress pour votre personnel";
		$strings['LessIssues'] = "Aucune maintenance de logiciels, les sauvegardes de données, problèmes de matériel moins";
		$strings['Satisfaction'] = "Plus la satisfaction des patients";
		$strings['PatientBenefits'] = "Avantages pour les patients";
		$strings['PatientDeal'] = "Même une meilleure affaire pour les patients:";
		$strings['EasierBooking'] = "Un nouveau moyen plus facile de rendez-vous de réservation";
		$strings['WideAccess'] = "Toute-fois qu'une place l'accès à votre calendrier de médecin";
		$strings['Tracking'] = "Moyen plus facile de garder la trace et de la gestion des rendez-vous";
		$strings['Convenience'] = "Possibilité de réserver appointmnets au confort du patient";
		$strings['ManageApps'] = "Gérer la nomination des membres de la famille à partir d'un seul compte";
		$strings['Notifications'] = "Notifications de rendez-vous à venir";

		$strings['Specials'] = "Specials!";
		$strings['50off'] = "Obtenez 50%% de rabais sur le prix régulier";
		$strings['6months'] = "pour six mois lorsque vous vous inscrivez en utilisant le code promotionnel que vous avez reçu par la poste";
		$strings['OR'] = 'OU';		
		$strings['CreatePatients'] = "Obtenez vos patients créés GRATUIT";
		$strings['DataFile'] = "envoyez-nous un fichier avec vos patients dans ne importe quel format de fichier et nous allons les charger pour vous gratuitement; économie de 0,50 $ par patient";
		
		$strings['Join'] = "Rejoignez la principale plate-forme médicale Planification & Collaboration";		
		$strings['Cloud'] = "Service Cloud pour la profession médicale";
		
		$strings['Configuration'] = 'Configuration';
		$strings['AppointmentWith'] = 'rendez-vous avec';
		$strings['SendReminder'] = 'Nomination rappel par';
		$strings['NewReminder'] = 'Nouveau rappel de nomination par';
		$strings['email'] = 'email';
		$strings['SMS'] = 'SMS';
		$strings['BeforeAppointment'] = 'jour (s) avant la nomination';
		$strings['AfterAppointment'] = 'mois après le dernier rendez-vous une fois par';
		$strings['OnlineOfflineTip'] = 'Cette option contrôle si le calendrier du fournisseur est disponible pour réserver aux patients. Si le calendrier de fournisseur est déconnecté il est toujours à la disposition du bureau, mais pas aux patients.';
		$strings['NoEmailBeforeAppointment'] = 'Ne envoyez rappel avant la nomination';
		$strings['NoEmailForNewAppointment'] = 'Ne envoyez rappel pour nouveau rendez-vous';
		$strings['day'] = 'jour';
		$strings['week'] = 'semaine';
		$strings['month'] = 'mois';
		$strings['UpTo'] = "jusqu'à";
		$strings['reminders'] = 'rappels';
		$strings['Reminders'] = 'Rappels';
		$strings['ReminderEmail'] = 'Cette option contrôle si un rappel est envoyé au patient avant un rendez actuelle.';
		$strings['NewReminderEmail'] = 'Cette option contrôle si un rappel est envoyé au patient pour un nouveau rendez-vous.';
		$strings['EmailBeforeAppointment'] = 'Envoyer par %s rappel %s jours avant la nomination';
		$strings['NewAppointmentReminder'] = 'Envoyer par %s rappel %s mois après le dernier rendez-vous';

		$strings['Back'] = 'Retour';
		$strings['ChangeMyPassword'] = 'Changer mon mot de passe';
        $this->Strings = $strings;
    }

    protected function _LoadDays()
    {
        $days = parent::_LoadDays();

        /***
        DAY NAMES
        All of these arrays MUST start with Sunday as the first element
        and go through the seven day week, ending on Saturday
         ***/
        // The full day name
        $days['full'] = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
        // The three letter abbreviation
        $days['abbr'] = array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
        // The two letter abbreviation
        $days['two'] = array('Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa');
        // The one letter abbreviation
        $days['letter'] = array('D', 'L', 'M', 'M', 'J', 'V', 'S');

        $this->Days = $days;
    }

    protected function _LoadMonths()
    {
        $months = parent::_LoadMonths();

        /***
        MONTH NAMES
        All of these arrays MUST start with January as the first element
        and go through the twelve months of the year, ending on December
         ***/
        // The full month name
        $months['full'] = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
        // The three letter month name
        $months['abbr'] = array('Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec');

        $this->Months = $months;
    }

    protected function _LoadLetters()
    {
        $this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    }

    protected function _GetHtmlLangCode()
    {
        return 'fr';
    }
}