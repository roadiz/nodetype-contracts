test:
	vendor/bin/phpstan analyse -c phpstan.neon -l max src
	vendor/bin/phpcs --report=full --report-file=./report.txt --extensions=php --warning-severity=0 --standard=PSR2 -p ./src
