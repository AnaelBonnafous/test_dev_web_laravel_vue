<?php

namespace Database\Seeders;

use App\Models\Celebrity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CelebritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $celebrities = [
            [
                'firstname' => 'Angelina',
                'lastname' => 'Jolie',
                'image' => '',
                'description' => "Angelina Jolie, née le 4 juin 1975 à Los Angeles, est une actrice, réalisatrice, scénariste, productrice, mannequin, écrivaine et ambassadrice de bonne volonté américano-cambodgienne.\nElle a reçu trois Golden Globes, deux Screen Actors Guild Awards et un Oscar du cinéma.\nElle commence sa carrière d'actrice avec le film à petit budget Cyborg 2 (1993), tandis qu'elle n'est âgée que de 18 ans. Son premier rôle principal dans un film important est dans Hackers, en 1995. Elle joue ensuite dans George Wallace et Femme de rêve, téléfilms biographiques acclamés par la critique. Angelina Jolie remporte un Oscar de la meilleure actrice dans un second rôle pour sa prestation dans Une vie volée (1999). L'actrice continue son ascension avec 60 Secondes Chrono (2000), qui obtient un franc succès au box-office. Elle atteint par la suite une grande notoriété avec l'interprétation de l'héroïne de jeu vidéo Lara Croft dans Lara Croft: Tomb Raider (2001) et s'impose depuis comme l'une des actrices les plus célèbres et les mieux payées d'Hollywood. Ses films les plus lucratifs ont été Mr. et Mrs. Smith (2005), Wanted (2008), Kung Fu Panda (2008), Salt (2010) et The Tourist (2010). Elle joue également dans des drames plus intimistes comme Un cœur invaincu (2007) et L'Échange (2008).",
            ],
            [
                'firstname' => 'Jennifer',
                'lastname' => 'Aniston',
                'image' => '',
                'description' => "Jennifer Aniston est une actrice, réalisatrice et productrice américaine née le 11 février 1969 à Los Angeles.\nElle accède à la notoriété internationale en interprétant, de 1994 à 2004, le personnage de Rachel Green dans la sitcom à succès Friends. Grâce à ce rôle, elle obtient un Emmy Award, un Golden Globe Award et un Screen Actors Guild Award.\nElle poursuit ensuite sa carrière au cinéma, alternant cinéma populaire (Bruce tout-puissant, Polly et moi, La Rupture, Marley et Moi, Le Mytho, Comment tuer son boss ?, Les Miller, une famille en herbe, etc.) et films indépendants (35 heures, c'est déjà trop, The Good Girl, Friends with Money, Life of Crime, Cake, Dumplin', etc.).\nElle est de retour à la télévision avec le rôle d’Alex Levy dans la série The Morning Show (2019-2022) d'Apple TV+, rôle pour lequel elle remporte un Golden Globe et un Screen Actors Guild Award. Elle est également nommée aux Emmy Awards et faillit remporter l'Emmy de la meilleure actrice, finalement supplantée par Zendaya pour son rôle dans Euphoria.\nEn 2023, elle est l'une des actrices les plus populaires au monde et possède depuis 2012 son étoile sur le Hollywood Walk of Fame.",
            ],
            [
                'firstname' => 'Leonardo',
                'lastname' => 'DiCaprio',
                'image' => '',
                'description' => "Leonardo DiCaprio est un acteur, producteur, scénariste et documentariste américain, né le 11 novembre 1974 à Los Angeles.\nGrandissant dans les quartiers de Los Angeles de Los Feliz puis Hollywood, il prend comme modèle le fils de sa belle-mère Peggy Ann Saunders, Adam Farrar, qui commence dès l'enfance une carrière d'acteur. Il se lance lui aussi, encouragé par ses parents. Il montre rapidement un talent pour la comédie et se voit proposer des rôles à la télévision, puis au cinéma. Il est sélectionné pour jouer face à son acteur préféré Robert De Niro dans Blessures secrètes en 1993. La même année, il incarne face à Johnny Depp un jeune garçon déficient intellectuel, Gilbert Grape, rôle pour lequel il est nommé à l'Oscar du meilleur acteur dans un second rôle à l'âge de 19 ans.\nAprès plusieurs films dans le circuit indépendant, il est découvert en 1996 par le grand public dans l'adaptation moderne et rock d’une pièce de William Shakespeare : Roméo + Juliette. En 1997, il devient une star internationale en incarnant le héros romantique Jack Dawson dans Titanic, un des plus gros succès de l'histoire du cinéma et l'un des films les plus oscarisés avec 11 statuettes. Dans les années 2000 il travaille pour les plus grands réalisateurs et devient le nouvel acteur fétiche de Martin Scorsese — comme a pu l'être Robert De Niro dans les années 1970 à 1990 ; il est à l'affiche de cinq de ses films : Gangs of New York, Aviator, Les Infiltrés, Shutter Island et Le Loup de Wall Street. Il obtient de nombreuses récompenses pour des films tels que Aviator, Blood Diamond, Arrête-moi si tu peux, J. Edgar, Django Unchained ou encore Le Loup de Wall Street. Ce n'est toutefois qu'en 2016 qu'il remporte son premier Oscar du meilleur acteur, pour son interprétation de Hugh Glass dans The Revenant.",
            ],
            [
                'firstname' => 'Nicole',
                'lastname' => 'Kidman',
                'image' => '',
                'description' => "Nicole Kidman est une actrice, réalisatrice, chanteuse et productrice de cinéma australo-américaine, née le 20 juin 1967 à Honolulu.\nConsidérée comme l'une des plus grandes actrices de sa génération, alternant entre films populaires et cinéma indépendant, elle a ainsi remporté de multiples récompenses, parmi lesquelles un Oscar, six Golden Globes, deux Emmy Awards, un BAFTA, un Ours d'argent, le prix du 70e anniversaire du Festival de Cannes, et possède une étoile sur le Hollywood Walk of Fame.\nAu cours de sa carrière, elle interprète de nombreux rôles marquants, notamment dans Prête à tout (1995) de Gus Van Sant, film qui la révèle au grand public et où elle tient le rôle d'une jeune journaliste obsédée par la célébrité. Ses compositions incluent le rôle d'une femme dont le mariage est en difficulté dans le sulfureux dernier film de Stanley Kubrick, Eyes Wide Shut (1999), son interprétation d'une danseuse de cabaret dans le film musical de Baz Luhrmann, Moulin Rouge (2001), pour lequel elle reçoit sa première nomination aux Oscars, ou encore sa performance inquiétante dans le thriller d'Alejandro Amenábar, Les Autres (2001). Son incarnation de Virginia Woolf dans The Hours en 2002 lui vaut l'Oscar, le Golden Globe, le BAFTA et l'Ours d'argent de la meilleure actrice.",
            ],
            [
                'firstname' => 'Robert',
                'lastname' => 'Redford',
                'image' => '',
                'description' => "Charles Robert Redford, Jr., dit Robert Redford1, né le 18 août 1936 à Santa Monica (Californie), est un acteur, réalisateur et producteur américain.\nEn 1969, il se fait connaître grâce au western Butch Cassidy et le Kid. Il confirme son ascension avec des films tels que Les Hommes du président, L'Arnaque, Gatsby le Magnifique, Out of Africa et L'Homme qui murmurait à l'oreille des chevaux.\nEn 1981, il remporte l'Oscar de la meilleure réalisation pour le film Des gens comme les autres, ainsi qu'un Oscar d'honneur en 2002 pour l'ensemble de sa carrière.",
            ],
            [
                'firstname' => 'Beyonce',
                'lastname' => 'Knowles',
                'image' => '',
                'description' => "Beyoncé, parfois appelée par son nom complet Beyoncé Knowles, voire par son nom d'épouse Beyoncé Carter, née le 4 septembre 1981 à Houston, au Texas, est une chanteuse, compositrice, danseuse, productrice de musique et actrice américaine.\nElle est désignée en 2009 comme étant l'artiste de la décennie 2000 par The Guardian2, tandis que New Musical Express la voit comme l'une des artistes ayant défini la décennie 20103. En 2013, les critiques musicales du New Yorker décrivent Beyoncé comme étant la musicienne la plus populaire, la plus importante et la plus influente de ce début de xxie siècle4. En 2013, le magazine Forbes la classe 17e dans la liste des femmes les plus puissantes et 4e dans la liste des stars les plus puissantes du monde, ce qui fait d'elle la deuxième chanteuse la plus puissante au monde, derrière Lady Gaga et devant Madonna5. En 2014, elle figure en tête de la liste établie par le magazine Forbes des célébrités les plus influentes au monde6. En 2022, le magazine Rolling Stone la déclare plus grande artiste musicale de la décennie passée7.",
            ],
            [
                'firstname' => 'Jude',
                'lastname' => 'Law',
                'image' => '',
                'description' => "Jude Law est un acteur, réalisateur et producteur de cinéma britannique, né le 29 décembre 1972 à Lewisham (Londres).\nRévélé durant les années 1990 par Bienvenue à Gattaca (1997), eXistenZ (1998) et Le Talentueux Mr. Ripley (1999), Stalingrad (2001). Il joue ensuite dans des grandes productions hollywoodiennes : A.I. Intelligence artificielle (2001), Les Sentiers de la perdition (2002), Retour à Cold Mountain (2003) et le thriller sentimental Entre adultes consentants (2004).\nPar la suite, il tourne à deux reprises avec Martin Scorsese dans Aviator (2004) et Hugo Cabret (2011), et avec Steven Soderbergh dans Contagion (2011) et Effets secondaires (2013). Il connait son plus gros succès commercial3 en incarnant le Dr John Watson dans les films Sherlock Holmes (2009) et Sherlock Holmes : Jeu d'ombres (2011), réalisés par Guy Ritchie.\nEn 2016, il joue dans l'acclamée série The Young Pope le rôle du pape Pie XIII, puis à nouveau en 2020 dans The New Pope, deux séries écrites et réalisées par Paolo Sorrentino.\nDès 2018, il devient l'une des têtes d'affiche de la série de films Les Animaux fantastiques en endossant le rôle du jeune Albus Dumbledore à partir du deuxième volet.\nEn 2019, il joue le rôle de Yon-Rogg, un commandant Kree dans le film Captain Marvel, un film de l’univers cinématographique Marvel.",
            ],
            [
                'firstname' => 'Megan',
                'lastname' => 'Fox',
                'image' => '',
                'description' => "Megan Fox est une actrice et mannequin américaine, née le 16 mai 1986 à Oak Ridge (Tennessee).\nElle est révélée au début des années 2000 par des rôles principaux à la télévision : Ocean Ave (2002-2003), puis la sitcom La Star de la famille (2004-2006). En 2004, elle joue avec Lindsay Lohan dans la comédie musicale à succès Le Journal intime d'une future star, puis dans le film romantique Crimes of Fashion.\nEn 2007 elle obtient le rôle de Mikaela Banes dans le blockbuster Transformers, réalisé par Michael Bay et produit par Steven Spielberg. En 2009, elle reprend son rôle dans la suite et tient aussi le premier rôle de la comédie horrifique Jennifer's Body pour lequel elle reçoit le Teen Choice Award de la meilleure actrice et évolue ensuite aux côtés de Josh Brolin dans le film de super-héros Jonah Hex (pour lequel elle est nommée pour deux Razzie Awards). En 2010, elle est la tête d'affiche du drame Passion Play, aux côtés de Mickey Rourke.\nPar la suite, elle enchaîne durant les années 2010 des rôles dans les comédies : Friends with Kids (2011), The Dictator (2012), 40 ans : Mode d'emploi (2012).\nEntre 2014 et 2017, elle retrouve Michael Bay au cinéma comme producteur en prêtant ses traits à April O'Neil dans le reboot de la franchise Ninja Turtles dans le premier film du même nom et dans sa suite, Ninja Turtles 2, ainsi qu'à la télévision dans les cinquième et sixième saisons de la série télévisée New Girl. En 2020, elle tient le rôle principal du film Rogue et poursuit avec d'autres longs métrages au cinéma.",
            ],
            [
                'firstname' => 'Robert',
                'lastname' => 'Pattinson',
                'image' => '',
                'description' => "Robert Pattinson est un acteur, mannequin et musicien britannique, né le 13 mai 1986 à Barnes (Londres).\nRévélé durant les années 2000 par des productions destinées aux adolescents, comme la franchise Twilight (2008-2012), dans laquelle il incarne Edward Cullen aux côtés de Kristen Stewart, il se fait également connaître du grand public par son rôle de Cedric Diggory dans Harry Potter et la Coupe de feu (2005), quatrième opus de la saga Harry Potter.\nPar la suite, il s'investit dans des films indépendants réalisés par des cinéastes reconnus : Cosmopolis (2012) et Maps to the Stars (2014) de David Cronenberg, The Rover (2014) et The King (2019) de David Michôd, Queen of the Desert (2014) de Werner Herzog, Life (2015) d'Anton Corbijn, L'Enfance d'un chef (2016) de Brady Corbet, The Lost City of Z (2016) de James Gray, Good Time (2017) de Ben et Josh Safdie, ou encore High Life (2018), de Claire Denis.\nEn 2019, il est choisi pour incarner Batman, super-héros de DC Comics, dans le film de Matt Reeves, The Batman, sorti en mars 2022.",
            ],
            [
                'firstname' => 'Selena',
                'lastname' => 'Gomez',
                'image' => '',
                'description' => "Selena Gomez, née le 22 juillet 1992 à Grand Prairie, au Texas, est une chanteuse, actrice et productrice américaine.\nElle fait ses débuts de comédienne dans la série pour enfants Barney & Friends (2002-2004), puis se fait connaître du jeune public en interprétant le rôle d'Alex Russo dans la série humoristique de Disney Channel, Les Sorciers de Waverly Place (2007-2012). Elle joue ensuite dans de nombreux films ou téléfilms tels que Comme Cendrillon 2 (2008), Princess Protection Program (2009), Sœurs malgré elles (Ramona et Beezus, 2010), Bienvenue à Monte-Carlo (2011), Spring Breakers (2012), Getaway (2013) et The Fundamentals of Caring (2016). Elle interprète par ailleurs la voix du personnage Mavis dans les films d'animation de la franchise Hôtel Transylvanie.",
            ],
        ];

        foreach ($celebrities as $celebrity) {
            Celebrity::updateOrCreate(
                [
                    'firstname' => $celebrity['firstname'],
                    'lastname' => $celebrity['lastname'],
                ],
                $celebrity
            );
        }
    }
}
