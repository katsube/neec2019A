CREATE TABLE Message(
  id          int NOT NULL AUTO_INCREMENT,
  user_id     int,
  msg         varchar(255),
  regist_date int,
  
  primary key(id)
);
