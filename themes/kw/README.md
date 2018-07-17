CSS build instructions
======================

1. Make sure ``bootstrap/scss/bootstrap.min.scss`` is reachable from CWD. (Use
   a git clone or the downloadable distribution.)
2. Run ``sass bootstrap-kw.scss > bootstrap.noprefix.css``.
3. Run the output through https://autoprefixer.github.io/
4. And then through https://cssminifier.com/
5. Quietly weep over the state of web development and be grateful that you
   didn’t actually need 300MB worth of ``node_modules`` to build this.

This Bootstrap-derived theme is Copyright © 2013-2018, Chris Warrick. All
rights reserved.