# Rendszerterv

## 1. A rendszer célja
---

A rendszer célja, hogy a felhasználó/vásárló egyszerűen és megfelelő segítséggel tudjon különböző termékekből válogatni,
vásárolni. A weboldal és az adatbázis megvalósításával elérhetővé szeretnénk tenni a legnagyobb kényelmet, nyomonkövethetőséget
és a zökkenőmentes vásárlást. A vásárlóink könnyedén listázhatják elérhető gyümölcs és zöldségkínálatunkat,
emellett láthatják a közelgő új termékeket is. Mivel az adatbázis közreműködésével képesek lesznek a felhasználók
saját fiókuk elkészítésére, így tárolhatják kedvenc termékeiket illetve megtekinthetik a múltbéli vásárlásokat.

## 2. Projekterv
---

## 3. Üzleti folyamatok modellje
---
![Image](https://github.com/utassydenis/AFP2021_1_K0800_Csapat4/blob/main/pictures/ig%C3%A9nyelt_%C3%BCzleti_folyamatok.png)

## 4. Követelmények
---
### Funkcionális követelmények:
    - Dolgozó adatainak tárolása
    - Bejelentkezés
    - Regisztráció
    - Áru adatainak tárolása
    - Teljes raktárkészlet listázása
    - Raktárkészlet módosítása
    - Raktárkészlet törlése
    - Keresés az áruk között

### Nem funkcionális követelmény:
    - Az oldalnak gyorsnak kell lennie
    - Az oldalnak átláthatónak kell lennie

## 5. Funkcionális terv
---
### Rendszerszereplők:
    - Admin (főnök)
    - Dolgozó

### Rendszerhasználati esetek és lefutásaik:
* Admin:
    - Belépve teljes hozzáférése van a rendszerhez
    - A felhasználói adatokat látják, változtathatják
    - Felhasználó hozzáadására, törlésére van lehetőségük
    - Felhasználói adatok módosítása

* Dolgozó:
    - Be tud jelentkezni
    - Árukészlet módosítása
    - Árukészlet törlése
    - Új áru felvitele
    - Áru listázása

### Menü-hierarchiák:
* Bejelentkezés:
    - Bejelentkezés
    - Regisztráció

* Main menu:
    - Új áru felvitele
    - Áru módosítása
    - Áru törlése
    - Keresés
    - Listázás

## 6. Fizikai környezet
---
### Fejlesztői környezet:
    - Visual Studio Code
    - XAMPP
    - Git
    - Notepad++
    - Apache Netbeans

### Futtatási környezet:
Annak érdekében, hogy az ügyfél igénybe tudja venni a weboldal szolgáltatásait, rendelkeznie kell számítógéppel és
internetkapcsolattal. 

### Specifikáció:
    - Számítógép egy stabil operációs rendszerrel
    - Internetkapcsolat

![Image](https://github.com/utassydenis/AFP2021_1_K0800_Csapat4/blob/main/pictures/Rendszerterv%20-%20fizikai%20k%C3%B6rnyezet.jpg)
    