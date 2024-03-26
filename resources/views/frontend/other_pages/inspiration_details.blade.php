@extends('frontend.frontend_dashboard')
@section('main')
    <section class="about_us"></section>
    <div class="container my-5">
        <div class="row mx-4">
            <div class="col-md-12">
                <h1 class="mb-4"style="text-align: center">1.</h1>
                <h2 class="mb-4"style="text-align: center">Készház Hajdúszoboszló</h2>
                <p class="mb-3">Ez a Hajdúszoboszlón épült prémium kategóriás ingatlan a kivitelező vállalat (Anico
                    Készházak) tevékenysége során kiemelt projektnek számít. A 2015-ben épült ingatlan tekintélyes területet
                    biztosít lakói számára. A földszint 319 m2 nettó hasznos területtel, 4 állásos garázzsal, az emelet
                    további nettó 95 m2 lakrésszel, valamint az épületen körben 190 m2 terasszal és rámpával biztosítja a
                    tágas életteret a ház tulajdonosai számára. A belmagasság a földszinten és emeleten is 2,7 m magas, 30
                    cm vastagságban cellulóz födémszigeteléssel</p>
                <section class="text-center mt-5">
                    <img src="{{ asset('frontend/assets/images/other_pages/inspiration1/insp1pic.jpg') }}" class="img-fluid"
                        style="max-height: 500px;">
                </section>
                <div class="mb-5"></div>

                <p class="mb-3">A grandiózus épület nem csupán méreteiben kiemelkedő, hanem az alkalmazott építési és
                    épületgépészeti megoldásai is túl mutatnak az új építésű házaknál alkalmazott, általában jellemző
                    megoldásokhoz képest. A falszerkezet 20 cm széles KVH lucfenyőből készült, teljes keresztmetszetben
                    cellulóz, kívül pedig 14 cm polisztirol hőszigeteléssel. A ház fűtése talajszondás hőszivattyús
                    padlófűtéssel és mennyezet hűtés-fűtéssel megoldott, 4 db napkollektor biztosítja a melegvíz ellátást.
                    Továbbá napelemes rendszer is került a tetőszerkezetre. Még extraként légtechnikai rendszer, központi
                    porszívó és 4 db fénycsatorna is beépítésre került az ingatlanba. A fenntarthatóságot is szem előtt
                    tartva a teljes ház AA++ megvilágítási hálózattal rendelkezik.</p>
                <div class="mb-5"></div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('frontend/assets/images/other_pages/inspiration1/inspprop.jpg') }}"
                                class="img-fluid" style="width:100%; height:200px; object-fit:cover;" alt="Kép 1">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('frontend/assets/images/other_pages/inspiration1/inspchip.jpg') }}"
                                class="img-fluid" style="width:100%; height:200px; object-fit:cover;" alt="Kép 2">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('frontend/assets/images/other_pages/inspiration1/inspplant.jpg') }}"
                                class="img-fluid" style="width:100%; height:200px; object-fit:cover;" alt="Kép 3">
                        </div>
                    </div>
                </div>
                <div class="mb-5"></div>
                <p>Az ingatlant az Anico Készházak akkori (2015) saját tervezője tervezte, a belső elrendezést pedig a
                    tulajdonos és a belsőépítésze álmodta meg. Az esztétika és a magas komfortérzés érdekében süllyesztett
                    tokos redőnyök kerültek kialakításra, ami azt jelenti, hogy a falpanelben van a redőnytokok helye
                    kialakítva. Szintén az esztétika és a tartósság jegyében a homlokzat burkolati rendszer acéllamellás
                    kőburkolattal készült.</p>
                <div class="mb-5"></div>
                <section class="text-center mt-5">
                    <img src="{{ asset('frontend/assets/images/other_pages/inspiration1/insproom.jpg') }}" class="img-fluid"
                        style="max-height: 500px;">
                </section>
                <div class="mb-5"></div>
                <p>Mindemellett a biztonságra is nagy hangsúlyt fektetett a kivitelező, a teljes épület épületfelügyeleti
                    rendszer alatt áll. A gépészeti és elektronikai berendezéseket, mint a fűtésrendszer, a redőnyök, a
                    riasztó-, és kamerarendszer stb. ezen az épületfelügyeleti rendszeren keresztül lehet szabályozni.

                </p>
                <div class="mb-5"></div>

                <section class="text-center mt-5">
                    <img src="{{ asset('frontend/assets/images/other_pages/inspiration1/inspgreenhouse.jpg') }}"
                        class="img-fluid" style="max-height: 500px;">
                </section>
                <div class="mb-5"></div>
                <p>Az ingatlan kulcsrakészen 1 év alatt készült el, ez ma már akár lerövidülhet 8-10 hónapra is. Viszont a
                    számtalan extra technológia alkalmazása és az ingatlan grandiózus mérete miatt valószínűleg ma is
                    szükség lenne 1 évre a kulcsrakész állapot eléréséig. A 2015-ös építőipari árak mostanra sokat
                    változtak, de egy ehhez hasonló extrákkal rendelkező ház kulcsrakész kivitelezése 2023-ban elérheti, de
                    meg is haladhatja a 400 millió Ft körüli árat.
                    További információk és képek megtekinthetők az <a
                        href="https://anico-keszhazak.hu/referenciak">https://anico-keszhazak.hu/referenciak</a> oldalon.
                    Érdeklődni pedig az alábbi linken keresztül lehet: <a
                        href="https://anico-keszhazak.hu/kapcsolat">https://anico-keszhazak.hu/kapcsolat</a>.

                </p>
                <section class="text-center mt-5">
                    <img src="{{ asset('frontend/assets/images/other_pages/inspiration1/inspwindow.jpg') }}"
                        class="img-fluid" style="max-height: 500px;">
                </section>
                <div class="mb-2"></div>

                <p style="text-align: center">Forrás: ANICO Készházak</p>
                <hr>
                <h1 class="mb-4"style="text-align: center">2.</h1>
                <h2 class="mb-4"style="text-align: center">CLT ház és technológia</h2>
                <h4 class="mb-4"style="text-align: center">A CLT egy építési technológia, amely segítségével karbon
                    semleges családi házakat lehet felépíteni 3-5 nap alatt szerkezetkészen, milliméter pontosan.</h4>

                <p class="mb-3">A CLT egy építési technológia, amely segítségével karbon semleges családi házakat lehet
                    felépíteni 3-5 nap alatt szerkezetkészen, milliméter pontosan.</p>
                <p class="mb-3"><strong>A CLT jelentése:</strong> Cross Laminated Timber, magyarul Kereszt Ragasztott
                    Fűrészárú, vagyis
                    Rétegragasztott Fapanel. Rétegragasztott előre gyártott, fa panelekből építik össze az épületet úgy,
                    mint egy lapra szerelt bútort. A falpaneleket legalább 3 rétegű, 90 fokban elforgatott fatáblából
                    készítik gyárban.</p>
                <section class="text-center mt-5">
                    <img src="{{ asset('frontend/assets/images/other_pages/inspiration2/insp2workers.png') }}"
                        class="img-fluid" style="max-height: 500px;">
                </section>
                <div class="mb-3"></div>
                <p><strong>A technológia alapelvei:</strong></p>
                <div class="mb-3"></div>

                <p>Nem csak a saját életünkért vagyunk felelősek, hanem a gyerekeinkéért és a következő generációkért is. A
                    „lábnyomok”, amiket hagyunk, jelentős hatással vannak a környezetünkre. Van, ahol a tervezés,
                    kivitelezés és az építés során nagy figyelmet kell szentelnünk a fenntarthatóságnak. A cementgyártás és
                    számos más mesterséges építő anyag előállítása többszörösen szennyezi a környezetünket. Létezik azonban
                    egy olyan anyag a természetben, ami négy vagy akár ötször is könnyebb, mint a beton, miközben legalább
                    annyira szilárd és rugalmas.
                    Az építőanyagok között kiemelkedő tulajdonságokkal bír a keresztrétegezett fa. Ez az anyag az építés
                    során képes arra, hogy nagyobb teret biztosítson anélkül, hogy a szerkezeti stabilitás elveszne.
                </p>

                <p>Már több mint 40 éve létezik a CLT technológia, mely földrengés biztos, gyors és precíz építési megoldást
                    nyújt. A panelek készítésénél a léceket hossz és kereszt irányban ragasztják egymáshoz, ezt követően a
                    falakat kivágják. Az építési folyamat során a szerkezeti panelek összeszerelése nagy pontossággal
                    történik, mint egy „svéd bútor”. Egy 100m² alapterületű ház összeszerelése csupán 3-4 napot vesz
                    igénybe.
                    Ezzel az építési rendszerrel megépített épületek négyzetméter ára azonos a hagyományos tégla építésű
                    házak kulcsrakész költségével. Az épületek gyors összeépítésével azonban rengeteg munkaidőt és pénzt
                    lehet megspórolni.

                </p>
                <div class="mb-3"></div>
                <p><strong>A CLT panel gyártása</strong></p>
                <div class="mb-3"></div>
                <p>A rétegragasztott falpanel gyártása magas nyomás alatt történik, ahol a paneleket szorosan összepréselik.
                    A gyártás során a külső és belső minőségellenőrök szemmel tartják a folyamatot. Minden panel, ami a
                    gyárban készül, száraz (12% nedvességtartalomra szárított fa), amely garantálja a termék hosszú
                    élettartamát.
                    A CLT táblák széles körben ismertek a nemzetközi piacon. A tömör fa elemek között találunk tartófalakat,
                    válaszfalakat, burkolatokat, tetőszerkezeteket és födémeket is. Az anyag könnyűsége miatt gyakran kerül
                    sor a használatára.
                    A falpanel elemek összeszerelését szakavatott faipari kivitelező cégek tudják elvégezni daruzással. Az
                    idő, melyet a daruzási folyamat igényel, csupán 15-20 perc per elem, így egy átlagos méretű földszintes
                    ház szerkezetkész állapotba hozása csupán néhány nap.
                </p>
                <div class="mb-3"></div>
                <p><strong>Minőség és precizitás</strong></p>
                <div class="mb-3"></div>
                <p>A CLT panelek minősítései között megtalálhatóak a PEFC és az FSC C119602. A panelek méretre szabása a
                    legmodernebb CNC gépekkel történik, amelyek a tervezési dokumentációk alapján végzik a munkát. A szabási
                    folyamat során az elektromos vezetékek előmarására, a hornyolásra és az élfúrásra is sor kerül.
                    A CLT technológia tehát olyan környezetbarát megoldást kínál, amelynek széleskörű alkalmazása nagy
                    segítséget jelenthet a jövő generációinak.
                <div class="mb-1"></div>
                Általános épületszerkezeti műszaki adatok:
                <div class="mb-1"></div>
                <ul>
                    <li>- Tartósság: Az EN 1995-1-1 szabvány alapján.</li>
                    <li>- Szilárdság: Az EN 338 szabvány szerint C24 értékkel.</li>
                    <li>- Ragasztás: PUR formaldehid-mentes ragasztó, az EN 15425 előírásoknak megfelelően.</li>
                    <li>- Felületi minőség: Többféle minőségben kapható, beleértve a nem látszó, ipari, lakó, valamint az
                        egyedi kiviteleket.</li>
                    <li>- Súly: Statisztikai számításokhoz a súlya 500 kg/m³, azaz 5,5 kN/m³.</li>
                    <li>- Hővezetési tulajdonságok: Hővezetési tényezője 0,12 W/mK, az EN ISO 10456 szabvány szerint.</li>
                    <li>- Hőmegtartó képesség: cp értéke 1600 J/kgK, az EN ISO 10456 szerint.</li>
                    <li>- Égési ellenállás: Euroklasse D-s2, d0 osztályba sorolva.</li>
                    <li>- Tűzellenállás: Az ETA 06/0138 szabvány szerint minősítve.</li>
                </ul>
                </p>
                <div class="mb-3"></div>
                <p><strong>Az építés folyamata</strong></p>
                <div class="mb-3"></div>
                <p>Mint egy látványos építőjáték, a CLT házak felhúzása a nulláról indul. Mielőtt belekezdünk, el kell
                    távolítani a humuszt a jövendőbeli otthon alól. Ki kell alakítani a talajon a síktükröt, ki kell ásni a
                    sávalap helyét, majd ezt követően a munkagödör alján ki kell önteni a szerelőbetont. Két nap pihentetést
                    követően el lehet készíteni az alaptest vasalatát, amit a munkagödörbe kell helyezni távtartókon. Ezt
                    követően lehet betonozni az alaptestet, majd meg kell várni a megfelelő szilárdulási időt.</p>
                <div class="mb-1"></div>
                <p>Ekkor jön a zsalukő lábazat építése úgy, hogy közben elhelyezzük benne a megfelelő vasalást, és kiöntjük
                    betonnal. Itt is meg kell várni a szilárdulási időt. Több körben töltjük fel tömörítve kavicszúzalékkal
                    a
                    lábazati falak közötti területet, amíg el nem érjük a vasalt lemez alsó síkját. A lábazati fal szélén
                    helyezzük el a peremzsalut, majd következik a vasszerelés, és a vasalt lemez betonozása.</p>
                <div class="mb-1"></div>
                <p>Nagy figyelmet kell fordítanunk a precizitásra, hiszen a CLT épületszerkezet toleranciája kicsi, maximum
                    3-5mm, ezért a betonozásnál gondosan ügyelünk, hogy nagyobb hézagok ne alakuljanak ki. A beton kötési
                    idejét
                    követően szükség esetén csiszoljuk is a felületet.</p>
                <div class="mb-1"></div>
                <p>A falak alatt kialakítjuk a vízszigetelést, majd a vasalt lemezen jelöljük ki lézerrel a falak helyét.
                    Ezután
                    acél sarokvasakat fúrunk a falak rögzítéséhez, és már indulhat is a falpanelek beemelése.</p>
                <div class="mb-1"></div>
                <p>A szerkezet összeépítése során egy jól strukturált útmutatót követünk, ami biztosítja, hogy minden a
                    helyére
                    kerüljön. A falpanelok a gyárból egy kamionnal vagy teherautóval közvetlenül a helyszínre érkeznek.</p>
                <div class="mb-1"></div>
                <p>Mint egy nagy összerakós játék, a ház felépítése egyszerűnek tűnhet, de igényli a nagyfokú szakértelmet
                    és a
                    precizitást, amelyet a KEMBA DESIGN szívesen biztosít az Ön számára is. A tervezéssel, szállítással és
                    építéssel kapcsolatos információkért vegye fel velük a kapcsolatot az alábbi elérhetőségen:
                    <a href="https://kembadesign.hu/kapcsolat/">https://kembadesign.hu/kapcsolat/</a>
                    A CLT technológiával megvalósult izgalmas projektek bemutatása és a cikk folytatása elérhető az alábbi
                    linken: <a href="https://kembadesign.hu/clt-haz/">https://kembadesign.hu/clt-haz/</a>
                </p>
                <div class="mb-2"></div>
                <p style="text-align: center">Forrás: KEMBA DESIGN</p>
            </div>

        </div>
    </div>
@endsection
