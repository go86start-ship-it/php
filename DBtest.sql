
//在庫の挿入
INSERT INTO stocks(stock_id,stock_name,stock_category,stock_count,stock_low,stock_statute) VALUES("Z1","おりりふきS","おしりふき",0,0,"在庫不足");

データベース接続----------------------------------------------------------------------
xampp起動忘れない

cd "C:\xampp\mysql\bin"

mysql -u root -p
Enter password:
MariaDB [(none)]> CREATE DATABASE relation;
Query OK, 1 row affected (0.005 sec)

MariaDB [(none)]> USE relation;
Database changed
MariaDB [relation]> SOURCE C:/xampp/htdocs/"C:\xampp\htdocs\php\practice\アズウェル\relation.sql"/relation.sql;
ERROR: Failed to open file 'C:\xampp\htdocs\"C:\xampp\htdocs\php\practice\アズウェル\relation.sql"\relation.sql', error: 22
MariaDB [relation]> SOURCE C:/xampp/htdocs/php/practice/アズウェル/relation.sql;
Query OK, 0 rows affected (0.099 sec)

MariaDB [relation]> SHOW TABLES;
                    SHOW TABLES;
+--------------------+
| Tables_in_relation |
+--------------------+
| customers          |
| shippings          |
| stocks             |
+--------------------+
3 rows in set (0.002 sec)
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





