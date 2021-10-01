<h1 align="center">
  <a href="https://gitlab.com/92maximemalecot/projet-collaboratif">
    <!-- Please provide path to your logo here -->
    <img src="/project-logo.png" alt="Logo" width="400" height="150">
  </a>
</h1>

<div align="center">
  Projet Collaboratif
  <br />
  <a href="https://gitlab.com/92maximemalecot/projet-collaboratif/issues/new?&issuable_template=bug_report">Report a Bug</a>
  ·
  <a href="https://gitlab.com/92maximemalecot/projet-collaboratif/issues/new?issuable_template=feature_request">Request a Feature</a>
</div>

<br />

<details open="open">
<summary>Table of Contents</summary>

- [About](#about)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Authors & contributors](#authors--contributors)
- [License](#license)

</details>

---

## About

**Simple API**
Implement best practices and new features on an existing project mixing Git and Docker

## Getting Started

### Prerequisites

To clone and run this application, you only need docker (version >= 12) installed on your computer.

### Installation

```bash
# Clone this repository
$ git clone https://gitlab.com/92maximemalecot/projet-collaboratif

# Run the app
$ docker-compose up -d
```
**Only on first load :**
```bash
# Open terminal in php container
$ docker exec -it *nom_container_php* /bin/bash

# Run all migrations
$ php artisan migrate

# Populate database
$ php artisan db:seed

# To activate git hooks, type

npm install

npx husky install

# if you have npx installed. Otherwise please install npx
npm install -g npx
```

## Usage

```bash
# Sample of json response
http://localhost:8080

# Current time in milleseconds
http://localhost:8080/currentTime
```

## Authors & contributors

- [Maxime Malecot](https://gitlab.com/92maximemalecot).
- [Antoine Lelong](https://gitlab.com/horek).
- [Alan Seigler](https://gitlab.com/Watsaiye).
- [Fantin Rimbault](https://gitlab.com/FantinRaimbault).


## License

This project is licensed under the **MIT license**.

See [LICENSE](LICENSE.txt) for more information.