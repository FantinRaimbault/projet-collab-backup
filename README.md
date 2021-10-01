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
  - [Built With](#built-with)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Authors & contributors](#authors--contributors)
- [License](#license)

</details>

---

## About

> **Simple API**
> Implement best practices and new features on an existing project mixing Git and Docker

### Built With

> **PHP WITH LUMEN AND MYSQL**
> 
## Getting Started

### Prerequisites

> You only need docker (version >= 12) installed on your computer.

### Installation

> git clone https://gitlab.com/92maximemalecot/projet-collaboratif
> docker-compose up -d

> **Only on first load**
> docker exec -it *nom_container_php* /bin/bash
> root# php artisan migrate
> root# php artisan db:seed

## Usage

> http://localhost:8080 => sample of json response
> http://localhost:8080/currentTime => current time in milleseconds

## Authors & contributors

- [Maxime Malecot](https://gitlab.com/92maximemalecot).
- [Antoine Lelong](https://gitlab.com/horek).
- [Alan Seigler](https://gitlab.com/Watsaiye).
- [Fantin Rimbault](https://gitlab.com/FantinRaimbault).


## License

This project is licensed under the **MIT license**.

See [LICENSE](LICENSE.txt) for more information.