How to release PHP client
=========================


The SPS PHP client and client demo uses the Satis Composer repository generator to generate publicly available PHP packages at

https://www.signaturgruppen.dk/download/satis

The Satis generator runs every minute on jeeves, building Composer packages based on tags in git.

So the release procedure for SPS PHP client and demo is simply:

    $ git tag -a <tag> -m"Tagged <tag>"
    $ git push --tags

where <tag> is replaced with the version of the current version of PHP API in the form i.j.k - e.g. 1.6.21. Note, that semantic versioning should be used.
