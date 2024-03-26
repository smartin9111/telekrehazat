@extends('frontend.frontend_dashboard')
@section('main')
    <section class="vh-100 overflow-auto">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <h1 class="text-center mb-5">KISOKOS</h1>
                    <p>Az általunk létrehozott kisokosnak nem célja, hogy a szakmában alkalmazott szakkifejezésekkel teljes
                        mértékben megegyező információkat közöljön. Törekszünk az egyezésekre, de a közérthetőség érdekében
                        számos eltérést is tartalmaz. A „kisokos” célja a szűrőrendszerünk egyes elemeinek és azok
                        működésének megértése.</p>
                    <div class="margin mb-5"></div>
                    <h2>Mintaterv/típusterv</h2>
                    <p>Olyan házterv, amit építészmérnök tervezett általános előírások és praktikum figyelembevételével, és
                        arra szolgál, hogy bemutasson egy alap ház kialakításra egy elképzelést. A mintatervet vagy
                        típustervet a kiválasztott telek adottságai, az egyedi elképzelések és kívánságok, valamint a helyi
                        építési szabályok különbözősége miatt személyre szabottan lehet megvalósítani. Ezek a tervek
                        kizárólag tájékoztatás céljából jöttek létre és partnereink szellemi tulajdona.</p>
                    <div class="margin mb-5"></div>

                    <h3>Mintaterv neve, jelölése</h3>
                    <p>Erre az információra hivatkozva lehet megkülönböztetni a kiválasztott tervet/terveket a kivitelező
                        céggel való kapcsolatfelvétel során.</p>
                    <div class="margin mb-5"></div>

                    <h3>Hasznos alapterület (m2)</h3>
                    <p>Ez az a terület, amit hasznosítani tudunk életterünkhöz. Ebbe már nem tartoznak bele a ház szerkezeti
                        elemei (pl.: falak, tető alatti rész, ahová már nem férünk be, oszlopok stb.).</p>
                    <div class="margin mb-5"></div>

                    <h3>Szintek száma</h3>
                    <p>Rendszerünkben minden szintet 1-nek tekintünk, így a pince + földszint + emelet kombináció 3
                        szintnek, míg a két szint belmagasságú ház galériával 2 szintnek számít.</p>
                    <div class="margin mb-5"></div>

                    <h3>Akadálymentes</h3>
                    <p>Lépcső nélkül használható minden helyiség; van a háznak olyan bejárata, amely elérhető lépcső nélkül
                        a telek szintjéről.</p>
                    <div class="margin mb-5"></div>

                    <h3>Belmagasság</h3>
                    <p>A ház belső - ember által használt - területein (lakótér) elérhető legnagyobb nettó magasság, ami a
                        padló és a mennyezet között mért távolságot jelenti. Átlagosan egy szint kényelmesen használható
                        magassága 2,5 méter – 2,9 méter között található egy családi ház esetében.</p>
                    <div class="margin mb-5"></div>

                    <h3>Szobák száma</h3>
                    <p>Rendszerünkben 1 szobának számít minden olyan helyiség, mely képes betölteni a hálószoba funkcióját.
                        Tehát ha például egy 100 m2-es házat veszünk alapul, ahol van 3 hálószoba és egy
                        nappali-étkező-konyha helyiség, 1 kamra, 1 háztartási helyiség és 2 fürdőszoba, akkor ez a ház 4
                        szobás háznak tekinthető a szűrőrendszerünk szempontjából (3 hálószoba + nappali).</p>


                    <div class="margin mb-5"></div>


                    <h2>Készültségi fokozat</h2>
                    <p>Ez arra vonatkozik, hogy amikor a kivitelező átadja a házat a tulajdonosának, akkor a ház milyen
                        állapotban van, milyen szinten készült el. Rendszerünkben 4 készültségi fokozatot különböztetünk
                        meg: szerkezetkész, emelt szerkezetkész, kulcsrakész és prémium kulcsrakész állapot. A készültségi
                        fokozatokhoz tartozhatnak extrák, amelyeket csak az adott partnerünk biztosít a kiajánlott áron
                        belül.</p>
                    <div class="margin mb-5"></div>

                    <h3>Szerkezetkész állapot</h3>
                    <p>Tartalmazza a ház szerkezeti elemeit (alap, falak, tető, tetőfedés, nyílászárók). Néhány kivitelező
                        partnerünk esetében nem tartalmazza az alapozást a szerkezetkész állapot, de ezt külön jelöljük a
                        terv adatlapjánál.</p>
                    <div class="margin mb-5"></div>

                    <h3>Emelt szerkezetkész állapot</h3>
                    <p>Tartalmazza a ház szerkezeti elemeit (alap, falak, tető, tetőfedés, nyílászárók), a szigetelést,
                        valamint a gépészet, a villanyszerelés és vízszerelés megkezdéséhez szükséges csatlakozási pontok
                        kialakítását. Némely partnerünk esetében ez az állapot csak a burkolást, festést, szanitereket és
                        villanykapcsolókat nem tartalmazza a kulcsrakész állapothoz képest - ezt külön jelöljük a terv
                        adatlapján.</p>
                    <div class="margin mb-5"></div>

                    <h3>Kulcsrakész állapot</h3>
                    <p>Tartalmazza a ház szerkezeti elemeit (alap, falak, tető, tetőfedés, nyílászárók), továbbá a
                        szigetelést, a gépészetet, a villanyszerelést és vízszerelést, valamint a külső-belső festést,
                        burkolást, bekerülnek a beltéri ajtók, fürdőszobai szaniterek és villanykapcsolók is.</p>
                    <div class="margin mb-5"></div>

                    <h3>Prémium kulcsrakész állapot</h3>
                    <p>Tartalmazza a ház szerkezeti elemeit (alap, falak, tető, tetőfedés, nyílászárók), továbbá a
                        szigetelést, a gépészetet, a villanyszerelést és vízszerelést, valamint a külső-belső festést,
                        burkolást, bekerülnek a beltéri ajtók, fürdőszobai szaniterek és villanykapcsolók is. A válaszható
                        anyagok és elemek (pl.: burkolatok, beltéri ajtók, szaniterek) költségkerete magasabb, mint a normál
                        kulcsrakész állapot esetében és extra tulajdonságokkal rendelkezik a terv (pl.: nagyobb nyílászárók,
                        megújuló energiaforrások).</p>
                    <div class="margin mb-5"></div>

                    <h2>Alapozás típusa</h2>
                    <p>A ház alá kerülő stabil alapzat, mely megtartja a házat, segíti a ház egyensúlyban tartását.
                        Rendszerünkben megkülönböztetjük a magyarországi családi házaknál leggyakrabban alkalmazott alap
                        típusokat: sávalap, lemezalap, talajcsavar.</p>
                    <div class="margin mb-5"></div>

                    <h3>Sávalap</h3>
                    <p>A teherhordó szerkezetek alatt elhelyezésre kerülő vasbeton szerkezet. Az egyik leggyakrabban
                        előforduló alapozási típus Magyarországon.</p>
                    <div class="margin mb-5"></div>

                    <h3>Lemezalap</h3>
                    <p>A ház teljes területe alatt elhelyezésre kerülő vasalt beton szerkezet.</p>
                    <div class="margin mb-5"></div>

                    <h3>Talajcsavar</h3>
                    <p>A ház alá pontszerű elrendezéssel elhelyezésre kerülő acél előregyártott szerkezeti elemek. Hazánkban
                        még ritka megoldásnak számít, nyugati országokban elterjedt megoldás a gyors kivitelezési idő és a
                        változatos helyszíni telepítési lehetőség miatt.</p>
                    <div class="margin mb-5"></div>

                    <h2>Nettó és bruttó ár</h2>
                    <p>A bruttó ár az az általános forgalmi adóval (áfa) terhelt összeg, amely a végösszeg, amit a
                        házépítőnek ki kell fizetnie. A nettó ár pedig az áfával nem terhelt összeg. Azért tüntetjük fel
                        mind a kettőt, mert az áfa mértéke eltérő lehet attól függően, hogy cég építkezik, vagy
                        magánszemély, házat épít vagy üzemet, garázst stb. Felületünkön a bruttó összegeket az alapján írjuk
                        ki, hogy feltételezzük az 5%-os és a 27%-os áfa mértékét - de ez az egyedi esetekre nem
                        érvényesíthető, csupán a tájékoztatás célját szolgálja.</p>
                    <div class="margin mb-5"></div>

                    <h2>Garázs és az áfa</h2>
                    <p>Csak a lakóegységek közé sorolható helyiségek áfájára vonatkozik az 5%-os áfakulcs, így még a házzal
                        egybeépített garázsok esetén is a ház többi részére 5%, míg a garázs területére 27% áfát kell
                        számolni. Ezért különbözik a nettó és bruttó érték közötti mérték a különböző típusú tervek
                        esetében.</p>
                    <div class="margin mb-5"></div>

                    <h2>Oldalhatáron álló beépítés</h2>
                    <p>Az esetben beszélünk oldalhatáron álló beépítésről, hogyha a helyi szabályzat szerint a ház úgy
                        helyezkedhet el a telken belül, hogy az egyik szomszédhoz közelebb kell épülnie, mint a másikhoz és
                        amelyhez közelebb van, azon az oldalon nagy méretű nyílászárók nem helyezhetők el.</p>
                    <div class="margin mb-5"></div>

                    <h2>Szabadon álló beépítés</h2>
                    <p>Azok a házak esetében, amelyek a telken belül (közel) szabadon elhelyezhetők, beszélünk szabadon álló
                        beépítésről. Ebben az esetben is vannak minimum távolságok, amiket be kell tartani az épület
                        elhelyezésekor, de a minimum távolságok elég nagyok ahhoz, hogy a ház minden oldalára szabadon
                        elhelyezhető nagy méretű nyílászáró is (ha ezt éppen más szabály nem írja felül).</p>
                    <div class="margin mb-5"></div>

                    <h2>CLT technológiával kivitelezett ház</h2>
                    <p>Tömör fa falakból és teherhordó szerkezetből álló megoldás, ahol a hőszigetelés szintén fából, azaz
                        farostból készül. Üzemben előre gyártják az egyes nagy méretű komplex elemeket.</p>
                    <div class="margin mb-5"></div>

                    <h2>SIP technológiával kivitelezett ház</h2>
                    <p>SIP technológia esetében falpanelekről beszélhetünk, ahol a födémet és tetőt tartó elemek lehetnek
                        fából vagy fémből is akár. A technológia jellemzője a szendvics szerű kialakítás, azaz általában két
                        OSB réteg közé egy polisztirol szigetelés kerül elhelyezésre - üzemben előregyártott megoldással.
                    </p>
                    <div class="margin mb-5"></div>

                    <h2>Fa vázszerkezetű ház</h2>
                    <p>Azt a háztípust tekintjük rendszerünkben fa vázszerkezetű háznak, amely tartó elemei fából készülnek
                        el és a helyszínen kerülnek összeállításra, felépítésre. A falazat a kivitelező speciális
                        rétegrendje alapján készül el (akár előregyártott megoldással) és nem besorolható a többi
                        kategóriába.</p>
                    <div class="margin mb-5"></div>

                    <h2>YTONG falazatú ház</h2>
                    <p>Az ytongból épült házak kivitelezése leginkább a téglaházakhoz hasonlítható - számos eltéréssel.
                        Anyagát tekintve pedig (pórus)beton falazó elemeket jelent.</p>
                    <div class="margin mb-5"></div>

                    <h2>Porotherm falazatú ház</h2>
                    <p>A ház összes falának (teherhordó és válaszfalak egyaránt) anyaga kerámia tégla. Általában
                        Magyarországon a köznyelv ezt a technológiát és anyagot érti a hagyományos építési mód kifejezés
                        alatt.</p>
                    <div class="margin mb-5"></div>

                    <h2>Fém vázszerkezetű ház</h2>
                    <p>Fém vázszerkezetről abban az esetben beszélünk, ha a ház tartószerkezeti elemei (tartó oszlopai,
                        áthidalói stb.) fémből készülnek el.</p>
                    <div class="margin mb-5"></div>

                    <h2>Gerendaház</h2>
                    <p>Azokat a házakat nevezzük rendszerünkben gerenda házaknak, melyeknek fő falai és tartószerkezetei
                        elemei tömör fából, gerenda elemekkel készülnek el.</p>
                    <div class="margin mb-5"></div>

                    <h2>Magas tető</h2>
                    <p>Minden olyan tetőszerkezetet ide sorolunk, melynek elemei láthatóan nagyobb hajlásszöget zárnak be,
                        mint 10o.</p>
                    <div class="margin mb-5"></div>

                    <h2>Lapos tető</h2>
                    <p>Számos meghatározása létezik a lapos tetőknek. Rendszerünkben minden olyan tetőt, amelynek
                        hajlásszöge kisebb, mint 10o lapostetőnek sorolunk be. Tehát azokat a tetőket, melyek szabad szemmel
                        vízszintesnek látszódnak, mi lapostetőnek nevezzük.</p>
                    <div class="margin mb-5"></div>

                    <h2>Vegyes kialakítású tető</h2>
                    <p>Az olyan háztető kialakítást, ahol magas és lapos tető is kivitelezésre kerül, vegyes kialakítás
                        megnevezéssel jelöljük.</p>
                    <div class="margin mb-5"></div>

                    <h2>Kivitelezés időtartama</h2>
                    <p>A kivitelező partnerünkkel megkötött szerződés időpontjától számított becsült átlagos időtartam, mely
                        eltérhet a kivitelező aktuális leterheltsége miatt. Tehát ez egy tájékoztató időtartam, mely a
                        kivitelező tapasztalatai alapján került meghatározásra és minden esetben a szerződéskötés során
                        meghatározott időtartam a figyelembeveendő.</p>
                    <div class="margin mb-5"></div>

                    <h2>Szolgáltatások</h2>
                    <p>Ezek olyan alvállalkozóink és partnereink segítségével nyújtott fizetős szolgáltatások, melyeket
                        időpontfoglaló rendszerünkön/e-mailen/regisztráción keresztül, előre fizetés útján lehet igénybe
                        venni. Részletes leírások az egyes szolgáltatások saját felületén és az ÁSZF-ben olvashatók.</p>


                    <div class="margin mb-5"></div>
                    <section class="text-center mt-5">
                        <img src="{{ asset('frontend/assets/images/other_pages/kerdojel.png') }}" class="img-fluid"
                            style="max-height: 500px;">
                    </section>
                    <div class="margin mb-5"></div>

                    <h2 style="text-align: center">GYAKORI KÉRDÉSEK</h2>
                    <div class="margin mb-5"></div>

                    <p><strong>Lehet a Telekre Házat Kft.-től házat rendelni egy meglévő telekre?</strong><br>
                        Nem. A Telekre Házat Kft. weboldalának célja a tájékoztatás. A kiszemelt ház tervvel kapcsolatban
                        felmerülő minden kérdést a tervnél feltüntetett kivitelezővel lehet egyeztetni, a megadott kontaktok
                        valamelyikén. A tervek tartalmáért és a feltüntetett terv információkért a kivitelező vállalat
                        vállalja a felelősséget.</p>
                    <div class="margin mb-5"></div>

                    <p><strong>Kell fizetni a keresésért?</strong><br>
                        Nem. A weboldalunkat minden érdeklődő ingyenesen böngészheti. A fizetős szolgáltatásaink mellett
                        külön feltüntetjük a díjat és a fizetési lehetőségeket. Az oldalra történő regisztráció is
                        díjmentes.</p>
                    <div class="margin mb-5"></div>

                    <p><strong>Kell telekkel rendelkezni ahhoz, hogy egy ház megépíthető legyen az oldalon található tervek
                            közül?</strong><br>
                        Némely vállalat segít a telek keresésben és választásban, de vannak olyan vállalatok, amelyeknél
                        történő rendeléshez elengedhetetlen a rendelkezésre álló vagy kiszemelt telek. Ebben partnereink
                        tudnak segítséget nyújtani.</p>

                    <p><strong>Ezek a házak már készen vannak és lehet költözni? </strong><br>Nem. Ezek csupán ház tervek,
                        melyek a kivitelező partnerrel történő egyeztetést követően akár személyre szabhatók is. </p>

                    <p><strong>Most akkor a favázszerkezetű házak, a CLT és SIP technológiával épülő házak könnyűszerkezetes
                            házak és OSB lapok tartják majd a tetőt is például? </strong><br>Ezen technológiák alkalmazása
                        esetében (is) előfordul az OSB lapok alkalmazása, de nem pusztán ezek a tartószerkezeti elemek. Ezen
                        technológiák összetett, komplex és hosszú évek alatt kikísérletezett technológiák, melyek a
                        jogszabályoknak és általános minőségi elvárásoknak maximálisan megfelelnek, a magyarországi
                        időjárási körülményekre tervezett hosszú távú, tartós megoldások. Rendszerünkben nem jelenítünk meg
                        olyan technológiát, mely nem felel meg a hazai előírásoknak. </p>

                    <p><strong>Kivel érdemes egyeztetni, ha érdekel egy ház terv? </strong><br>Minden esetben a tervnél
                        feltüntetett kivitelező partnerünkkel és a feltüntetett elérhetőségek valamelyikén. </p>
                </div>
            </div>
        </div>
    </section>
@endsection
