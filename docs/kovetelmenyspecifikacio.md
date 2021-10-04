# Zöldség-gyümölcs kereskedés Követelmény Specifikáció

## Áttekintés
---
A projekt célja, hogy egy zöldség-gyümölcs kereskedés raktára könnyen kezelhető és átlátható legyen az ott
dolgozók számára. A weboldalon a raktáron lévő áru listázható, módosítható, kereshető és törölhető lesz. Az 
árunak van megnevezése, kategóriája (zöldség/gyümölcs), mennyisége, mennyiségi egysége és ára. Új áru hozzáadásakor
ezeket meg kell adni.

## 2. Jelenlegi helyzet
---
Kereskedésünk friss zöldségekkel és gyümölcsökkel várja vásárlóinkat a hét minden napján. Kínálatunkban megtalálható
minden féle zöldség és gyümölcs. A vásárlás személyesen történik az üzletünkben. A raktárkészlet nyilvántartása jelenleg
egy füzetben történik, amit az üzlet irodájában vezetünk. Ebben a füzetben minden eladás és áru érkezés vezetve van.

## 3. Vágyálom rendszer
---
A kínálat bővítése és a munkánk megkönnyítése érdekében szeretnénk a kereskedésünknek egy könnyen kezelhető, átlátható
weboldalt, ami megkönnyíti munkánkat. Célunk, hogy a raktárkészletet ne egy füzetben vezessük, hanem egy adatbázis
tárolja egy weboldalon keresztül, amelynek használata nem okoz gondot egyik dolgozónak sem. Fontos, hogy a zöldség és
a gyümölcs külön kategóriában legyen, hogy könnyebben lehessen dolgozni az adatokkal. A termékek megnevezés szerint
legyenek betűrendben rendezve. Új áru felvitele, módosítása és törlése egyértelmű legyen. Legyen opció az összes termék
listázására.

## Jelenlegi Üzleti Folyamatok

A raktár jelenlegi üzleti folyamata papíralapon mükodik.

1. Termékek nyilvántartása: Megnevezés, kategória, mennyiség, mennyiségi egység, ár
2. Új termékek beszerzése: beszerzési részleg feladata. Rendelés elküldése -> Érkezett mennyiség feljegyzése formanyomtatványra -> Nyilvántartási füzetbe feljegyzés, árváltozás esetén az ár korrigálása.
3. Termékek eladása: Eladási osztály végzi. Rendelés formanyomtatványon, telefonon, személyesen. Rendelés feljegyzése -> Eladás -> Levonni a füzetben levő mennyiségből.

## Igényelt üzleti folyamatok
1. Online megjelenés
2. Teljes raktárkészlet listázása
3. Raktárkészlet elemei közötti keresés
4. Áru felvitele adatbázisba: Áru felvitele
5. Áru adatainak módosítása: Áru adatainak módosítása
6. Áru törlése: Áru törlése
7. Rendelés leadása:  Áru listázása -> Áru fajtájának megadása, mennyiség megadása -> Rendelés leadása -> Visszajelzés

## Követelmény lista
---
    
| ID  | Név | Kifejtés |
| ------------- | ------------- | ------------- |
| 1  | Termékek hozzáadása  | A felhasználók hozzáadhatják azon új termékeket amelyek eddig nem szerepeltek az adatbázisban. Például szezonális termékek. |
| 2  | Termékek törlése  | Azon termékeket amelyek bármely hibát tartalmaznak a hozzáadás során, képesek lesznek eltávolítani a felhasználók. |
| 3  | Termékek listázása  | Ezen funkció segítségével a felhasználók képesek lesznek megjeleníteni ABC sorrendben a termékeket név szerint. |
| 4  | Termék keresés  | Különböző szűrőkkel és szöveges keresővel tud a felhasználó keresni. |
| 5  | Termék módosítás  | Az adatbázisban szereplő termékeket illetően a felhasználó képes lesz modosítást végrehajtani a mennyiséget vagy a nevet illetően. |

## 7. Fogalomtár
---
**Áru**: Az áru minden, ami szükségletet elégít ki és adásvétel tárgyává válhat. Tárgyi formájuk szerint. Termék. Szolgáltatás.
**Raktárkészlet**: Vállalkozási tevékenységet közvetlenül vagy közvetve szolgáló eszközök, amelyek vagy egyetlen tevékenységi folyamatban vesznek részt és a tevékenység folyamán eredeti megjelenési alakjukat elvesztik, vagy több tevékenységi folyamatban vesznek részt, de a törvény szerint azokat a készletek közé kell besorolni, vagy egy éven belül használódnak el.