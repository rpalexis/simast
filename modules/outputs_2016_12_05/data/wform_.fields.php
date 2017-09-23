<?php
$partShow=true;
$selects = array("fld_0" => '',
"fld_1" => '',
"fld_2" => '');
$fields=array("fld_0" => array('title'=>'1.Département','value'=>'preSQL','query'=>'','rquery'=>''
				),
"fld_1" => array('title'=>'2.Commune','value'=>'preSQL','query'=>'','rquery'=>''
				),
"fld_2" => array('title'=>'3.Section Comunnale','value'=>'preSQL','query'=>'','rquery'=>''
				),
"fld_3" => array("title"=>"4.Milieu de residence","value"=>"sysval","query"=>"21"),
"fld_4" => "5.Ville / Quartier",
"fld_5" => "6.Habitation/Localité/quartier",
"fld_6" => array("title"=>"7.Participation du ménage a l'enquete","value"=>"sysval","query"=>"22"),
"fld_7" => "8.Latitude",
"fld_8" => "9.Longitude",
"fld_9" => "10.Altitude",
"fld_10" => "11.Accuracy",
"fld_11" => "12.Chef de Ménage",
"fld_12" => "13.Téléphone1",
"fld_13" => "14.Téléphone2",
"fld_14" => array("title"=>"15.Principal matériaux du murs","value"=>"sysval","query"=>"15"),
"fld_15" => "16.Autre matériaux du murs",
"fld_16" => array("title"=>"17.Matériaux principal du toit","value"=>"sysval","query"=>"5"),
"fld_17" => "18.Autres matériaux du toit",
"fld_18" => array("title"=>"19.Principal matériaux du sol","value"=>"sysval","query"=>"16"),
"fld_19" => "20.Autres matériaux du sol ",
"fld_20" => "21.# de pièces dans le logement",
"fld_21" => array("title"=>"22.Principal type de lieu d’aisance ","value"=>"sysval","query"=>"17"),
"fld_22" => array("title"=>"23.Principale source d'éclairage du ménage","value"=>"sysval","query"=>"18"),
"fld_23" => array("title"=>"24.Principal mode d’évacuation des déchets solides ","value"=>"sysval","query"=>"24"),
"fld_24" => array("title"=>"25.Presence d'installations de cuisine","value"=>"sysval","query"=>"23"),
"fld_25" => array("title"=>"26.Principale source d’énergie pour la cuisson","value"=>"sysval","query"=>"19"),
"fld_26" => array("title"=>"27.Principal mode d’approvisionnement du ménage en eau Eau a boire ","value"=>"sysval","query"=>"20"),
"fld_27" => array("title"=>"28.Principal mode d’approvisionnement du ménage en H2O portable et utilisable","value"=>"sysval","query"=>"20"),
"fld_28" => "29.Distance de la maison pour approvisionnement en H2O portable et utilisable (à pied, en minute)",
"fld_29" => array("title"=>"30.Quantité d'eau disponible pour la famille par jour (en gallon)","value"=>"sysval","query"=>"25"),
"fld_30" => array("title"=>"31.Le ménage soit sans nourriture à cause de manque de ressources ces 4 dernières semaines","value"=>"sysval","query"=>"26"),
"fld_31" => array("title"=>"32.Il est arrivé que le CM +  ménage dort affamé ces quatres dernières semaines","value"=>"sysval","query"=>"26"),
"fld_32" => array("title"=>"33.CM + ménage ont passé toute une journée sans manger ces 4 dernières semaines","value"=>"sysval","query"=>"26"),
"fld_33" => "34.# de personne de moins de 65 ans au sein du ménage [0,64)",
"fld_34" => "35.# d'enfant de 5 ans au plus au sein du ménage [0,5]",
"fld_35" => "36.# d'enfant de 6 a 15 ans au sein du menage [6,15]",
"fld_36" => "37.#  d'enfant de 3 a 18 ans au sein du menage [3,18]",
"fld_37" => "38.# d'enfant de 3 a 20 ans au sein du ménage [3,20]",
"fld_38" => "39.# d'enfant de 15 ans ou moins au sein du ménage [0,15]",
"fld_39" => "40.# d'enfant de 10 a 12 ans au sein du menage [10,12]",
"fld_40" => "41.# d'enfant de 13 a 15 ans au sein du ménage [13, 15]",
"fld_41" => "42.# de personne de plus de 65 ans au sein du menage (65+)",
"fld_42" => "43.#  de personne de 18 a 64 ans au sein du menage [18,65)",
"fld_43" => "44.# de personne de plus de 15 ans au sein du menage 15+",
"fld_44" => "45.# de personne de plus de 21 ans au sein du menage 21+",
"fld_45" => "46.# Taille du menage",
"fld_46" => "47.Famille non monoparentale",
"fld_47" => "48.Famille monoparentale",
"fld_48" => "49.Ménage sans enfants âgés de 0 à 15 ans",
"fld_49" => "50. Ménage monoparental avec enfants de 0 à 15 ans",
"fld_50" => "51.Ménage avec chef de ménage et son conjoint et enfants de 0 à 15 ans",
"fld_51" => "52.Ménage monoparental avec enfants de 0 à 15 ans et au moins une personne âgée (adultes âgés de 65 ans et plus)",
"fld_52" => "53.Ménage avec chef de ménage et son conjoint et enfants de 0 à 15 ans et au moins une personne âgée (adultes âgés de 65 ans et plus)",
"fld_53" => "54.Niveau de denuement selon la categorie de menage",
"fld_54" => "55.Population a risque pour l'indicateur Enfants de moins de 5 ans(nombre total de personnes appartenant au ménage et âgées de 18 à 64 ans (cad.la population en âge de travailler) ainsi que celle âgée de 0 à 4 ans.)",
"fld_55" => "56.Population a risque pour l'indicateur Personnes vivant avec une maladie chronique (représentée par la taille du ménage)",
"fld_56" => "57.Population a risque pour l'indicateur Personnes handicapées ou blessées de manière permanente, mais ne souffrant pas de maladie chronique (représentée par la taille du ménage)",
"fld_57" => "58.Population a risque pour l'indicateur ANALPHABÉTISME (se compose de tous les membres du ménage âgés de 15 ans et plus)",
"fld_58" => "59.Variable dichotomique permettant d'identifier les membres du menage qui ont recus une education de base",
"fld_59" => "60.Population a risque pour l'indicateur ABSENCE D’ÉDUCATION DE BASE ( se compose de tous les individus de 21 ans et plus dans chaque ménage)",
"fld_60" => "61.Population a risque pour l'indicateur ABANDON SCOLAIRE (constituée par la population en âge d’être scolarisé (soit les individus entre 3 et 18 ans))",
"fld_61" => "62.Population a risque pour l'indicateur RETARD SCOLAIRE (composée de tous les individus âgés de 3 à 20 ans au sein du ménage)",
"fld_62" => "63.Nombre de personne active au sein du menage",
"fld_63" => "64.Population a risque pour l'indicateur INACTIF (composée de tous les membres du ménage actifs et inactifs)",
"fld_64" => "65.Population a risque pour l'indicateur SANS EMPLOI (composée de tous les membres actifs du ménage)",
"fld_65" => "66.Population a risque pour l'indicateur TRAVAIL DES ENFANTS (nombre total des enfants de 10 à 12 ans avec réajustement additionné au nombre total des enfants de 13 à 15 ans, au sein de chaque ménage)",
"fld_66" => "67.Population a risque pour l'indicateur ABSENCE DE NOURRITURE (niveau maximum de privation en matière de sécurité alimentaire, soit 10)",
"fld_67" => "68.Population a risque pour FAIM (niveau maximum de privation en matière de sécurité alimentaire, soit 10)",
"fld_68" => "69.Population a risque pour CONSOMMATION ALIMENTAIRE RÉSTREINTE (niveau maximum de privation en matière de sécurité alimentaire, soit 10)",
"fld_69" => "70.Nombre de personne recevant un transfert",
"fld_70" => "71.Nombre de personne beneficiant d'un soutien financier",
"fld_71" => "72.Nombre de personne recevant un transfert ou beneficiant d'un soutient financier",
"fld_72" => "73.Nombre maximum des transferts de fonds et soutiens financiers possible, soit 6",
"fld_73" => "74.Variable dichotomique qui prend la valeur 1 si le plancher est fait soit de terre soit de bois / planches ou autre matériaux (valeur de 0 dans le cas contraire)",
"fld_74" => "75.Variable dichotomique qui prend la valeur 1 si le toit est fait soit de carton soit de plastique, soit de chaume / paille /palmis, soit de tôle pour les ménages situés dans les aires métropolitaines ou urbaines; soit de carton, soit de chaume / paille / palmis ou soit de tôle ou autre matériaux pour les ménages situés dans une aire rurale (valeur de 0 dans le cas contraire)",
"fld_75" => "76.Variable dichotomique qui prend la valeur 1 si les murs sont faits soit de cartons / plastique, terre ou bois / planches / Clisse, ou tôle / autre matériau (valeur de 0 dans le cas contraire)",
"fld_76" => "77.Niveau de dénuement maximum en matière de conditions de logement de logement soit 3",
"fld_77" => "78.Niveau maximal de dénuement en matière de peuplement du ménag, soit 8 pour les ménages en aire métropolitaine et 10 pour les ménages en aire urbaine ou rurale",
"fld_78" => "79.Variable dichotomique qui prend la valeur de 1 si le ménage soit ne dispose d’aucune source de lumière artificielle, soit utilise des bougies, des piles, ou du kérosène (valeur de 0 dans le cas contraire)",
"fld_79" => "80.Variable dichotomique qui prend la valeur de 1 lorsque le ménage soit utilise du bois, de la paille ou du charbon de bois pour cuisiner dans une aire métropolitaine, ou tout simplement du bois ou de la paille dans une aire urbaine ou rurale (valeur de 0 dans le cas contraire)",
"fld_80" => "81.Score maximal de privation en matière de moyens d’éclairage, soit 2",
"fld_81" => "82.Variable dichotomique qui prend la valeur 1 quand un ménage situé en aire métropolitaine ou urbaine boit n’importe quel type d'eau à l’exclusion de l'eau traitée en bouteille / sachet ou bidon, ou qu’un ménage situé en aire rurale boit de l'eau non traitée provenant d'une source non protégée comme par exemple de l'eau de surface (valeur de 0 dans les autres cas)",
"fld_82" => "83.Variable dichotomique qui prend la valeur 1 si un ménage peut être considéré comme privé d’accès à l’eau de nettoyage (valeur de 0 dans le cas contraire).",
"fld_83" => "84.Score maximal en matière de manque d’accès à l’eau",
"fld_84" => "85.Variable dichotomique prend la valeur 1 quand le ménage n’a pas d’accès à des toilettes, ce qui signifie que les personnes font leur besoins dans la nature ou utilisent une excavation du sol (valeur de 0 dans le cas contraire)",
"fld_85" => "86.variable dichotomique prend la valeur de 1 quand le ménage dispose de ses ordures ménagères dans une fosse, dans la nature, dans la mer ou encore dans la rue (valeur de 0 dans le cas contraire)",
"fld_86" => "87.Score maximal en matière de manque accès à de bonnes conditions sanitaires",
"fld_87" => "88.Variable dichotomique renseignant sur la presence d'installation de cuisine dans la maison",
"fld_88" => "89.Variable dichotomique renseignant sur la presence d'installation de cuisine personnelle dans la maison",
"fld_89" => "90.Nombre de personne ne parlant pas francais dans le menage",
"fld_90" => "91.Population a risque pour la variable Ne parle  pas francais ( representee par le nombre de personne de plus de 15 ans dans le menage)",
"fld_91" => "92.Nombre de naissance vivante",
"fld_92" => "93.Nombre de Naissance non vivante",
"fld_93" => "94.Score attribue a chaque type de ménage",
"fld_94" => "95.Nombre total d'enfants de 0 à 4 ans au sein du ménage",
"fld_95" => "96.Nombre des maladies chroniques présentes au sein du ménage",
"fld_96" => "97.Nombre total des membres du ménage vivant avec un handicap",
"fld_97" => "98.Nombre total de personnes de 15 ans ou plus ne sachant pas lire et / ou écrire au sein de chaque ménage",
"fld_98" => "99.Nombre total de membres du ménage âgés de 21 ans et plus, qui ne sont pas analphabètes mais n’ont pas achevé leur cursus d’école primaire (en l’occurrence le certificat pour le niveau Moyen 2 / 6 A.F.)",
"fld_99" => "100.Nombre total de membres du ménage âgés de 3 à 18 ans et qui n’ont pas fréquenté l'école au cours des 12 mois précédant l'enquête",
"fld_100" => "101.Somme des lacunes scolaires accumulées par le ménage",
"fld_101" => "102.Nombre total des membres du ménage entrant dans la population inactive",
"fld_102" => "103.Nombre total de membres du ménage qui peuvent être considérés comme sans emploi parmi les membres actifs de la famille",
"fld_103" => "104.Somme des toutes les enfants au travail de 10 à 12 ans, ajustée par le facteur de réajustement, et de tous les enfants au travail de 13 à 15 ans, dans chaque ménage",
"fld_104" => "105.Score de 0, 3 ou 10 attribuee a l'indicateur ABSENCE DE NOURRITURE au ménage si ses membre ont manqué de nourriture du fait d’un manque de ressources respectivement jamais, parfois ou souvent",
"fld_105" => "106.Score de 0, 3 ou 10 attribuée à l’indicateur FAIM  si les membres du ménage se sont couchés en ayant faim du fait qu’ils n’aient pas pus manger à leur faim respectivement jamais, parfois ou souvent.",
"fld_106" => "107.Score de0, 3 ou 10 attribuée à l’indicateur CONSOMMATION ALIMENTAIRE RÉSTREINTE si les membres du ménage ont dû jeûner une journée entière parce qu’il n’y avait pas suffisamment de nourriture disponible respectivement jamais, parfois ou souvent",
"fld_107" => "108.Indicateur renseignant sur l'ABSENCE DE TRANSFERTS MONÉTAIRES ET AUTRES SOURCES D’ARGENT",
"fld_108" => "109.Somme des composantes d_floors, d_wall et d_wall pondérées par la localisation géographique des ménages",
"fld_109" => "110.Indicateur representant le nombre total des membres du ménage (taille du ménage) rapporte au nombre total de chambres disponibles dans la maisonnée",
"fld_110" => "111.Indicateur obtenu par la somme totale pondérée des variables (électricité et combustibles de cuisson) ponderee a la situation geographique du menage et multiplies par 2",
"fld_111" => "112.Indicateur obtenu par la somme totale pondérée des variables (eau potable et eau de nettoyage) ponderee a la situation geographique du menage et multiplies par 2",
"fld_112" => "113.Indicateur obtenu par la somme totale pondérée des variables (toilette et ordure) ponderee a la situation geographique du menage et multiplies par 2",
"fld_113" => "114.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur SANS EMPLOI",
"fld_114" => "115.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur ANALPHABÉTISME",
"fld_115" => "116.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  CONDITIONS DE LOGEMENT (VÉTUSTÉ DES MATÉRIAUX DES SOLS, MURS ET TOIT)",
"fld_116" => "117.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  ABANDON SCOLAIRE",
"fld_117" => "118.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  Enfants de moins de 5 ans",
"fld_118" => "119.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  RETARD SCOLAIRE",
"fld_119" => "120.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  Composition démographique du ménage",
"fld_120" => "121.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  MANQUE D’ACCÈS À L’EAU ",
"fld_121" => "122.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  TRAVAIL DES ENFANTS",
"fld_122" => "123.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur ABSENCE DE NOURRITURE",
"fld_123" => "124.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  Personnes handicapées ou blessées de manière permanente, mais ne souffrant pas de maladie chronique",
"fld_124" => "125.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  CONDITIONS SANITAIRES",
"fld_125" => "126.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  SURPEUPLEMENT DU MÉNAGE",
"fld_126" => "127.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  INACTIF",
"fld_127" => "128.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  CONSOMMATION ALIMENTAIRE RÉSTREINTE",
"fld_128" => "129.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  ABSENCE D’ÉDUCATION DE BASE",
"fld_129" => "130.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  ABSENCE DE TRANSFERTS MONÉTAIRES ET AUTRES SOURCES D’ARGENT",
"fld_130" => "131.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  MANQUE DE MOYENS D’ÉCLAIRAGE",
"fld_131" => "132.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  FAIM",
"fld_132" => "133.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  Personnes vivant avec une maladie chronique",
"fld_133" => "134.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  SURPEUPLEMENT DU MÉNAGE",
"fld_134" => "135.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  ABSENCE DE NOURRITURE",
"fld_135" => "136.Pondération de l’étendue de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur  ABANDON SCOLAIRE",
"fld_136" => "137.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur SURPEUPLEMENT DU MÉNAGE",
"fld_137" => "138.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur MANQUE DE MOYENS D’ÉCLAIRAGE",
"fld_138" => "139.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur CONSOMMATION ALIMENTAIRE RÉSTREINTE",
"fld_139" => "140.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur TRAVAIL DES ENFANTS",
"fld_140" => "141.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur MANQUE D’ACCÈS À L’EAU ",
"fld_141" => "142.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur ANALPHABÉTISME",
"fld_142" => "143.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur Enfants de moins de 5 ans",
"fld_143" => "144.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur ABSENCE DE TRANSFERTS MONÉTAIRES ET AUTRES SOURCES D’ARGENT",
"fld_144" => "145.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur Personnes handicapées ou blessées de manière permanente, mais ne souffrant pas de maladie chronique",
"fld_145" => "146.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur RETARD SCOLAIRE",
"fld_146" => "147.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur SANS EMPLOI",
"fld_147" => "148.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur Composition démographique du ménage",
"fld_148" => "149.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur CONDITIONS SANITAIRES",
"fld_149" => "150.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur ABSENCE D’ÉDUCATION DE BASE",
"fld_150" => "151.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur INACTIF",
"fld_151" => "152.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur FAIM",
"fld_152" => "153.Pondération de Pertinence de la vulnérabilité & dénuement selon les zones géographiques pour l'indicateur Personnes vivant avec une maladie chronique",
"fld_153" => "154.Indicateur Composition démographique du ménage divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 ",
"fld_154" => "155.Indicateur Enfants de moins de 5 ans divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5",
"fld_155" => "156.Indicateur Personnes vivant avec une maladie chronique divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 pour ",
"fld_156" => "157.Indicateur Personnes handicapées ou blessées de manière permanente, mais ne souffrant pas de maladie chronique divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 ",
"fld_157" => "158.Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 pour l'indicateur ANALPHABÉTISME",
"fld_158" => "159.Indicateur ABSENCE D’ÉDUCATION DE BASE divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 ",
"fld_159" => "160.Indicateur ABANDON SCOLAIRE divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5",
"fld_160" => "161.Indicateur RETARD SCOLAIRE divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 ",
"fld_161" => "162.Indicateur INACTIF divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 ",
"fld_162" => "163.Indicateur SANS EMPLOI divise parPopulation à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5",
"fld_163" => "164.Indicateur TRAVAIL DES ENFANTS divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 ",
"fld_164" => "165.Indicateur ABSENCE DE NOURRITURE divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 ",
"fld_165" => "166.Indicateur FAIM divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5",
"fld_166" => "167.Indicateur CONSOMMATION ALIMENTAIRE RÉSTREINTE divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 ",
"fld_167" => "168.Indicateur ABSENCE DE TRANSFERTS MONÉTAIRES ET AUTRES SOURCES D’ARGENT divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 ",
"fld_168" => "169.Indicateur SURPEUPLEMENT DU MÉNAGE divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5",
"fld_169" => "170.Indicateur CONDITIONS DE LOGEMENT (VÉTUSTÉ DES MATÉRIAUX DES SOLS, MURS ET TOIT) divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 ",
"fld_170" => "171.Indicateur MANQUE DE MOYENS D’ÉCLAIRAGE divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 ",
"fld_171" => "172.Indicateur MANQUE D’ACCÈS À L’EAU divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5",
"fld_172" => "173.Indicateur CONDITIONS SANITAIRES divise par Population à risque (soit encore le score maximum possible de dénuement / vulnerabilite) elevee a la puissance thet=0.5 ",
"fld_173" => "174.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur Composition démographique du ménage",
"fld_174" => "175.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur Enfants de moins de 5 ans",
"fld_175" => "176.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur Personnes vivant avec une maladie chronique",
"fld_176" => "177.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur Personnes handicapées ou blessées de manière permanente, mais ne souffrant pas de maladie chronique",
"fld_177" => "178.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur ANALPHABÉTISME",
"fld_178" => "179.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur ABSENCE D’ÉDUCATION DE BASE",
"fld_179" => "180.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur ABANDON SCOLAIRE",
"fld_180" => "181.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur RETARD SCOLAIRE",
"fld_181" => "182.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur INACTIF",
"fld_182" => "183.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur SANS EMPLOI",
"fld_183" => "184.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur TRAVAIL DES ENFANTS",
"fld_184" => "185.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur ABSENCE DE NOURRITURE",
"fld_185" => "186.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur FAIM",
"fld_186" => "187.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur CONSOMMATION ALIMENTAIRE RÉSTREINTE",
"fld_187" => "188.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur ABSENCE DE TRANSFERTS MONÉTAIRES ET AUTRES SOURCES D’ARGENT",
"fld_188" => "189.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur SURPEUPLEMENT DU MÉNAGE",
"fld_189" => "190.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur  CONDITIONS DE LOGEMENT (VÉTUSTÉ DES MATÉRIAUX DES SOLS, MURS ET TOIT)",
"fld_190" => "191.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur  MANQUE DE MOYENS D’ÉCLAIRAGE",
"fld_191" => "192.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur MANQUE D’ACCÈS À L’EAU ",
"fld_192" => "193.Variable dichotomique qui prend la valeur 1 si le ménage est démuni et prendra la valeur de 0 dans les autres cas selon l'indicateur CONDITIONS SANITAIRES",
"fld_193" => "194.Variable resultant du calcul g1_typeall expo 0.8 multiplie par w1_typeall",
"fld_194" => "195.Variable resultant du calcul g1_child04 expo 0.8 multiplie par w1_child04",
"fld_195" => "196.Variable resultant du calcul g1_chronic expo 0.8 multiplie par w1_chronic",
"fld_196" => "197.Variable resultant du calcul g1_disabled expo 0.8 multiplie par w1_disabled",
"fld_197" => "198.Variable resultant du calcul g1_noread expo 0.8 multiplie par w1_noread",
"fld_198" => "199.Variable resultant du calcul g1_nobasic expo 0.8 multiplie par w1_nobasic",
"fld_199" => "200.Variable resultant du calcul g1_nonattend expo 0.8 multiplie par w1_nonattend",
"fld_200" => "201.Variable resultant du calcul g1_edulag expo 0.8 multiplie par w1_edulag",
"fld_201" => "202.Variable resultant du calcul g1_ inactivity expo 0.8 multiplie par w1_inactivity",
"fld_202" => "203.Variable resultant du calcul g1_ unemplo expo 0.8 multiplie par w1_unemplo",
"fld_203" => "204.Variable resultant du calcul g1_childlab  expo 0.8 multiplie par w1_childlab",
"fld_204" => "205.Variable resultant du calcul g1_sa_1  expo 0.8 multiplie par w1_sa_1",
"fld_205" => "206.Variable resultant du calcul g1_sa_2  expo 0.8 multiplie par w1_sa_2",
"fld_206" => "207.Variable resultant du calcul g1_sa_3 expo 0.8 multiplie par w1_sa_3",
"fld_207" => "208.Variable resultant du calcul g1_num_source expo 0.8 multiplie par w1_num_source",
"fld_208" => "209.Variable resultant du calcul g1_ overcrow expo 0.8 multiplie par w1_overcrow",
"fld_209" => "210.Variable resultant du calcul g1_ dweling expo 0.8 multiplie par w1_dweling",
"fld_210" => "211.Variable resultant du calcul g1_lightning expo 0.8 multiplie par w1_lightning",
"fld_211" => "212.Variable resultant du calcul g1_water expo 0.8 multiplie par w1_water",
"fld_212" => "213.Variable resultant du calcul g1_ sanit expo 0.8 multiplie par w1_water",
"fld_213" => "214.Somme totale pondérée du dénuement du ménage",
"fld_214" => "215.Mesure de la profondeur moyenne du denuement et de la vulnerabilite dont souffre chaque menage",
"fld_215" => "216.Adjustead Haiti's Deprivation and Vulnerability Index",
"fld_216" => "217.Variable dichotomique qui prend la valeur 1 lorsque le ménage a un score de INPV égal ou supérieur au seuil du groupe le moins démuni / vulnérable de la zone géographique correspondante et lorsqu’il présente une « somme totale pondérée de privation» égale ou supérieure au seuil du groupe le moins démuni / vulnérable de la zone géographique correspondante (valeur de 0 dans les autres cas)",
"fld_217" => "218.Vulnerability group",
"fld_218" => "219.Pondérations du Dénuement en matière de sécurité alimentaire par zone géographique pour la composante ABSENCE DE NOURRITURE ",
"fld_219" => "220.Pondérations du Dénuement en matière de sécurité alimentaire par zone géographique pour la composante FAIM ",
"fld_220" => "221.Pondérations du Dénuement en matière de sécurité alimentaire par zone géographique pour la composante CONSOMMATION ALIMENTAIRE RÉSTREINTE ",
"fld_221" => "222.Résultat global calculé de privation en matière de sécurité alimentaire",
"fld_222" => "223.variable dichotomique permettant de distinguer les ménages démunis en matière de sécurité alimentaire de ceux qui ne le sont pas",
"fld_223" => "224.Duplicated case",
"fld_224" => "225.Information complete",
"fld_225" => "226.Weighted sum of deprivations",
"fld_226" => "227.Haiti's deprivations and Vulnerab",
"fld_227" => "228.Food Insecurity",
"fld_228" => "229.Rank of households ",
"fld_229" => "230.Kore Lavi",
"fld_230" => "231.20 Indicateurs",
"fld_231" => "232.1. 1 Composition démographique du foyer",
"fld_232" => "233.1.2.  Présence d’enfants de moins de 5 ans",
"fld_233" => "234.2.1 Présence de personnes handicapées ou blessées de manière permanente",
"fld_234" => "235.2.2 Personne vivant avec une maladie chronique au domicile",
"fld_235" => "236.3.1 Analphabétisme",
"fld_236" => "237.3.2 Absence d’école primaire",
"fld_237" => "238.3.3 Déscolarisation",
"fld_238" => "239.3.4 Retard scolaire",
"fld_239" => "240.4.1 Inactivité",
"fld_240" => "241.4.2 Chômage",
"fld_241" => "242.4.3 Travail des enfants",
"fld_242" => "243.5.1 Famine",
"fld_243" => "244.5.2 Absence de nourriture",
"fld_244" => "245.5.3 Consommation alimentaire réduite",
"fld_245" => "246.6.1 Absence de transferts de fonds",
"fld_246" => "247.6.2 Mauvaise qualité des planchers, murs et plafonds",
"fld_247" => "248.6.3 Surpeuplement",
"fld_248" => "249.7.1 Manque d’éclairage",
"fld_249" => "250.7.2 Manque d’accès à l’eau",
"fld_250" => "251.7.3 Mauvaises conditions sanitaires",
"wform_sub_249" => array("title"=>"Membres","value"=>"plural",
							"query"=>array(
									"set"=>"select * from wf__sub_249 where wf_id='%d'",
									"fields"=>array(
										"fld_0" => "1.Prenom",
"fld_1" => "2.Nom",
"fld_2" => array("title"=>"3.Lien de parenté avec le chef de ménage","value"=>"sysval","query"=>"27"),
"fld_3" => array("title"=>"4.Sexe","value"=>"sysval","query"=>"49"),
"fld_4" => array("title"=>"5.Date de Naissance","xtype"=>"date"),
"fld_5" => "6.Age",
"fld_6" => array("title"=>"7. Statut matrimonial actuel","value"=>"sysval","query"=>"28"),
"fld_7" => array("title"=>"8.A été DIAGNOSTIQUÉ","value"=>"sysval","query"=>"36"),
"fld_8" => array("title"=>"9.Chacune de ces maladies","value"=>"sysval","query"=>"29","mode"=>"multi"),
"fld_9" => "10.Autres maladies diagnostiqués",
"fld_10" => array("title"=>"11.Presence de conditions permanentes / chroniques pour cause de maladie, d'accident ou de naissance","value"=>"sysval","query"=>"36"),
"fld_11" => array("title"=>"12.Conditions A. Voir malgré l'aide de lunettes","value"=>"sysval","query"=>"54"),
"fld_12" => array("title"=>"13.Conditions. B. Entendre malgré l'utilisation de prothèses auditives","value"=>"sysval","query"=>"54"),
"fld_13" => array("title"=>"14.Conditions C. Parler (difficulté avec la parole)","value"=>"sysval","query"=>"54"),
"fld_14" => array("title"=>"15.Conditions D. Difficulté avec les autosoins","value"=>"sysval","query"=>"54"),
"fld_15" => array("title"=>"16.la personne sait lire?","value"=>"sysval","query"=>"36"),
"fld_16" => array("title"=>"17.la personne  sait écrire?","value"=>"sysval","query"=>"36"),
"fld_17" => array("title"=>"18.la personne parle français?","value"=>"sysval","query"=>"36"),
"fld_18" => array("title"=>"19.la personne est allé a  l'ecole au cours de le 12 derniers mois?","value"=>"sysval","query"=>"36"),
"fld_19" => array("title"=>"20.Niveau d'étude actuel ","value"=>"sysval","query"=>"31"),
"fld_20" => array("title"=>"21.Plus haut niveau d'éducation terminé par la personne","value"=>"sysval","query"=>"31"),
"fld_21" => array("title"=>"22.Principale activité économique de la personne au cours du mois dernier","value"=>"sysval","query"=>"32"),
"fld_22" => array("title"=>"23.la personne a reçu des transferts d'argent provenant de la famille/amis/autres personnes au cours  des 12 derniers mois ?","value"=>"sysval","query"=>"36"),
"fld_23" => array("title"=>"24. la personne  a  bénéficié d'un support/prêt/don d'une organisation pendant les 6 derniers mois","value"=>"sysval","query"=>"36"),
"fld_24" => "25.Si oui laquelle",
"fld_25" => "26.Nombre de naissances vivantes au cours des 5 dernières années",
"fld_26" => "27.Nombre d'enfants qui sont nés au cours des 5 dernières années et qui sont morts",
"fld_27" => "28.Numero de la Carte d'Identité Nationale de la personne",
"fld_28" => array("title"=>"29.Autres documents","value"=>"sysval","query"=>"50","mode"=>"multi")
									)
								)
							));
?>