<?php
/*
 * @version $Id: HEADER 15930 2011-10-30 15:47:55Z tsmr $
 -------------------------------------------------------------------------
 Mreporting plugin for GLPI
 Copyright (C) 2003-2011 by the mreporting Development Team.

 https://forge.indepnet.net/projects/mreporting
 -------------------------------------------------------------------------

 LICENSE

 This file is part of mreporting.

 mreporting is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 mreporting is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with mreporting. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

global $LANG;
$LANG['plugin_mreporting']['Inventory']['title'] = "Reporting inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByOS']['title'] = "Ordinateurs par OS";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByOS']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByOS']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportPieComputersByOS']['title'] = "Ordinateurs par OS";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByOS']['desc'] = "Camenbert";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByOS']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByFabricant']['title'] = "Ordinateurs par fabricant";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByFabricant']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByFabricant']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportPieComputersByFabricant']['title'] = "Ordinateurs par fabricant";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByFabricant']['desc'] = "Camembert";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByFabricant']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByType']['title'] = "Ordinateurs par type";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByType']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByType']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportPieComputersByType']['title'] = "Ordinateurs par type";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByType']['desc'] = "Camembert";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByType']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByDomain']['title'] = "Ordinateurs par domaine (mono et multi-domaine)";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByDomain']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByDomain']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarWindows']['title'] = "Répartition des versions de Windows dans le parc";
$LANG['plugin_mreporting']['Inventory']['reportHbarWindows']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarWindows']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarLinux']['title'] = "Répartition des distributions de Linux dans le parc";
$LANG['plugin_mreporting']['Inventory']['reportHbarLinux']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarLinux']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByAge']['title'] = "Ordinateurs par &acirc;ge";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByAge']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByAge']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportPieComputersByAge']['title'] = "Ordinateurs par &acirc;ge";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByAge']['desc'] = "Camembert";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByAge']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarFusionInventory']['title'] = "Répartition version agent FusionInventory";
$LANG['plugin_mreporting']['Inventory']['reportHbarFusionInventory']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarFusionInventory']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportPieFusionInventory']['title'] = "Répartition version agent FusionInventory";
$LANG['plugin_mreporting']['Inventory']['reportPieFusionInventory']['desc'] = "Camembert";
$LANG['plugin_mreporting']['Inventory']['reportPieFusionInventory']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarMonitors']['title'] = "Répartition du nombre d'écrans par ordinateur";
$LANG['plugin_mreporting']['Inventory']['reportHbarMonitors']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarMonitors']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Helpdeskplus']['title'] = 'Reporting Helpdesk Avancé';

$LANG['plugin_mreporting']['Helpdeskplus']['reportGlineBacklogs']['title']            = 'Backlog';
$LANG['plugin_mreporting']['Helpdeskplus']['reportGlineBacklogs']['desc']             = 'Ce rapport affiche le nombre de ticket groupé par la période selectionnée (jour, semaine, ...).<br> Il ajoute par ailleurs une nouvelle ligne nommée "Backlogs" permettant de visualiser <i>l\'en cours</i> des tickets à une date donnée';

$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarLifetime']['title']        = 'Ancienneté des tickets';
$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarLifetime']['desc']         = 'Ce rapport affiche des barres indiquant le nombre de tickets pour la période selectionnée (jour, semaine, ...).<br>
Les tickets sont affichés dans leurs statuts courants. Par exemple, les blocs \'Nouveau\' affiche les tickets dans un statut nouveau à la date d\'aujourd\'hui.';

$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarTicketsgroups']['title']   = 'Quantitatif par groupes';
$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarTicketsgroups']['desc']    = 'Ce rapport affiche le nombre de tickets ouverts entre les dates selectionnées par leur groupe d\'attribution';

$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarTicketstech']['title']     = 'Quantitatif par technicien';
$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarTicketstech']['desc']      = 'Ce rapport affiche le nombre de tickets ouverts entre les dates selectionnées groupés par techniciens.<br>
<b>Vous devez selectionner au préalable un groupe de technicien pour afficher les données.</b>';

$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarWorkflow']['title']        = 'Orientation des files';
$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarWorkflow']['desc']         = 'Nombre de tickets pour chaque groupe d\'arrivée en fonction d\'un groupe de départ.<br />
                                                                                       - Sélectionnez un groupe demandeur pour afficher le nombre de ticket pour les groupes attribués.<br />
                                                                                       - Sélectionnez un groupe chargé du ticket pour afficher le nombre de ticket pour les groupes demandeurs.<br />
                                                                                       <b>Vous ne pouvez sélectionner qu\'un critère à la fois !</b>';

$LANG['plugin_mreporting']['Helpdeskplus']['reportHbarTopcategory']['title']          = 'TOP catégories';
$LANG['plugin_mreporting']['Helpdeskplus']['reportHbarTopcategory']['desc']           = 'Nombre croissant de ticket affiché par catégorie. <br>
Il est possible limiter le nombre de catégories affichées !';

$LANG['plugin_mreporting']['Helpdeskplus']['reportHbarTopapplicant']['title']         = 'TOP groupes demandeurs';
$LANG['plugin_mreporting']['Helpdeskplus']['reportHbarTopapplicant']['desc']          = 'Nombre croissant de ticket affiché par groupe demandeur. <br>
Il est possible limiter le nombre de groupes affichés !';

$LANG['plugin_mreporting']['Helpdeskplus']['backlogs']        = 'Backlogs';
$LANG['plugin_mreporting']['Helpdeskplus']['opened']          = 'Ouverts';
$LANG['plugin_mreporting']['Helpdeskplus']['period']          = 'Période';
$LANG['plugin_mreporting']['Helpdeskplus']['backlogstatus']   = 'Statuts à afficher';


$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarGroupChange']['title'] = "Nombre de changement de groupe";
$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarGroupChange']['desc'] = "Le graphique suivant affiche les nombres de tickets classé par nombre de changements.<br>
En ordonnée est affiché le nombre de ticket.<br>
En abscisse, le nombre de changements.";

$LANG['plugin_mreporting']['Other']['title'] = "Autres";
$LANG['plugin_mreporting']['Other']['reportHbarLogs']['title'] = "Répartition des logs";
$LANG['plugin_mreporting']['Other']['reportHbarLogs']['desc'] = "Barres";
$LANG['plugin_mreporting']['Other']['reportHbarLogs']['category'] = "Logs";
