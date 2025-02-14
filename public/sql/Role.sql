CREATE TABLE Role (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT COMMENT '권한아이디',
    code VARCHAR(50) NOT NULL UNIQUE COMMENT '권한코드',
    name VARCHAR(50) COMMENT '권한이름',
    description VARCHAR(1000) COMMENT '권한설명'
) COMMENT '권한 테이블';

INSERT INTO Role (code, name, description) VALUES ('ROLE_ADMIN', 'ADMIN', '관리자 권한입니다.');
INSERT INTO Role (code, name, description) VALUES ('ROLE_MEMBER', 'MEMBER', '회원 권한입니다.');