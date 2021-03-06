.. title: I love Python!
.. slug: i-love-python
.. date: 2011-08-03 00:00:00
.. tags: Python, programming, projects
.. category: Python
.. description: A word about Python.

.. raw:: html

    <figure>
    <a href="http://python.org" title="Python"><img src="http://kwpolska.tk/blog-content/logos/python.png" alt="Python logo"></a>
    <figcaption>Python logo</figcaption>
    </figure>

I recently started writing Python_ code. And I love it.

.. _Python: http://python.org

.. TEASER_END

If you’d ask me a week ago about Python, I’d say “meh.”  Python3K?  I
wouldn’t be happy about it.  Sunday evening?  I love both.

One project, rewritten
----------------------
I wrote a new project.  Or rather re-wrote a Perl “project”.

The project, once a little help for building AUR packages, now is almost
a fully-featured AUR helper (it has no update function, but I will
write one soon).  It’s the PKGBUILDer_.

The Perl version (search in the repo, linked above) had 56 lines.  In
short, it did something like this (rewritten to bash):

.. code-block:: bash

    function generate(package) {
        pk=${package:0:2}
        wget http://aur.archlinux.org/$pk/$package.tar.gz
        tar -xzvf $package.tar.gz
        cd $package
        makepkg -si
        cd ..
    }

    for package in $@, do generate(package); done

This code is really, REALLY bad.  But it worked for me, because the “normal”
AUR helpers were slow.  I wanted to do something about it.  I put an entry on
my TODO list about it.  A few months later I decided to do it.  The TODO list
entry said “write build.py”.  I wanted to use Python because I wanted to learn
it.  In fact, I began *loving* Python.

The Perl version had 56 lines.  A shortened version of it in Bash took only 10
(I skipped a few features, the full version would be around 20 lines or so.)
Take a guess: how long is the Python version? 30 lines?  100?  No.  300 lines.
How could this happen?  No, *not* because Python is a pain in the ass to write.
It was because I could implement new, great features EASILY.  The original
version could only download a package and build it.  What if the package didn’t
exist?  The library responsible for untarring it would throw an error.  And
even if makepkg had a problem with building the package, the script would
happily inform the user that it was successfully bulit…  What are the new
features, you may ask?  Install validation, i.e.  checking if the package is
installed or not.  Package searching, sanity checks, dependency solving…  This
is great.  If I’d like to write it in Perl, it will take me ages and I’m not
sure if there is any libalpm wrapper.

If you think that you can rewrite it in Perl, sure, go for it, if you will:

 * find a working libalpm wrapper or write one yourself
 * port python3-aur (it heps with the XML-RPC of the AUR) to perl
 * implement EVERY feature of the Py3K version
 * give me the code and tell me how long did you write it

Done?  Great then, `contact me </contact/>`_!

Documentation
-------------
Python has the friendliest web documentation ever.  PHP’s looks a bit
harsh.  Perl’s is not easy to search.

Time for a real world example:  I want to learn how to write a specific
function in Perl, PHP and Python.  This function would print the argument.
For example, in C:

.. code-block:: cpp

    #include <stdio.h>
    void writeStuff(text) {
        printf("Input: %s\n", text);
    }

    int main(void) {
        writeStuff("some stuff to print");
        return 0;
    }

Notice: by “searching” in docs I mean reading the page and looking for
a thing.

**Perl:** Let’s begin at <http://perl.org>. Documentation tab, Tutorials.
I need to define a function.  Nothing seems to help me.  I look at the
sidebar and find *Reference/Functions*.  Great, that’s what I need, so i
click it…  I can’t see anything about functions.  Langauge reference?
Nothing.  I ask Google and I learn that Perl names them *subroutines*.  I
check the Language reference:  it’s the sub function, now I can define my
function and call it.  printf?  Let’s look it up in the Functions list.
We’re done.

.. code-block:: perl

    sub writeStuff {
        my $text = shift;
        printf("Input: %s\n", $text);
    }

    writeStuff("some stuff to print");

Perl’s documentation is anywhere near user-friendliness.

**PHP:** <http://php.net>.  Why is the *documentation* link so small?
Anyways, I need functions.  Language Refernce/Functions.  Here we go, one
more click and I know how to make a function.  And I guess that I’ll have
to search the Function Reference.  I find text processing, go for Strings
and I can happily see printf.  Take a look and we can write this:

.. code-block:: php

    <?php
    function writeStuff($text) {
        printf("Input: %s\n", $text);
    }
    writeStuff("some stuff to print");
    ?>

**Python:** <http://python.org/>.  Documentation element exists in the
menu.  I click it.  They offer me a nice tutorial, so I’ll check it out.
I scan through the Table of Contents and I see a chapter called Defining
Functions.  Great, it will work.  Now I go back to the ToC and, because
this is a tutorial rather than a reference, and I can see chapter *7.1:
Fancier output formatting*.  I want to have %s as in other languages, so
I skip this one and see *Old string formatting*, which uses the %s.  Now,
assuming they indented the code on purpose because there are no braces,
I can write:

.. code-block:: python

    def writeStuff(text):
        print "Input: %s" % text

    writeStuff("some stuff to print")

All of them work and output ``Input: some stuff to print`` followed by a
newline.  The original C example had 8 lines.  Perl made it in 5, PHP
in 6 (or 4 if you won’t count the PHP tags), Python used only 3.

Which documentation is the most HUMAN-friendly?  Python’s.  Which is the
worst? Perl’s.

Nothing is flawless
-------------------
Everything has some flaws.  What is it in Python, then?
`Existence of two concurrent versions`_.

Most distros and projects use Py2K, while some of them offer Py3K (or both.)
The PKGBUILDer_ is in Py3K, because it requires ``pyalpm`` and the ``AUR``
module (I could rewrite the AUR module in Py2K, but pyalpm is much harder to
modify.  UPDATE 2012-08-04: it was re-implemented by me several releases ago,
in version 2.1.0, released over a month after this post)  My other projects
(like KWDv2, another rewrite, this time with minimal changes and 30% less code
or my first ever Python project, trash.py, a partial XDG trash standard
implementation) use the old Py2K (usually v2.6, because I need compatibility
with my shell server.)

I would rewrite this blog into Django_ if I’d *own* a VPS or a dedicated
server. (update 2011-10-20: this blog is now based on hyde, jekyll’s evil twin
in Python.  Update 2013-02-08: Now using Nikola, even better engine, yet still
in Python.)

.. _PKGBUILDer: https://github.com/Kwpolska/pkgbuilder
.. _Existence of two concurrent versions: http://wiki.python.org/moin/Python2orPython3
.. _Django: https://www.djangoproject.com/
