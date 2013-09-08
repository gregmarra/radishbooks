radishbooks
===========

Build customized versions of out-of-copyright books. 

Usage
-----

* Create a copy of `engine/books/<book>/default_replacements.txt` and customize with your desired changes
* `python engine/replacer.py --book=<book> --replace_file=<replacements file> --save_file=<save file>`
* Compile the output LaTeX file using your favorite LaTeX package
* Consider ordering a custom printed version of the book on http://lulu.com !

More books can be added by doing find-replaces from Project Gutenberg. See the `useful_replacement_regexes.txt` for tips.
