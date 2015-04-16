CREATE USER "lafaune"@"localhost";
SET password FOR "lafaune"@"localhost" = password("secret");
GRANT SELECT ON BDLF1.* TO "lafaune"@"localhost";