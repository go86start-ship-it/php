//データベースを操作するための「鍵」を作り、その鍵で何ができるかを設定。
CREATE USER IF NOT EXISTS 'user'@'localhost' IDENTIFIED BY 'pass';

CREATE table users(
    user_id  int PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(10)NOT NULL,
    user_email VARCHAR(255),//Eメールは255が一般的
    user_password VARCHAR(255),
    user_plan char(3) //プランの3択
);

CREATE table items(
    item_id  int PRIMARY KEY AUTO_INCREMENT,
    item_name VARCHAR(100) NOT NULL,
    item_price int NOT NULL,
    item_stock int NOT NULL,
    
);

CREATE table sales(
    sale_name VARCHAR(20),
    sale_user_id int ,
    sale_user_name VARCHAR(10)NOT NULL,
    FOREIGN KEY(sale_user_id) REFERENCES users(user_id),
);



