
//在庫の挿入
INSERT INTO stocks(stock_id,stock_name,stock_category,stock_count,stock_low,stock_statute) VALUES("Z1","おりりふきS","おしりふき",0,0,"在庫不足");

データベース接続----------------------------------------------------------------------

Microsoft Windows [Version 10.0.26200.8246]
(c) Microsoft Corporation. All rights reserved.

C:\Users\plann>cd "C:\xampp\mysql\bin"

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 10
Server version: 10.4.24-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> use relation;
ERROR 1049 (42000): Unknown database 'relation'
MariaDB [(none)]> use relation;
ERROR 1049 (42000): Unknown database 'relation'
MariaDB [(none)]> CREATE DATABASE relation;
Query OK, 1 row affected (0.005 sec)

MariaDB [(none)]> USE relation;
Database changed
MariaDB [relation]> SOURCE C:/xampp/htdocs/"C:\xampp\htdocs\php\practice\アズウェル\relation.sql"/relation.sql;
ERROR: Failed to open file 'C:\xampp\htdocs\"C:\xampp\htdocs\php\practice\アズウェル\relation.sql"\relation.sql', error: 22
MariaDB [relation]> SOURCE C:/xampp/htdocs/php/practice/アズウェル/relation.sql;
Query OK, 0 rows affected (0.099 sec)

Query OK, 0 rows affected (0.072 sec)

Query OK, 0 rows affected (0.088 sec)

MariaDB [relation]> SHOW TABLES;
+--------------------+
| Tables_in_relation |
+--------------------+
| customers          |
| shippings          |
| stocks             |
+--------------------+
3 rows in set (0.002 sec)

MariaDB [relation]> SELECT * FROM テーブル名 LIMIT 10;
ERROR 1146 (42S02): Table 'relation.テーブル名' doesn't exist
MariaDB [relation]> SELECT * FROM テーブル名 LIMIT 10;
ERROR 1146 (42S02): Table 'relation.テーブル名' doesn't exist
MariaDB [relation]> INSERT INTO stocks(stock_id,stock_name,stock_category,stock_count,stock_low,stock_statute) VALUES("Z1","おりりふきS","おしりふき",0,0,"在庫不足");
Query OK, 1 row affected (0.030 sec)

MariaDB [relation]> select * from relation;
ERROR 1146 (42S02): Table 'relation.relation' doesn't exist
MariaDB [relation]>
MariaDB [relation]> SELECT * FROM stocks;
+----------+-------------+----------------+-------------+-----------+---------------+
| stock_id | stock_name  | stock_category | stock_count | stock_low | stock_statute |
+----------+-------------+----------------+-------------+-----------+---------------+
| Z1       | おりりふきS | おしりふき     |           0 |         0 | 在庫不足      |
+----------+-------------+----------------+-------------+-----------+---------------+
1 row in set (0.021 sec)

MariaDB [relation]>




