<?php

declare(strict_types=1);

return [
    // Relation ID of the OpenstreetMap City
    'relationId' => 62409,

    // Languages in which you want to extract Wiki informations
    'languages' => ['de', 'en'],

    // Exclude datas from beeing extracted. Usefull to exclude streets at the edge of the city for example
    'exclude' => [
        'relation' => [],
        'way' => [
            /*
            15221322, // Half Included street
            */
        ],
    ],

    // Manualy assign gender to ways/relations (when there are no wikidata page for example)
    'gender' => [
        'relation' => [],
        'way' => [
            /*
            '12121212' => 'F', // Pia Mancini road
            '13131312' => 'M', // Mister nobody Street
            */
        ],
    ],

    // Array that defines what instances of Wikidata are considered "a person". (you can probably leave this as is)
    'instances' => [
        'Q5'        => true,  // human
        'Q2985549'  => true,  // mononymous person
        'Q20643955' => true,  // human biblical figure

        'Q8436'     => false, // family
        'Q101352'   => false, // family name
        'Q327245'   => false, // team
        'Q3046146'  => false, // married couple
        'Q13417114' => false, // noble family

        'Q532'      => false, // village
        'Q699'      => false, // fairy tale
        'Q2095'     => false, // food
        'Q3950'     => false, // villa
        'Q3957'     => false, // town
        'Q13266'    => false, // cookie
        'Q16521'    => false, // taxon
        'Q16917'    => false, // hospital
        'Q22865'    => false, // independent city of Germany
        'Q22698'    => false, // park
        'Q23413'    => false, // castle
        'Q23691'    => false, // national anthem
        'Q28640'    => false, // profession
        'Q45713'    => false, // titan
        'Q47521'    => false, // stream
        'Q79007'    => false, // street
        'Q81799'    => false, // fast food
        'Q95074'    => false, // fictional character
        'Q52313'    => false, // Wonnegau
        'Q123705'   => false, // neighborhood
        'Q133311'   => false, // tribe
        'Q178342'   => false, // archangel
        'Q176799'   => false, // military unit
        'Q185583'   => false, // candy
        'Q188055'   => false, // siege
        'Q200250'   => false, // metropolis
        'Q205985'   => false, // goddess
        'Q207174'   => false, // personification
        'Q212238'   => false, // civil servant
        'Q223393'   => false, // literary genre
        'Q273854'   => false, // Gauls
        'Q429795'   => false, // mineral variety
        'Q431289'   => false, // brand
        'Q476682'   => false, // anemoi
        'Q486972'   => false, // human settlement
        'Q493522'   => false, // municipality of Belgium
        'Q502895'   => false, // common name
        'Q507850'   => false, // Marian apparition
        'Q511056'   => false, // solar deity
        'Q355567'   => false, // noble title
        'Q476028'   => false, // association football club
        'Q697175'   => false, // launch vehicle
        'Q690175'   => false, // angel in Judaism
        'Q707813'   => false, // Hanseatic city
        'Q727002'   => false, // charter
        'Q879050'   => false, // manor house
        'Q902814'   => false, // border town
        'Q225615'   => false, // Wildwechsel
        'Q474862'   => false, // Frauen im Nationalsozialismus
        'Q1078463'  => false, // Fräswerkzeug
        'Q1234885'  => false, // Dohne, Fangschlinge
        'Q1259941'  => false, // Waldrand
        'Q1281102'  => false, // Pflanzenart Rotdorn
        'Q1369438'  => false, // Staude
        'Q1419649'  => false, // Großer Jüdenhof
        'Q1583695'  => false, // Hanseaten
        'Q1623470'  => false, // Hohe Jagd
        'Q1797027'  => false, // Verband Groß-Berlin
        'Q1918298'  => false, // Meister Lampe
        'Q1259941'  => false, // Woodland edge
        'Q1419649'  => false, // Großer Jüdenhof
        'Q1583695'  => false, // Hanseaten
        'Q1964689'  => false, // fictional city
        'Q1202402'  => false, // townhouse
        'Q1509831'  => false, // title of Mary
        'Q1549591'  => false, // big city
        'Q1637706'  => false, // city with millions of inhabitants
        'Q1916821'  => false, // water deity
        'Q1998962'  => false, // beer style
        'Q2202509'  => false, // Roman city
        'Q2785216'  => false, // municipality section
        'Q3058029'  => false, // sector of Rwanda
        'Q3305213'  => false, // painting
        'Q3658341'  => false, // literary character
        'Q4164871'  => false, // position
        'Q4306757'  => false, // Mukarrabun
        'Q5200157'  => false, // confections
        'Q6857854'  => false, // military road
        'Q7832362'  => false, // traditional story
        'Q2499829'  => false, // Upstall
        'Q8166286'  => false, // Category 1983 Dutch sport
        'Q19963327' => false, // Maschinenfabrik Cyclop
        'Q20826048' => false, // Fenn
        'Q48756813' => false, // Freigut
        'Q10822464' => false, // angel in Christianity
        'Q11688446' => false, // Roman deity
        'Q12737077' => false, // occupation
        'Q14073567' => false, // sibling duo
        'Q14406742' => false, // comic book series
        'Q14752696' => false, // Roman building
        'Q15054484' => false, // Belgian noble family
        'Q15273785' => false, // Belgian municipality with city privileges
        'Q15632617' => false, // fictional human
        'Q16861482' => false, // potée
        'Q18679117' => false, // potato dish
        'Q19594662' => false, // fictional fox
        'Q20202269' => false, // music term
        'Q20902363' => false, // mythical human-animal hybrid
        'Q21070568' => false, // human who may be fictional
        'Q22675015' => false, // type of quantum particle
        'Q22988604' => false, // mythological Greek character
        'Q22989102' => false, // Greek deity
        'Q22999537' => false, // vehicle family
        'Q24284226' => false, // agricultural deity
        'Q24434794' => false, // king in Greek mythology
        'Q25810847' => false, // folkloristic character
        'Q27921916' => false, // anthropomorphic character
        'Q41863069' => false, // war deity
        'Q42109240' => false, // literary theme
        'Q42744322' => false, // urban municipality of Germany
        'Q50386450' => false, // operatic character
        'Q55983715' => false, // polyphyletic common name
        'Q56884562' => false, // animated film series
        'Q85635630' => false, // urban district of North Rhine-Westphalia
        'Q89522629' => false, // poetic form
        'Q24334976' => false, // nordic mythical location
    ],
];
