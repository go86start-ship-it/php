//保育園のデータ
CREATE table customers(
    customer_id int PRIMARY KEY  AUTO_INCREMENT,
    customer_name varchar(100) NOT NULL,
    customer_email varchar(255),
    customer_phone varchar(100),
    customer_address varchar(255)

);
//在庫のデータ
CREATE table stocks(
    stock_id  int PRIMARY KEY  AUTO_INCREMENT,
    stock_name varchar(100) NOT NULL,
    stock_price int,
    stock_stock int(255)
);


//出荷履歴のデータ
CREATE table  shipping(
    shipping_id int PRIMARY KEY  AUTO_INCREMENT,
    stock_id int NOT NULL,
    customer_id int NOT NULL,
    shipping_count int NOT NULL,
    shipping_date DATE NOT NULL,
    --  CONSTRAINTで参照整合性を保持する
    CONSTRAINT fk_customer FOREIGN KEY (customer_id) REFERENCES customers(customer_id),
    CONSTRAINT fk_stock FOREIGN KEY (stock_id) REFERENCES stocks(stock_id)
);


