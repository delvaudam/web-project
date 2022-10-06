CREATE TABLE user
(
    id        INT(10) UNSIGNED    NOT NULL AUTO_INCREMENT,
    username  VARCHAR(50)         NOT NULL,
    password  VARCHAR(255)        NOT NULL,
    email     VARCHAR(50)         NOT NULL,
    role      TINYINT(1) UNSIGNED NOT NULL,
    created   DATETIME            NOT NULL,
    lastLogin DATETIME            NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (username),
    UNIQUE KEY (email)
) ENGINE InnoDB
  DEFAULT CHARSET = utf8;