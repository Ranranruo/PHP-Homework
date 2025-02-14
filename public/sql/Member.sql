CREATE TABLE Member (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT COMMENT '유저아이디',
    username VARCHAR(100) NOT NULL UNIQUE COMMENT '유저이름',
    displayname VARCHAR(100) DEFAULT 'user' COMMENT '유저표시이름',
    password VARCHAR(100) NOT NULL COMMENT '유저비밀번호',
    join_date DATE NOT NULL DEFAULT CURRENT_TIME COMMENT '유저가입일자',
    flag TINYINT DEFAULT 1 COMMENT '유저플래그'
) COMMENT '회원 테이블';

INSERT INTO Member (username, displayname, password) VALUES ('admin', '관리자', '1234')