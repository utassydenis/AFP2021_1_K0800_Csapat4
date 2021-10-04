# Rendszerterv

## 1. A rendszer célja
---

A rendszer célja, hogy a felhasználó/vásárló egyszerűen és megfelelő segítséggel tudjon különböző termékekből válogatni,
vásárolni. A weboldal és az adatbázis megvalósításával elérhetővé szeretnénk tenni a legnagyobb kényelmet, nyomonkövethetőséget
és a zökkenőmentes vásárlást. A vásárlóink könnyedén listázhatják elérhető gyümölcs és zöldségkínálatunkat,
emellett láthatják a közelgő új termékeket is.
## 2. Projekterv
---

## 3. Üzleti folyamatok modellje
---
![Image](https://github.com/utassydenis/AFP2021_1_K0800_Csapat4/blob/main/pictures/ig%C3%A9nyelt_%C3%BCzleti_folyamatok.png)

## 4. Követelmények
---
### Funkcionális követelmények:
    - Dolgozó adatainak tárolása
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
    - Dolgozó

### Rendszerhasználati esetek és lefutásaik:

* Dolgozó:
    - Be tud jelentkezni
    - Árukészlet módosítása
    - Árukészlet törlése
    - Új áru felvitele
    - Áru listázása

### Menü-hierarchiák:

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

## Telepítési terv
    Az adatbázis interneten keresztül érhető el. A webcím megadása után a főoldal jelenik meg. Itt a felhasználó megtekintheti az adatbázis tartalmát, amiben kereshet is. Az oldal bármely böngészőn keresztül elérhető, eszköztől függetlenül. A telepítéskor szükséges a szerverszolgáltatás az adatbázis kezeléshez.
## Karbantartási terv
    Az adatbázis karbantartás időszakos lesz. Az adatbázis használatot megnehezítő, blokkoló hibákat a lehető leghamarabb ki kell javítani.
    Ha a felhasználó ilyen hibával találkozik, lehetősége van hibabejelentést küldeni a "Hiba Bejelentése" gombon keresztül. Ezt a jelentést csak a fejlesztői csapat tagjai fogják látni.
    A gomb megnyomása után, a felhasználó át lesz irányítva egy másik oldalra, ahol,  a hiba kódját (ha van), egy rövid leírást kell küldenie és lehetősége van leírni mi vezetett a hibáig.
    Az adatvesztés kiküszöbölésére, a módosítások elvégzése előtt , egy biztonsági másolatot kell készíteni.

## 9. Adatbázis terv
---
![Image](https://github.com/utassydenis/AFP2021_1_K0800_Csapat4/blob/main/pictures/Rendszerterv%20-%20Adatb%C3%A1zis%20terv.jpg)

## 10. Implementációs terv
---
Web: A Webes felület főként HTML, CSS, és Javascript nyelven fog készülni. Ezeket a technológiákat amennyire csak lehet külön fájlokba írva készítjük, és úgy fogjuk egymáshoz csatolni a jobb átláthatóság, könnyebb változtathatóság, és könnyebb bővítés érdekében. A weblapon megjelenítjük és alkalmazzuk az adatbázis kezelést ezen belül is a CRUD műveletek (Creat (létrehozás), Read (olvasás), Update (módosítás), Delete (törlés)).

## 11. Tesztterv
---
## Tesztelési eljárások

**Alfa teszt:** Az alfa tesztet a fejlesztők végzik. A alfa teszt célja, hogy teszteljük a már meglévő funkciókat, hogy azok az elvártnak megfelelően működnek-e. A teszt akkor tekinthető sikeresnek, ha különböző webes felületeken minden funkció megfelelően működik.

Tesztelő: Vezetéknév Keresztnév

Tesztelés dátuma: Év.Hónap.Nap

| Folyamat száma  | Funkció | Tesztelési folyamat leírása | Végkifejlet | Komment | Teszter Neve | Időpont|

## Tesztelendő funkciók
**Backend Service:** Képesnek kell lennie több klienst egyidőben kiszolgálni. Képesnek kell lennie, az adatbázisban műveleteket végezni (hozzáadni, törölni, módosítani).

## Architekturális terv
A kliens és a szerver HTTP/HTTPS protokolon keresztül kommunikál egymással.

### Adatbázis:
- A rendzer adatainak tárolásához szükséges egy Adatbázis, a rendszerhez MySql-t alkalmazunk.    