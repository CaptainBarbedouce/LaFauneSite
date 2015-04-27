DROP USER "lafaune"@"localhost";
CREATE USER "lafaune"@"localhost" IDENTIFIED BY "secret";
GRANT ALL ON bdlf2.* TO "lafaune"@"localhost";