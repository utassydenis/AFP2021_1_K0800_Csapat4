# Zöldség-gyümölcs kereskedés Funkcionális Specifikáció

## 1. Áttekintés
---
A projekt elsődleges célja az, hogy a zöldség-gyümölcs kereskedés raktárkészlete átlátható és
könnyen kezelhető legyen. Éppen ezért teljesen felhasználóbarátnak és egyértelműnek kell lennie,
hogy mindenki tudja használni (azok is, akik egyáltalán nem értenek az adatbázisokhoz). A weboldal
funkciói a következők:
    - teljes raktárkészlet listázása
    - módosítás
    - keresés
    - törlés
Az árunak van megnevezése, kategóriája (zöldség/gyümölcs), mennyisége, mennyiségi egysége és ára. Új áru 
hozzáadásakor ezeket meg kell adni. A megnevezés és a kategória a magyar ABC betűiből kell álljon, a mennyiség
egy szám, ami nem biztos, hogy egész, a mennyiségi egység lehet kg és db, az ár egy egész szám. 

## 2. Jelenlegi helyzet
---
A megrendelő szeretné a raktárkészletet egy biztosabb és egyszerűbb felületen vezetni. Ezt egy weboldal
segítségével képzeli el, hiszen számítógépen gyorsabban fel tudják vinni az áru adatait, mint kézzel írva,
emelett a sok füzet helyett egy számítógépre lesz csak szükségük. Jelenleg a raktárkészlet vezetése egy
füzetben történik az üzletük irodájában, ami meglehetősen megnehezíti munkájukat, emelett a füzetet
könnyen el is veszíthetik. A megrendelő számára fontos, hogy új áru feltöltésekor minden adatot meg
kelljen adni, hiszen csak úgy tudják beazonosítani az adott terméket. Emelett leszögezte, hogy ne legyen
bonyolult az oldal, hogy az egy gyengébb számítógépen is megfelelően működjön lassú internetkapcsolattal.
Ezen okokból kifolyólag megkértek minket, hogy csináljuk meg nekik a vágyott weboldalt, ami megkönnyíti
mindennapi munkájukat a kereskedésben.

## 3. Követelmény lista
---
    
| ID  | Név | Kifejtés |
| ------------- | ------------- | ------------- |
| 1  | Termékek hozzáadása  | A felhasználók hozzáadhatják azon új termékeket amelyek eddig nem szerepeltek az adatbázisban. Például szezonális termékek. |
| 2  | Termékek törlése  | Azon termékeket amelyek bármely hibát tartalmaznak a hozzáadás során, képesek lesznek eltávolítani a felhasználók. |
| 3  | Termékek listázása  | Ezen funkció segítségével a felhasználók képesek lesznek megjeleníteni ABC sorrendben a termékeket név szerint. |
| 4  | Termék keresés  | Különböző szűrőkkel és szöveges keresővel tud a felhasználó keresni. |
| 5  | Termék módosítás  | Az adatbázisban szereplő termékeket illetően a felhasználó képes lesz modosítást végrehajtani a mennyiséget vagy a nevet illetően. |
## 4. Használati eset
---

### LEÍRÁS

A használati diagram alapvetően 5 aktorral operál melyek nem mások mint:
    - Vásárló 
    - Adatbázis 
    - Eladó 
    - Jogosultság kezelő 
    - Tranzakció lebonyolító eszköz 

**Vásárló**: Képes listázni termékeket, hozzáadni és eltávolítani a kosarából és végbevinni a vásárlást.
**Eladó**: Képes hozzáadni/eltávolítani régi/új terméket. A sikeres vásárlásért felel.


Egy specifikus használati eset leírása:

A vásárló felkeresi üzletünket, lehetősége nyílik megtekinteni az elérhető termékeket, illetve segítséget tud
kérni az eladótól. Amint megtalálta azon termékeket amelyekre szüksége van, hozzáadhatja őket a kosárhpz
Amint végzett a válogatással, a vásárló a rendszerherz/eladóhoz fordul, hogy véglegesítse a vásárlást
a tranzakció lebonyolító eszköz segítségével. Amint ez sikeresen végbe ment, a vásárló valamilyen 
visszaigozálst kap a vásárlásáról.

![Image](https://github.com/utassydenis/AFP2021_1_K0800_Csapat4/blob/main/pictures/UseCaseDiagram.png)

## 6. Jelenlegi üzleti folyamatok modellje
---
![Image](https://github.com/utassydenis/AFP2021_1_K0800_Csapat4/blob/main/pictures/funkspec%20-%20jelenlegi%20%C3%BCzleti%20folyamatok.jpg)

## 7. Igényelt üzleti folyamatok
---
![Image](https://github.com/utassydenis/AFP2021_1_K0800_Csapat4/blob/main/pictures/funkspec-%20ig%C3%A9nyelt%20%C3%BCzleti%20folyamatok.jpg)

## Képernyő tervek

### Főoldal bejelentkezés előtt
![image](https://github.com/utassydenis/AFP2021_1_K0800_Csapat4/blob/main/pictures/F%C5%91oldal.drawio.png)
### Főoldal bejelentkezés után
![image](https://github.com/utassydenis/AFP2021_1_K0800_Csapat4/blob/main/pictures/Bejelentkezett%20K%C3%A9perny%C5%91.drawio.png)
### Regisztrációs oldal
![image](https://github.com/utassydenis/AFP2021_1_K0800_Csapat4/blob/main/pictures/Regiszt%C3%A1ci%C3%B3%20k%C3%A9perny%C5%91.drawio.png)
### Felhasználó adatmódosítás és fiók törlés oldal
![image](https://github.com/utassydenis/AFP2021_1_K0800_Csapat4/blob/main/pictures/Felhaszn%C3%A1l%C3%B3i%20fi%C3%B3k.drawio.png)

## 8. Forgatókönyv
---
Egy hétfői napon friss áru érkezett a zöldség-gyümölcs kereskedésbe. A dolgozónak (legyen most Kati) ilyenkor ezt dokumentálnia
kell a füzetbe, hogy miből mennyi érkezett. Kati szorgosan el is kezdi írni a megnevezést, mennyiséget, mennyiségi egységet és
árat, de figyelnie kell arra, hogy olvashatóan írjon, mivel rajta kívül más is dolgozik az üzletben. Miután befejezte a raktár
feltöltését főnöke közölte vele, hogy hamarosan számítógépen kell vezetnie az információkat a raktárról. Kati nagyon boldog volt,
hiszen számítógépen gyorsabban tud gépelni és arra sem kell figyelnie, hogy írása olvasható legyen. A következő áru érkezésekor
már ezzel dolgozott, és fele annyi idő alatt végzett. Szerinte sokkal egyszerűbb lett az árú felvitele és módosítása is, mert
áthúzások helyett csak módosítani kell a mennyiséget az adatbázisban. Ha egy adott áruról nincs tisztában, hogy van-e a raktáron,
a keresés funkcióval könnyen és gyorsan megbizonyosodhat róla. Összességében Kati, a többi dolgozó és a főnök elégedett.

## 9. Fogalomtár
---
**Áru**: Az áru minden, ami szükségletet elégít ki és adásvétel tárgyává válhat. Tárgyi formájuk szerint. Termék. Szolgáltatás.
**Raktárkészlet**: Vállalkozási tevékenységet közvetlenül vagy közvetve szolgáló eszközök, amelyek vagy egyetlen tevékenységi folyamatban vesznek részt és a tevékenység folyamán eredeti megjelenési alakjukat elvesztik, vagy több tevékenységi folyamatban vesznek részt, de a törvény szerint azokat a készletek közé kell besorolni, vagy egy éven belül használódnak el.
**Weboldal**: Egy olyan számítógépes dokumentum, mely megfelel a World Wide Web számára, és alkalmas arra, hogy egy webböngésző megjelenítse. A webböngésző a weblapot monitoron vagy mobil eszközön jeleníti meg. A weboldal általában a dokumentum látható elemeit foglalja magába, de a weblap szó jelentheti magát a számítógépen tárolt fájlt is, melyet általában HTML vagy más hasonló leíró nyelven írtak meg.
**Adatbázis**: Az adatbázis azonos minőségű (jellemzőjű), többnyire strukturált adatok összessége, amelyet egy azok tárolására lekérdezésére és szerkesztésére alkalmas szoftvereszköz kezel.
**Tranzakció**: Tranzakciós költségek alatt azokat a pénzben felmerült kiadásokat értjük, amelyek egy adott ügylet lebonyolításakor felmerülnek.