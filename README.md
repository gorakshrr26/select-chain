select-chain
============

 - Populating later select boxes according to selection in previous select box.
 - This repo contains solution code to my own question at StackOverflow here: http://stackoverflow.com/q/9101495/1052356
 - Working demo here: http://vishaltelangre.com/demos/select_chain/

Description
-----------

I have these four tables in my database:

Table 1: State

    +----------+-------------+
    | state_id | state_name  |
    +----------+-------------+
    |        1 | Maharashtra |
    |        2 | Goa         |
    +----------+-------------+

Table 2: District

    +-------------+---------------+----------+
    | district_id | district_name | state_id |
    +-------------+---------------+----------+
    |           1 | Mumbai        |        1 |
    |           2 | Pune          |        1 |
    |           3 | Nashik        |        1 |
    |           4 | Aurangabad    |        1 |
    |           5 | Panjim        |        2 |
    |           6 | Dandeli       |        2 |
    |           7 | Karwar        |        2 |
    +-------------+---------------+----------+

Table 3: Taluka

    +-----------+-------------+-------------+
    | taluka_id | taluka_name | district_id |
    +-----------+-------------+-------------+
    |         1 | Alibag      |           1 |
    |         2 | Kalyan      |           1 |
    |         3 | Matheran    |           1 |
    |         4 | Vaijapur    |           4 |
    |         5 | Gangapur    |           4 |
    |         6 | Kannad      |           4 |
    |         7 | Sillod      |           4 |
    |         8 | Madgaon     |           5 |
    |         9 | Vengurle    |           5 |
    |        10 | Sawantwadi  |           5 |
    +-----------+-------------+-------------+

Table 4: Village

    +------------+--------------+-----------+
    | village_id | village_name | taluka_id |
    +------------+--------------+-----------+
    |          1 | Ranjangaon   |         5 |
    |          2 | Wadgaon      |         5 |
    |          3 | Teesgaon     |         5 |
    +------------+--------------+-----------+

---

I wanted to populate later select boxes according to selection happen in previous select boxes -- using AJAX.
Beolw diagram will help understanding this problem graphically.

!["Prototype design for describing question"][1]
  [1]: http://i.stack.imgur.com/04ZAm.png "Prototype design for describing question"
---

This repository contails necessary working code which is based upon this answer: http://stackoverflow.com/a/9101666/1052356

---
**[Disclaimer]** Do not use this code directly at production-level, this is for just educational purpose.