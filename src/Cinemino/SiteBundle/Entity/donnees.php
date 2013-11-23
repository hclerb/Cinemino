<?php
namespace Cinemino\SiteBundle\Entity;

class donnees {
    
    public static $pays = array(
            "ad" => "Andorre",
            "ae" => "Emirats Arabes Unis",
            "af" => "Afghanistan",
            "ag" => "Antigua-Et-Barbuda",
            "ai" => "Anguilla",
            "al" => "Albanie",
            "am" => "Arménie",
            "an" => "Antilles",
            "ao" => "Angola",
            "aq" => "Antarctique",
            "ar" => "Argentine",
            "as" => "Samoa Américaines",
            "at" => "Autriche",
            "au" => "Australie",
            "aw" => "Aruba",
            "az" => "Azerbaïdjan",
            "ba" => "Bosnie-Herzégovine",
            "bb" => "Barbade",
            "bd" => "Bangladesh",
            "be" => "Belgique",
            "bg" => "Bulgarie",
            "bh" => "Bahreïn",
            "bi" => "Burundi",
            "bj" => "Bénin ",
            "bm" => "Bermudes",
            "bn" => "Brunei Darussalam",
            "bo" => "Bolivie",
            "br" => "Brésil",
            "bs" => "Bahamas",
            "bt" => "Bhoutan",
            "bw" => "Botswana",
            "by" => "Biélorussie",
            "bz" => "Belize",
            "kh" => "Cambodge",
            "ca" => "Canada",
            "cc" => "Iles cocos",
            "cd" => "République Démocratique Du Congo",
            "cf" => "République Centrafricaine",
            "cg" => "Congo",
            "ch" => "Suisse",
            "ci" => "Côte d'ivoire",
            "ck" => "Iles cook",
            "cl" => "Chili",
            "cm" => "Cameroun",
            "cn" => "Chine",
            "co" => "Colombie",
            "cr" => "Costa rica",
            "cu" => "Cuba",
            "cv" => "Cap-vert",
            "cx" => "Ile christmas",
            "cy" => "Chypre",
            "cz" => "République Tchèque",
            "de" => "Allemagne",
            "dj" => "Djibouti",
            "dk" => "Danemark",
            "dm" => "Dominique",
            "do" => "République Dominicaine",
            "dz" => "Algérie",
            "ec" => "Equateur",
            "ee" => "Estonie",
            "eg" => "Egypte",
            "eh" => "Sahara Occidental",
            "er" => "Erythrée",
            "es" => "Espagne",
            "et" => "Ethiopie",
            "fi" => "Finlande",
            "fj" => "Fidji",
            "fk" => "Iles Falklands",
            "fm" => "Micronésie",
            "fo" => "Ile Feroe",
            "fr" => "France",
            "ga" => "Gabon",
            "gd" => "Grenade",
            "ge" => "Géorgie",
            "gf" => "Guyane Française",
            "gh" => "Ghana",
            "gi" => "Gibraltar",
            "gl" => "Groënland",
            "gq" => "Guinée Equatoriale",
            "gm" => "Gambie",
            "gn" => "Guinée",
            "gp" => "Guadeloupe",
            "gr" => "Grèce",
            "gt" => "Guatemala",
            "gu" => "Guam",
            "gw" => "Guinée-bissao",
            "gy" => "Guyane",
            "hk" => "Hong Kong",
            "hn" => "Honduras",
            "hr" => "Croatie",
            "ht" => "Haïti",
            "hu" => "Hongrie",
            "id" => "Indonésie",
            "ie" => "Irlande",
            "il" => "Israël",
            "in" => "Inde",
            "iq" => "Iraq",
            "ir" => "Iran",
            "is" => "Islande",
            "it" => "Italie",
            "jm" => "Jamaïque",
            "jo" => "Jordanie",
            "jp" => "Japon",
            "ke" => "Kenya",
            "kg" => "Kirghistan",
            "bf" => "Burkina Faso",
            "ki" => "Kiribati",
            "km" => "République Comorienne",
            "kn" => "Saint-Christophe-Et-Niévès",
            "kp" => "Corée Du Nord",
            "kr" => "Corée Du Sud",
            "kw" => "Koweït",
            "ky" => "Iles Caïmans",
            "kz" => "Kazakhstan",
            "la" => "Laos",
            "lb" => "Liban",
            "lc" => "Sainte-Lucie",
            "li" => "Liechtenstein",
            "lk" => "Sri Lanka",
            "lr" => "Libéria",
            "ls" => "Lesotho",
            "lt" => "Lituanie",
            "lu" => "Luxembourg",
            "lv" => "Lettonie",
            "ly" => "Libye",
            "ma" => "Maroc",
            "mc" => "Monaco",
            "md" => "Moldavie",
            "mg" => "Madagascar",
            "ml" => "Mali",
            "mh" => "Marshall",
            "mk" => "Macédoine",
            "mm" => "Myanmar",
            "mq" => "Martinique",
            "mn" => "Mongolie",
            "mo" => "Makau",
            "mp" => "Ile Mariana Du Nord",
            "mr" => "Mauritanie",
            "ms" => "Monteserrat",
            "mu" => "Maurice",
            "mt" => "Malte",
            "mv" => "Maldives",
            "mw" => "Malawi",
            "mx" => "Mexique West",
            "my" => "Malaisie",
            "mz" => "Mozambique",
            "na" => "Namibie",
            "nc" => "Nouvelle-Calédonie",
            "ne" => "Niger",
            "nf" => "Ile De Norfolk",
            "ng" => "Nigeria",
            "ni" => "Nicaragua",
            "nl" => "Pays-Bas",
            "no" => "Norvège",
            "np" => "Népal",
            "nr" => "Nauru",
            "nu" => "Niue",
            "nz" => "Nouvelle-Zélande",
            "om" => "Oman",
            "pa" => "Panama",
            "pe" => "Pérou",
            "pf" => "Polynésie Française",
            "pg" => "Papouasie - Nouvelle Guinée",
            "ph" => "Philippines",
            "pk" => "Pakistan",
            "pl" => "Pologne",
            "pm" => "St. Pierre Et miquelon",
            "pn" => "Pitcairn",
            "pr" => "Porto Rico",
            "ps" => "Palestine",
            "pt" => "Portugal",
            "pw" => "Palau",
            "py" => "Paraguay",
            "qa" => "Qatar",
            "re" => "Réunion",
            "ro" => "Roumanie",
            "ru" => "Russie",
            "rw" => "Rwanda",
            "sa" => "Arabie Saoudite",
            "sb" => "Iles Salomon",
            "sc" => "Seychelles",
            "sd" => "Soudan",
            "se" => "Suède",
            "sg" => "Singapour",
            "sh" => "Saint Hélène",
            "si" => "Slovénie",
            "sk" => "Slovaquie",
            "sl" => "Sierra Leone",
            "sm" => "Saint-Marin",
            "sn" => "Sénégal",
            "so" => "Somalie",
            "sr" => "Suriname",
            "st" => "Sao Tomé-Et-Principe",
            "sv" => "Salvador",
            "sy" => "Syrie",
            "sz" => "Swaziland",
            "tc" => "Turks et Caicos",
            "td" => "République Du Tchad",
            "tg" => "Togo",
            "th" => "Thaïlande",
            "tj" => "Tchétchénie",
            "tk" => "Iles Tokelau",
            "tm" => "Turkménistan",
            "tn" => "Tunisie",
            "to" => "Tonga",
            "tp" => "Timor-Oriental",
            "tr" => "Turquie",
            "tt" => "Trinité-Et-Tobago",
            "tv" => "Tuvalu",
            "tw" => "Taiwan",
            "tz" => "Tanzanie",
            "ua" => "Ukraine",
            "ug" => "Ouganda",
            "gb" => "Royaume-Uni",
            "us" => "USA",
            "uy" => "Uruguay",
            "uz" => "Ousbékistan",
            "vc" => "Saint-Vincent-Et-Les Grenadines",
            "ve" => "Vénézuela",
            "vg" => "Iles Vierges américaines",
            "vi" => "Iles Vierges Britanniques ",
            "vn" => "Viêtnam",
            "vu" => "Vanuatu",
            "wf" => "Wallis Et Futuna",
            "ws" => "Samoa Occidentales",
            "ye" => "Yémen",
            "yt" => "Mayotte",
            "yu" => "Yougoslavie",
            "za" => "Afrique Du Sud",
            "zm" => "Zambie",
            "zw" => "Zimbabwe"
            );
}

