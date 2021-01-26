# Failing test repository for aliased class

Steps to reproduce:
- clone repository
- run `composer install`
- run `vendor/bin/rector process src`

It seems that problem is in SetList::NETTE_30. If you comment this set list and uncomment any above, everything is OK.
