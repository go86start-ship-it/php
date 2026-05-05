-- 保育園のデータ
CREATE TABLE customers(
    customer_id int PRIMARY KEY AUTO_INCREMENT,
    customer_name varchar(100) NOT NULL,
    customer_email varchar(255),
    customer_phone varchar(100),
    customer_address varchar(255),
    customer_prefecture varchar(10),
    customer_city varchar(50),
    customer_adress_build varchar(200)
);

-- 在庫のデータ
CREATE TABLE stocks(
    stock_id varchar(30) PRIMARY KEY,
    stock_name varchar(100) NOT NULL,
    stock_category varchar(20) NOT NULL,
    stock_count int DEFAULT 0 NOT NULL,
    stock_low int NOT NULL,
    stock_statute varchar(30) NOT NULL
);

-- 出荷履歴のデータ
CREATE TABLE shippings(
    shipping_id int PRIMARY KEY AUTO_INCREMENT,
    stock_id varchar(30) NOT NULL, -- ここを int から varchar(30) に修正！
    customer_id int NOT NULL,
    shipping_count int NOT NULL DEFAULT 0,
    shipping_date DATE NOT NULL,
    CONSTRAINT fk_customer FOREIGN KEY (customer_id) REFERENCES customers(customer_id),
    CONSTRAINT fk_stock FOREIGN KEY (stock_id) REFERENCES stocks(stock_id)
);

//在庫の挿入
INSERT INTO stocks(stock_id,stock_name,stock_category,stock_count,stock_low,stock_statute) VALUES("Z1","おりりふきS","おしりふき",0,0,"在庫不足");