# Zöldség-gyümölcs kereskedés Követelmény Specifikáció

## Áttekintés
---
A projekt célja, hogy egy zöldség-gyümölcs kereskedés raktára könnyen kezelhető és átlátható legyen az ott
dolgozók számára. A weboldalon a raktáron lévő áru listázható, módosítható, kereshető és törölhető lesz. Az 
árunak van megnevezése, kategóriája (zöldség/gyümölcs), mennyisége, mennyiségi egysége és ára. Új áru hozzáadásakor
ezeket meg kell adni.

## Jelenlegi helyzet
---
Kereskedésünk friss zöldségekkel és gyümölcsökkel várja vásárlóinkat a hét minden napján. Kínálatunkban megtalálható
minden féle zöldség és gyümölcs. A vásárlás személyesen történik az üzletünkben. A raktárkészlet nyilvántartása jelenleg
egy füzetben történik, amit az üzlet irodájában vezetünk. Ebben a füzetben minden eladás és áru érkezés vezetve van.

## Vágyálom rendszer
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
4. Áru felvitele adatbázisba: Adminisztrátor jogosultsággal belépés -> áru felvitele
5. Áru adatainak módosítása: Adminisztrátor jogosultsággal belépés -> áru adatainak módosítása
6. Áru törlése: Adminisztrátor jogosultsággal belépés -> áru törlése
7. Rendelés leadása: Regisztrált felhasználó belépés -> áru listázása -> Áru fajtájának megadása, mennyiség megadása -> Rendelés leadása -> Visszajelzés