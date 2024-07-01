## How to run this project

Run the command `docker compose up` inside the project root.
View the project in the browser with `localhost:8000`

## What is this repo for?

This is a simple php docker-compose setup with nginx.
With this setup we will build a small website.
The goal of this project is not to build the fanciest website, but to apply our new learnt topics php and sass.

### Exercise 1

Clone this git repository and write your first php code.
(hint: use the echo function)

### Exercise 2

Build a simple website with 3 pages:

- Home
- About me
- My favourite dish

Add a header and footer to your website by using the php function "include".  
This means you don't have to write the footer and the navigation three times, but can _include_ it in your pages.  
Google the PHP Include functions for further help.

### Exercise 3

Last week we learnt SASS. Therefore we will build this website using SASS.

This is the corresponding folder structure:

```
php-docker-intro
├── docker
│     └── nginx
│     │      └── nginx.conf
│     └── Dockerfile
└── www
│     └── public
│            └── build
│            │    └── css
│            │         └── (the CSS file will be compiled and created here - never write in this file!)
│            └── src
│            │    └── scss
│            │         └── style.scss (write your scss styles here!)
│            └── index.php
│
└── .gitignore
└── docker-compose.yml
├── package.json
├── README.md
```

## How to run sass

Run the command `npm install` in the terminal in the root folder
`npm run sass:watch`

---

## Das Projekt starten

Im Terminal in den Projekt-Ordner wechseln und folgenden Befehl ausführen `docker compose up`.
Das Projekt ist im Browser unter `localhost:8000` zu finden.

## Für was ist dieses Repository?

Dies ist ein simples php docker-compose setup mit nginx.
Mit diesem Setup werden wir eine kleine Website erstellen.
Das Ziel dieser Übung ist nicht eine fancy Website zu bauen, sondern unsere neu erlertnen Themen PHP und SASS zu kombinieren.

### Übung 1

Dieses Repo klonen und erste eigene Zeile PHP schreiben.
(Tipp: `echo`-Funktion benutzen)

### Übung 2

Simple Webseite mit 3 Seiten bauen:

- Home
- Über mich
- Mein Lieblingsessen

Füge einen Header und einen Footer zu deiner Webseite mit der PHP-Funktion "inlcude".
Das bedeutet, der Header und Footer müssen nicht drei mal geschrieben werden, sondern können einmal erstellt werden und inkludiert (hinzugefügt) werden in deine Seiten.
Für weitere Info google PHP-Funktion "include".

### Übung 3

Letzte Woche haben wir SASS gelernt. Darum werden wir diese Seite mit SASS stylen.

Dies ist die folgende Ordner-Struktur:

```
php-docker-intro
├── docker
│     └── nginx
│     │      └── nginx.conf
│     └── docker-compose.yml
│     └── Dockerfile
└── www
│     └── public
│            └── build
│            │    └── css
│            │         └── (CSS wird in dieses File kompiliert - nie in diese Datei schreiben!)
│            └── src
│            │    └── scss
│            │         └── style.scss (Hier schreiben wir unser SCSS rein)
│            └── index.php
│
├── package.json
├── README.md
└── .gitignore
```

## Sass starten

Den Befehl `npm install` im Terminal im Root Ordner laufen lassen.
Danach `npm run sass:watch`
