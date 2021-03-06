.. title: Static Site Generator Speed Test (Nikola, Pelican, Hexo, Octopress)
.. slug: ssg-speed-test
.. date: 2015-07-23 17:10:00+02:00
.. tags: Nikola, Pelican, Hexo, Octopress, jekyll, test, webmastering, blog, Python
.. category: Internet
.. link: https://chriswarrick.com/pub/ssg-test-results.ods
.. description: Four static site generators: which one is the fastest
.. type: text
.. shortlink: ssg-speed-test

I tested the speed of four static site generators: Nikola, Pelican, Hexo and Octopress, in a clean environment.  Spoiler alert: Nikola won.

*Disclaimer:* author is a developer and user of Nikola.  The test environments used were the same for all four generators.

Generators tested
=================

* `Nikola <https://getnikola.com/>`_ v7.6.1, by Roberto Alsina, Chris Warrick and contributors; Python; MIT license
* `Pelican <http://blog.getpelican.com/>`_ v3.6.0, by Alexis Metaireau and contributors; Python; GNU AGPL license
* `Hexo <https://hexo.io/>`_ v3.1.1, by Tommy Chen and contributors; Node.js; MIT license
* `Octopress <http://octopress.org/>`_ v2.0, by Brandon Mathis and contributors; Ruby; MIT license (based on Jekyll)

.. TEASER_END

Setup
=====

Every site generator was set up in an identical **clean** environment, using Ubuntu 15.04, x64, as a 512 MB DigitalOcean VM with a 20 GB SSD drive. The machine was updated, an user account with passwordless sudo was created, and ``build-essential`` was installed. Tests were run by an automated installer and timer, written in Bash and C, respectively (custom; source code is available). Pre-compiled wheels for lxml and Pillow were used for Nikola testing, because lxml cannot be compiled with less than 1.5 GB of RAM; they were built with ``pip wheel lxml pillow`` outside of the testing environment (on a local VM). The machine was reimaged after every test. Lists of installed Python/Ruby/Node packages are available in the GitHub repo (see below).

Input
=====

Every site generator was given the same set of 179 log files from #nikola on freenode. The raw logs contain 1209507 bytes (1.1 MiB) of plain text. The logs were processed into post files, which fit the format of each engine (reST or Markdown), containing mandatory metadata, an introductory paragraph and a code block (using ``::`` for reST, four spaces for Markdown). One file had to be altered, because they contained the ``{{``  sequence, which was misinterpreted as internal templating by Hexo and Octopress — it was replaced by a harmless ``~~`` sequence for all four generators.

The generators used default config, with one exception: highlighting was disabled for Hexo. The highlighting would cause an unfair advantage (other generators did not automatically highlight the code boxes), and led to very high build times (see table 4 in comparison spreadsheet).

Build
=====

Sites were built a total of 110 times, in 10 cycles of 11 builds each. The first build of a cycle was a fresh build, the remaining 10 were rebuilds. Sites and cache files were removed after each cycle.

Results
=======

Because Nikola and Hexo use incremental rebuilds, the results were compared in two groups: 11 and 10 runs.

Average build times (in seconds)
--------------------------------

.. raw:: html

    <table class="table table-bordered table-hover">
    <thead>
    <tr>
    <th>#</th>
    <th>Generator</th>
    <th>Average of 11 runs</th>
    <th>Average of 10 runs</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <th scope="row">1</th>
    <td>Nikola</td>
    <td>2.38290</td>
    <td>2.06057</td>
    </tr>
    <tr>
    <th scope="row">2</th>
    <td>Pelican</td>
    <td>2.61924</td>
    <td>2.62352</td>
    </tr>
    <tr>
    <th scope="row">3</th>
    <td>Hexo</td>
    <td>6.27361</td>
    <td>6.21267</td>
    </tr>
    <tr>
    <th scope="row">4</th>
    <td>Octopress</td>
    <td>9.57618</td>
    <td>9.47550</td>
    </tr>
    </tbody>
    </table>

Full results
------------

.. class:: lead

Full results are available in `ods format <https://chriswarrick.com/pub/ssg-test-results.ods>`_.

Raw results and configuration
-----------------------------

Raw results (``.csv`` files from the test runner) and configuration is available in the `GitHub repo <https://github.com/Kwpolska/ssg-test>`_. Log files and converted posts are not available publicly; however, they can be provided to interested parties (`contact me <https://chriswarrick.com/contact/>`_ to obtain them).

Questions and answers
=====================

Why not plain Jekyll?
---------------------

**Plain Jekyll was disqualified** on the basis of missing many features other generators have, leading to an unfair advantage. The aim of this test was to provide similar setups for each of the four generators. Jekyll generates a very basic site that lacks some elements; a Jekyll site does not have paginated indexes, (partial) post text on indexes, any sort of archives, etc. A Jekyll site contains only one CSS file, index.html, feed.xml, and the log posts. On the other hand, sites generated by Pelican, Nikola and Hexo contain more files, which makes the builds longer and the website experience richer (archives, JS, sitemaps, tag listings).

On the basis of the above, **Octopress** was chosen to represent the Jekyll universe at large. Octopress sites have more assets, a sitemap, archives and category listings — making it comparable to the other four contenders. However, tests were performed for Jekyll. The average result from 11 builds was 2.22118, while the average result from 10 builds was 2.23903. The result would land Jekyll on the 1st place for 11 builds, and on the 2nd place for 10 builds.

Why not $MYFAVORITESSG?
-----------------------

I tested only four popular generators that were easy enough to set up. I could easily extend the set if I had time and friendly enough documentation to do so. I can add a SSG, provided that:

* it’s easy to configure
* it has a default config that provides a working site with a feature set comparable to other SSGs tested here (see `Why not plain Jekyll?`_)
