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
| 1  | Regisztráció  | Jelenlegi vagy jövendőbeli dolgozó regisztárlása a rendszerbe, ahol saját felhasználónév alatt tudja vezetni a műszakot. |
| 2  | Bejelentkezés  | Az éppen dolgozó munkatárs képes belépni az adatbázisba, ezáltal eladást és esetlegi árubeérkezést rögzíteni. |
| 3  | Termékek hozzáadása  | A felhasználók hozzáadhatják azon új termékeket amelyek eddig nem szerepeltek az adatbázisban. Például szezonális termékek. |
| 4  | Termékek törlése  | Azon termékeket amelyek bármely hibát tartalmaznak a hozzáadás során, képesek lesznek eltávolítani a felhasználók. |
| 5  | Termékek listázása  | Ezen funkció segítségével a felhasználók képesek lesznek megjeleníteni ABC sorrendben a termékeket név szerint. |
| 6  | Termék keresés  | Különböző szűrőkkel és szöveges keresővel tud a felhasználó keresni. |
| 7  | Termék módosítás  | Az adatbázisban szereplő termékeket illetően a felhasználó képes lesz modosítást végrehajtani a mennyiséget vagy a nevet illetően. |
| 8  | Felhasználói fiók módosítása  | A bejelentkezett felhasználó képes az adatait módosítani. |
| 9  | Felhasználó törlése  | Az adatabázisból törlésre kerül a felhasználó minden adata. |

## 4. Használati eset
---

###LEÍRÁS###

A használati diagram alapvetően 5 aktorral operál melyek nem mások mint:
    - Vásárló 
    - Adatbázis 
    - Eladó 
    - Jogosultság kezelő 
    - Tranzakció lebonyolító eszköz 

**Vásárló**: A sikeres belépés után képes listázni termékeket, hozzáadni és eltávolítani a kosarából és végbevinni a vásárlást.
**Eladó**: Képes bejelentkezni, fiókokat testreszabni, hozzáadni/eltávolítani régi/új terméket. A sikeres vásárlásért felel.


Egy specifikus használati eset leírása:

A vásárló felkeresi üzletünket, ahol saját adataival képes fiók létrehozni magának, melyben 
további vásárlások esetén be tud jelentkezni és eltárolni adatait az adatbázis segítségével.
Bejelentkezés után lehetősége nyílik megtekinteni az elérhető termékeket, illetve segítséget tud
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
