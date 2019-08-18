<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->delete();

        $this->call('ArtistTableSeeder');
    }
}


class ArtistTableSeeder extends Seeder {
    public function run() {

        DB::table('artists')->insert(array(
            array(
                'id'   => 1,
                'name' => 'Gvcci Ming',
                'urlName' => 'gvcci-ming',
                'biography' => 'Wenn Gvcci Ming an den Decks steht, verbreitet er direkt gute Laune. Seine Sets
sind gefüllt mit Soon-to- be-Classics. Nach mehr als zwei Jahren DJing zählt Gucci
Ming längst nicht mehr zu den Rookies im Game. Immer wieder hat er im
Täubchenthal, im Conne Island in Leipzig und im Weltecho in Chemnitz bewiesen,
wie sich Hip Hop und Trap Eins a verbinden lassen. Songs von Curren$y, Freddie
Gibbs und A$AP Rocky sind für Gvcci Ming dabei ein Muss. Gvcci Ming ist ein
Geheimtipp mit voller Partygarantie.',

                'enabled' => true
            ),
            array(
                'id'   => 2,
                'name' => 'Phax',
                'urlName' => 'phax',
                'biography' => 'Phax ist ein Allroundtalent: Scratch-Experte, Beatmaker, früher auch Tour-DJ für 724
Goodfellas. Seine ausgefeilten Scratches bereichern schon 2009 den deutsch-
französischen Sampler „La Connexion“ mit Größen wie Akhenaton, Haftbefehl, Azad
und Kool Savas. Er schraubte in der Vergangenheit Beats für Freeman und Tone, die
damals auf Juice-CDs releast wurden.
Während seiner langjährigen DJ-Vita unterstützte er amerikanische und deutsche
Künstler, darunter Group Home, Defari, Jeru The Damaja, Lords Of The
Underground, Kev Brown, DJ Babu, K.I.Z., Plusmacher, Schaufel &amp; Spaten, T9
(Torky Tork &amp; Doz9), Morlockk Dilemma, Hiob und Omik K.
Seine Sets variieren von klassischem Boombap gemixt mit Soul &amp; Funk über
aktuellere 2.0 Sounds á la araabMUZIK bis zu hartem Gangstertrap.',

                'enabled' => true
            ),
            array(
                'id'   => 3,
                'name' => 'Jenny Sharp',
                'urlName' => 'jenny-sharp',
                'biography' => 'Mit ihrem Podcast Sharp Radio hat im Jahr 2014 alles angefangen. Seitdem konnte
Jenny Sharp mit Hilfe einer Menge Support innerhalb der urbanen Clublandschaft im
Osten Deutschlands und beim TH!NK? Festival auch live ein sicheres Händchen für
erstklassige Selection beweisen. Als ehemaliges B-Girl weiß sie instinktiv, wie sich
Tanzbarkeit anfühlt und kann auch selber hinterm DJ-Pult nicht still halten. Dabei
bewegen sich ihre vielseitigen Sets ohne Genregrenzen von aktuellem Hip Hop über
futuristische Beats zu Bass Musik, Footwork und Grime, aber auch in die
elektronischere Richtung hin zu House.',

                'enabled' => true
            ),
            array(
                'id'   => 4,
                'name' => 'KITKUT',
                'urlName' => 'kitkut',
                'biography' => 'Deutschlandweit und international hat sich KITKUT in seiner 12jährigen DJ-Karriere
mit ausgelassenen Shows zum Vollblutentertainer entwickelt. So stand er bereits
unter anderem mit Kid Fresh, DJ Rafik, Eskei83, den Round Table Knights und den
Cyperpunkers auf der Bühne. Außerdem spielte er Support für Deutsch-Rap- Größen,
wie KIZ, SXTN, MC Bomber, Prinz Pi und und und...
Der Nachtschwärmer ist nicht nur DJ, sondern auch Partyveranstalter, der vor allem
in seinem Element ist, wenn er an den Wheels Of Steel steht. Ursprünglich im Rap
der 90er Jahre und UK Grime verwurzelt spezialisiert er sich seit einigen Jahren
auch auf Trap. Egal wo, das Publikum liebt ihn, weil er zusammen mit den Leuten
ausrastet und selbst aus der letzten Kellersause eine krasse Party macht.',

                'enabled' => true
            ),
            array(
                'id'   => 5,
                'name' => 'Alex The Kit',
                'urlName' => 'alex-the-kit',
                'biography' => 'Alex The Kit bringt die Menge in Nullkommanix in Stimmung, was ihm bisher wiederholte Gigs in größeren Locations, wie dem Täubchenthal und Conne Island sicherte. In seiner Auswahl mag er´s düster und rough, deshalb konzentriert er sich auf Drill und bassige Halftime Beats mit New School Rap. Alex The Kit ist ein Geheimtipp mit voller Partygarantie. ',

                'enabled' => false
            ),
            array(
                'id'   => 6,
                'name' => 'DJ Dørbystarr',
                'urlName' => 'dj-dorbystarr',
                'biography' => 'Es gibt so gut wie nichts, was DJ dørbystarr nicht kann oder noch nicht gemacht hat: DJ-Contest gewinnen, den Skillz Award verleihen, seinen Online-Blog namens Raputation veröffentlichen, Photographie- und DJ-Workshops geben, eine eigene Radiosendung in Erfurt senden, verschiedene Partyreihen (die WORD! CYPHER / EOW LEIPZIG, BROOKLYN ZOOOO und CITIZEN OF HIPHOP) veranstalten.
Auch als Band-DJ von den Obskuriosen und critical.Entertainment hat er sich einen Namen gemacht. Ein Multitalent, das seine Passion schon immer der Hip-Hop-Kultur und seit mehr als 15 Jahren vor allem dem Turntableism widmet. Tunes aus deiner aktuellen Playlist laufen bei dørbys Live-Set garantiert. Boombap, Deutschrap, Ragga, Funk, Ba$$-Music und Electronica werden mit frischen Scratches gepaart in die Crowd geschossen. Dabei schafft er immer den schmalen Grat zwischen dopem Underground, originalen Crates, experimentell-urbanen Tunes und clubigen Alltime-Party-Rockern.
',

                'enabled' => false
            ),
            array(
                'id'   => 7,
                'name' => 'Passeri',
                'urlName' => 'passeri',
                'biography' => 'Was hat Passeri mit Rap zu tun? Eine ganze Menge! Sie ist nicht nur die Kennerin
der Good Hood Klik im Bereich Deutschrap und Future Beats, sondern supportet
auch als Konzert-Photographin und Redakteurin des eigenen Onlinemagazins
Wasrap.de seit Jahren diesen Hip Hop. Gleichzeitig entwickelte sie einen
ausgefeilten, tanzbaren Stil in ihren Setlists, der zwischen pumpenden Neo-
Boombap und trappy Sound problemlos wechselt. Davon haben wir uns persönlich
in der Distillery, im Conne Island und in der Alten Damenhandschufabrik überzeugen
lassen.',

                'enabled' => true
            ),
            array(
                'id'   => 8,
                'name' => 'Goodkat',
                'urlName' => 'goodkat',
                'biography' => 'Goodkat ist das neue Alias von Gimmix aus Leipzig, welcher sich musikalisch
irgendwo zwischen Rap, Footwork und Future Bass einfindet. Als Teil der Stiff Little
Spinners Crew releaste er in den letzten Jahren regelmäßig auf Audiolith Musik um
die 120BPM. Mit Goodkat versucht er nun als DJ und Produzent neue Akzente zu
setzen. Ansonsten lässt er dann lieber seine Musik für sich sprechen.',

                'enabled' => true
            ),
            array(
                'id'   => 9,
                'name' => 'AR-P',
                'urlName' => 'ar-p',
                'biography' => 'Egal ob Gangsterrap oder Saturday Night Car Tunes, AR-P hat immer den
passenden Track parat. Alte Schule und Neue Schule mixt er so, dass jeder Head
am Nicken ist. Dabei nutzt er unter anderem die Einflüsse von Künstlern wie Run

The Jewels, Danny Brown, Notorious B.I.G. und Non Phixion, welche direkt den
Autotune von den Decks vertreiben. Smoothe Hip Hop Klassiker gepaart mit New
School Sound bringen wieder Leben auf die Tanzfläche.',

                'enabled' => true
            ),

        ));
    }
}
