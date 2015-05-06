<?php
add_action('init', 'of_options');
if (!function_exists('of_options')) {
    function of_options()
    {
        $of_categories = array();
        $of_categories_obj = get_categories('hide_empty=0');
        foreach ($of_categories_obj as $of_cat) {
            $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;
        }
        $categories_tmp = array_unshift($of_categories, "Select a category:");
//Access the WordPress Pages via an Array
        $of_pages = array();
        $of_pages_obj = get_pages();
        foreach ($of_pages_obj as $of_page) {
            $of_pages[$of_page->ID] = $of_page->post_name;
        }
        $of_pages_tmp = array_unshift($of_pages,"Select page");
//Sample Homepage blocks for the layout manager (sorter)
        $of_options_homepage_blocks = array
        (
            "disabled" => array(
                "placebo" => "placebo", //REQUIRED!
                "section_blank1" => "Blank1",
                "section_blank2" => "Blank2",
                "section_blank3" => "Blank3",
                "section_recent" => "Recent posts"

            ),
            "enabled" => array(
                "placebo" => "placebo", //REQUIRED!
                "section_about_us" => "About Us",
                "section_portfolio" => "Portfolio",
                "section_pricing" => "Pricing Table",
                "section_service" => "Service",
                "section_woo" => "WooSection",
                "section_contact" => "Contact Us"

            ),
        );
$names = array();
$taxonomies = get_terms('project-type', 'orderby=count&hide_empty=0');
foreach ($taxonomies as $tax){
	$names[$tax->slug] = $tax->name;
}
$placebo_array = array("placebo" => "placebo");
$portfolio_categorie = $placebo_array + $names;
$of_options_portfolio_categories = array
        (
            "disabled" => array(
                "placebo" => "placebo", //REQUIRED!
            ),
            "enabled" => $portfolio_categorie,
        );
        /*-----------------------------------------------------------------------------------*/
        /* TO DO: Add options/functions that use these */
        /*-----------------------------------------------------------------------------------*/

// Google fonts weight
        $google_fonts_weight = array(
            "none" => "font-weight",
            "300" => "300",
            "400" => "400",
            "500" => "500",
            "600" => "600",
            "700" => "700",
            "900" => "900"
        );
// Google fonts weight
        $google_fonts_style = array(
            "normal" => "font-style",
            "normal" => "Normal",
            "italic" => "Italic",
        );
// Google fonts
        $google_fonts = array(
            "none" => "Select Font",
            "ABeeZee" => "ABeeZee",
            "Abel" => "Abel",
            "Abril Fatface" => "Abril Fatface",
            "Aclonica" => "Aclonica",
            "Acme" => "Acme",
            "Actor" => "Actor",
            "Adamina" => "Adamina",
            "Advent Pro" => "Advent Pro",
            "Aguafina Script" => "Aguafina Script",
            "Akronim" => "Akronim",
            "Aladin" => "Aladin",
            "Aldrich" => "Aldrich",
            "Alegreya" => "Alegreya",
            "Alegreya SC" => "Alegreya SC",
            "Alex Brush" => "Alex Brush",
            "Alfa Slab One" => "Alfa Slab One",
            "Alice" => "Alice",
            "Alike" => "Alike",
            "Alike Angular" => "Alike Angular",
            "Allan" => "Allan",
            "Allerta" => "Allerta",
            "Allerta Stencil" => "Allerta Stencil",
            "Allura" => "Allura",
            "Almendra" => "Almendra",
            "Almendra Display" => "Almendra Display",
            "Almendra SC" => "Almendra SC",
            "Amarante" => "Amarante",
            "Amaranth" => "Amaranth",
            "Amatic SC" => "Amatic SC",
            "Amethysta" => "Amethysta",
            "Anaheim" => "Anaheim",
            "Andada" => "Andada",
            "Andika" => "Andika",
            "Angkor" => "Angkor",
            "Annie Use Your Telescope" => "Annie Use Your Telescope",
            "Anonymous Pro" => "Anonymous Pro",
            "Antic" => "Antic",
            "Antic Didone" => "Antic Didone",
            "Antic Slab" => "Antic Slab",
            "Anton" => "Anton",
            "Arapey" => "Arapey",
            "Arbutus" => "Arbutus",
            "Arbutus Slab" => "Arbutus Slab",
            "Architects Daughter" => "Architects Daughter",
            "Archivo Black" => "Archivo Black",
            "Archivo Narrow" => "Archivo Narrow",
            "Arimo" => "Arimo",
            "Arizonia" => "Arizonia",
            "Armata" => "Armata",
            "Artifika" => "Artifika",
            "Arvo" => "Arvo",
            "Asap" => "Asap",
            "Asset" => "Asset",
            "Astloch" => "Astloch",
            "Asul" => "Asul",
            "Atomic Age" => "Atomic Age",
            "Aubrey" => "Aubrey",
            "Audiowide" => "Audiowide",
            "Autour One" => "Autour One",
            "Average" => "Average",
            "Average Sans" => "Average Sans",
            "Averia Gruesa Libre" => "Averia Gruesa Libre",
            "Averia Libre" => "Averia Libre",
            "Averia Sans Libre" => "Averia Sans Libre",
            "Averia Serif Libre" => "Averia Serif Libre",
            "Bad Script" => "Bad Script",
            "Balthazar" => "Balthazar",
            "Bangers" => "Bangers",
            "Basic" => "Basic",
            "Battambang" => "Battambang",
            "Baumans" => "Baumans",
            "Bayon" => "Bayon",
            "Belgrano" => "Belgrano",
            "Belleza" => "Belleza",
            "BenchNine" => "BenchNine",
            "Bentham" => "Bentham",
            "Berkshire Swash" => "Berkshire Swash",
            "Bevan" => "Bevan",
            "Bigelow Rules" => "Bigelow Rules",
            "Bigshot One" => "Bigshot One",
            "Bilbo" => "Bilbo",
            "Bilbo Swash Caps" => "Bilbo Swash Caps",
            "Bitter" => "Bitter",
            "Black Ops One" => "Black Ops One",
            "Bokor" => "Bokor",
            "Bonbon" => "Bonbon",
            "Boogaloo" => "Boogaloo",
            "Bowlby One" => "Bowlby One",
            "Bowlby One SC" => "Bowlby One SC",
            "Brawler" => "Brawler",
            "Bree Serif" => "Bree Serif",
            "Bubblegum Sans" => "Bubblegum Sans",
            "Bubbler One" => "Bubbler One",
            "Buda" => "Buda",
            "Buenard" => "Buenard",
            "Butcherman" => "Butcherman",
            "Butterfly Kids" => "Butterfly Kids",
            "Cabin" => "Cabin",
            "Cabin Condensed" => "Cabin Condensed",
            "Cabin Sketch" => "Cabin Sketch",
            "Caesar Dressing" => "Caesar Dressing",
            "Cagliostro" => "Cagliostro",
            "Calligraffitti" => "Calligraffitti",
            "Cambo" => "Cambo",
            "Candal" => "Candal",
            "Cantarell" => "Cantarell",
            "Cantata One" => "Cantata One",
            "Cantora One" => "Cantora One",
            "Capriola" => "Capriola",
            "Cardo" => "Cardo",
            "Carme" => "Carme",
            "Carrois Gothic" => "Carrois Gothic",
            "Carrois Gothic SC" => "Carrois Gothic SC",
            "Carter One" => "Carter One",
            "Caudex" => "Caudex",
            "Cedarville Cursive" => "Cedarville Cursive",
            "Ceviche One" => "Ceviche One",
            "Changa One" => "Changa One",
            "Chango" => "Chango",
            "Chau Philomene One" => "Chau Philomene One",
            "Chela One" => "Chela One",
            "Chelsea Market" => "Chelsea Market",
            "Chenla" => "Chenla",
            "Cherry Cream Soda" => "Cherry Cream Soda",
            "Cherry Swash" => "Cherry Swash",
            "Chewy" => "Chewy",
            "Chicle" => "Chicle",
            "Chivo" => "Chivo",
            "Cinzel" => "Cinzel",
            "Cinzel Decorative" => "Cinzel Decorative",
            "Clicker Script" => "Clicker Script",
            "Coda" => "Coda",
            "Coda Caption" => "Coda Caption",
            "Codystar" => "Codystar",
            "Combo" => "Combo",
            "Comfortaa" => "Comfortaa",
            "Coming Soon" => "Coming Soon",
            "Concert One" => "Concert One",
            "Condiment" => "Condiment",
            "Content" => "Content",
            "Contrail One" => "Contrail One",
            "Convergence" => "Convergence",
            "Cookie" => "Cookie",
            "Copse" => "Copse",
            "Corben" => "Corben",
            "Courgette" => "Courgette",
            "Cousine" => "Cousine",
            "Coustard" => "Coustard",
            "Covered By Your Grace" => "Covered By Your Grace",
            "Crafty Girls" => "Crafty Girls",
            "Creepster" => "Creepster",
            "Crete Round" => "Crete Round",
            "Crimson Text" => "Crimson Text",
            "Croissant One" => "Croissant One",
            "Crushed" => "Crushed",
            "Cuprum" => "Cuprum",
            "Cutive" => "Cutive",
            "Cutive Mono" => "Cutive Mono",
            "Damion" => "Damion",
            "Dancing Script" => "Dancing Script",
            "Dangrek" => "Dangrek",
            "Dawning of a New Day" => "Dawning of a New Day",
            "Days One" => "Days One",
            "Delius" => "Delius",
            "Delius Swash Caps" => "Delius Swash Caps",
            "Delius Unicase" => "Delius Unicase",
            "Della Respira" => "Della Respira",
            "Denk One" => "Denk One",
            "Devonshire" => "Devonshire",
            "Didact Gothic" => "Didact Gothic",
            "Diplomata" => "Diplomata",
            "Diplomata SC" => "Diplomata SC",
            "Domine" => "Domine",
            "Donegal One" => "Donegal One",
            "Doppio One" => "Doppio One",
            "Dorsa" => "Dorsa",
            "Dosis" => "Dosis",
            "Dr Sugiyama" => "Dr Sugiyama",
            "Droid Sans" => "Droid Sans",
            "Droid Sans Mono" => "Droid Sans Mono",
            "Droid Serif" => "Droid Serif",
            "Duru Sans" => "Duru Sans",
            "Dynalight" => "Dynalight",
            "EB Garamond" => "EB Garamond",
            "Eagle Lake" => "Eagle Lake",
            "Eater" => "Eater",
            "Economica" => "Economica",
            "Electrolize" => "Electrolize",
            "Elsie" => "Elsie",
            "Elsie Swash Caps" => "Elsie Swash Caps",
            "Emblema One" => "Emblema One",
            "Emilys Candy" => "Emilys Candy",
            "Engagement" => "Engagement",
            "Englebert" => "Englebert",
            "Enriqueta" => "Enriqueta",
            "Erica One" => "Erica One",
            "Esteban" => "Esteban",
            "Euphoria Script" => "Euphoria Script",
            "Ewert" => "Ewert",
            "Exo" => "Exo",
            "Expletus Sans" => "Expletus Sans",
            "Fanwood Text" => "Fanwood Text",
            "Fascinate" => "Fascinate",
            "Fascinate Inline" => "Fascinate Inline",
            "Faster One" => "Faster One",
            "Fasthand" => "Fasthand",
            "Federant" => "Federant",
            "Federo" => "Federo",
            "Felipa" => "Felipa",
            "Fenix" => "Fenix",
            "Finger Paint" => "Finger Paint",
            "Fjalla One" => "Fjalla One",
            "Fjord One" => "Fjord One",
            "Flamenco" => "Flamenco",
            "Flavors" => "Flavors",
            "Fondamento" => "Fondamento",
            "Fontdiner Swanky" => "Fontdiner Swanky",
            "Forum" => "Forum",
            "Francois One" => "Francois One",
            "Freckle Face" => "Freckle Face",
            "Fredericka the Great" => "Fredericka the Great",
            "Fredoka One" => "Fredoka One",
            "Freehand" => "Freehand",
            "Fresca" => "Fresca",
            "Frijole" => "Frijole",
            "Fruktur" => "Fruktur",
            "Fugaz One" => "Fugaz One",
            "GFS Didot" => "GFS Didot",
            "GFS Neohellenic" => "GFS Neohellenic",
            "Gabriela" => "Gabriela",
            "Gafata" => "Gafata",
            "Galdeano" => "Galdeano",
            "Galindo" => "Galindo",
            "Gentium Basic" => "Gentium Basic",
            "Gentium Book Basic" => "Gentium Book Basic",
            "Geo" => "Geo",
            "Geostar" => "Geostar",
            "Geostar Fill" => "Geostar Fill",
            "Germania One" => "Germania One",
            "Gilda Display" => "Gilda Display",
            "Give You Glory" => "Give You Glory",
            "Glass Antiqua" => "Glass Antiqua",
            "Glegoo" => "Glegoo",
            "Gloria Hallelujah" => "Gloria Hallelujah",
            "Goblin One" => "Goblin One",
            "Gochi Hand" => "Gochi Hand",
            "Gorditas" => "Gorditas",
            "Goudy Bookletter 1911" => "Goudy Bookletter 1911",
            "Graduate" => "Graduate",
            "Grand Hotel" => "Grand Hotel",
            "Gravitas One" => "Gravitas One",
            "Great Vibes" => "Great Vibes",
            "Griffy" => "Griffy",
            "Gruppo" => "Gruppo",
            "Gudea" => "Gudea",
            "Habibi" => "Habibi",
            "Hammersmith One" => "Hammersmith One",
            "Hanalei" => "Hanalei",
            "Hanalei Fill" => "Hanalei Fill",
            "Handlee" => "Handlee",
            "Hanuman" => "Hanuman",
            "Happy Monkey" => "Happy Monkey",
            "Headland One" => "Headland One",
            "Henny Penny" => "Henny Penny",
            "Herr Von Muellerhoff" => "Herr Von Muellerhoff",
            "Holtwood One SC" => "Holtwood One SC",
            "Homemade Apple" => "Homemade Apple",
            "Homenaje" => "Homenaje",
            "IM Fell DW Pica" => "IM Fell DW Pica",
            "IM Fell DW Pica SC" => "IM Fell DW Pica SC",
            "IM Fell Double Pica" => "IM Fell Double Pica",
            "IM Fell Double Pica SC" => "IM Fell Double Pica SC",
            "IM Fell English" => "IM Fell English",
            "IM Fell English SC" => "IM Fell English SC",
            "IM Fell French Canon" => "IM Fell French Canon",
            "IM Fell French Canon SC" => "IM Fell French Canon SC",
            "IM Fell Great Primer" => "IM Fell Great Primer",
            "IM Fell Great Primer SC" => "IM Fell Great Primer SC",
            "Iceberg" => "Iceberg",
            "Iceland" => "Iceland",
            "Imprima" => "Imprima",
            "Inconsolata" => "Inconsolata",
            "Inder" => "Inder",
            "Indie Flower" => "Indie Flower",
            "Inika" => "Inika",
            "Irish Grover" => "Irish Grover",
            "Istok Web" => "Istok Web",
            "Italiana" => "Italiana",
            "Italianno" => "Italianno",
            "Jacques Francois" => "Jacques Francois",
            "Jacques Francois Shadow" => "Jacques Francois Shadow",
            "Jim Nightshade" => "Jim Nightshade",
            "Jockey One" => "Jockey One",
            "Jolly Lodger" => "Jolly Lodger",
            "Josefin Sans" => "Josefin Sans",
            "Josefin Slab" => "Josefin Slab",
            "Joti One" => "Joti One",
            "Judson" => "Judson",
            "Julee" => "Julee",
            "Julius Sans One" => "Julius Sans One",
            "Junge" => "Junge",
            "Jura" => "Jura",
            "Just Another Hand" => "Just Another Hand",
            "Just Me Again Down Here" => "Just Me Again Down Here",
            "Kameron" => "Kameron",
            "Karla" => "Karla",
            "Kaushan Script" => "Kaushan Script",
            "Kavoon" => "Kavoon",
            "Keania One" => "Keania One",
            "Kelly Slab" => "Kelly Slab",
            "Kenia" => "Kenia",
            "Khmer" => "Khmer",
            "Kite One" => "Kite One",
            "Knewave" => "Knewave",
            "Kotta One" => "Kotta One",
            "Koulen" => "Koulen",
            "Kranky" => "Kranky",
            "Kreon" => "Kreon",
            "Kristi" => "Kristi",
            "Krona One" => "Krona One",
            "La Belle Aurore" => "La Belle Aurore",
            "Lancelot" => "Lancelot",
            "Lato" => "Lato",
            "League Script" => "League Script",
            "Leckerli One" => "Leckerli One",
            "Ledger" => "Ledger",
            "Lekton" => "Lekton",
            "Lemon" => "Lemon",
            "Libre Baskerville" => "Libre Baskerville",
            "Life Savers" => "Life Savers",
            "Lilita One" => "Lilita One",
            "Limelight" => "Limelight",
            "Linden Hill" => "Linden Hill",
            "Lobster" => "Lobster",
            "Lobster Two" => "Lobster Two",
            "Londrina Outline" => "Londrina Outline",
            "Londrina Shadow" => "Londrina Shadow",
            "Londrina Sketch" => "Londrina Sketch",
            "Londrina Solid" => "Londrina Solid",
            "Lora" => "Lora",
            "Love Ya Like A Sister" => "Love Ya Like A Sister",
            "Loved by the King" => "Loved by the King",
            "Lovers Quarrel" => "Lovers Quarrel",
            "Luckiest Guy" => "Luckiest Guy",
            "Lusitana" => "Lusitana",
            "Lustria" => "Lustria",
            "Macondo" => "Macondo",
            "Macondo Swash Caps" => "Macondo Swash Caps",
            "Magra" => "Magra",
            "Maiden Orange" => "Maiden Orange",
            "Mako" => "Mako",
            "Marcellus" => "Marcellus",
            "Marcellus SC" => "Marcellus SC",
            "Marck Script" => "Marck Script",
            "Margarine" => "Margarine",
            "Marko One" => "Marko One",
            "Marmelad" => "Marmelad",
            "Marvel" => "Marvel",
            "Mate" => "Mate",
            "Mate SC" => "Mate SC",
            "Maven Pro" => "Maven Pro",
            "McLaren" => "McLaren",
            "Meddon" => "Meddon",
            "MedievalSharp" => "MedievalSharp",
            "Medula One" => "Medula One",
            "Megrim" => "Megrim",
            "Meie Script" => "Meie Script",
            "Merienda" => "Merienda",
            "Merienda One" => "Merienda One",
            "Merriweather" => "Merriweather",
            "Merriweather Sans" => "Merriweather Sans",
            "Metal" => "Metal",
            "Metal Mania" => "Metal Mania",
            "Metamorphous" => "Metamorphous",
            "Metrophobic" => "Metrophobic",
            "Michroma" => "Michroma",
            "Milonga" => "Milonga",
            "Miltonian" => "Miltonian",
            "Miltonian Tattoo" => "Miltonian Tattoo",
            "Miniver" => "Miniver",
            "Miss Fajardose" => "Miss Fajardose",
            "Modern Antiqua" => "Modern Antiqua",
            "Molengo" => "Molengo",
            "Molle" => "Molle",
            "Monda" => "Monda",
            "Monofett" => "Monofett",
            "Monoton" => "Monoton",
            "Monsieur La Doulaise" => "Monsieur La Doulaise",
            "Montaga" => "Montaga",
            "Montez" => "Montez",
            "Montserrat" => "Montserrat",
            "Montserrat Alternates" => "Montserrat Alternates",
            "Montserrat Subrayada" => "Montserrat Subrayada",
            "Moul" => "Moul",
            "Moulpali" => "Moulpali",
            "Mountains of Christmas" => "Mountains of Christmas",
            "Mouse Memoirs" => "Mouse Memoirs",
            "Mr Bedfort" => "Mr Bedfort",
            "Mr Dafoe" => "Mr Dafoe",
            "Mr De Haviland" => "Mr De Haviland",
            "Mrs Saint Delafield" => "Mrs Saint Delafield",
            "Mrs Sheppards" => "Mrs Sheppards",
            "Muli" => "Muli",
            "Mystery Quest" => "Mystery Quest",
            "Neucha" => "Neucha",
            "Neuton" => "Neuton",
            "New Rocker" => "New Rocker",
            "News Cycle" => "News Cycle",
            "Niconne" => "Niconne",
            "Nixie One" => "Nixie One",
            "Nobile" => "Nobile",
            "Nokora" => "Nokora",
            "Norican" => "Norican",
            "Nosifer" => "Nosifer",
            "Nothing You Could Do" => "Nothing You Could Do",
            "Noticia Text" => "Noticia Text",
            "Noto Sans" => "Noto Sans",
            "Noto Serif" => "Noto Serif",
            "Nova Cut" => "Nova Cut",
            "Nova Flat" => "Nova Flat",
            "Nova Mono" => "Nova Mono",
            "Nova Oval" => "Nova Oval",
            "Nova Round" => "Nova Round",
            "Nova Script" => "Nova Script",
            "Nova Slim" => "Nova Slim",
            "Nova Square" => "Nova Square",
            "Numans" => "Numans",
            "Nunito" => "Nunito",
            "Odor Mean Chey" => "Odor Mean Chey",
            "Offside" => "Offside",
            "Old Standard TT" => "Old Standard TT",
            "Oldenburg" => "Oldenburg",
            "Oleo Script" => "Oleo Script",
            "Oleo Script Swash Caps" => "Oleo Script Swash Caps",
            "Open Sans" => "Open Sans",
            "Open Sans Condensed" => "Open Sans Condensed",
            "Oranienbaum" => "Oranienbaum",
            "Orbitron" => "Orbitron",
            "Oregano" => "Oregano",
            "Orienta" => "Orienta",
            "Original Surfer" => "Original Surfer",
            "Oswald" => "Oswald",
            "Over the Rainbow" => "Over the Rainbow",
            "Overlock" => "Overlock",
            "Overlock SC" => "Overlock SC",
            "Ovo" => "Ovo",
            "Oxygen" => "Oxygen",
            "Oxygen Mono" => "Oxygen Mono",
            "PT Mono" => "PT Mono",
            "PT Sans" => "PT Sans",
            "PT Sans Caption" => "PT Sans Caption",
            "PT Sans Narrow" => "PT Sans Narrow",
            "PT Serif" => "PT Serif",
            "PT Serif Caption" => "PT Serif Caption",
            "Pacifico" => "Pacifico",
            "Paprika" => "Paprika",
            "Parisienne" => "Parisienne",
            "Passero One" => "Passero One",
            "Passion One" => "Passion One",
            "Patrick Hand" => "Patrick Hand",
            "Patrick Hand SC" => "Patrick Hand SC",
            "Patua One" => "Patua One",
            "Paytone One" => "Paytone One",
            "Peralta" => "Peralta",
            "Permanent Marker" => "Permanent Marker",
            "Petit Formal Script" => "Petit Formal Script",
            "Petrona" => "Petrona",
            "Philosopher" => "Philosopher",
            "Piedra" => "Piedra",
            "Pinyon Script" => "Pinyon Script",
            "Pirata One" => "Pirata One",
            "Plaster" => "Plaster",
            "Play" => "Play",
            "Playball" => "Playball",
            "Playfair Display" => "Playfair Display",
            "Playfair Display SC" => "Playfair Display SC",
            "Podkova" => "Podkova",
            "Poiret One" => "Poiret One",
            "Poller One" => "Poller One",
            "Poly" => "Poly",
            "Pompiere" => "Pompiere",
            "Pontano Sans" => "Pontano Sans",
            "Port Lligat Sans" => "Port Lligat Sans",
            "Port Lligat Slab" => "Port Lligat Slab",
            "Prata" => "Prata",
            "Preahvihear" => "Preahvihear",
            "Press Start 2P" => "Press Start 2P",
            "Princess Sofia" => "Princess Sofia",
            "Prociono" => "Prociono",
            "Prosto One" => "Prosto One",
            "Puritan" => "Puritan",
            "Purple Purse" => "Purple Purse",
            "Quando" => "Quando",
            "Quantico" => "Quantico",
            "Quattrocento" => "Quattrocento",
            "Quattrocento Sans" => "Quattrocento Sans",
            "Questrial" => "Questrial",
            "Quicksand" => "Quicksand",
            "Quintessential" => "Quintessential",
            "Qwigley" => "Qwigley",
            "Racing Sans One" => "Racing Sans One",
            "Radley" => "Radley",
            "Raleway" => "Raleway",
            "Raleway Dots" => "Raleway Dots",
            "Rambla" => "Rambla",
            "Rammetto One" => "Rammetto One",
            "Ranchers" => "Ranchers",
            "Rancho" => "Rancho",
            "Rationale" => "Rationale",
            "Redressed" => "Redressed",
            "Reenie Beanie" => "Reenie Beanie",
            "Revalia" => "Revalia",
            "Ribeye" => "Ribeye",
            "Ribeye Marrow" => "Ribeye Marrow",
            "Righteous" => "Righteous",
            "Risque" => "Risque",
            "Roboto" => "Roboto",
            "Roboto Condensed" => "Roboto Condensed",
            "Roboto Slab" => "Roboto Slab",
            "Rochester" => "Rochester",
            "Rock Salt" => "Rock Salt",
            "Rokkitt" => "Rokkitt",
            "Romanesco" => "Romanesco",
            "Ropa Sans" => "Ropa Sans",
            "Rosario" => "Rosario",
            "Rosarivo" => "Rosarivo",
            "Rouge Script" => "Rouge Script",
            "Ruda" => "Ruda",
            "Rufina" => "Rufina",
            "Ruge Boogie" => "Ruge Boogie",
            "Ruluko" => "Ruluko",
            "Rum Raisin" => "Rum Raisin",
            "Ruslan Display" => "Ruslan Display",
            "Russo One" => "Russo One",
            "Ruthie" => "Ruthie",
            "Rye" => "Rye",
            "Sacramento" => "Sacramento",
            "Sail" => "Sail",
            "Salsa" => "Salsa",
            "Sanchez" => "Sanchez",
            "Sancreek" => "Sancreek",
            "Sansita One" => "Sansita One",
            "Sarina" => "Sarina",
            "Satisfy" => "Satisfy",
            "Scada" => "Scada",
            "Schoolbell" => "Schoolbell",
            "Seaweed Script" => "Seaweed Script",
            "Sevillana" => "Sevillana",
            "Seymour One" => "Seymour One",
            "Shadows Into Light" => "Shadows Into Light",
            "Shadows Into Light Two" => "Shadows Into Light Two",
            "Shanti" => "Shanti",
            "Share" => "Share",
            "Share Tech" => "Share Tech",
            "Share Tech Mono" => "Share Tech Mono",
            "Shojumaru" => "Shojumaru",
            "Short Stack" => "Short Stack",
            "Siemreap" => "Siemreap",
            "Sigmar One" => "Sigmar One",
            "Signika" => "Signika",
            "Signika Negative" => "Signika Negative",
            "Simonetta" => "Simonetta",
            "Sintony" => "Sintony",
            "Sirin Stencil" => "Sirin Stencil",
            "Six Caps" => "Six Caps",
            "Skranji" => "Skranji",
            "Slackey" => "Slackey",
            "Smokum" => "Smokum",
            "Smythe" => "Smythe",
            "Sniglet" => "Sniglet",
            "Snippet" => "Snippet",
            "Snowburst One" => "Snowburst One",
            "Sofadi One" => "Sofadi One",
            "Sofia" => "Sofia",
            "Sonsie One" => "Sonsie One",
            "Sorts Mill Goudy" => "Sorts Mill Goudy",
            "Source Code Pro" => "Source Code Pro",
            "Source Sans Pro" => "Source Sans Pro",
            "Special Elite" => "Special Elite",
            "Spicy Rice" => "Spicy Rice",
            "Spinnaker" => "Spinnaker",
            "Spirax" => "Spirax",
            "Squada One" => "Squada One",
            "Stalemate" => "Stalemate",
            "Stalinist One" => "Stalinist One",
            "Stardos Stencil" => "Stardos Stencil",
            "Stint Ultra Condensed" => "Stint Ultra Condensed",
            "Stint Ultra Expanded" => "Stint Ultra Expanded",
            "Stoke" => "Stoke",
            "Strait" => "Strait",
            "Sue Ellen Francisco" => "Sue Ellen Francisco",
            "Sunshiney" => "Sunshiney",
            "Supermercado One" => "Supermercado One",
            "Suwannaphum" => "Suwannaphum",
            "Swanky and Moo Moo" => "Swanky and Moo Moo",
            "Syncopate" => "Syncopate",
            "Tangerine" => "Tangerine",
            "Taprom" => "Taprom",
            "Tauri" => "Tauri",
            "Telex" => "Telex",
            "Tenor Sans" => "Tenor Sans",
            "Text Me One" => "Text Me One",
            "The Girl Next Door" => "The Girl Next Door",
            "Tienne" => "Tienne",
            "Tinos" => "Tinos",
            "Titan One" => "Titan One",
            "Titillium Web" => "Titillium Web",
            "Trade Winds" => "Trade Winds",
            "Trocchi" => "Trocchi",
            "Trochut" => "Trochut",
            "Trykker" => "Trykker",
            "Tulpen One" => "Tulpen One",
            "Ubuntu" => "Ubuntu",
            "Ubuntu Condensed" => "Ubuntu Condensed",
            "Ubuntu Mono" => "Ubuntu Mono",
            "Ultra" => "Ultra",
            "Uncial Antiqua" => "Uncial Antiqua",
            "Underdog" => "Underdog",
            "Unica One" => "Unica One",
            "UnifrakturCook" => "UnifrakturCook",
            "UnifrakturMaguntia" => "UnifrakturMaguntia",
            "Unkempt" => "Unkempt",
            "Unlock" => "Unlock",
            "Unna" => "Unna",
            "VT323" => "VT323",
            "Vampiro One" => "Vampiro One",
            "Varela" => "Varela",
            "Varela Round" => "Varela Round",
            "Vast Shadow" => "Vast Shadow",
            "Vibur" => "Vibur",
            "Vidaloka" => "Vidaloka",
            "Viga" => "Viga",
            "Voces" => "Voces",
            "Volkhov" => "Volkhov",
            "Vollkorn" => "Vollkorn",
            "Voltaire" => "Voltaire",
            "Waiting for the Sunrise" => "Waiting for the Sunrise",
            "Wallpoet" => "Wallpoet",
            "Walter Turncoat" => "Walter Turncoat",
            "Warnes" => "Warnes",
            "Wellfleet" => "Wellfleet",
            "Wendy One" => "Wendy One",
            "Wire One" => "Wire One",
            "Yanone Kaffeesatz" => "Yanone Kaffeesatz",
            "Yellowtail" => "Yellowtail",
            "Yeseva One" => "Yeseva One",
            "Yesteryear" => "Yesteryear",
            "Zeyada" => "Zeyada"
        );
        /*-----------------------------------------------------------------------------------*/
        /* The Options Array */
        /*-----------------------------------------------------------------------------------*/
// Set the Options Array
        global $of_options;
        $of_options = array();
#=========================================#
# GENERAL SETTINGS #
#=========================================#
        $of_options[] = array("name" => "General",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Hello there!",
            "desc" => "",
            "id" => "hello",
            "std" => "<h3 style=\"margin: 0 0 10px;\">Welcome to the OceanPlaza Options.</h3>",
            "icon" => true,
            "type" => "info"
        );
        $of_options[] = array("name" => "Custom Favicon ICO",
            "desc" => "Upload a 16px x 16px ico image that will represent your website's favicon.",
            "id" => "custom_favicon_ie",
            "std" => get_template_directory_uri() . "/images/favicon/favicon.ico",
            "type" => "upload"
        );
        $of_options[] = array("name" => "Custom Favicon PNG",
            "desc" => "Upload a 16px x 16px PNG/GIF image that will represent your website's favicon.",
            "id" => "custom_favicon_mod",
            "std" => get_template_directory_uri() . "/images/favicon/16x16.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "Iphone Favicon",
            "desc" => "Upload a 57px x 57px PNG/GIF image that will represent your website's favicon on Iphone.",
            "id" => "custom_favicon_iphone",
            "std" => get_template_directory_uri() . "/images/favicon/apple-touch-icon-57x57-precomposed.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "Ipad Favicon",
            "desc" => "Upload a 72px x 72px PNG/GIF image that will represent your website's favicon on Ipad.",
            "id" => "custom_favicon_ipad",
            "std" => get_template_directory_uri() . "/images/favicon/apple-touch-icon-72x72-precomposed.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "Retina Favicon",
            "desc" => "Upload a 114px x 114px PNG/GIF image that will represent your website's favicon on retina display.",
            "id" => "custom_favicon_retina",
            "std" => get_template_directory_uri() . "/images/favicon/apple-touch-icon-114x114-precomposed.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "Retina Favicon",
            "desc" => "Upload a 144px x 144px PNG/GIF image that will represent your website's favicon on retina display.",
            "id" => "custom_favicon_retina",
            "std" => get_template_directory_uri() . "/images/favicon/apple-touch-icon-144x144-precomposed.png",
            "type" => "upload"
        );

        $of_options[] = array("name" => "Tracking Code",
            "desc" => "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
            "id" => "google_analytics",
            "std" => "",
            "type" => "textarea"
        );
        $of_options[] = array("name" => "Code before &lt;/head&gt;",
            "desc" => "Paste your code here. This will be added before </head> tag.",
            "id" => "before_head",
            "std" => "",
            "type" => "textarea"
        );
        $of_options[] = array("name" => "Code before &lt;/body&gt;",
            "desc" => "Paste your code here. This will be added before </body> tag.",
            "id" => "before_body",
            "std" => "",
            "type" => "textarea"
        );
        $of_options[] = array("name" => "SEO",
            "desc" => "",
            "id" => "introduction",
            "std" => "<h3 style=\"margin: 0 0 0px;\">SEO.</h3>Paste your site keywords, description & title for SEO optimization. 250 symbols recommended!",
            "icon" => true,
            "type" => "info"
        );
        $of_options[] = array("name" => "Site Title",
            "desc" => "",
            "id" => "site_title",
            "std" => "Ocean Plaza",
            "type" => "text"
        );
        $of_options[] = array("name" => "Keywords",
            "desc" => "Insert your keywords comma seperated. Ex: Parallax, Responsive, HTML5, CSS3.",
            "id" => "site_keywords",
            "std" => "Parallax, Responsive, HTML5, CSS3",
            "type" => "textarea"
        );
        $of_options[] = array("name" => "Description",
            "desc" => "Insert your keywords comma seperated. Ex: Responsive parallax HTML5 & CSS3 WordPress premium theme.",
            "id" => "site_desc",
            "std" => "Responsive parallax HTML5 & CSS3 WordPress premium theme.",
            "type" => "textarea"
        );
#=========================================#
# HEADER SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Header",
            "type" => "heading"
        );
        
        $of_options[] = array("name" => "Top Parallax Menu",	 	
           "desc" => "Disable Main Menu & Enable Parallax?",	 	
           "id" => "top_parallax_nav",	 	
           "std" => 0,	 	
	       "type" => "switch"	 	
        );
        $of_options[] = array("name" => "Logo",
            "desc" => "Upload a Logo PNG/GIF image that will represent your website.",
            "id" => "logo",
            "std" => get_template_directory_uri() . "/images/logo.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "Retina Logo",
            "desc" => "Upload a big Logo PNG/GIF image that will represent your website on retina display.",
            "id" => "logo_retina",
            "std" => get_template_directory_uri() . "/images/retina_logo.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "",
            "desc" => "Retina logo width should be the same as real logo width. Don't use 'px'",
            "id" => "logo_retina_w",
            "std" => "213",
            "type" => "text"
        );
        $of_options[] = array("name" => "",
            "desc" => "Retina logo height should be the same as real logo height. Don't use 'px'",
            "id" => "logo_retina_h",
            "std" => "29",
            "type" => "text"
        );
        $of_options[] = array("name" => "Logo margin top",
            "desc" => "Add top margin to your logo if need it. Don't use 'px'",
            "id" => "logo_pad_t",
            "std" => "30",
            "type" => "text"
        );
       $of_options[] = array("name" => "Logo margin left",
            "desc" => "Add left margin to your logo if need it. Don't use 'px'",
            "id" => "logo_pad_l",
            "std" => "0",
            "type" => "text"
        );
        
        $of_options[] = array("name" => "Display header border ?",
            "desc" => "",
            "id" => "header-border-bot",
            "std" => 1,
            "type" => "switch"
        );
        
        // $of_options[] = array("name" => "Logo on scroll",
            // "desc" => "Decrease logo size on scroll down?",
            // "id" => "logo_min",
            // "std" => 1,
            // "type" => "switch"
        // );
        $of_options[] = array("name" => "Header BG color",
            "desc" => "Pick Color for background",
            "id" => "header_bg_col",
            "fold" => "header_bg",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "Top menu animation",
            "desc" => "",
            "id" => "top_menu_animation",
            "std" => 1,
            "type" => "switch"
        );
#=========================================#
# HOMEPAGE SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Home",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "home_menu_name",
            "std" => "Home",
            "type" => "text"
        );
        $of_options[] = array("name" => "Homepage Layout Builder",
            "desc" => "Organize how you want to see your Homepage!",
            "id" => "homepage_blocks",
            "std" => $of_options_homepage_blocks,
            "type" => "sorter"
        );
        $of_options[] = array("name" => "Display parallax menu?",
            "desc" => "",
            "id" => "parallax_nav",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Display first section intro?",
            "desc" => "",
            "id" => "first_intro",
            "std" => 0,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Display slider?",
            "desc" => "",
            "id" => "hp_slider",
            "std" => 0,
            "folds" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Enter Slider Alias",
            "desc" => "",
            "id" => "hp_slider_id",
            "fold" => "hp_slider",
            "std" => "",
            "type" => "text"
        );

#=========================================#
# SERVICES SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Service",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "serv_menu_name",
            "std" => "Services",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Top border",
            "desc" => "",
            "id" => "serv_bord_top",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Bottom border",
            "desc" => "",
            "id" => "serv_bord_bot",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "serv_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section textblock",
            "desc" => "",
            "id" => "serv_switch_int",
            "fold" => "serv_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );

        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "serv_intro_h1",
            "std" => "Limited imagination",
            "fold" => "serv_switch_int",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "serv_intro_h2",
            "std" => "Responsive theme",
            "fold" => "serv_switch_int",
            "type" => "text"
        );
        $of_options[] = array("name" => "",
            "desc" => "Intro background color",
            "id" => "serv_colors_intro_bg",
            "std" => "#3d7f78",
            "fold" => "serv_switch_int",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Intro BG opacity. Min: 1, max: = 99, step: 1, default value: 70",
            "id" => "serv_colors_intro_opacity",
            "std" => "70",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "fold" => "serv_switch_int",
            "type" => "sliderui"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Intro text color",
            "id" => "serv_colors_intro_text",
            "fold" => "serv_switch_int",
            "std" => "#ffffff",
            "type" => "color"
        );
        

        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 1920x1200 for retina displays.",
            "id" => "serv_intro_img",
            "fold" => "serv_switch",
            "std" => get_template_directory_uri() . "/images/intro/intro.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "serv_title",
            "std" => "Services we provide",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "serv_subtitle",
            "std" => "A smart WordPress design team has 7 years experience",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "serv_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "",
            "desc" => "Pick the page you want to display below all content",
            "id" => "serv_excerpt2",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "Show Service carousel?",
            "desc" => "You can turn it OFF and display any page's content",
            "id" => "serv_cor",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Number of posts",
            "desc" => "Number of posts to be loaded for service carousel.<br/> Min: 4, max: All = 50, step: 1, default value: 10",
            "id" => "serv_posts_num",
            "std" => "10",
            "min" => "4",
            "step" => "1",
            "max" => "50",
            "fold" => "serv_cor",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Service Icons Animation",
            "desc" => "Turn it ON/OFF",
            "id" => "serv_icon_anim",
            "std" => 1,
            "fold" => "serv_cor",
            "type" => "switch"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Icon's color",
            "id" => "serv_icons_bg",
            "std" => "#e93a67",
            "fold" => "serv_cor",
            "type" => "color"
        );

		$of_options[] = array("name" => "",
            "desc" => "Icon's color on hover",
            "id" => "serv_icons_bg_hover",
            "std" => "#bd2a4b",
            "fold" => "serv_cor",
            "type" => "color"
        );
		
        // $of_options[] = array("name" => "Unique colors",
            // "desc" => "",
            // "id" => "serv_colors",
            // "std" => 0,
            // "folds" => "1",
            // "type" => "switch"
        // );
			
		
        $of_options[] = array("name" => "Section Colors",
            "desc" => "Background color",
            "id" => "serv_colors_bg",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "serv_colors_text",
            "std" => "#555",
            "type" => "color"
        );

        $of_options[] = array("name" => "",
            "desc" => "Service title color",
            "id" => "serv_text_h3",
            "std" => "#555555",
            "type" => "color"
        );
		
		
		$of_options[] = array("name" => "",
            "desc" => "Service block background color",
            "id" => "serv_bg",
            "std" => "#eeeeee",
            "type" => "color"
        );
		
		
		$of_options[] = array("name" => "",
            "desc" => "Service block background color on hover",
            "id" => "serv_bg_hover",
            "std" => "#e0e0e0",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Service text color on hover",
            "id" => "serv_text_hover",
            "std" => "#555555",
            "type" => "color"
        );
		
		
		
#=========================================#
# PORTFOLIO SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Portfolio",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "port_menu_name",
            "std" => "Portfolio",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Top border",
            "desc" => "",
            "id" => "port_bord_top",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Bottom border",
            "desc" => "",
            "id" => "port_bord_bot",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "port_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        
        
        $of_options[] = array("name" => "Intro section textblock",
            "desc" => "",
            "id" => "port_switch_int",
            "fold" => "port_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "port_intro_h1",
            "std" => "Original portfolio",
            "fold" => "port_switch_int",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "port_intro_h2",
            "fold" => "port_switch_int",
            "std" => "Preview of work, social buttons",
            "type" => "text"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Intro background color",
            "id" => "port_colors_intro_bg",
            "std" => "#d8335b",
            "fold" => "port_switch_int",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Intro BG opacity. Min: 1, max: = 99, step: 1, default value: 70",
            "id" => "port_colors_intro_opacity",
            "std" => "70",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "fold" => "port_switch_int",
            "type" => "sliderui"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Intro text color",
            "id" => "port_colors_intro_text",
            "std" => "#ffffff",
            "fold" => "port_switch_int",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 1920x1200 for retina displays.",
            "id" => "port_intro_img",
            "fold" => "port_switch",
            "std" => get_template_directory_uri() . "/images/intro/intro.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "port_title",
            "std" => "What we do",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "port_subtitle",
            "std" => "A smart WordPress design team has 7 years experience",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "port_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "",
            "desc" => "Pick the page you want to display after all content",
            "id" => "port_excerpt2",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "Number of posts",
            "desc" => "Number of posts to be loaded for portfolio gallery.<br/> Min: 8, max: 48, step: 1, default value: 12",
            "id" => "port_posts_num",
            "std" => "12",
            "min" => "4",
            "step" => "1",
            "max" => "48",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Animation on hover?",
            "desc" => "Portfolio image animation",
            "id" => "port_img_anim",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Open portfolio item in Lightbox?",
            "desc" => "",
            "id" => "port_lb",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "AJAX Button",
            "desc" => "Display AJAX button to load more item or just display setuped number",
            "id" => "port_ajax",
            "std" => 1,
            "folds" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Number of projects to load",
            "desc" => "Number of projects to load dynamicly.<br/> Min: 1, max: = 16, step: 1, default value: 4",
            "id" => "port_ajax_num",
            "fold" => "port_ajax",
            "std" => "4",
            "min" => "1",
            "step" => "1",
            "max" => "16",
            "type" => "sliderui"
        );
        // $of_options[] = array("name" => "Unique colors",
            // "desc" => "",
            // "id" => "port_colors",
            // "std" => 0,
            // "folds" => "1",
            // "type" => "switch"
        // );
        $of_options[] = array("name" => "Section Colors",
            "desc" => "Background color",
            "id" => "port_colors_bg",
            "std" => "#d8335b",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "port_colors_text",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "port_cat_link",
            "std" => "#ffffff",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Link color on hover",
            "id" => "port_cat_link_h",
            "std" => "#eeeeee",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Active category background color",
            "id" => "port_active_bg",
            "std" => "#e93a67",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Active category background color on hover",
            "id" => "port_active_bg_h",
            "std" => "#bd2a4b",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "Load more button styles",
            "desc" => "Load more background color",
            "id" => "port_colors_load_back",
            "std" => "#e93a67",
            "type" => "color"
        );
		
		 $of_options[] = array("name" => "",
            "desc" => "Load more background hover color",
            "id" => "port_colors_load_back_h",
            "std" => "#bd2a4b",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Load more text color",
            "id" => "port_colors_link",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Load more hover color",
            "id" => "port_colors_link_h",
            "std" => "#e1e1e1",
            "type" => "color"
        );
		
		 
		
		
		
		$of_options[] = array("name" => "Portfolio item styles",
            "desc" => "Portfolio item color on hover",
            "id" => "port_item_color_h",
            "std" => "#255b55",
            "type" => "color"
        );
		$of_options[] = array("name" => "",
            "desc" => "Portfolio icon color",
            "id" => "port_icon_color",
            "std" => "#d8335b",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Portfolio icon color on hover",
            "id" => "port_icon_color_h",
            "std" => "#d8335b",
            "type" => "color"
        );
		
	
		$of_options[] = array("name" => "",
            "desc" => "Portfolio div with icon background",
            "id" => "port_div_bg",
            "std" => "#eeeeee",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Portfolio div with icon text color",
            "id" => "port_div_text",
            "std" => "#555555",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Portfolio div with icon background on hover",
            "id" => "port_div_bg_h",
            "std" => "#555555",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Portfolio div with icon text color on hover",
            "id" => "port_div_text_h",
            "std" => "#ffffff",
            "type" => "color"
        );
		
        //UPDATE 9.09.2013
        $of_options[] = array("name" => "Portfolio categories builder",
            "desc" => "Turn it ON/OFF to enable/disable portfolio categories builder.",
            "id" => "port_categories_switch",
            "std" => 0,
            "type" => "switch"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Organize your portfolio categories",
            "id" => "port_categories_sorter",
            "std" => $of_options_portfolio_categories,
            "type" => "sorter",
            "fold" => "port_categories_switch"
        );
        
        //============ SINGLE PORTFOLIO PAGE =============//
        
       $of_options[] = array("name" => "Single portfolio page colors",
            "desc" => "Background color",
            "id" => "s_port_colors_bg",
            "std" => "#d8335b",
            "type" => "color"
        );
      
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "s_port_colors_text",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Active category background color",
            "id" => "s_port_active_bg",
            "std" => "#e93a67",
            "type" => "color"
        );
        
		$of_options[] = array("name" => "",
            "desc" => "Active category background color on hover",
            "id" => "s_port_active_bg_h",
            "std" => "#bd2a4b",
            "type" => "color"
        );
		
        
		$of_options[] = array("name" => "",
            "desc" => "Category link color",
            "id" => "s_port_cat_link",
            "std" => "#ffffff",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Category link color on hover",
            "id" => "s_port_cat_link_h",
            "std" => "#eeeeee",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "Single page load more button styles",
            "desc" => "Load more background color",
            "id" => "s_port_colors_load_back",
            "std" => "#e93a67",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Load more text color",
            "id" => "s_port_colors_link",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Load more hover color",
            "id" => "s_port_colors_link_h",
            "std" => "#e1e1e1",
            "type" => "color"
        );
	
        
		$of_options[] = array("name" => "",
            "desc" => "Load more background hover color",
            "id" => "s_port_colors_load_back_h",
            "std" => "#bd2a4b",
            "type" => "color"
        );
		
		

		$of_options[] = array("name" => "Single page portfolio item styles",
            "desc" => "Portfolio item color on hover",
            "id" => "s_port_item_color_h",
            "std" => "#255b55",
            "type" => "color"
        );
		$of_options[] = array("name" => "",
            "desc" => "Portfolio icon color",
            "id" => "s_port_icon_color",
            "std" => "#d8335b",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Portfolio icon color on hover",
            "id" => "s_port_icon_color_h",
            "std" => "#d8335b",
            "type" => "color"
        );
		
	
		$of_options[] = array("name" => "",
            "desc" => "Portfolio div with icon background",
            "id" => "s_port_div_bg",
            "std" => "#eeeeee",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Portfolio div with icon background on hover",
            "id" => "s_port_div_bg_h",
            "std" => "#555555",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Portfolio div with icon text color",
            "id" => "s_port_div_text",
            "std" => "#555555",
            "type" => "color"
        );
		
		
		$of_options[] = array("name" => "",
            "desc" => "Portfolio div with icon text color on hover",
            "id" => "s_port_div_text_h",
            "std" => "#ffffff",
            "type" => "color"
        );
		
#=========================================#
# PRICING TABLE SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Pricing Table",
            "type" => "heading"
        );
         $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "price_menu_name",
            "std" => "Portfolio",
            "type" => "text"
        );
        
        $of_options[] = array("name" => "Section Top border",
            "desc" => "",
            "id" => "price_bord_top",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Bottom border",
            "desc" => "",
            "id" => "price_bord_bot",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "price_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section textblock",
            "desc" => "",
            "id" => "price_switch_int",
            "fold" => "price_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "price_intro_h1",
            "std" => "Original portfolio",
            "fold" => "price_switch_int",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "price_intro_h2",
            "fold" => "price_switch_int",
            "std" => "Preview of work, social buttons",
            "type" => "text"
        );
		
        $of_options[] = array("name" => "",
            "desc" => "Intro background color",
            "id" => "price_colors_intro_bg",
            "std" => "#d8335b",
             "fold" => "price_switch_int",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Intro BG opacity. Min: 1, max: = 100, step: 1, default value: 70",
            "id" => "price_colors_intro_opacity",
            "std" => "70",
            "min" => "1",
            "step" => "1",
            "max" => "100",
             "fold" => "price_switch_int",
            "type" => "sliderui"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Intro text color",
            "id" => "price_colors_intro_text",
            "std" => "#e8b9bd",
             "fold" => "price_switch_int",
            "type" => "color"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 1920x1200 for retina displays.",
            "id" => "price_intro_img",
             "fold" => "price_switch",
            "std" => get_template_directory_uri() . "/images/intro/intro.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "price_title",
            "std" => "Our Price",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "price_subtitle",
            "std" => "Satisfaction Guaranteed Or Your Money Back!",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "price_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "",
            "desc" => "Pick the page you want to display after content",
            "id" => "price_excerpt2",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "Pick page with Pricing table",
            "desc" => "",
            "id" => "price_table",
            "std" => "pricing-table",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "Display Happy Clients section",
            "desc" => "You can show/hide client testimonials.",
            "id" => "price_client",
            "std" => 1,
            "type" => "switch",
            "folds" => 1
        );
        $of_options[] = array("name" => "Happy Client Title",
            "desc" => "",
            "id" => "price_client_title",
            "std" => "Our Customers",
            "fold" => "price_client",
            "type" => "text"
        );
        $of_options[] = array("name" => "Happy Client SubTitle",
            "desc" => "",
            "id" => "price_client_subtitle",
            "std" => "A smart WordPress design team has 7 years experience",
            "fold" => "price_client",
            "type" => "text"
        );
        $of_options[] = array("name" => "Posts to show",
            "desc" => "How many posts you want to rotate? Min: 1, max: 100, step: 1, default value: 4",
            "id" => "price_client_num",
            "std" => "4",
            "min" => "1",
            "step" => "1",
            "max" => "100",
            "fold" => "price_client",
            "type" => "sliderui"
        );
        // $of_options[] = array("name" => "Unique colors",
            // "desc" => "",
            // "id" => "price_colors",
            // "std" => 0,
            // "folds" => 1,
            // "type" => "switch"
        // );
        $of_options[] = array("name" => "Section colors",
            "desc" => "Background color",
            "id" => "price_colors_bg",
            "std" => "#d8335b",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Section name color",
            "id" => "price_title_color",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "price_colors_link",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "price_colors_link_h",
            "std" => "#e1e1e1",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "Table colors",
            "desc" => "Table background",
            "id" => "price_table_bg",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Table text color",
            "id" => "price_table_text",
            "std" => "#555555",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Table title color",
            "id" => "price_table_title_text",
            "std" => "#ff92ae",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Price color",
            "id" => "price_color",
            "std" => "#e1e1e1",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Price row background",
            "id" => "price_row",
            "std" => "#cd2a51",
            "type" => "color"
        );

		$of_options[] = array("name" => "",
            "desc" => "Button color",
            "id" => "price_button",
            
            "std" => "#3d7f78",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Button hover color",
            "id" => "price_button_h",
            "std" => "#555555",
            "type" => "color"
        );
		
		
        
        $of_options[] = array("name" => "Customers colors",
            "desc" => "Text color",
            "id" => "price_colors_text",
            "std" => "#ffffff",
            "type" => "color"
        );
		$of_options[] = array("name" => "",
            "desc" => "Customers link color",
            "id" => "customers_link_color",
            "std" => "#3d7f78",
            "type" => "color"
        );
		$of_options[] = array("name" => "",
            "desc" => "Customers link hover color",
            "id" => "customers_link_color_h",
            "std" => "#3d7f78",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Customers Title color",
            "id" => "customers_title_color",
            "std" => "#555555",
            "type" => "color"
        );
        
#=========================================#
# ABOUT US SETTINGS #
#=========================================#
        $of_options[] = array("name" => "About Us",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "about_menu_name",
            "std" => "About",
            "type" => "text"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "about_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        
        
        $of_options[] = array("name" => "Section Top border",
            "desc" => "",
            "id" => "about_bord_top",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Bottom border",
            "desc" => "",
            "id" => "about_bord_bot",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
         $of_options[] = array("name" => "Intro section textblock",
            "desc" => "Turn it ON/OFF intro textblock",
            "id" => "about_switch_int",
            "fold" => "about_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "about_intro_h1",
            "fold" => "about_switch_int",
            "std" => "Meet the Team",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "about_intro_h2",
            "std" => "Reliable and professional team",
            "fold" => "about_switch_int",
            "type" => "text"
        );
        $of_options[] = array("name" => "",
            "desc" => "Intro background color",
            "id" => "about_colors_intro_bg",
            "std" => "#3d7f78",
            "fold" => "about_switch_int",
            "type" => "color"
        );
		
        $of_options[] = array("name" => "",
            "desc" => "Intro BG opacity. Min: 1, max: = 99, step: 1, default value: 70",
            "id" => "about_colors_intro_opacity",
            "std" => "70",
            "min" => "1",
            "step" => "1",
            "fold" => "about_switch_int",
            "max" => "99",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "",
            "desc" => "Intro text color",
            "id" => "about_colors_intro_text",
            "fold" => "about_switch_int",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 1920x1200 for retina displays.",
            "id" => "about_intro_img",
            "fold" => "about_switch",
            "std" => get_template_directory_uri() . "/images/intro/intro.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "about_title",
            "std" => "About us",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "about_subtitle",
            "std" => "Professionally work and prosper",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "about_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "",
            "desc" => "Pick the page you want to display after all content",
            "id" => "about_excerpt2",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "Show About Us Team members carousel?",
            "desc" => "You can turn it OFF and display any page's content",
            "id" => "about_cor",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
       $of_options[] = array("name" => "Team member animation",
            "desc" => "Turn ON/OFF team member animation on hover",
            "id" => "about_animation",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section colors",
            "desc" => "Background color",
            "id" => "about_colors_bg",
            "std" => "#3d7f78",
            "type" => "color"
        );

        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "about_colors_text",
            "std" => "#555555",
            "type" => "color"
        );
        
		$of_options[] = array("name" => "",
            "desc" => "Section title color",
            "id" => "about_title_color",
            "std" => "#ffffff",
            "type" => "color"
        );

        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "about_colors_link",
            "std" => "#d8335b",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "about_colors_link_h",
            "std" => "#3d7f78",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Team Container Background",
            "id" => "team_cont_bg",
            "std" => "#ffffff",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "Buttons and icons styles",
            "desc" => "Buttons background",
            "id" => "about_buttons",
            "std" => "#3d7f78",
            "type" => "color"
        );
		$of_options[] = array("name" => "",
            "desc" => "Buttons background on hover",
            "id" => "about_buttons_h",
            "std" => "#555555",
            "type" => "color"
        );
		$of_options[] = array("name" => "",
            "desc" => "Social Icons color",
            "id" => "about_colors_icons",
            "std" => "#ffffff",
            "type" => "color"
        );	
		$of_options[] = array("name" => "",
            "desc" => "Social Icons hover color",
            "id" => "about_colors_icons_h",
            "std" => "#999999",
            "type" => "color"
        );		
		$of_options[] = array("name" => "",
            "desc" => "Icons background",
            "id" => "about_colors_icons_bg",
            "std" => "#555555",
            "type" => "color"
        );		
			
		
		
#=========================================#
# CONTACT US SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Contact Us",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "contact_menu_name",
            "std" => "Contact",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Top border",
            "desc" => "",
            "id" => "contact_bord_top",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Bottom border",
            "desc" => "",
            "id" => "contact_bord_bot",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "contact_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section textblock",
            "desc" => "",
            "id" => "contact_switch_int",
            "fold" => "contact_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "contact_intro_h1",
            "fold" => "contact_switch_int",
            "std" => "Feedback is important",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "contact_intro_h2",
            "fold" => "contact_switch_int",
            "std" => "We always answer all questions",
            "type" => "text"
        );
        $of_options[] = array("name" => "",
            "desc" => "Intro background color",
            "id" => "contact_colors_intro_bg",
            "std" => "#422e39",
            "fold" => "contact_switch_int",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Intro BG opacity. Min: 1, max: = 99, step: 1, default value: 70",
            "id" => "contact_colors_intro_opacity",
            "std" => "70",
            "min" => "1",
            "step" => "1",
            "fold" => "contact_switch_int",
            "max" => "99",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "",
            "desc" => "Intro text color",
            "id" => "contact_colors_intro_text",
            "std" => "#ffffff",
            "fold" => "contact_switch_int",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 1920x1200 for retina displays.",
            "id" => "contact_intro_img",
            "fold" => "contact_switch",
            "std" => get_template_directory_uri() . "/images/intro/intro.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "contact_title",
            "std" => "Contact us",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "contact_subtitle",
            "std" => "Read interesting posts on our blog",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "contact_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "",
            "desc" => "Pick the page you want to display after all content",
            "id" => "contact_excerpt2",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "Display Google Map",
            "desc" => "You can show your location.",
            "id" => "google_map",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Your Address",
            "desc" => "",
            "id" => "contact_gmap",
            "std" => "New York",
            "fold" => "google_map",
            "type" => "text"
        );
        $of_options[] = array("name" => "Zoom Level",
            "desc" => "",
            "id" => "contact_gmap_zoom",
            "std" => "New York",
            "fold" => "google_map",
            "std" => "17",
            "min" => "1",
            "step" => "1",
            "max" => "20",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "",
            "desc" => "You can switch map type: ON - Static, OFF - dynamic",
            "id" => "contact_map_type",
            "std" => 1,
            "fold" => "google_map",
            "type" => "switch"
        );
        $of_options[] = array("name" => "Display Contact Form/Details",
            "desc" => "You can show/hide your details and contact form.",
            "id" => "contact_form_det",
            "std" => 1,
            "folds" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Contact form title",
            "desc" => "",
            "id" => "cf_title",
            "std" => "Contact form",
            "fold" => "contact_form_det",
            "type" => "text"
        );
        $of_options[] = array("name" => "Details title",
            "desc" => "",
            "id" => "det_title",
            "std" => "More Info",
            "fold" => "contact_form_det",
            "type" => "text"
        );
        $of_options[] = array("name" => "Contact details",
            "desc" => "Phone",
            "id" => "contact_info_phone",
            "fold" => "contact_form_det",
            "std" => "(123) 555-5555",
            "type" => "text"
        );
        $of_options[] = array("name" => "",
            "desc" => "Email",
            "id" => "contact_info_email",
            "fold" => "contact_form_det",
            "std" => "info@domain.com",
            "type" => "text"
        );
        $of_options[] = array("name" => "",
            "desc" => "Skype",
            "id" => "contact_info_skype",
            "fold" => "contact_form_det",
            "std" => "skype.username",
            "type" => "text"
        );
        $of_options[] = array("name" => "",
            "desc" => "Address",
            "id" => "contact_info_addr",
            "fold" => "contact_form_det",
            "std" => "Salt Lake City, UT 87234",
            "type" => "text"
        );
        $of_options[] = array("name" => "Contact Form 7 Shortcode",
            "desc" => "Shortcode of your contact form",
            "id" => "email",
            "std" => "",
            "fold" => "contact_form_det",
            "type" => "textarea"
        );
        // $of_options[] = array("name" => "Unique colors",
            // "desc" => "",
            // "id" => "contact_colors",
            // "std" => "0",
            // "folds" => "1",
            // "type" => "switch"
        // );
        $of_options[] = array("name" => "Section colors",
            "desc" => "Background color",
            "id" => "contact_colors_bg",
            "std" => "#422e39",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "contact_colors_text",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "contact_colors_link",
            "std" => "#d8335b",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "contact_colors_link_h",
            "std" => "#d8335b",
            "type" => "color"
        );
		
		 $of_options[] = array("name" => "Icons and buttons styles",
            "desc" => "Icon color",
            "id" => "contact_icon",
            "std" => "#d8335b",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Button color",
            "id" => "contact_button",
            "std" => "#d8335b",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Button color hover",
            "id" => "contact_button_h",
            "std" => "#bd2a4b",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Button text color",
            "id" => "contact_button_text",
            "std" => "#ffffff",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Button text color on hover",
            "id" => "contact_button_text_h",
            "std" => "#eeeeee",
            "type" => "color"
        );
#=========================================#
# WIDGET SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Footer Widgets",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Enable widgets section",
            "desc" => "",
            "id" => "widget_switcher",
            "std" => 1,
            "type" => "switch"
        );
        
        $of_options[] = array("name" => "Section Top border",
            "desc" => "",
            "id" => "widget_bord_top",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Bottom border",
            "desc" => "",
            "id" => "widget_bord_bot",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "widget_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section textblock",
            "desc" => "",
            "id" => "widget_switch_int",
            "fold" => "widget_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "widget_intro_h1",
            "fold" => "widget_switch_int",
            "std" => "Feedback is important",
            "type" => "text"
        );
        $of_options[] = array("name" => "",
            "desc" => "Intro background",
            "id" => "widget_intro",
            "fold" => "widget_switch_int",
            "std" => "#d8335b",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Intro text color",
            "id" => "widget_intro_text",
            "fold" => "widget_switch_int",
            "std" => "#ffffff",
            "type" => "color"
        );
		
		 $of_options[] = array("name" => "",
            "desc" => "Intro BG opacity. Min: 1, max: = 99, step: 1, default value: 70",
            "id" => "widget_intro_opacity",
            "std" => "70",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "fold" => "widget_switch_int",
            "type" => "sliderui"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Intro icons color",
            "id" => "widget_intro_icons",
            "std" => "#ffffff",
            "fold" => "widget_switch_int",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Intro icons color on hover",
            "id" => "widget_intro_icons_h",
            "std" => "#000000",
            "fold" => "widget_switch_int",
            "type" => "color"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 1920x1200 for retina displays.",
            "id" => "widget_intro_img",
            "fold" => "contact_switch",
            "std" => get_template_directory_uri() . "/images/intro/intro.jpg",
            "type" => "media"
        );

        $of_options[] = array("name" => "Display Social icons",
            "desc" => "You can show your social profiles in the footer.",
            "id" => "footer_social",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Skype",
            "desc" => "Your skype username.",
            "id" => "footer_soc_skype",
            "std" => "GoGetThemes",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Tumblr",
            "desc" => "Your Tumblr profile link.",
            "id" => "footer_soc_tumblr",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Digg",
            "desc" => "Your Digg profile link.",
            "id" => "footer_soc_digg",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Twitter",
            "desc" => "Your Twitter profile link.",
            "id" => "footer_soc_twitter",
            "std" => "https://twitter.com/GoGetThemes",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Facebook",
            "desc" => "Your Facebook profile link.",
            "id" => "footer_soc_facebook",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Vimeo",
            "desc" => "Your Vimeo profile link.",
            "id" => "footer_soc_vimeo",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "YouTube",
            "desc" => "Your YouTube profile link.",
            "id" => "footer_soc_youtube",
            "std" => "https://www.youtube.com/user/BuyGoGetThemes",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Google Plus",
            "desc" => "Your Google Plus profile link.",
            "id" => "footer_soc_google",
            "std" => "http://plus.google.com/u/0/110499019224982454742",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "LinkedIn",
            "desc" => "Your LinkedIn profile link.",
            "id" => "footer_soc_linkedin",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Flickr",
            "desc" => "Your Flickr profile link.",
            "id" => "footer_soc_flickr",
            "std" => "http://www.flickr.com/photos/95366013@N05/",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "RSS",
            "desc" => "Your RSS url.",
            "id" => "footer_soc_rss",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Dribbble",
            "desc" => "Your Dribbble url.",
            "id" => "footer_soc_dribbble",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Email",
            "desc" => "Your Email url.",
            "id" => "footer_soc_email",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Blogger",
            "desc" => "Your Blogger url.",
            "id" => "footer_soc_blogger",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Flattr",
            "desc" => "Your Flattr url.",
            "id" => "footer_soc_flattr",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Github",
            "desc" => "Your Github url.",
            "id" => "footer_soc_github",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Instagram",
            "desc" => "Your Instagram url.",
            "id" => "footer_soc_instagram",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "MySpace",
            "desc" => "Your MySpace url.",
            "id" => "footer_soc_myspace",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Pinterest",
            "desc" => "Your Pinterest url.",
            "id" => "footer_soc_pinterest",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Reddit",
            "desc" => "Your Reddit url.",
            "id" => "footer_soc_reddit",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "SoundCloud",
            "desc" => "Your SoundCloud url.",
            "id" => "footer_soc_soundcloud",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Stumbleupon",
            "desc" => "Your Stumbleupon url.",
            "id" => "footer_soc_stumbleupon",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "VK",
            "desc" => "Your VK url.",
            "id" => "footer_soc_vk",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Yahoo",
            "desc" => "Your Yahoo url.",
            "id" => "footer_soc_yahoo",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "widget_title",
            "std" => "widgets",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "widget_subtitle",
            "std" => "Read interesting posts on our blog",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "widget_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "",
            "desc" => "Pick the page you want to display after all content",
            "id" => "widget_excerpt2",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        
		
			
		$of_options[] = array("name" => "Section colors",
             "folds" => 1,
             "type" =>""
        );
        
		$of_options[] = array("name" => "",
            "desc" => "Background color",
            "id" => "widget_colors_bg",
            "std" => "#e5e5e5",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "widget_colors_text",
            "std" => "#454444",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Title color",
            "id" => "widget_title_color",
            "std" => "#555555",
            "type" => "color"
        );
		
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "widget_colors_link",
            
            "std" => "#3d7f78",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "widget_colors_link_h",
            
            "std" => "#255b55",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "Widget styles",
            "desc" => "Widgets background color",
            "id" => "widget_colors_boxbg",
            "std" => "#ffffff",
            "type" => "color"
        );

		$of_options[] = array("name" => "",
            "desc" => "Widget text color",
            "id" => "widget_text_color",
            "std" => "#999999",
            "type" => "color"
        );
#=========================================#
# WOO SETTINGS #
#=========================================#
        $of_options[] = array("name" => "WooooSection",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "woo_menu_name",
            "std" => "WooCommerce",
            "type" => "text"
        );

        $of_options[] = array("name" => "Section Top border",
            "desc" => "",
            "id" => "woo_bord_top",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Bottom border",
            "desc" => "",
            "id" => "woo_bord_bot",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF, first section OFF always!",
            "id" => "woo_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        
        $of_options[] = array("name" => "Intro section textblock",
            "desc" => "",
            "id" => "woo_switch_int",
            "folds" => 1,
            "fold" => "woo_switch",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "woo_intro_h1",
            "fold" => "woo_switch_int",
            "std" => "Buy our Items!",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "woo_intro_h2",
            "std" => "The best items in the whole world!",
            "fold" => "woo_switch_int",
            "type" => "text"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Intro background color",
            "id" => "woo_colors_intro_bg",
            "std" => "#3d7f78",
            "fold" => "woo_switch_int",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Intro BG opacity. Min: 1, max: = 99, step: 1, default value: 70",
            "id" => "woo_colors_intro_opacity",
            "std" => "70",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "fold" => "woo_switch_int",
            "type" => "sliderui"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Intro text color",
            "id" => "woo_colors_intro_text",
            "std" => "#ffffff",
            "fold" => "woo_switch_int",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 1920x1200 for retina displays.",
            "id" => "woo_intro_img",
            "fold" => "about_switch",
            "std" => get_template_directory_uri() . "/images/intro/intro.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "woo_title",
            "std" => "Best Selling Items",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "woo_subtitle",
            "std" => "Professionally work and prosper",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "woo_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "",
            "desc" => "Pick the page you want to display after all content",
            "id" => "woo_excerpt2",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "Product to display",
            "desc" => "",
            "id" => "woo_type",
            "std" => "none",
            "type" => "select",
            "options" => array(
                "Recent" => "Recent",
                "Featured" => "Featured",
                "Top Rated" => "Top Rated",
                "Random" => "Random"
            )
        );
        $of_options[] = array("name" => "",
            "desc" => "Number of posts",
            "id" => "woo_post_number",
            "std" => "4",
            "min" => "1",
            "step" => "1",
            "max" => "100",
            "type" => "sliderui"
        );
        
        $of_options[] = array("name" => "Section Colors",
            "desc" => "Background color",
            "id" => "woo_colors_bg",
            "std" => "#eeeeee",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "woo_colors_text",
            "std" => "#555555",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "woo_colors_link",
            "std" => "#3d7f78",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "woo_colors_link_h",
            "std" => "#555555",
            "type" => "color"
        );
#=========================================#
# BLANK1 OPTIONS #
#=========================================#
        $of_options[] = array("name" => "Blank1",
            "type" => "heading"
        );
        
		$of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "blank1_menu_name",
            "std" => "Blank1",
            "type" => "text"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "blank1_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        
        
        
        $of_options[] = array("name" => "Section Top border",
            "desc" => "",
            "id" => "blank1_bord_top",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Bottom border",
            "desc" => "",
            "id" => "blank1_bord_bot",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section textblock",
            "desc" => "Turn it ON/OFF intro textblock",
            "id" => "blank1_switch_int",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "blank1_intro_h1",
            "fold" => "blank1_switch_int",
            "std" => "Blank1",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "blank1_intro_h2",
            "std" => "Lorem ipsum",
            "fold" => "blank1_switch_int",
            "type" => "text"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Intro background color",
            "id" => "blank1_colors_intro_bg",
            "std" => "#3d7f78",
            "fold" => "blank1_switch_int",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Intro BG opacity. Min: 1, max: = 99, step: 1, default value: 70",
            "id" => "blank1_colors_intro_opacity",
            "std" => "70",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "fold" => "blank1_switch_int",
            "type" => "sliderui"
        );
		$of_options[] = array("name" => "",
            "desc" => "Intro text color",
            "id" => "blank1_colors_intro_text",
            "std" => "#ffffff",
            "fold" => "blank1_switch_int",
            "type" => "color"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 1920x1200 for retina displays.",
            "id" => "blank1_intro_img",
            "fold" => "blank1_switch",
            "std" => get_template_directory_uri() . "/images/intro/intro.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "blank1_title",
            "std" => "Lorem ipsum",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "blank1_subtitle",
            "std" => "Lorem ipsum",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "blank1_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "",
            "desc" => "Pick the page you want to display after all content",
            "id" => "blank1_excerpt2",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
      
        $of_options[] = array("name" => "Section colors",
            "desc" => "Background color",
            "id" => "blank1_colors_bg",
            
            "std" => "#3d7f78",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "blank1_text_color",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Section title color",
            "id" => "blank1_colors_text",
            "std" => "#555555",
            "type" => "color"
        );
        
        
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "blank1_colors_link",
            "std" => "#d8335b",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "blank1_colors_link_h",
            "std" => "#3d7f78",
            "type" => "color"
        );
		
	
#=========================================#
# BLANK2 OPTIONS #
#=========================================#
        $of_options[] = array("name" => "Blank2",
            "type" => "heading"
        );
        
		$of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "blank2_menu_name",
            "std" => "Blank1",
            "type" => "text"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "blank2_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        
        
        
        $of_options[] = array("name" => "Section Top border",
            "desc" => "",
            "id" => "blank2_bord_top",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Bottom border",
            "desc" => "",
            "id" => "blank2_bord_bot",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section textblock",
            "desc" => "Turn it ON/OFF intro textblock",
            "id" => "blank2_switch_int",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "blank2_intro_h1",
            "fold" => "blank2_switch_int",
            "std" => "Blank1",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "blank2_intro_h2",
            "std" => "Lorem ipsum",
            "fold" => "blank2_switch_int",
            "type" => "text"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Intro background color",
            "id" => "blank2_colors_intro_bg",
            "std" => "#3d7f78",
            "fold" => "blank2_switch_int",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Intro BG opacity. Min: 1, max: = 99, step: 1, default value: 70",
            "id" => "blank2_colors_intro_opacity",
            "std" => "70",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "fold" => "blank2_switch_int",
            "type" => "sliderui"
        );
		$of_options[] = array("name" => "",
            "desc" => "Intro text color",
            "id" => "blank2_colors_intro_text",
            "std" => "#ffffff",
            "fold" => "blank2_switch_int",
            "type" => "color"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 1920x1200 for retina displays.",
            "id" => "blank2_intro_img",
            "fold" => "blank2_switch",
            "std" => get_template_directory_uri() . "/images/intro/intro.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "blank2_title",
            "std" => "Lorem ipsum",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "blank2_subtitle",
            "std" => "Lorem ipsum",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "blank2_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "",
            "desc" => "Pick the page you want to display after all content",
            "id" => "blank2_excerpt2",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
      
        $of_options[] = array("name" => "Section colors",
            "desc" => "Background color",
            "id" => "blank2_colors_bg",
            
            "std" => "#3d7f78",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "blank2_text_color",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Section title color",
            "id" => "blank2_colors_text",
            "std" => "#555555",
            "type" => "color"
        );
        
        
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "blank2_colors_link",
            "std" => "#d8335b",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "blank2_colors_link_h",
            "std" => "#3d7f78",
            "type" => "color"
        );
		
#=========================================#
# BLANK3 OPTIONS #
#=========================================#
        $of_options[] = array("name" => "Blank3",
            "type" => "heading"
        );
        
		$of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "blank3_menu_name",
            "std" => "Blank1",
            "type" => "text"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "blank3_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        
        
        
        $of_options[] = array("name" => "Section Top border",
            "desc" => "",
            "id" => "blank3_bord_top",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Bottom border",
            "desc" => "",
            "id" => "blank3_bord_bot",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section textblock",
            "desc" => "Turn it ON/OFF intro textblock",
            "id" => "blank3_switch_int",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "blank3_intro_h1",
            "fold" => "blank3_switch_int",
            "std" => "Blank1",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "blank3_intro_h2",
            "std" => "Lorem ipsum",
            "fold" => "blank3_switch_int",
            "type" => "text"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Intro background color",
            "id" => "blank3_colors_intro_bg",
            "std" => "#3d7f78",
            "fold" => "blank3_switch_int",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Intro BG opacity. Min: 1, max: = 99, step: 1, default value: 70",
            "id" => "blank3_colors_intro_opacity",
            "std" => "70",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "fold" => "blank3_switch_int",
            "type" => "sliderui"
        );
		$of_options[] = array("name" => "",
            "desc" => "Intro text color",
            "id" => "blank3_colors_intro_text",
            "std" => "#ffffff",
            "fold" => "blank3_switch_int",
            "type" => "color"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 1920x1200 for retina displays.",
            "id" => "blank3_intro_img",
            "fold" => "blank3_switch",
            "std" => get_template_directory_uri() . "/images/intro/intro.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "blank3_title",
            "std" => "Lorem ipsum",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "blank3_subtitle",
            "std" => "Lorem ipsum",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "blank3_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "",
            "desc" => "Pick the page you want to display after all content",
            "id" => "blank3_excerpt2",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
      
        $of_options[] = array("name" => "Section colors",
            "desc" => "Background color",
            "id" => "blank3_colors_bg",
            
            "std" => "#3d7f78",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "blank3_text_color",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Section title color",
            "id" => "blank3_colors_text",
            "std" => "#555555",
            "type" => "color"
        );
        
        
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "blank3_colors_link",
            "std" => "#d8335b",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "blank3_colors_link_h",
            "std" => "#3d7f78",
            "type" => "color"
        );
		
#=========================================#
# FOOTER SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Footer",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Section Top border",
            "desc" => "",
            "id" => "footer_bord_top",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Footer Logo",
            "desc" => "Upload a Logo PNG/GIF image that will represent your website's footer.",
            "id" => "flogo",
            "std" => get_template_directory_uri() . "/images/flogo.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "Footer Retina Logo",
            "desc" => "Upload a big Logo PNG/GIF image that will represent your website on retina display.",
            "id" => "flogo_retina",
            "std" => get_template_directory_uri() . "/images/retina_flogo.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "",
            "desc" => "Footer Retina logo width should be the same as real logo width. Don't use 'px'",
            "id" => "flogo_retina_w",
            "std" => "216",
            "type" => "text"
        );
        $of_options[] = array("name" => "",
            "desc" => "Footer Retina logo height should be the same as real logo height. Don't use 'px'",
            "id" => "flogo_retina_h",
            "std" => "31",
            "type" => "text"
        );
        $of_options[] = array("name" => "Copyright info",
            "desc" => "Text for footer copyright section.",
            "id" => "footer_copyright",
            "std" => "(c) 2013 “Ocean Plaza” All Rights Reserved",
            "type" => "textarea"
        );
        $of_options[] = array("name" => "Theme by",
            "desc" => "Text for footer copyright section.",
            "id" => "footer_theme",
            "std" => "Theme by <a href='http://GoGetThemes.com'>GoGetThemes.com</a>",
            "type" => "textarea"
        );
        $of_options[] = array("name" => "Powered by",
            "desc" => "Text for footer copyright section.",
            "id" => "footer_power",
            "std" => "Powered by <a href='http://WordPress.org'>WordPress.org</a>",
            "type" => "textarea"
        );
		        $of_options[] = array("name" => "Section Colors",
            "desc" => "Background color",
            "id" => "footer_color",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Text Color",
            "id" => "footer_text_color",
            "std" => "#555555",
            "type" => "color"
        );
#=========================================#
# BLOG #
#=========================================#
        $of_options[] = array("name" => "Blog",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Blog title",
            "desc" => "This text will be shown at the top of your blog section",
            "id" => "blog_title",
            "std" => "Oceanplaza blog",
            "type" => "text"
        );
        $of_options[] = array("name" => "Blog tag line",
            "desc" => "This text will be shown below Category title!",
            "id" => "blog_subtitle",
            "std" => "A smart WordPress design team has 7 years experience",
            "type" => "text"
        );
        $of_options[] = array("name" => "Display?",
            "desc" => "Post's excerpt",
            "id" => "blog_excerpt",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "",
            "desc" => "'Read more' link",
            "id" => "blog_rm",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "",
            "desc" => "Post's author",
            "id" => "blog_author",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "",
            "desc" => "Post's date",
            "id" => "blog_date",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "",
            "desc" => "Post's category",
            "id" => "blog_cat",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "",
            "desc" => "Post's comments",
            "id" => "blog_comment",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "",
            "desc" => "Display share button on single posts?",
            "id" => "blog_share",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "",
            "desc" => "Single post layout: ON - content float image on right side, OFF - content situated under image.",
            "id" => "blog_content_layout",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "",
            "desc" => "Single post text align: ON - center align, OFF - left align",
            "id" => "blog_text_align",
            "std" => 1,
            "type" => "switch"
        );
		$of_options[] = array("name" => "Section Colors",
            "desc" => "Background color",
            "id" => "blog_color",
            "std" => "#3d3d3d",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "blog_text_color",
            "std" => "#555",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Title color",
            "id" => "blog_title_color",
            "std" => "#fff",
            "type" => "color"
        );

		$of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "blog_link_color",
            "std" => "#3d7f78",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link color on hover",
            "id" => "blog_link_color_h",
            "std" => "#555555",
            "type" => "color"
        );
		$of_options[] = array("name" => "",
            "desc" => "Button color",
            "id" => "blog_btn",
            "std" => "#ffffff",
            "type" => "color"
        );
			$of_options[] = array("name" => "",
            "desc" => "Button color hover",
            "id" => "blog_btn_h",
            "std" => "#f5f5f5",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Button background color",
            "id" => "blog_btn_bg",
            "std" => "#3d7f78",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Button background color on hover",
            "id" => "blog_btn_bg_h",
            "std" => "#555555",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Posts and sidebar background",
            "id" => "blog_block_bg",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Sidebar section's title color",
            "id" => "blog_sidebar_title",
            "std" => "#555555",
            "type" => "color"
        );

        $of_options[] = array("name" => "Category widget colors",
            "desc" => "Background color",
            "id" => "blog_cat_color",
            "std" => "#3d7f78",
            "type" => "color"
        );

        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "blog_cat_link_color",
            "std" => "#ffffff",
            "type" => "color"
        );

        $of_options[] = array("name" => "",
            "desc" => "Link color on hover",
            "id" => "blog_cat_link_color_h",
            "std" => "#f5f5f5",
            "type" => "color"
        );

        $of_options[] = array("name" => "",
            "desc" => "Link background color",
            "id" => "blog_cat_li_link_color",
            "std" => "#3d7f78",
            "type" => "color"
        );

        $of_options[] = array("name" => "",
            "desc" => "Link background color on hover",
            "id" => "blog_cat_li_link_color_h",
            "std" => "#3d7f78",
            "type" => "color"
        );
#=========================================#
# TYPOGRAPHY & STYLING SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Fonts and Styles",
            "type" => "heading"
        );
//GOOGLE FONTS
        $of_options[] = array("name" => "Use Google fonts",
            "desc" => "You can use google or websafe fonts. Google fonts will overwrite standarts one.",
            "id" => "google_font",
            "std" => 1,
            "folds" => 1,
            "type" => "switch"
        );
// BODY FONT
        $of_options[] = array("name" => "Body Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_body_font",
            "fold" => "google_font",
            "std" => "Lato",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "This is my preview text!", //this is the text from preview box
                "size" => "20px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_body_font_w",
            "fold" => "google_font",
            "std" => "400",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_body_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// MENU FONT
        $of_options[] = array("name" => "Site Menu Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_menu_font",
            "fold" => "google_font",
            "std" => "Lato",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "This is my preview text!", //this is the text from preview box
                "size" => "20px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_menu_font_w",
            "fold" => "google_font",
            "std" => "900",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_menu_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// HEADLINE 1 FONT
        $of_options[] = array("name" => "Headline 1 Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h1_font",
            "fold" => "google_font",
            "std" => "Lato",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "Headline 1 HEADLINE 1", //this is the text from preview box
                "size" => "26px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h1_font_w",
            "fold" => "google_font",
            "std" => "700",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h1_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// HEADLINE 2 FONT
        $of_options[] = array("name" => "Headline 2 Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h2_font",
            "fold" => "google_font",
            "std" => "Lato",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "Headline 2 HEADLINE 2", //this is the text from preview box
                "size" => "26px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h2_font_w",
            "fold" => "google_font",
            "std" => "700",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h2_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// HEADLINE 3 FONT
        $of_options[] = array("name" => "Headline 3 Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h3_font",
            "fold" => "google_font",
            "std" => "Lato",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "Headline 3 HEADLINE 3", //this is the text from preview box
                "size" => "26px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h3_font_w",
            "fold" => "google_font",
            "std" => "900",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h3_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// HEADLINE 4 FONT
        $of_options[] = array("name" => "Headline 4 Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h4_font",
            "fold" => "google_font",
            "std" => "Lato",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "Headline 4 HEADLINE 4", //this is the text from preview box
                "size" => "26px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h4_font_w",
            "fold" => "google_font",
            "std" => "700",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h4_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// HEADLINE 5 FONT
        $of_options[] = array("name" => "Headline 5 Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h5_font",
            "fold" => "google_font",
            "std" => "Lato",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "Headline 5 HEADLINE 5", //this is the text from preview box
                "size" => "26px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h5_font_w",
            "fold" => "google_font",
            "std" => "900",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h5_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// HEADLINE 6 FONT
        $of_options[] = array("name" => "Headline 6 Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h6_font",
            "fold" => "google_font",
            "std" => "Lato",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "Headline 6 HEADLINE 6", //this is the text from preview box
                "size" => "26px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h6_font_w",
            "fold" => "google_font",
            "std" => "300",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h6_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
//STD FONTS
        $of_options[] = array("name" => "Use Standart fonts",
            "desc" => "You can use google or websafe fonts. Google fonts will overwrite standarts one.",
            "id" => "std_font",
            "std" => 0,
            "folds" => 1,
            "type" => "switch"
        );
// BODY FONT
        $of_options[] = array("name" => "Body Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "std_body_font",
            "fold" => "std_font",
            "std" => array('face' => 'arial', 'style' => 'normal'),
            "type" => "typography",
        );
// MENU STD
        $of_options[] = array("name" => "Menu Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "std_menu_font",
            "fold" => "std_font",
            "std" => array('face' => 'arial', 'style' => 'normal'),
            "type" => "typography",
        );
// HEADLINE STD
        $of_options[] = array("name" => "All Headline Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "std_h1_font",
            "fold" => "std_font",
            "std" => array('face' => 'arial', 'style' => 'normal'),
            "type" => "typography",
        );
// FONT SIZES
        $of_options[] = array("name" => "Body font size",
            "desc" => "Body font in px, max:24, min:12, default:16.",
            "id" => "font_size_body",
            "std" => "16",
            "min" => "12",
            "step" => "1",
            "max" => "24",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Site Menu font size",
            "desc" => "Menu font in px, max:30, min:10, default:14.",
            "id" => "font_size_smenu",
            "std" => "13",
            "min" => "10",
            "step" => "1",
            "max" => "30",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Headline 1 font size",
            "desc" => "Headline 1 (H1) font in px, max:124, min:14, default:32.",
            "id" => "font_size_h1",
            "std" => "32",
            "min" => "14",
            "step" => "1",
            "max" => "124",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Headline 2 font size",
            "desc" => "Headline 2 (H2) font in px, max:124, min:14, default:27.",
            "id" => "font_size_h2",
            "std" => "27",
            "min" => "14",
            "step" => "1",
            "max" => "124",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Headline 3 font size",
            "desc" => "Headline 3 (H3) font in px, max:124, min:14, default:18.",
            "id" => "font_size_h3",
            "std" => "18",
            "min" => "14",
            "step" => "1",
            "max" => "124",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Headline 4 font size",
            "desc" => "Headline 4 (H4) font in px, max:124, min:14, default:14.",
            "id" => "font_size_h4",
            "std" => "14",
            "min" => "14",
            "step" => "1",
            "max" => "124",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Headline 5 font size",
            "desc" => "Headline 5 (H5) font in px, max:124, min:13, default:13.",
            "id" => "font_size_h5",
            "std" => "13",
            "min" => "13",
            "step" => "1",
            "max" => "124",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Headline 6 font size",
            "desc" => "Headline 6 (H6) font in px, max:124, min:12, default:12.",
            "id" => "font_size_h6",
            "std" => "12",
            "min" => "12",
            "step" => "1",
            "max" => "124",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Text-transform Uppercase",
            "desc" => "",
            "id" => "text_uppercase",
            "std" => 1,
            "folds" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Custom CSS",
            "desc" => "You can apply your personal styles to site.",
            "id" => "custom_css",
            "std" => "",
            "type" => "textarea"
        );
#=========================================#
# COLORS OPTIONS #
#=========================================#
        $of_options[] = array("name" => "Colors",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Colors",
            "desc" => "Select default color for body background color",
            "id" => "bg_body",
            "std" => "#422e39",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Select default color for header background color",
            "id" => "bg_header",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Select default color for all text on site",
            "id" => "font_color_body",
            "std" => "#ffffff",
            "type" => "color"
        );

        $of_options[] = array("name" => "",
            "desc" => "Select default color for all headlines on site",
            "id" => "font_color_headlines",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Select default color for all links on site",
            "id" => "font_color_a",
            "std" => "#3d7f78",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Select default color for all hover links on site",
            "id" => "font_color_a_h",
            "std" => "#555555",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Select default color for all tooltips on site",
            "id" => "font_color_tooltip",
            "std" => "#d8335b",
            "type" => "color"
        );
        // $of_options[] = array("name" => "",
            // "desc" => "Select site theme color",
            // "id" => "firm_color",
            // "std" => "#3d7f78",
            // "type" => "color"
        // );
        // $of_options[] = array("name" => "",
            // "desc" => "Select site theme hover color",
            // "id" => "firm_color_h",
            // "std" => "#005c59",
            // "type" => "color"
        // );
		
			/* ============ Header menu color options ==============*/
			
        $of_options[] = array("name" => "Header menu colors",
             "folds" => 1,
             "type" =>""
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Select default color for header menu background",
            "id" => "h_m_back",
            "std" => "#ffffff",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Select default color for header menu background on hover",
            "id" => "h_m_back_hover",
            "std" => "#e2e2e2",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Select default color for header menu links",
            "id" => "h_m_links",
            "std" => "#3f3f3f",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Select default color for header menu links on hover",
            "id" => "h_m_links_hover",
            "std" => "#1c1c1c",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Select default color for header menu subcategories background",
            "id" => "h_m_back_sub",
            "std" => "#e2e2e2",
            "type" => "color"
        );
		

		$of_options[] = array("name" => "",
            "desc" => "Select default color for header menu subcategories links background on hover",
            "id" => "sub_hover",
            "std" => "#3d7f78",
            "type" => "color"
        );

		
		$of_options[] = array("name" => "Paralax menu colors",
            "desc" => "Section background color",
            "id" => "para_back",
            "std" => "#ffffff",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Paralax menu active link background",
            "id" => "para_active",
            "std" => "#3d7f78",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Section background color on hover",
            "id" => "para_li_h",
            "std" => "#eeeeee",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "para_link",
            "std" => "#555555",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Link color on hover",
            "id" => "para_link_h",
            "std" => "#3d7f78",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Icon color",
            "id" => "para_icon",
            "std" => "#3d7f78",
            "type" => "color"
        );
		$of_options[] = array("name" => "WooCommerce colors",
 			 "folds" => 1,
             "type" => ""
        );

		$of_options[] = array("name" => "",
            "desc" => "WooCommerce text color",
            "id" => "woo_text",
            "std" => "#555555",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "WooCommerce pages background",
            "id" => "woo_pages_background",
            "std" => "#555555",
            "type" => "color"
        );
		
		// $of_options[] = array("name" => "Colors",
            // "desc" => "Select default color for background",
            // "id" => "woo_back",
            // "std" => "#ffffff",
            // "type" => "color"
        // );
		$of_options[] = array("name" => "",
            "desc" => "Title color",
            "id" => "woo_title_color",
            "std" => "#d8335b",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Links color",
            "id" => "woo_links_color",
            "std" => "#3d7f78",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Links color on hover",
            "id" => "woo_links_color_h",
            "std" => "#555555",
            "type" => "color"
        );
		
		$of_options[] = array("name" => "",
            "desc" => "Lprice color",
            "id" => "woo_price",
            "std" => "#d8335b",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Rating star color",
            "id" => "woo_rating_active",
            "std" => "#ffff00",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Disactive rating star color",
            "id" => "woo_rating_disactive",
            "std" => "#ffffff",
            "type" => "color"
        );
		
#=========================================#
# RECENT POSTS settings  #
#=========================================#
        $of_options[] = array("name" => "Recent posts",
                "type" => "heading"
        );

        $of_options[] = array("name" => "Post count",
            "desc" => "Select number of recent posts to show, '-1' to show all posts ",
            "id" => "recent_posts_count",
            "std" => "-1",
            "min" => "-1",
            "step" => "1",
            "max" => "50",
            "type" => "sliderui"
        );
        $posts_formats = array('all_formats'=>'all formats',
                               'default'=>'default',
                                'video'=>'video',
                                'audio'=>'audio',
                                'link'=>'link',
                                'gallery'=>'gallery',
                                'aside'=>'aside',
                                'image'=>'image',
                                'quote'=>'quote');

        $of_options[] = array("name" => "",
            "desc" => "Select type of posts to show",
            "id" => "recent_posts_type",
            "std" => "none",
            "type" => "select",
            "options" => $posts_formats
        );

        $of_options[] = array("name" => "",
            "desc" => "Display post date ?",
            "id" => "recent_date",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );

        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "recent_menu_name",
            "std" => "Recent",
            "type" => "text"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "recent_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );


        $of_options[] = array("name" => "Section Top border",
            "desc" => "",
            "id" => "recent_bord_top",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Bottom border",
            "desc" => "",
            "id" => "recent_bord_bot",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section textblock",
            "desc" => "Turn it ON/OFF intro textblock",
            "id" => "recent_switch_int",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );

        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "recent_intro_h1",
            "fold" => "recent_switch_int",
            "std" => "Recent posts",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "recent_intro_h2",
            "std" => "Explore the latest posts",
            "fold" => "recent_switch_int",
            "type" => "text"
        );

        $of_options[] = array("name" => "",
            "desc" => "Intro background color",
            "id" => "recent_colors_intro_bg",
            "std" => "#3d7f78",
            "fold" => "recent_switch_int",
            "type" => "color"
        );

        $of_options[] = array("name" => "",
            "desc" => "Intro BG opacity. Min: 1, max: = 99, step: 1, default value: 70",
            "id" => "recent_colors_intro_opacity",
            "std" => "70",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "fold" => "recent_switch_int",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "",
            "desc" => "Intro text color",
            "id" => "recent_colors_intro_text",
            "std" => "#ffffff",
            "fold" => "recent_switch_int",
            "type" => "color"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 1920x1200 for retina displays.",
            "id" => "recent_intro_img",
            "fold" => "recent_switch",
            "std" => get_template_directory_uri() . "/images/intro/intro.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "recent_title",
            "std" => "Lorem ipsum",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "recent_subtitle",
            "std" => "Lorem ipsum",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "recent_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "",
            "desc" => "Pick the page you want to display after all content",
            "id" => "recent_excerpt2",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );

        $of_options[] = array("name" => "Section colors",
            "desc" => "Background color",
            "id" => "recent_colors_bg",
            "std" => "#3d7f78",
            "type" => "color"
        );

        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "recent_text_color",
            "std" => "#ffffff",
            "type" => "color"
        );

        $of_options[] = array("name" => "",
            "desc" => "Section title color",
            "id" => "recent_colors_text",
            "std" => "#555555",
            "type" => "color"
        );

        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "recent_colors_link",
            "std" => "#d8335b",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "recent_colors_link_h",
            "std" => "#3d7f78",
            "type" => "color"
        );
#=========================================#
# Language settings  #
#=========================================#
        if(function_exists('icl_get_languages') && !class_exists('WPML_String_Translation')){
            $of_options[] = array("name" => "Languages",
                "type" => "heading"
            );

            $languages = icl_get_languages('skip_missing=1');
            //var_dump($languages);
            function field_template($id, $desc="", $std="", $name="", $type="text"){
                return array("id"=>$id,"desc"=>$desc, "std"=>$std, "name"=>$name, "type"=>$type);
            }
            foreach($languages as $languaqe){
                $of_options[] = array('id'=> $languaqe['language_code'], 'type'=>'menu', 'std' => $languaqe['native_name']);
            }
            foreach($languages as $languaqe){

                $of_options[] = array('type'=>'menu_item', 'id'=> $languaqe['language_code']);
                $of_options[] = array("name" => "Hello there!",
                    "desc" => "",
                    "id" => "lang_hello",
                    "std" => "<h3 style=\"margin: 0 0 10px;\">Enter the translation for ".$languaqe['native_name']." language</h3>",
                    "icon" => true,
                    "type" => "info"
                );
                $of_options[] = field_template("home_menu_name_".$languaqe['language_code'],__("Text to present section in menu","GoGetThemes"),"Home","Home");

                $of_options[] = field_template("serv_menu_name_".$languaqe['language_code'],__("Text to present section in menu","GoGetThemes"),"Services","Services");
                $of_options[] = field_template("serv_intro_h1_".$languaqe['language_code'],__("Text for services intro first line.","GoGetThemes"),"We are proud of our service");
                $of_options[] = field_template("serv_intro_h2_".$languaqe['language_code'],__("Text for services intro second line.","GoGetThemes"),"Our service is very professional and popular");
                $of_options[] = field_template("serv_title_".$languaqe['language_code'],__("Section Title","GoGetThemes"),"Services we provide");
                $of_options[] = field_template("serv_subtitle_".$languaqe['language_code'],__("Section SubTitle","GoGetThemes"),"A smart WordPress design team has 7 years experience");

                $of_options[] = field_template("port_menu_name_".$languaqe['language_code'],__("Text to present section in menu","GoGetThemes"),"Portfolio","Portfolio");
                $of_options[] = field_template("port_intro_h1_".$languaqe['language_code'],__("Text for portfolio intro first line.","GoGetThemes"),"Original portfolio");
                $of_options[] = field_template("port_intro_h2_".$languaqe['language_code'],__("Text for portfolio intro second line.","GoGetThemes"),"Preview of work, social buttons");
                $of_options[] = field_template("port_title_".$languaqe['language_code'],__("Section Title","GoGetThemes"),"Portfolio");
                $of_options[] = field_template("port_subtitle_".$languaqe['language_code'],__("Section SubTitle","GoGetThemes"),"Premium portfolio slider");

                $of_options[] = field_template("price_menu_name_".$languaqe['language_code'],__("Text to present section in menu","GoGetThemes"),"Pricing","Pricing table");
                $of_options[] = field_template("price_intro_h1_".$languaqe['language_code'],__("Text for pricing table intro first line.","GoGetThemes"),"Pricing table");
                $of_options[] = field_template("price_intro_h2_".$languaqe['language_code'],__("Text for pricing table intro second line.","GoGetThemes"),"beautiful original table");
                $of_options[] = field_template("price_title_".$languaqe['language_code'],__("Section Title","GoGetThemes"),"Our Price");
                $of_options[] = field_template("price_subtitle_".$languaqe['language_code'],__("Section SubTitle","GoGetThemes"),"Satisfaction Guaranteed Or Your Money Back!");
                $of_options[] = field_template("price_client_title_".$languaqe['language_code'],__("Happy Client Title","GoGetThemes"),"Our Customers");
                $of_options[] = field_template("price_client_subtitle_".$languaqe['language_code'],__("Happy Client Subtitle","GoGetThemes"),"A smart WordPress design team has 7 years experience");

                $of_options[] = field_template("about_menu_name_".$languaqe['language_code'],__("Text to present section in menu","GoGetThemes"),"About","About");
                $of_options[] = field_template("about_intro_h1_".$languaqe['language_code'],__("Text for about us intro first line.","GoGetThemes"),"Meet the Team");
                $of_options[] = field_template("about_intro_h2_".$languaqe['language_code'],__("Text for about us intro second line.","GoGetThemes"),"Reliable and professional team");
                $of_options[] = field_template("about_title_".$languaqe['language_code'],__("Section Title","GoGetThemes"),"About us");
                $of_options[] = field_template("about_subtitle_".$languaqe['language_code'],__("Section SubTitle","GoGetThemes"),"Professionally work and prosper");

                $of_options[] = field_template("contact_menu_name_".$languaqe['language_code'],__("Text to present section in menu","GoGetThemes"),"Contact","Contact");
                $of_options[] = field_template("contact_intro_h1_".$languaqe['language_code'],__("Text for contact us intro first line.","GoGetThemes"),"Feedback is important");
                $of_options[] = field_template("contact_intro_h2_".$languaqe['language_code'],__("Text for contact us second line.","GoGetThemes"),"We always answer all questions");
                $of_options[] = field_template("contact_title_".$languaqe['language_code'],__("Section Title","GoGetThemes"),"Contact us");
                $of_options[] = field_template("contact_subtitle_".$languaqe['language_code'],__("Section SubTitle","GoGetThemes"),"Read interesting posts on our blog");
                $of_options[] = field_template("cf_title_".$languaqe['language_code'],__("Contact form title","GoGetThemes"),"Mail US");
                $of_options[] = field_template("det_title_".$languaqe['language_code'],__("Details title","GoGetThemes"),"More Info");

                $of_options[] = field_template("widget_intro_h1_".$languaqe['language_code'],__("Text for footer intro first line.","GoGetThemes"),"Feedback is important","Footer");
                $of_options[] = field_template("widget_title_".$languaqe['language_code'],__("Section Title","GoGetThemes"),"widgets");
                $of_options[] = field_template("widget_subtitle_".$languaqe['language_code'],__("Section SubTitle","GoGetThemes"),"Read interesting posts on our blog");

                $of_options[] = field_template("blog_title_".$languaqe['language_code'],__("Text to present section in menu","GoGetThemes"),"Blog","Blog");
                $of_options[] = field_template("blog_subtitle_".$languaqe['language_code'],__("Blog tag line","GoGetThemes"),"A smart WordPress design team has 7 years experience");

                $of_options[] = field_template("blank1_menu_name_".$languaqe['language_code'],__("Text to present section in menu","GoGetThemes"),"Blank1","Blank1");
                $of_options[] = field_template("blank1_intro_h1_".$languaqe['language_code'],__("Text for portfolio intro first line.","GoGetThemes"),"Original portfolio");
                $of_options[] = field_template("blank1_intro_h2_".$languaqe['language_code'],__("Text for portfolio intro second line.","GoGetThemes"),"Preview of work, social buttons");
                $of_options[] = field_template("blank1_title_".$languaqe['language_code'],__("Section Title","GoGetThemes"),"Portfolio");
                $of_options[] = field_template("blank1_subtitle_".$languaqe['language_code'],__("Section SubTitle","GoGetThemes"),"Premium portfolio slider");

                $of_options[] = field_template("blank2_menu_name_".$languaqe['language_code'],__("Text to present section in menu","GoGetThemes"),"Blank2","Blank2");
                $of_options[] = field_template("blank2_intro_h1_".$languaqe['language_code'],__("Text for portfolio intro first line.","GoGetThemes"),"Original portfolio");
                $of_options[] = field_template("blank2_intro_h2_".$languaqe['language_code'],__("Text for portfolio intro second line.","GoGetThemes"),"Preview of work, social buttons");
                $of_options[] = field_template("blank2_title_".$languaqe['language_code'],__("Section Title","GoGetThemes"),"Portfolio");
                $of_options[] = field_template("blank2_subtitle_".$languaqe['language_code'],__("Section SubTitle","GoGetThemes"),"Premium portfolio slider");

                $of_options[] = field_template("blank3_menu_name_".$languaqe['language_code'],__("Text to present section in menu","GoGetThemes"),"Blank3","Blank3");
                $of_options[] = field_template("blank3_intro_h1_".$languaqe['language_code'],__("Text for portfolio intro first line.","GoGetThemes"),"Original portfolio");
                $of_options[] = field_template("blank3_intro_h2_".$languaqe['language_code'],__("Text for portfolio intro second line.","GoGetThemes"),"Preview of work, social buttons");
                $of_options[] = field_template("blank3_title_".$languaqe['language_code'],__("Section Title","GoGetThemes"),"Portfolio");
                $of_options[] = field_template("blank3_subtitle_".$languaqe['language_code'],__("Section SubTitle","GoGetThemes"),"Premium portfolio slider");
                
                $of_options[] = field_template("recent_menu_name_".$languaqe['language_code'],__("Text to present section in menu","GoGetThemes"),"Recent","Recent posts");
                $of_options[] = field_template("recent_intro_h1_".$languaqe['language_code'],__("Text for recent posts intro first line.","GoGetThemes"),"Better recent posts");
                $of_options[] = field_template("recent_intro_h2_".$languaqe['language_code'],__("Text for recent posts intro second line.","GoGetThemes"),"Preview of latest posts");
                $of_options[] = field_template("recent_title_".$languaqe['language_code'],__("Section Title","GoGetThemes"),"Recent posts");
                $of_options[] = field_template("recent_subtitle_".$languaqe['language_code'],__("Section SubTitle","GoGetThemes"),"your latest posts");

            }
        }       
#=========================================#
# BACKUP OPTIONS #
#=========================================#
        $of_options[] = array("name" => "Backup Options",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Backup and Restore Options",
            "id" => "of_backup",
            "std" => "",
            "type" => "backup",
            "desc" => 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
        );
        $of_options[] = array("name" => "Transfer Theme Options Data",
            "id" => "of_transfer",
            "std" => "",
            "type" => "transfer",
            "desc" => 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
        );
    }
//End function: of_options()
}//End chack if function exists: of_options()
?>