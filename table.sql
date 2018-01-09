CREATE TABLE IF NOT EXISTS categories (
  id INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(45) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB;


CREATE TABLE IF NOT EXISTS articles (
  id INT(11) NOT NULL AUTO_INCREMENT,
  category_id int(11) NOT NULL,
  title VARCHAR(45) DEFAULT NULL,
  content TEXT DEFAULT NULL,
  FOREIGN KEY (category_id) REFERENCES categories(id),
  PRIMARY KEY (id)
) ENGINE=InnoDB;